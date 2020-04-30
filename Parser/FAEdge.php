<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE ZUR REPRÄSENTATION EINER KANTE IN EINEM GRAPHEN EINES DFA		*
 #######################################################################*/
class FAEdge {
	
	/**
	 * 
	 */
	function __construct() {
		
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
	 * getChars
	 *
	 * Returns the set of characters associated with this edge
	 * @return The set of characters associated with this edge
	 ***************************************************************/
	function getChars() {
		return $this->characters;
	}
	
	/***************************************************************
	 *
	 * getTargetIndex
	 *
	 * Returns the index of the edge in the FAState
	 * @return The index of the edge in the FAState
	 ***************************************************************/
	function getTargetIndex() {
		return $this->targetIndex;
	}
	
	/***************************************************************
	 *
	 * setChars
	 *
	 * Sets the characters of this edge to the String passed in.
	 * @param newChars The new set of characters.
	 ***************************************************************/
	function setChars($newChars) {
		$this->characters = $newChars;
	}
	
	/***************************************************************
	 *
	 * setTargetIndex
	 *
	 * Sets the index in the FAState to the number passed in.
	 * @param newIn The new target index.
	 ***************************************************************/
	function setTargetIndex($newIn) {
		$this->targetIndex = $newIn;
	}
	
	/***************************************************************
	 *
	 * contains
	 *
	 * Returns True if the characters are in the String passed in,
	 * false if not.
	 * @return Boolean
	 * @param Char The String (one character long) to check.
	 ***************************************************************/
	function contains($Char) {
		return strstr ( $this->characters, $Char ) !== false;
	}
	
	private $characters; // String
	private $targetIndex; // Integer
}

?>