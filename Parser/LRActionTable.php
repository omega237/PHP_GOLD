<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE FÜR DIE BEHANDLUNG EINER LALR TABELLE							*
 #######################################################################*/
require_once ('LRAction.php');

class LRActionTable {
	
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
	 * actionIndexForSymbol
	 *
	 * This method will return the index in the symbol table for the
	 * symbol in the action table specified by <code>symbolIndex</code>.
	 * @param symbolIndex The index in the action table of the Symbol
	 * @return The index in the Symbol Table of the Symbol specified.
	 ***************************************************************/
	function actionIndexForSymbol($symbolIndex) {
		$n = 0;
		$found = false;
		$index = - 1;
		
		while ( ! $found && ($n < $this->memberCount) ) {
			$lar = $this->memberList [$n];
			if ($lar->getSymbol ()->getTableIndex () == $symbolIndex) {
				$index = $n;
				$found = true;
			}
			$n ++;
		}
		
		if ($found) {
			return $index;
		} else {
			return - 1;
		}
	}
	
	/***************************************************************
	 *
	 * addItem
	 *
	 * This method will add a symbol to the action table. It will
	 * create a new LRAction, set its value and actionConstant,
	 * and then increment the member count after adding it.
	 * @param theSym The symbol in the LRAction.
	 * @param theActionConstant The action constant of the LRAction.
	 * @param theValue The value of the LRAction.
	 ***************************************************************/
	function addItem($theSym, $theActionConstant, $theValue) {
		$tableEntry = new LRAction ( );
		$tableEntry->setSymbol ( $theSym );
		$tableEntry->actionConstant = $theActionConstant;
		$tableEntry->value = $theValue;
		$this->memberCount ++;
		array_push ( $this->memberList, $tableEntry );
	}
	
	/***************************************************************
	 *
	 * count
	 *
	 * <Method Description>
	 * @return <Return description>
	 ***************************************************************/
	function count() {
		return $this->memberCount;
	}
	
	/***************************************************************
	 *
	 * item
	 *
	 * This method will return the LRAction at the specified index.
	 * It will only return if and only if the index is a valid number.
	 * @param n The index in the LRActionTable to look at.
	 * @return The LRAction at the specified index.
	 ***************************************************************/
	function item($n) {
		if (($n >= 0) && ($n <= $this->memberCount)) {
			return $this->memberList [$n];
		}
		return null;
	}
	
	private $memberList; // Array
	private $memberCount;
}

?>