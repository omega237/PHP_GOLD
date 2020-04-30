<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * BEHÄLTER FÜR DIE AUS EINER GOLD GRAMMATIK GENERIERTE SYMBOLTABELLE	*
 #######################################################################*/
class SymbolList {
	
	/**
	 * 
	 */
	function __construct() {
		$this->memberList = array ();
		$this->memberCount = 0;
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
	 * reDim
	 *
	 * This is the equivalent of the ReDim method in VB. It will
	 * resize the Vector to the new size passed in.
	 * @param newSize The new size required.
	 ***************************************************************/
	function reDim($newSize) {
		$this->memberCount = $newSize;
	}
	
	/***************************************************************
	 *
	 * clear
	 *
	 * This method empties the list.
	 ***************************************************************/
	function clear() {
		$this->memberList = array ();
		$this->memberCount = 0;
	}
	
	/***************************************************************
	 *
	 * count
	 *
	 * This method will return the number of entries in the SymbolList.
	 * @return The current number of symbols.
	 ***************************************************************/
	function count() {
		return $this->memberCount;
	}
	
	/***************************************************************
	 * 
	 * getMember
	 * 
	 * Weiche zwischen den Funktionen getMemberByIndex und 
	 * getMemberByName
	 * @param $var der Index oder der Name
	 */
	function getMember($var) {
		if (is_int ( $var )) {
			return $this->getMemberByIndex ( $var );
		} else if (is_string ( $var )) {
			return $this->getMemberByName ( $var );
		}
		
		return null;
	}
	
	/***************************************************************
	 *
	 * getMemberByIndex
	 *
	 * This method will return the Symbol at the specified index. It
	 * will do this if and only if the index is not less than 0, and
	 * if the index is less than the current number of symbols.
	 * @param index The index of the Symbol wanted.
	 * @return The symbol at the specified index, or null if the index
	 *              is invalid.
	 ***************************************************************/
	private function getMemberByIndex($index) {
		if (($index >= 0) && ($index < $this->memberCount)) {
			return $this->memberList [$index];
		}
		
		return null;
	}
	
	/***************************************************************
	 *
	 * getMemberByName
	 *
	 * This method will return the Symbol that has an equivalent
	 * name in the list.
	 * @param name The name of the Symbol wanted in the list.
	 * @return The Symbol with the same name of that passed in.
	 ***************************************************************/
	private function getMemberByName($name) {
		$enum = $this->memberList;
		while ( count ( $enum ) > 0 ) {
			$tmp = array_shift ( $enum );
			if ($tmp->getName () == $name) {
				return $tmp;
			}
		}
		
		return null;
	}
	
	/***************************************************************
	 *
	 * setMember
	 *
	 * This method will set the element at the specified index
	 * to the Symbol passed in. It will do this if and only if
	 * the index is not less than 0, and if the index is less than
	 * the current member count.
	 * @param index The index to set the Symbol to.
	 * @param obj The Symbol to place in the SymbolList.
	 ***************************************************************/
	function setMember($index, $obj) {
		if (($index >= 0) && ($index < $this->memberCount)) {
			$this->memberList [$index] = $obj;
		}
	}
	
	/***************************************************************
	 *
	 * add
	 *
	 * This method adds a symbol to the end of the list.
	 * @param newItem The Symbol to add.
	 * @return The index in the list at which the symbol was added.
	 ***************************************************************/
	function add($newItem) {
		$this->memberCount ++;
		array_push ( $this->memberList, $newItem );
		
		return $this->memberCount - 1;
	}
	
	private $memberList; // Array
	private $memberCount; // Integer
}

?>