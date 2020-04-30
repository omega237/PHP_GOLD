<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * INTERPRETER FÜR EINEN AUSDRUCK EINER GRAMMATIK. EINFACH 				*
 * interpretiere NACH DEM SETZEN DER VARIABLEN AUFRUFEN.				*
 #######################################################################*/
require_once ('../Konstanten/PlausiConstants.php');

function dump($was) {
	echo "<dump><![CDATA[";
	var_dump($was);
	echo "]]></dump>";
}

class PlausiInterpreter {
	
	/**
	 * Behandlung eines Fehlers
	 * @param $nachricht die Fehlernachricht
	 * @return unknown_type
	 */
	private function Fehler($nachricht) {
		array_push ( $this->fehler, $nachricht );
	}
	
	/**
	 * Abbrechen der Interpretation aufgrund eines fatalen Fehlers 
	 * 
	 */
	private function FatalerFehler($n) {
		dump($this->vars);
		echo "Fataler Fehler: " . $n . "\n";
	}
	
	/**
	 * auswerten eines binären Operators
	 * @param $links die linke Seite des Operators
	 * @param $op der Operator selber
	 * @param $rechts die rechte Seite des Operators
	 * @return unknown_type
	 */
	private function binOp($links, $op, $rechts) {
		//dump($links); dump($op); dump($rechts);
		$links = "return " . $links . ";";
		$rechts = "return " . $rechts . ";";
		switch ($op) {
			case "+" :
				return eval ( $links ) + eval ( $rechts );
				break;
			case "-" :
				return eval ( $links ) - eval ( $rechts );
				break;
			case "*" :
				return eval ( $links ) * eval ( $rechts );
				break;
			case "/" :
				return eval ( $links ) / eval ( $rechts );
				break;
			case "&&" :
			case "Und" :
				$l = eval ( $links );
				$r = eval ( $rechts );
				if (($l == "true" && $r == "true") || ($l && $r)) {
					return "true";
				} else {
					return "false";
				}
				break;
			case "||" :
			case "Oder" :
				$l = eval ( $links );
				$r = eval ( $rechts );
				if ($l || $r) {
					return "true";
				} else {
					return "false";
				}
				break;
			case "<" :
				if (eval ( $links ) < eval ( $rechts )) {
					return "true";
				} else {
					return "false";
				}
				break;
			case ">" :
				if (eval ( $links ) > eval ( $rechts )) {
					return "true";
				} else {
					return "false";
				}
				break;
			case "==" :
				if (eval ( $links ) == eval ( $rechts )) {
					return "true";
				} else {
					return "false";
				}
				break;
			case ">=" :
				if (eval ( $links ) >= eval ( $rechts )) {
					return "true";
				} else {
					return "false";
				}
				break;
			case "<=" :
				if (eval ( $links ) <= eval ( $rechts )) {
					return "true";
				} else {
					return "false";
				}
				break;
			case "<>" :
				if (eval ( $links ) != eval ( $rechts )) {
					return "true";
				} else {
					return "false";
				}
				break;
			case "%>" :
				$l = eval ( $links );
				$r = preg_replace ( "/\%/", ".*", eval ( $rechts ) );
				$r = preg_replace ( "/\?/", ".", $r);
				if (preg_match ( "/^" . $r . "$/i", $l ))
					return "true";
				else
					return "false";
				break;
			case "<%":
				$r = eval ( $rechts );
				$l = preg_replace ( "/\%/", ".*", eval ( $links ) );
				$l = preg_replace ( "/\?/", ".", $l);
				if (preg_match ( "/^" . $l . "$/i", $r ))
					return "true";
				else
					return "false";
				break;
			default :
				$this->FatalerFehler ( "Operator nicht implementiert: " . $op );
				break;
		}
	}
	
	private function fehlerbehandlung($func, $text) {
		//dump($func);dump($text);
		$func = "return " . $func . ";";
		$erg = eval ( $func );
		if (is_bool ( $erg ) && $erg) {
			return "true";
		} else if (is_bool ( $erg )) {
			$this->Fehler ( $text );
			return "false";
		} else {
			if ($erg == "false") {
				$this->Fehler ( $text );
				return "false";
			} else {
				return "true";
			}
		}
	}
	
	/**
	 * auswerten eines unären Operators
	 * @param $op der Operator selbst
	 * @param $rechts die rechte Seite des Operators
	 * @return unknown_type
	 */
	private function unOp($op, $rechts) {
		if (is_bool ( $rechts )) {
			if ($rechts) {
				$rechts = "return true;";
			} else {
				$rechts = "return false;";
			}
		} else {
			$rechts = "return " . $rechts . ";";
		}
		switch ($op) {
			case "-" :
				return - eval ( $rechts );
				break;
			case "Nicht" :
				$r = eval ( $rechts );
				if ($r == false) {
					return true;
				} else {
					return false;
				}
				break;
		}
	}
	
	/**
	 * auswerten eines Wertes 
	 * @param $op der Wert selber
	 * @return unknown_type
	 */
	private function val($op) {
		if (($op [0] != "\"") && (! is_numeric ( $op [0] ))) {
			if (! key_exists ( $op, $this->vars )) {
				$this->FatalerFehler ( "Variable nicht gesetzt: " . $op );
			} else {
				return "'" . $this->vars [$op] . "'";
			}
		} else {
			return eval ( "return '" . $op . "';" );
		}
	}
	
	/**
	 * Umschreiben des Programms in ein durch PHP auswertbares Programm
	 * @param $ast Abk.: Abstract Syntax Tree
	 * @return string PHP-Ausdruck 
	 */
	private function rewrite($ast) {
		if (! is_object ( $ast ) || ! is_object ( $ast->getData () )) {
			return;
		}
		$ast = $ast->getData ();
		switch ($ast->getParentRule ()->getTableIndex ()) {
			// binäre Operatoren
			case Rule_Konjunktion_Oder :
			case Rule_Konjunktion_Und :
			case Rule_Expression_Eqeq :
			case Rule_Expression_Gt :
			case Rule_Expression_Gteq :
			case Rule_Expression_Lt :
			case Rule_Expression_Lteq :
			case Rule_Expression_Ltgt :
			case Rule_Expression_Ltpercent :
			case Rule_Expression_Percentgt:
			case Rule_Addexp_Minus :
			case Rule_Addexp_Plus :
			case Rule_Multexp_Div :
			case Rule_Multexp_Times :
				$t = array ();
				for($i = 0; $i < $ast->getTokenCount (); $i ++) {
					if ($ast->getToken ( $i )->getPSymbol ()->getTableIndex () != Symbol_Lparan && $ast->getToken ( $i )->getPSymbol ()->getTableIndex () != Symbol_Rparan) {
						array_push ( $t, $ast->getToken ( $i ) );
					}
				}
				return '$this->binOp(' . $this->rewrite ( $t [0] ) . ",'" . $t [1]->getData () . "'," . $this->rewrite ( $t [2] ) . ")";
				break;
			// unäre Operatoren
			case Rule_Negateexp_Minus :
			case Rule_Value_Nicht :
				//case Rule_Konjunktion_Nicht :
				$t = array ();
				for($i = 0; $i < $ast->getTokenCount (); $i ++) {
					if ($ast->getToken ( $i )->getPSymbol ()->getTableIndex () != Symbol_Lparan && $ast->getToken ( $i )->getPSymbol ()->getTableIndex () != Symbol_Rparan) {
						array_push ( $t, $ast->getToken ( $i ) );
					}
				}
				$ret = '$this->unOp("' . $t [0]->getData () . '",' . $this->rewrite ( $t [1] ) . ')';
				break;
			// Startsymbol leitet das Programm ein und bildet quasi die zu evaluierende Funktion
			case Rule_Start :
				$t = array ();
				for($i = 0; $i < $ast->getTokenCount (); $i ++) {
					if ($ast->getToken ( $i )->getPSymbol ()->getTableIndex () != Symbol_Nlopt) {
						array_push ( $t, $ast->getToken ( $i ) );
					}
				}
				return "return " . $this->rewrite ( $t [0] ) . ";";
				break;
				// Fehlerbehandlung
				$t = array ();
				for($i = 0; $i < $ast->getTokenCount (); $i ++) {
					if ($ast->getToken ( $i )->getPSymbol ()->getTableIndex () != Symbol_Colon)
						array_push ( $t, $ast->getToken ( $i ) );
				}
				return $t [0]->getData ();
				break;
			// Programm besteht aus Zeile mit optionaler Fehlerbehandlung und evtl. folgender Programmzeile
			case Rule_Program :
			case Rule_Program2 :
				$t = array ();
				for($i = 0; $i < $ast->getTokenCount (); $i ++) {
					if ($ast->getToken ( $i )->getPSymbol ()->getTableIndex () != Symbol_Nl) {
						array_push ( $t, $ast->getToken ( $i ) );
					}
				}
				if (count ( $t ) > 2) { // Neue Programmzeile vorhanden
					if ($t [1]->getData ()->getTokenCount () > 0) { // Fehlerbehandlung vorhanden
						//return $this->rewrite ( $t [0] ) . ' == "true" ? ' . $this->rewrite ( $t [2] ) . ' : $this->Fehler(' . $this->rewrite ( $t [1] ) . ")";
						return '$this->binOp($this->fehlerbehandlung(' . $this->rewrite ( $t [0] ) . ', ' . $this->rewrite ( $t [1] ) . '), "&&", ' . $this->rewrite ( $t [2] ) . ")";
					} else {
						//return  rewrite($t[0]) . " && " . rewrite($t[2]) ;
						return '$this->binOp(' . $this->rewrite ( $t [0] ) . ' ,"&&", ' . $this->rewrite ( $t [2] ) . ")";
					}
				} else { // Keine neue Programmzeile vorhanden
					if ($t [1]->getData ()->getTokenCount () > 0) { // Fehlerbehandlung vorhanden
						//return $this->rewrite ( $t [0] ) . ' == "true" ? "true" : $this->Fehler(' . $this->rewrite ( $t [1] ) . ")";
						return '$this->binOp($this->fehlerbehandlung(' . $this->rewrite ( $t [0] ) . ', ' . $this->rewrite ( $t [1] ) . '), "&&", "false")';
					} else {
						return $this->rewrite ( $t [0] );
					}
				}
				break;
			//
			case Rule_Value_Lparan_Rparan :
				return $this->rewrite ( $ast->getToken ( 1 ) );
				break;
			//
			case Rule_Fehlerbehandlung_Colon_Stringliteral :
				if (! is_object ( $ast->getToken ( 1 )->getData () )) {
					$d = eregi_replace ( '"', '\"', $ast->getToken ( 1 )->getData () );
					return '$this->val("' . $d . '")';
				} else {
					//echo "";
				}
				break;
			// alle Werte
			default :
				if (! is_object ( $ast->getToken ( 0 )->getData () )) {
					$d = eregi_replace ( '"', '\"', $ast->getToken ( 0 )->getData () );
					return '$this->val("' . $d . '")';
				} else {
					echo "";
				}
				break;
		}
		return $ret;
	}
	
	/**
	 * setzt den Wert einer Variable
	 * @param Variablenname
	 * @param Wert
	 */
	public function setzeVariable($name, $wert) {
		$this->vars [$name] = $wert;
	}
	
	/**
	 * gibt die Anzahl der während der Interpretation aufgetretenen Fehler zurück
	 * @return int die Anzahl der während der Interpretation aufgetretenen Fehler
	 */
	public function getErrorCount() {
		return count ( $this->fehler );
	}
	
	/**
	 * Gibt die Fehlermeldung mit der übergebenen nr zurück
	 * @param $nr die zurückzugebende Fehlermeldung
	 * @return string die gewünschte Fehlermeldung
	 */
	public function getError($nr) {
		return $this->fehler [$nr];
	}
	
	/**
	 * @param $name Variablennam
	 * @return variabel, der Wert der Variable
	 */
	public function holeVariable($name) {
		return $this->vars [$name];
	}
	
	public function interpretiere($baum) {
		assert ( $baum != null );
		$t = $this->rewrite ( $baum );
		echo "<eval><![CDATA[";
		echo $t;
		echo "]]></eval>";
		$v = eval ( $t );
		return $v;
	}
	
	public function __construct() {
		$this->vars = array ();
		$this->fehler = array ();
	}
	
	public function __destruct() {
	
	}
	
	private $vars;
	private $fehler;
}
?>
