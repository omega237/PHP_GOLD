<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * LALR-PARSER FÜR KONTEXTFREIE GRAMMATIKEN								*
 #######################################################################*/
require_once ('ActionConstants.php');
require_once ('EntryContentConstants.php');
require_once ('GPMessageConstants.php');
require_once ('ParseResultConstants.php');
require_once ('RecordIDConstants.php');
require_once ('SymbolTypeConstants.php');
require_once ('FAState.php');
require_once ('LRActionTable.php');
require_once ('LookAheadStream.php');
require_once ('Reduction.php');
require_once ('Rule.php');
require_once ('SimpleDatabase.php');
require_once ('Symbol.php');
require_once ('SymbolList.php');
require_once ('Token.php');
require_once ('VariableList.php');
require_once ('VariableType.php');

class GOLDParser implements ActionConstants, EntryContentConstants, GPMessageConstants, ParseResultConstants, RecordIDConstants, SymbolTypeConstants {
	
	/***************************************************************
	 *
	 * GOLDParser
	 *
	 * The constructor initiates some variables.
	 ***************************************************************/
	function __construct() {
		$this->pActionTable = array ();
		$this->pCharacterSetTable = array ();
		$this->pDFA = array ();
		$this->pRuleTable = array ();
		$this->pSymbolTable = new SymbolList ( );
		$this->pVariables = new VariableList ( );
		$this->reset ();
		$this->pTablesLoaded = false;
		$this->pTrimReductions = true;
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - Insert your code here
	}
	
	function prepareToParse() {
		$start = new Token ( );
		$start->setState ( $this->initialLALRState );
		$start->setParentSymbol ( $this->pSymbolTable->getMember ( $this->startSymbol ) );
		
		array_push ( $this->stack, $start );
	}
	
	/***************************************************************
	 *
	 * currentLineNumber
	 *
	 * Returns the current source file line number.
	 * @return The current source file line number
	 ***************************************************************/
	function currentLineNumber() {
		return $this->pLineNumber;
	}
	
	function currentCharacterPos() {
		return $this->pCharacterPos;
	}
	
	/***************************************************************
	 *
	 * closeFile
	 *
	 * This method will close the source file.
	 * @throws ParserException The engine parser should deal with
	 *              a problem with closing the source file.
	 ***************************************************************/
	function closeFile() {
		$this->pSource->closeFile ();
		$this->pSource = null;
	}
	
	/***************************************************************
	 *
	 * currentToken
	 *
	 * This method returns the current Token. The current token is
	 * the last token read by "retrieveToken".
	 * @return The current Token.
	 ***************************************************************/
	function currentToken() {
		end ( $this->pInputTokens );
		$retV = current ( $this->pInputTokens );
		reset ( $this->pInputTokens );
		return $retV;
	}
	
	/***************************************************************
	 *
	 * popInputToken
	 *
	 * This method should only be called if there is a lexical
	 * error and you need to pop an unexpected token out of the stack.
	 * @return The token at the top of the stack.
	 ***************************************************************/
	function popInputToken() {
		return array_pop ( $this->pInputTokens );
	}
	
	/***************************************************************
	 *
	 * pushInputToken
	 *
	 * This method should only be used if there is a syntax error.
	 * It will push a Token onto the top of the stack so that the
	 * parser might have a chance of finding an correctly typed token.
	 * @param theToken A token to push onto the stack.
	 ***************************************************************/
	function pushInputToken($theToken) {
		array_push ( $this->pInputTokens, $theToken );
	}
	
	/***************************************************************
	 *
	 * getToken
	 *
	 * If you require access to tokens in the stack before they
	 * are placed on the parse tree. Enter an index number
	 * and the Token will be returned, if and only if the index number
	 * is valid.
	 * @param index The index number.
	 * @return The Token at the index specified.
	 ***************************************************************/
	function getToken($index) {
		if (($index >= 0) && ($index < count ( $this->pTokens ))) {
			return $this->pTokens [$index];
		} else {
			return null;
		}
	}
	
	/***************************************************************
	 *
	 * currentReduction
	 *
	 * This method will return the current reduction. This will only
	 * happen if the parsing engine has performed a reduction. If it
	 * has, then the reduction passed back will be the last one
	 * performed.
	 * @return The last Reduction performed.
	 ***************************************************************/
	function currentReduction() {
		if ($this->pHaveReduction) {
			end ( $this->stack );
			$myRed = current ( $this->stack );
			reset ( $this->stack );
			return $myRed->getData ();
		} else {
			return null;
		}
	}
	
	/***************************************************************
	 * 
	 * currentState
	 * 
	 * This method will return the current state of the LALR machine
	 *
	 * @return The current state of the LALR machine
	 */
	function currentState() {
		return $this->currentLALR;
	}
	
	/***************************************************************
	 *
	 * setCurrentReduction
	 *
	 * This method will set the current reduction to the one
	 * passed in.
	 * @param value The new Reduction to set as the current one.
	 ***************************************************************/
	function setCurrentReduction($value) {
		if ($this->pHaveReduction) {
			end ( $this->stack );
			$myTok = current ( $this->stack );
			reset ( $this->stack );
			$myTok->setData ( $value );
		}
	}
	
	// this method is not accessible. It will read until a line break
	// is found and simply discard it.
	private function discardRestOfLine() {
		$this->pSource->readLine ();
	}
	
	/***************************************************************
	 *
	 * setTrimReductions #ver1.1#
	 *
	 * This method will set the whether or not the program should trim the
	 * reductions.
	 * @param value True if we should trim reductions, false if not.
	 ***************************************************************/
	function setTrimReductions($value) {
		$this->pTrimReductions = $value;
	}
	
	/***************************************************************
	 *
	 * getTrimReductions #ver1.1#
	 *
	 * This method will get whether or not we should trim the reductions.
	 * @return True if we should trim reductions, false if not.
	 ***************************************************************/
	function getTrimReductions() {
		return $this->pTrimReductions;
	}
	
	/***************************************************************
	 *
	 * parameter
	 *
	 * This method will return the value of a parameter that corresponds to the
	 * name passed in.
	 * @param name The name of the variable.
	 * @return The value of the variable.
	 ***************************************************************/
	function parameter($name) {
		return $this->pVariables->getValue ( $name );
	}
	
	/***************************************************************
	 *
	 * symbolTableCount
	 *
	 * This method returns the total number of symbols in the symbol table.
	 * @return The number of symbols in the table.
	 ***************************************************************/
	function symbolTableCount() {
		return $this->pSymbolTable->count ();
	}
	
	/***************************************************************
	 *
	 * ruleTableCount
	 *
	 * This method returns the total number of rules in the rule table.
	 * @return The number of rules in the table.
	 ***************************************************************/
	function ruleTableCount() {
		return count ( $this->pRuleTable );
	}
	
	/***************************************************************
	 *
	 * symbolTableEntry
	 *
	 * This method will return a Symbol at the specified index.
	 * @param index The index number in the table.
	 * @return The Symbol at the specified index.
	 ***************************************************************/
	function symbolTableEntry($index) {
		if (($index >= 0) && ($index < $this->pSymbolTable->count ())) {
			return $this->pSymbolTable->getMember ( $index );
		}
		
		return null;
	}
	
	/***************************************************************
	 *
	 * ruleTableEntry
	 *
	 * This method will return a Rule at the specified index.
	 * @param index The index number in the table.
	 * @return The Rule at the specified index.
	 ***************************************************************/
	function ruleTableEntry($index) {
		if (($index >= 0) && ($index < count ( $this->pRuleTable ))) {
			return $this->pRuleTable [$index];
		}
		
		return null;
	}
	
	/***************************************************************
	 *
	 * tokenCount
	 *
	 * This method will return the number of tokens in the stack.
	 * @return The number of tokens in the stack.
	 ***************************************************************/
	function tokenCount() {
		return count ( $this->pTokens );
	}
	
	function getParseTree() {
		return $this->stack;
	}
	
	// this method is not accessible. It will load all the information
	// contained in the .cgt file passed in as the fileName parameter.
	// It will then store this information in the relevant tables
	// and storage defined as class variables in this class.
	private function loadTables($fileName) {
		$sdb = new SimpleDatabase ( );
		$success = true;
		
		$this->pVariables->add ( "Name", "", "" );
		$this->pVariables->add ( "Version", "", "" );
		$this->pVariables->add ( "Author", "", "" );
		$this->pVariables->add ( "About", "", "" );
		$this->pVariables->add ( "Case Sensitive", "", "" );
		$this->pVariables->add ( "Start Symbol", "", "" );
		
		$sdb->setFileType ( GOLDParser::fileHeader );
		if ($sdb->openFile ( $fileName )) {
			while ( ! $sdb->done () ) {
				$success = $sdb->getNextRecord ();
				if (! $success) {
					break;
				}
				$next = $sdb->retrieveNext ();
				
				$byte1 = $next;
				$caseSelect = $byte1;
				
				switch (ord ( $caseSelect )) {
					case GOLDParser::recordIdParameters : //Name, Version, Author, About, Case-Sensitive
						$this->pVariables->setValue ( "Name", $sdb->retrieveNext () );
						$this->pVariables->setValue ( "Version", $sdb->retrieveNext () );
						$this->pVariables->setValue ( "Author", $sdb->retrieveNext () );
						$this->pVariables->setValue ( "About", $sdb->retrieveNext () );
						$caseS = $sdb->retrieveNext ();
						$this->pVariables->setValue ( "Case Sensitive", $caseS ? "True" : "False" );
						$startS = $sdb->retrieveNext ();
						$this->pVariables->setValue ( "Start Symbol", $startS );
						break;
					
					case GOLDParser::recordIdTableCounts : //Symbol, CharacterSet, Rule, DFA, LALR
						$tabCount = $sdb->retrieveNext ();
						$this->pSymbolTable->reDim ( $tabCount );
						$tabCount = $sdb->retrieveNext ();
						$this->pCharacterSetTable = array_pad ( $this->pCharacterSetTable, $tabCount, null );
						$tabCount = $sdb->retrieveNext ();
						$this->pRuleTable = array_pad ( $this->pRuleTable, $tabCount, null );
						$tabCount = $sdb->retrieveNext ();
						$this->pDFA = array_pad ( $this->pDFA, $tabCount, null );
						$tabCount = $sdb->retrieveNext ();
						$this->pActionTable = array_pad ( $this->pActionTable, $tabCount, null );
						break;
					
					case GOLDParser::recordIdInitial : //DFA, LALR
						$retrieved = $sdb->retrieve ( 2 );
						$this->initialDFAState = $retrieved [0];
						$this->initialLALRState = $retrieved [1];
						break;
					
					case GOLDParser::recordIdSymbols : //#, Name, Kind
						$readSymbol = new Symbol ( );
						$nA = $sdb->retrieveNext ();
						$n = $nA;
						
						$readSymbol->setName ( $sdb->retrieveNext () );
						
						$nA = $sdb->retrieveNext ();
						$readSymbol->setKind ( $nA );
						
						$sdb->retrieveNext (); // empty
						$readSymbol->setTableIndex ( $n );
						
						$this->pSymbolTable->setMember ( $n, $readSymbol );
						break;
					
					case GOLDParser::recordIdCharSets : //#, Characters
						$nA = $sdb->retrieveNext ();
						$n = $nA;
						
						$sA = $sdb->retrieveNext ();
						$this->pCharacterSetTable [$n] = $sA;
						break;
					
					case GOLDParser::recordIdRules : //#, ID#, Reserved, (Symbol#,  ...)
						$readRule = new Rule ( );
						$nA = $sdb->retrieveNext ();
						$n = $nA;
						
						$readRule->setTableIndex ( $n );
						
						$nA = $sdb->retrieveNext ();
						$readRule->setRuleNonTerminal ( $this->pSymbolTable->getMember ( $nA ) );
						
						$sdb->retrieveNext (); // reserved
						while ( ! $sdb->retrieveDone () ) {
							$nA = $sdb->retrieveNext ();
							$readRule->addItem ( $this->pSymbolTable->getMember ( $nA ) );
						}
						
						$this->pRuleTable [$n] = $readRule;
						break;
					
					case GOLDParser::recordIdDFAStates : //#, Accept?, Accept#, Reserved (Edge chars, Target#, Reserved)...
						$readDFA = new FAState ( );
						$nA = $sdb->retrieveNext ();
						$n = $nA;
						
						$bA = $sdb->retrieveNext ();
						$bAccept = $bA;
						
						if ($bAccept) {
							$nA = $sdb->retrieveNext ();
							$readDFA->acceptSymbol = $nA;
						} else {
							$readDFA->acceptSymbol = - 1;
							$sdb->retrieveNext (); // discard value
						}
						
						$sdb->retrieveNext (); // reserved
						

						while ( ! $sdb->retrieveDone () ) {
							$aChars = $sdb->retrieveNext ();
							$nA = $sdb->retrieveNext ();
							
							$readDFA->addEdge ( "" . $aChars, $nA );
							
							$sdb->retrieveNext (); // reserved
						}
						
						$this->pDFA [$n] = $readDFA;
						break;
					
					case GOLDParser::recordIdLRTables : //#, Reserved (Symbol#, Action, Target#, Reserved)...
						$readLALR = new LRActionTable ( );
						$nA = $sdb->retrieveNext ();
						$n = $nA;
						
						$sdb->retrieveNext (); // reserved
						

						while ( ! $sdb->retrieveDone () ) {
							$nA = $sdb->retrieveNext ();
							$action = $sdb->retrieveNext ();
							$target = $sdb->retrieveNext ();
							$readLALR->addItem ( $this->pSymbolTable->getMember ( $nA ), $action, $target );
							$sdb->retrieveNext (); // reserved
						}
						
						$this->pActionTable [$n] = $readLALR;
						break;
					
					default :
						$success = false;
				
				}
			}
			
			//====== Setup internal variables to reflect the loaded data
			//Reassign the numeric value to its name
			//$this->pVariables->setValue ( "Start Symbol", $this->pSymbolTable->getMember ( $this->pVariables->getValue ( "Start Symbol" ) )->getName () );
			

			if ($this->pVariables->getValue ( "Case Sensitive" ) == "True") {
				$this->pIgnoreCase = false;
			} else {
				$this->pIgnoreCase = true;
			}
			
			$sdb->closeFile ();
			
			return $success;
		} else {
			return false;
		}
	}
	
	/***************************************************************
	 *
	 * loadCompiledGrammar
	 *
	 * This method will reset the GOLDParser engine before loading
	 * a new .cgt file into it.
	 * @param fileName The absolute path of the .cgt file to load.
	 * @return True if the .cgt was loaded, false if not.
	 * @throws ParserException If there was a stream access problem with
	 *          the file.
	 ***************************************************************/
	function loadCompiledGrammar($fileName) {
		$this->clear ();
		return $this->loadTables ( $fileName );
	}
	
	/***************************************************************
	 * 
	 * loadTablesFromSkeleton
	 * 
	 * Diese Methode lädt die Parsertabellen aus den durch die pgt
	 * Dateien vom GOLD-Parser Builder erstellten Dateien.
	 * @param $symbols die Symboltabellen
	 * @param $rules die Regeltabellen
	 * @param $characterSets die Zeichensätze
	 * @param $dfaStates die Tabellen des DFA
	 * @param $lalrStates die Tabellen des LALR Automaten
	 * @param $caseSensitive Angabe, ob die Grammatik zwischen Groß-
	 * und Kleinschreibung unterscheidet
	 * @param $startSymbol Index des Startsymbols
	 * @param $name der Name der Grammatik
	 * @param $about Info über die Grammatik 
	 * @param $author Der Name des Autors der Grammatik
	 * @param $version Info über die Version der Grammatik
	 */
	function loadTablesFromSkeleton($symbols, $rules, $characterSets, $dfaStates, $lalrStates, $caseSensitive, $startSymbol, $name, $about, $author, $version) {
		$this->clear ();
		$this->pVariables->add ( "Name", $name, "" );
		$this->pVariables->add ( "Version", $version, "" );
		$this->pVariables->add ( "Author", $author, "" );
		$this->pVariables->add ( "About", $about, "" );
		$this->pVariables->add ( "Case Sensitive", $caseSensitive ? "True" : "False", "" );
		$this->pVariables->add ( "Start Symbol", $startSymbol, "" );
		$this->initialDFAState = $dfaStates ["InitialState"];
		$this->initialLALRState = $lalrStates ["InitialState"];
		$this->pSymbolTable->reDim ( count ( $symbols ) );
		$this->pCharacterSetTable = array_pad ( $this->pCharacterSetTable, count ( $characterSets ), null );
		$this->pRuleTable = array_pad ( $this->pRuleTable, count ( $rules ), null );
		$this->pDFA = array_pad ( $this->pDFA, count ( $dfaStates ), null );
		$this->pActionTable = array_pad ( $this->pActionTable, count ( $lalrStates ), null );
		
		foreach ( $symbols as $idx => $sym ) {
			$readSymbol = new Symbol ( );
			$readSymbol->setName ( $sym ["Name"] );
			$readSymbol->setKind ( $sym ["Kind"] );
			$readSymbol->setTableIndex ( $idx );
			$this->pSymbolTable->setMember ( $idx, $readSymbol );
		}
		foreach ( $rules as $idx => $rule ) {
			$readRule = new Rule ( );
			$readRule->setTableIndex ( $idx );
			$readRule->setRuleNonTerminal ( $this->pSymbolTable->getMember ( $rule ["NonTerminalIndex"] ) );
			foreach ( $rule ["Symbols"] as $s ) {
				$readRule->addItem ( $this->pSymbolTable->getMember ( $s ) );
			}
			$this->pRuleTable [$idx] = $readRule;
		}
		foreach ( $characterSets as $idx => $set ) {
			$l = $set ["List"];
			$s = array ();
			$d = false;
			foreach ( $l as $v ) {
				if ($v < 0) {
					$v = unpack ( "v", $v );
					array_push ( $s, $v [0] );
				} else {
					array_push ( $s, $v );
				}
			}
			$r = unicodeToUtf8 ( $s );
			$this->pCharacterSetTable [$idx] = $r;
		}
		foreach ( $dfaStates ["States"] as $idx => $state ) {
			$readState = new FAState ( );
			$readState->acceptSymbol = $state ["AcceptIndex"];
			foreach ( $state ["Edges"] as $edge ) {
				$readState->addEdge ( "" . $edge ["CharSetIndex"], $edge ["Target"] );
			}
			$this->pDFA [$idx] = $readState;
		}
		foreach ( $lalrStates ["States"] as $idx => $state ) {
			$readLALR = new LRActionTable ( );
			foreach ( $state ["Actions"] as $act ) {
				$readLALR->addItem ( $this->pSymbolTable->getMember ( $act ["SymbolIndex"] ), $act ["Action"], $act ["Value"] );
			}
			$this->pActionTable [$idx] = $readLALR;
		}
		$this->pTablesLoaded = true;
		return true;
	}
	
	/***************************************************************
	 *
	 * openFile
	 *
	 * This method will open the source file for reading. It will also
	 * reset all information from previous source files.
	 * @param fileName The absolute path to the source file.
	 * @return True if the file was successfully opened, false if not.
	 * @throws ParserException If there was a problem opening the file.
	 ***************************************************************/
	function openFile($fileName) {
		$this->reset ();
		$this->pSource = new LookAheadStream ( );
		$this->pSource->openFile ( $fileName );
		$this->prepareToParse ();
		
		return true;
	}
	
	/***************************************************************
	 * 
	 * openText
	 * 
	 * Öffnet eine Datei in dem Sinne, dass der Eingabestrom bereit-
	 * gestellt wird und der Inhalt des Stroms dem Parameter $content
	 * entspricht 
	 * @param unknown_type $content der zu lesende Text
	 * @return True wenn alles glatt ging, False sonst
	 ***************************************************************/
	function openText($content) {
		$this->reset ();
		$this->pSource = new LookAheadStream ( );
		$this->pSource->contentFromString ( $content );
		$this->prepareToParse ();
		
		return true;
	}
	
	/***************************************************************
	 *
	 * clear
	 *
	 * This method clears every value in the parser engine.
	 ***************************************************************/
	function clear() {
		$this->pSymbolTable = new SymbolList ( );
		$this->pRuleTable = array ();
		$this->pCharacterSetTable = array ();
		$this->pVariables = new VariableList ( );
		$this->pTokens = array ();
		$this->pInputTokens = array ();
		
		$this->reset ();
	}
	
	/***************************************************************
	 *
	 * reset
	 *
	 * This method will reset the parser engine. It initalises the
	 * Error and Type End symbols, and then clears all the stacks
	 * of any tokens.
	 ***************************************************************/
	function reset() {
		$start = new Token ( );
		
		for($i = 0; $i < $this->pSymbolTable->count (); $i ++) {
			$swKind = $this->pSymbolTable->getMember ( $i )->getKind ();
			switch ($swKind) {
				case GOLDParser::symbolTypeError :
					$this->kErrorSymbol = $this->pSymbolTable->getMember ( $i );
					break;
				case GOLDParser::symbolTypeEnd :
					$this->kEndSymbol = $this->pSymbolTable->getMember ( $i );
					break;
			}
		}
		
		$this->currentLALR = $this->initialLALRState;
		$this->pLineNumber = 1;
		$this->pCharacterPos = 1;
		
		$this->pCommentLevel = 0;
		$this->pHaveReduction = false;
		
		$this->pTokens = array ();
		$this->pInputTokens = array ();
		$this->stack = array ();
		
		$start->setState ( $this->initialLALRState );
		$start->setParentSymbol ( $this->pSymbolTable->getMember ( 0 ) );
		
		array_push ( $this->stack, $start );
	}
	
	/***************************************************************
	 *
	 * parse
	 *
	 * Will parse a token.
	 * 1. If the tables are not setup then report GPM_NotLoadedError<br>
	 * 2. If parser is in comment mode then read tokens until a recognized one is found and report it<br>
	 * 3. Otherwise, parser normal<br>
	 *  	 a. If there are no tokens on the stack
	 *           1) Read one and trap error
	 *           2) End function with GPM_TokenRead
	 *       b. Otherwise, call ParseToken with the top of the stack.
	 *           1) If success, then Pop the value
	 *           2) Loop if the token was shifted (nothing to report)
	 *
	 * @return The result of one parse of the source file. The integer could
	 *              be one of the constants defined in the interface 
	 *				GPMessageConstants.
	 * @throws ParserException This is thrown if there are any problems
	 *          reading information from the source file.
	 ***************************************************************/
	function parse() {
		$result = 0;
		$done = false;
		
		if ((count ( $this->pActionTable ) < 1) || (count ( $this->pDFA ) < 1)) {
			$result = GOLDParser::gpMsgNotLoadedError;
		} else {
			while ( ! $done ) {
				if (count ( $this->pInputTokens ) == 0) { // we must read a token
					$readToken = $this->retrieveToken ( $this->pSource );
					if ($readToken == null) {
						$result = GOLDParser::gpMsgInternalError;
						$done = true;
					} else {
						if ($readToken->getKind () != GOLDParser::symbolTypeWhitespace) {
							array_push ( $this->pInputTokens, $readToken );
							if (($this->pCommentLevel == 0) && ($readToken->getKind () != GOLDParser::symbolTypeCommentLine) && ($readToken->getKind () != GOLDParser::symbolTypeCommentStart)) {
								$result = GOLDParser::gpMsgTokenRead;
								$done = true;
							}
						}
					}
				} else {
					if ($this->pCommentLevel > 0) { // we are in a block comment
						$readToken = array_pop ( $this->pInputTokens );
						
						switch ($readToken->getKind ()) {
							case GOLDParser::symbolTypeCommentStart :
								$this->pCommentLevel ++;
								break;
							
							case GOLDParser::symbolTypeCommentEnd :
								$this->pCommentLevel --;
								break;
							
							case GOLDParser::symbolTypeEnd :
								$result = GOLDParser::gpMsgCommentError;
								$done = true;
								break;
							
							default :
							// do nothing - ignore
						// the 'comment line' symbol is ignored as well
						}
					} else {
						$readToken = end ( $this->pInputTokens );
						reset ( $this->pInputTokens );
						
						switch ($readToken->getKind ()) {
							case GOLDParser::symbolTypeCommentStart :
								$this->pCommentLevel ++;
								array_pop ( $this->pInputTokens ); // remove it
								break;
							
							case GOLDParser::symbolTypeCommentLine :
								array_pop ( $this->pInputTokens ); // remove it
								$this->discardRestOfLine (); // and rest of line
								break;
							
							case GOLDParser::symbolTypeError :
								$result = GOLDParser::gpMsgLexicalError;
								$done = true;
								break;
							
							default : // FINALLY, we can parse the token
								$parseResult = $this->parseToken ( $readToken );
								
								switch ($parseResult) {
									case GOLDParser::parseResultAccept :
										$result = GOLDParser::gpMsgAccept;
										$done = true;
										break;
									
									case GOLDParser::parseResultInternalError :
										$result = GOLDParser::gpMsgInternalError;
										$done = true;
										break;
									
									case GOLDParser::parseResultReduceEliminated :
										$result = GOLDParser::gpMsgReductionTrimmed;
										$done = true;
										break;
									
									case GOLDParser::parseResultReduceNormal :
										$result = GOLDParser::gpMsgReduction;
										$done = true;
										break;
									
									case GOLDParser::parseResultShift : // A simple shift, we must continue
										array_pop ( $this->pInputTokens ); // Okay, remove the top token, it is on the stack
										$result = GOLDParser::gpMsgShift;
										$done = true;
										break;
									
									case GOLDParser::parseResultSyntaxError :
										$result = GOLDParser::gpMsgSyntaxError;
										$done = true;
										break;
									
									default :
										// do nothing
										break;
								}
								break;
						}
					}
				}
			}
		}
		return $result;
	}
	
	private function parseToken($nextToken) {
		//This function analyzes a token and either:
		//  1. Makes a SINGLE reduction and pushes a complete Reduction object on the stack
		//  2. Accepts the token and shifts
		//  3. Errors and places the expected symbol indexes in the Tokens list
		//The Token is assumed to be valid and WILL be checked
		//If an action is performed that requires controlt to be returned to the user, the function returns true.
		//The Message parameter is then set to the type of action.
		

		// modified to use ParseResultConstants
		$returnInt = - 1;
		
		$lrAct = $this->pActionTable [$this->currentLALR];
		$index = $lrAct->actionIndexForSymbol ( $nextToken->getPSymbol ()->getTableIndex () );
		
		if ($index != - 1) { // Work - shift or reduce
			$this->pHaveReduction = false;
			$this->pTokens = array ();
			
			switch ($lrAct->item ( $index )->actionConstant) {
				case GOLDParser::actionAccept :
					$this->pHaveReduction = true;
					$returnInt = GOLDParser::parseResultAccept;
					break;
				
				case GOLDParser::actionShift :
					$this->currentLALR = $lrAct->item ( $index )->value;
					$nextToken->setState ( $this->currentLALR );
					array_push ( $this->stack, $nextToken );
					$returnInt = GOLDParser::parseResultShift;
					break;
				
				case GOLDParser::actionReduce :
					//Produce a reduction - remove as many tokens as members in the rule & push a nonterminal token
					$ruleIndex = $lrAct->item ( $index )->value;
					$currentRule = $this->pRuleTable [$ruleIndex];
					
					//======== Create Reduction
					if ($this->pTrimReductions && $currentRule->containsOneNonTerminal ()) {
						//The current rule only consists of a single nonterminal and can be trimmed from the
						//parse tree. Usually we create a new Reduction, assign it to the Data property
						//of Head and push it on the stack. However, in this case, the Data property of the
						//Head will be assigned the Data property of the reduced token (i.e. the only one
						//on the stack).
						//In this case, to save code, the value popped of the stack is changed into the head.
						$head = array_pop ( $this->stack );
						$head->setParentSymbol ( $currentRule->getRuleNonTerminal () );
						
						$returnInt = GOLDParser::parseResultReduceEliminated;
					} else {
						// Build a Reduction
						$this->pHaveReduction = true;
						$newReduction = new Reduction ( );
						$newReduction->setParentRule ( $currentRule );
						$newReduction->setTokenCount ( $currentRule->getSymbolCount () );
						
						for($n = $newReduction->getTokenCount () - 1; $n >= 0; $n --) {
							$newReduction->setToken ( $n, array_pop ( $this->stack ) );
						}
						
						$head = new Token ( );
						$head->setData ( $newReduction );
						$head->setParentSymbol ( $currentRule->getRuleNonTerminal () );
						
						$returnInt = GOLDParser::parseResultReduceNormal;
					}
					
					//========== Goto
					end ( $this->stack );
					$topStack = current ( $this->stack );
					reset ( $this->stack );
					$index = $topStack->getState ();
					
					//========= If n is -1 here, then we have an Internal Table Error!!!!
					$lrAct = $this->pActionTable [$index];
					$n = $lrAct->actionIndexForSymbol ( $currentRule->getRuleNonTerminal ()->getTableIndex () );
					
					if ($n != - 1) {
						$this->currentLALR = $lrAct->item ( $n )->value;
						
						//========== Push Head
						//======== Get new head - Take action for invalid data
						$head->setState ( $this->currentLALR );
						
						array_push ( $this->stack, $head );
					} else {
						$returnInt = GOLDParser::parseResultInternalError;
					}
					break;
			}
		} else {
			//=== Syntax Error!
			$this->pTokens = array ();
			
			$lrAct = $this->pActionTable [$this->currentLALR];
			for($n = 0; $n < ($lrAct->count () - 1); $n ++) {
				if ($lrAct->item ( $n )->getSymbol ()->getKind () == GOLDParser::symbolTypeTerminal) {
					$head = new Token ( );
					$head->setData ( "" );
					$head->setParentSymbol ( $lrAct->item ( $n )->getSymbol () );
					array_push ( $this->pTokens, $head );
				
				}
			}
			
			$returnInt = GOLDParser::parseResultSyntaxError;
		}
		
		return $returnInt;
	}
	
	// this method is not accessible. It will throw an ParserException if there was
	// a problem reading the source file.
	private function retrieveToken($source) {
		//This function implements the DFA algorithm and returns a token to the LALR state
		//machine
		

		$ch = ''; //Temporary storage for a character read by the DFA algorithm
		

		$n = 0;
		$currentDFA = 0;
		
		$found = false; //Used to exit a branch search loop. For each state in the DFA
		//there are a finite number of branches to other states. The code
		//under "Move to next state" searches the branches until one is
		//found containing the character (ch).
		

		$done = false; //Used in the main loop. When the next character is not 
		//found in the DFA, this variable is set true and the loop 
		//exits. In addition, based on whether a matching token 
		//could be found, the code either creates an error token or 
		//returns the new one.
		

		$target = 0; //Temporary storage that used to hold the index of the next state in
		//the DFA. In other words, the state we are now moving to.
		

		$charSetIndex = 0; //Temporary storage that is used to hold the index in the 
		//Character Set. This isn't really necessary, but it does save 
		//code, and thus, sanity! :-)
		

		$currentPosition = 0; //This is the current read-ahead position on the source string.
		//The DFA algorithm uses lookahead logic to analyze the souce
		//string. Basically, I set the value of the value initially
		//to 1 since we are looking at the next character in the
		//input. Each time a character is matched in the algorithm
		//and the DFA State advances, so too does the position in the
		//source input.
		

		$lastAcceptState = 0; //Whenever a state is found that accepts a token, it is marked. 
		//Essentially this follows the algorithms desire to find the longest
		//matching token possible.
		

		$lastAcceptPosition = 0; //This is set at the same time as the LastAcceptState to
		//store the read-ahead position in the source that contains the
		//token. For instance, if parsing the string
		

		$result = new Token ( );
		
		$currentDFA = $this->initialDFAState; //The first state is almost always #1.
		$currentPosition = 1; //Next byte in the input stream
		$lastAcceptState = - 1; //We have not yet accepted a character string
		$lastAcceptPosition = - 1;
		
		$inWhiteSpaceCharSet = false; //we need to doubly make sure!
		

		if (! $source->done ()) {
			while ( ! $done ) {
				//======= This code searches all the branches of the current DFA state for the next
				//======= character in the input stream. If found the target state is returned.
				//======= The InStr() function searches the string pCharacterSetTable.Member(CharSetIndex)
				//======= starting at position 1 for ch.  The pCompareMode variable determines whether
				//======= the search is case sensitive.
				$ch = $source->nextChar ();
				
				if ($ch == "" || $ch == chr ( 2 )) { // End reached, do not match
					$found = false;
				} else {
					$n = 0;
					$found = false;
					
					$faTmp = $this->pDFA [$currentDFA];
					while ( ($n < $faTmp->edgeCount ()) && ! $found ) {
						$charSetIndex = $faTmp->edge ( $n )->getChars ();
						$sT = $this->pCharacterSetTable [$charSetIndex];
						
						for($i = 0; $i < strlen ( $sT ); $i ++) {
							$k = ord ( $sT [$i] );
							$x = ord ( $ch [0] );
							
							if ($k == 10) {
								// we are in whitespace land
								$inWhiteSpaceCharSet = true;
								if ($x == $k) {
									// the next character is whitespace!
									// but we must check to see if the character
									// after that is whitespace, if it is not then
									// we don't want to include it in our whitespace
									// token!
									if (! $source->nextCharNotWhitespace ()) {
										$found = true;
										$target = $faTmp->edge ( $n )->getTargetIndex ();
									}
								}
							}
						}
						
						$checkerFound = false;
						$sTChar = "";
						
						$checker = $ch [0];
						
						for($i = 0; $i < strlen ( $sT ); $i ++) {
							$sTChar = $sT [$i];
							
							if ($this->pIgnoreCase && (strcasecmp ( $checker, $sTChar ) == 0)) {
								$checkerFound = true;
								$i = strlen ( $sT ); // finish the loop quickly
							}
							
							if (! $this->pIgnoreCase && (strcmp ( $checker, $sTChar ) == 0)) {
								$checkerFound = true;
								$i = strlen ( $sT ); // finish the loop quickly
							}
						}
						
						if ($checkerFound) {
							$found = true;
							$target = $faTmp->edge ( $n )->getTargetIndex ();
						}
						
						$n ++;
					}
				}
				
				//======= This block-if statement checks whether an edge was found from the current state.
				//======= If so, the state and current position advance. Otherwise it is time to exit the main loop
				//======= and report the token found (if there was it fact one). If the LastAcceptState is -1,
				//======= then we never found a match and the Error Token is created. Otherwise, a new token
				//======= is created using the Symbol in the Accept State and all the characters that
				//======= comprise it.
				

				if ($found) {
					$faTmp2 = $this->pDFA [$target];
					if ($faTmp2->acceptSymbol != - 1) {
						$lastAcceptState = $target;
						$lastAcceptPosition = $currentPosition;
					}
					
					$currentDFA = $target;
					$currentPosition ++;
				} else { // No edge found
					$done = true;
					
					if ($lastAcceptState == - 1) { // Tokenizer cannot recognize symbol
						if ($this->pCommentLevel == 0) {
							$result->setParentSymbol ( $this->kErrorSymbol );
							$result->setData ( $source->read ( 1 ) );
						} else {
							$done = false;
						}
					} else {
						$faTmp3 = $this->pDFA [$lastAcceptState];
						$result->setParentSymbol ( $this->pSymbolTable->getMember ( $faTmp3->acceptSymbol ) );
						$result->setData ( $source->read ( $lastAcceptPosition ) );
					}
				}
			}
		} else {
			$result->setData ( "" ); // End of file reached, create end token
			$result->setParentSymbol ( $this->kEndSymbol );
		}
		
		//======= Count Carriage Returns and increment the Line Number. This is done for the
		//======= Developer and is not necessary for the DFA algorithm
		$strTmp = $result->getData ();
		$lastNL = 0;
		for($n = 0; $n < strlen ( $strTmp ); $n ++) {
			if ($strTmp [$n] == "\n") {
				$this->pLineNumber ++;
				$this->pCharacterPos = 0;
				$lastNL = $i;
			}
		}
		$this->pCharacterPos += strlen ( substr ( $strTmp, $lastNL ) );
		
		return $result;
	}
	
	const fileHeader = "GOLD Parser Tables/v1.0";
	
	//================================== Public Properties
	private $pSimplifyReductions;
	const gpReportModeAll = 1001;
	const gpReportReductionsOnly = 1002;
	
	//================================== Symbols recognized by the system
	private $pSymbolTable; // SymbolTable
	

	//================================== DFA. Contains FAStates.
	private $pDFA; // Array //FAState
	private $pCharacterSetTable; // Array //String
	

	//================================== Rules. Contains Rule Objects.
	private $pRuleTable; // Array //Rule
	

	//================================== Grammar variables
	private $pVariables; // Array
	

	//================================== LALR(1) action table. Contains LRActionTables.
	private $pActionTable; // Array //Contains LRStates
	

	//========================================= DFA runtime constants
	private $kErrorSymbol; // Symbol
	private $kEndSymbol; // Symbol
	

	//========================================= DFA runtime variables
	private $initialDFAState; // Integer
	

	//========================================= LALR runtime variables
	private $startSymbol; // Integer
	private $initialLALRState; // Integer
	private $currentLALR; // Integer
	private $stack; // Array
	

	//===================== Used for Reductions & Errors
	private $pTokens; // Array //The set of tokens for 1. Expecting during error, 2. Reduction
	private $pHaveReduction; // Boolean
	

	//===================== Properties
	private $pTrimReductions; // Boolean
	

	//===================== Private control variables
	private $pTablesLoaded; // Boolean
	private $pLineNumber; // Integer
	private $pCharacterPos; // Integer
	private $pSource; // LookAheadStream
	private $pCommentLevel; // Integer //How many levels the comments are
	private $pInputTokens; // Array //Stack of tokens to be analyzed
	private $pIgnoreCase; // Boolean
}

?>