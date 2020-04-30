<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * SCNITTSTELLE UND FABRIK ZU PARSER UND INTERPRETER FÜR PLAUSIBILITÄTS *
 * PRÜFUNGEN															*
 #######################################################################*/
require_once ('../Parser/GOLDParser.php');

class PlausiSchnitt {
	
	/**
	 * erstellt einen Parser mit gegebener Parsertabelle
	 * @param $tabelle die Parsertabelle
	 * @return GOLDParser ein Objekt der Klassse oder false
	 */
	public function erstelleParser($tabellen, $konstanten) {
		require_once ($konstanten);
		require_once ($tabellen);
		$p = new GOLDParser ( );
		if (! $p->loadTablesFromSkeleton ( $symbolTable, $ruleTable, $charSets, $dfaTable, $lalrTable, $caseSensitive, $startSymbol, $name, $about, $author, $version )) {
			return false;
		} else {
			unset ( $symbolTable );
			unset ( $ruleTable );
			unset ( $lalrTable );
			unset ( $dfaTable );
			unset ( $charSets );
		}
		return $p;
	}
	
	public function erstelleParser1($cgt) {
		$p = new GOLDParser();
		return $p->loadCompiledGrammar($cgt);
	}
	
	/**
	 * erstellt einen Interpreter mit den gegebenen Optionen
	 * @param $optionen die Interpreteroptionen
	 * @return Interpreter ein Objekt der Klasse
	 */
	public function erstelleInterpreter($optionen) {
		return new PlausiInterpreter ( );
	}
	
	/**
	 * prüft die Syntax eines Ausdrucks nach 
	 * der gegebenen Grammatik
	 * 
	 * @param $text der Programmtext
	 * @param $parser der Parser zum prüfen der Syntax
	 * @return variabel, Objekt der Klasse Token oder false
	 */
	public function pruefeSyntax($text, $parser) {
		assert ( $parser != null );
		$parser->reset();
		$this->syntaxfehler = array ();
		$this->lexikfehler = array ();
		$parser->openText ( $text );
		$fertig = false;
		while ( ! $fertig ) {
			$r = $parser->parse ();
			$l = $parser->currentLineNumber ();
			$c = $parser->currentCharacterPos ();
			switch ($r) {
				case GOLDParser::gpMsgAccept :
					$baum = $parser->getParseTree ();
					return end ( $baum );
					break;
				case GOLDParser::gpMsgCommentError :
					die ( "Es wurde ein nicht geschlossener Kommentar gefunden." );
					$fertig = true;
					break;
				case GOLDParser::gpMsgInternalError :
					die ( "Es ist ein interner Fehler aufgetreten." );
					$fertig = true;
					break;
				case GOLDParser::gpMsgLexicalError :
					$f = "<zeile>" . $parser->currentLineNumber () . "</zeile>" . chr ( 13 ) . chr ( 10 ) . "<spalte>" . $parser->currentCharacterPos () . "</spalte>" . chr ( 13 ) . chr ( 10 );
					array_push ( $this->lexikfehler, $f );
					$fertig = true;
					break;
				case GOLDParser::gpMsgNotLoadedError :
					die ( "Es wurde versucht, zu parsen, aber die Tabellen waren nicht geladen." );
					$fertig = true;
					break;
				case GOLDParser::gpMsgReduction :
					$red = $parser->currentReduction ();
					break;
				case GOLDParser::gpMsgReductionTrimmed :
					$red = $parser->currentReduction ();
					break;
				case GOLDParser::gpMsgSyntaxError :
					$f = "<zeile>" . $parser->currentLineNumber () . "</zeile>" . chr ( 13 ) . chr ( 10 ) . "<spalte>" . $parser->currentCharacterPos () . "</spalte>" . chr ( 13 ) . chr ( 10 );
					array_push ( $this->syntaxfehler, $f );
					$fertig = true;
					break;
				case GOLDParser::gpMsgTokenRead :
					$tok = $parser->currentToken ();
					break;
				case GOLDParser::gpMsgShift :
					break;
				default :
					break;
			}
		}
		return false;
	}
	
	/**
	 * 
	 * @return unknown_type
	 */
	public function anzahlSyntaxFehler() {
		return count ( $this->syntaxfehler );
	}
	
	/**
	 * 
	 * @param $nr
	 * @return unknown_type
	 */
	public function holeSyntaxfehler($nr) {
		return $this->syntaxfehler [$nr];
	}
	
	/**
	 * 
	 * @return unknown_type
	 */
	public function anzahlLexikalischeFehler() {
		return count ( $this->lexikfehler );
	}
	
	/**
	 * 
	 * @param $nr
	 * @return unknown_type
	 */
	public function holeLexikfehler($nr) {
		return $this->lexikfehler [$nr];
	}
	
	/**
	 * interpretiert einen gegebenen Baum mit einem Interpreter
	 * @param $baum von einem Parser generierter Baum
	 * @param $interpreter ein Interpreter
	 * @return der Rückgabewert des Interpreters
	 */
	public function interpretiere($baum, $interpreter) {
		assert ( $interpreter != null );
		return $interpreter->interpretiere ( $baum );
	}
	
	function __construct() {
		$this->syntaxfehler = array ();
		$this->lexikfehler = array ();
		//TODO - Insert your code here
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - Insert your code here
	}
	
	private $syntaxfehler;
	private $lexikfehler;
}

?>