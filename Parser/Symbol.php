<?php
/*######################################################################*
 * AUTOR: 		omega237											*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE FÜR DIE BEZEICHNUNG EINES SYMBOLS EINER GEPARSTEN SPRACHE		*
 #######################################################################*/
require_once ('SymbolTypeConstants.php');

class Symbol implements SymbolTypeConstants {
	
	/***************************************************************
	 *
	 * Symbol
	 *
	 * The constructor simply initialises the table index.
	 ***************************************************************/
	function __construct() {
		$this->pTableIndex = - 1;
		//TODO - Insert your code here
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - Insert your code here
	}
	
	/***************************************************************
	 *
	 * getName
	 *
	 * This method gets the name of the symbol.
	 * @return The name of the symbol.
	 ***************************************************************/
	function getName() {
		return $this->pName;
	}
	
	/***************************************************************
	 *
	 * getKind
	 *
	 * This method gets the kind of symbol (defined in SymbolTypeConstants).
	 * @return The kind of symbol.
	 ***************************************************************/
	function getKind() {
		return $this->pKind;
	}
	
	/***************************************************************
	 *
	 * getTableIndex
	 *
	 * This method gets the table index of this symbol.
	 * @return The table index of this symbol.
	 ***************************************************************/
	function getTableIndex() {
		return $this->pTableIndex;
	}
	
	/***************************************************************
	 *
	 * setName
	 *
	 * This method sets the name of the symbol.
	 * @param newName The name of the symbol.
	 ***************************************************************/
	function setName($newName) {
		$this->pName = $newName;
	}
	
	/***************************************************************
	 *
	 * setKind
	 *
	 * This method sets the kind of the symbol (defined in SymbolTypeConstants).
	 * @param newKind <parameter description>
	 ***************************************************************/
	function setKind($newKind) {
		$this->pKind = $newKind;
	}
	
	/***************************************************************
	 *
	 * setTableIndex
	 *
	 * This method sets the table index of the symbol.
	 * @param newTab The kind of symbol.
	 ***************************************************************/
	function setTableIndex($newTab) {
		$this->pTableIndex = $newTab;
	}
	
	/***************************************************************
	 *
	 * getText
	 *
	 * This method will create a text representation of this Symbol.
	 * What text is returned depends on the kind of Symbol.
	 * If it is a Non-Terminal, angular brackets are placed before
	 * and after, if it is a Terminal, then it is formatted.
	 * Everything else is placed in parenthesis.
	 * @return The String representation of this Symbol.
	 ***************************************************************/
	function getText() {
		$str = "";
		
		switch ($this->pKind) {
			case Symbol::symbolTypeNonterminal :
				$str = "<" . $this->pName . ">";
				break;
			case Symbol::symbolTypeTerminal :
				$str = $this->patternFormat ( $this->pName );
				break;
			default :
				$str = "(" . $this->pName . ")";
		}
		
		return $str;
	}
	
	// this method is not accessible. It will create a formatted String
	// from that passed in.
	private function patternFormat($source) {
		$result = "";
		$in34 = 34;
		$ch34 = chr ( $in34 );
		
		for($i = 0; $i < strlen ( $source ); $i ++) {
			$ch = "". $source[$i];
			
			if ($ch == "'") {
				$ch = "''";
			} else {
				if (strstr ( Symbol::kQuotedChars, $ch ) || $ch[0] == $ch34) {
					$ch = "'" . $ch . "'";
				}
			}
			
			$result .= $ch;
		}
		
		return $result;
	}
	
	/***************************************************************
	 *
	 * isEqual #ver1.1#
	 *
	 * This method will check equality of two Symbols - this and the one passed in.
	 * @param other The symbol to check against this one.
	 * @return True if it is equal, false if not.
	 ***************************************************************/
	function isEqual($other) {
		if (($this->pName == $other->getName ()) && ($this->pKind == $other->getKind ())) {
			return true;
		}
		
		return false;
	}
	
	private $pName; // String
	private $pPattern; // String
	private $pKind; // Integer
	private $pVariableLength; // Boolean
	private $pTableIndex; // Integer
	const kQuotedChars = "|-+*?()[]{}<>!";
}

?>