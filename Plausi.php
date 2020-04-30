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
require_once ('Parser/GOLDParser.php');
require_once ('Interpreter/PlausiInterpreter.php');

class Plausi {
	
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
	
	/**
	 * erstellt einen Interpreter mit den gegebenen Optionen
	 * @param $optionen die Interpreteroptionen
	 * @return Interpreter ein Objekt der Klasse
	 */
	public function erstelleInterpreter($optionen) {
		return new PlausiInterpreter();
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
		$parser->openText ( $text );
		$fertig = false;
		while ( ! $fertig ) {
			$r = $parser->parse ();
			$l = $parser->currentLineNumber ();
			$c = $parser->currentCharacterPos ();
			switch ($r) {
				case GOLDParser::gpMsgAccept :
					$baum = $parser->getParseTree ();
					return end($baum);
					break;
				case GOLDParser::gpMsgCommentError :
					//die ( "Es wurde ein nicht geschlossener Kommentar gefunden." );
					$fertig = true;
					break;
				case GOLDParser::gpMsgInternalError :
					//die ( "Es ist ein interner Fehler aufgetreten." );
					$fertig = true;
					break;
				case GOLDParser::gpMsgLexicalError :
					//echo "Zustand: " . $p->currentState () . nl;
					//echo "Zeile: " . $p->currentLineNumber () . nl;
					//echo "Spalte: " . $p->currentCharacterPos () . nl;
					//die ( "Es ist ein lexikalischer Fehler aufgetreten." );
					$fertig = true;
					break;
				case GOLDParser::gpMsgNotLoadedError :
					//die ( "Es wurde versucht, zu parsen, aber die Tabellen waren nicht geladen." );
					$fertig = true;
					break;
				case GOLDParser::gpMsgReduction :
					$red = $parser->currentReduction ();
					break;
				case GOLDParser::gpMsgReductionTrimmed :
					$red = $parser->currentReduction ();
					break;
				case GOLDParser::gpMsgSyntaxError :
					//die ( "Es ist ein Syntaxfehler aufgetreten." );
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
	 * interpretiert einen gegebenen Baum mit einem Interpreter
	 * @param $baum von einem Parser generierter Baum
	 * @param $interpreter ein Interpreter
	 * @return der Rückgabewert des Interpreters
	 */
	public function interpretiere($baum, $interpreter) {
		assert($interpreter != null);
		return $interpreter->interpretiere($baum);
	}
	
	function __construct() {
		
	//TODO - Insert your code here
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - Insert your code here
	}
}

?>