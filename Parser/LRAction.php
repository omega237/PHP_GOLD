<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE FÜR DIE REPRÄSENTATION EINER LALR AKTION						*
 #######################################################################*/
class LRAction {
	
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
	 * setSymbol
	 *
	 * This method will set the symbol of this action.
	 * @param sym The symbol to set for this action.
	 ***************************************************************/
	function setSymbol($sym) {
		$this->pSymbol = $sym;
	}
	
	/***************************************************************
	 *
	 * getSymbolIndex
	 *
	 * This method will return the index of the smybol in the symbol
	 * table.
	 * @return The index of the smybol in the symbol table.
	 ***************************************************************/
	function getSymbolIndex() {
		return $this->pSymbol->getTableIndex ();
	}
	
	/***************************************************************
	 *
	 * getSymbol
	 *
	 * This method will return the symbol associated with this action.
	 * @return The symbol associated with this action.
	 ***************************************************************/
	function getSymbol() {
		return $this->pSymbol;
	}
	
	private $pSymbol; // Symbol
	public $actionConstant; // Integer
	public $value; // Integer


}

?>