<?php

require_once ('../Interpreter/PlausiInterpreter.php');
require_once ("PlausiSchnitt.php");

class PlausiFassade {
	
	/**
	 * Erstellt ein neues Objekt der Klasse PlausiFassade
	 * @return unknown_type
	 */
	public function __construct() {
		if ($this->nr == 0) {
			$this->plausi = new PlausiSchnitt ( );
			$this->nr ++;
		}
	}
	
	/**
	 * Zerstört ein Objekt der Klasse PlausiFassade
	 * @return unknown_type
	 */
	public function __destruct() {
		if ($this->nr == 1) {
			$this->plausi = null;
			$this->nr = 0;
		}
	}
	
	/**
	 * prüft für den übergebenen Text die Syntax
	 * @param $prog der zu prüfende Text
	 * @return bool wahr bei erfolgreicher Prüfung, falsch sonst
	 */
	public function pruefeSyntax($prog) {
		$this->parser = $this->plausi->erstelleParser ( "../Tabellen/PlausiTables.php", "../Konstanten/PlausiConstants.php" );
		//$this->parser = $this->plausi->erstelleParser1("../diverses/io.cgt");
		$this->baum = $this->plausi->pruefeSyntax ( $prog . chr ( 13 ) . chr ( 10 ), $this->parser );
		if (! is_object ( $this->baum )) {
			$this->syntaxfehler = $this->baum;
			return false;
		} else {
			$this->interpreter = $this->plausi->erstelleInterpreter ( "" );
			return true;
		}
	}
	
	/**
	 * gibt die Anzahl der gefundenen Syntaxfehler zurück
	 * @return int die Anzahl der gefundenen Syntaxfehler
	 */
	public function anzahlSyntaxFehler() {
		return $this->plausi->anzahlSyntaxFehler ();
	}
	
	/**
	 * gibt die Anzahl der gefundenen Lexikalischen Fehler zurück
	 * @return int die Anzahl der gefundenen lexikalischen Fehler
	 */
	public function anzahlLexikalischeFehler() {
		return $this->plausi->anzahlLexikalischeFehler ();
	}
	
	/**
	 * fragt eine Fehlermeldung für einen gefundenen Fehler ab und gibt diese Zurück
	 * @param $nr die nr des gefundenen Fehlers
	 * @param $typ der Typ des gefundenen Fehlers, s für Syntaxfehler, l für lexikalische Fehler, i für Fehler bei der Interpretation
	 * @return string die Fehlermeldung für den angeforderten Fehler
	 */
	public function holeFehlermeldung($nr, $typ) {
		if ($nr < 0 || ($typ == "s" && $nr > $this->plausi->anzahlSyntaxFehler ()) || ($typ == "l" && $nr > $this->plausi->anzahlLexikalischeFehler ()) || ($typ == "i" && $nr > $this->interpreter->getErrorCount ())) {
			return "";
		} else {
			if ($typ == "s")
				return $this->plausi->holeSyntaxfehler ( $nr );
			else if ($typ == "l")
				return $this->plausi->holeLexikfehler ( $nr );
			else if ($typ == "i") {
				return $this->interpreter->getError ( $nr );
			}
		}
	}
	
	/**
	 * stellt dem Interpreter eine Variable zur Verfügung
	 * @param $name der Name der Variable
	 * @param $wert der Wert der Variable
	 * @return kein
	 */
	public function setzeVariable($name, $wert) {
		$this->interpreter->setzeVariable ( $name, $wert );
	}
	
	/**
	 * evaluiert den zuletzt erfolgreich auf Syntaxfehler geprüften Ausdruck und gibt das Ergebnis zurück
	 * @return beliebig
	 */
	public function ausfuehren() {
		$erg = $this->plausi->interpretiere ( $this->baum, $this->interpreter );
		if (is_bool ( $erg )) {
			if ($erg) {
				//echo "Wahr";
				return true;
			} else {
				//echo "Falsch";
				return false;
			}
		} else if ($erg == "false") {
			//echo "Falsch";
			return false;
		} else if ($erg == "true") {
			// echo "Wahr";
			return true;
		} else {
			return $erg;
		}
	}
	
	/**
	 * Gibt die Anzahl der bei der Interpretation aufgetretenen Fehler zurück
	 * @return int die Anzahl der bei der Interpretation aufgetretenen Fehler
	 */
	public function anzahlAusfuehrungsFehler() {
		return $this->interpreter->getErrorCount ();
	}
	
	/**
	 * 
	 * @var GOLDParser
	 */
	private $parser;
	/**
	 * 
	 * @var PlausiInterpreter
	 */
	private $interpreter;
	/**
	 * 
	 * @var Reduction
	 */
	private $baum;
	
	/**
	 * Objekt der Klasse PlausiSchnitt
	 * @var PlausiSchnitt
	 */
	private static $plausi;
	/**
	 * Zähler für Singleton-Muster
	 * @var int
	 */
	private static $nr;
}

?>