<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * EIN OBJEKT FÜR DIE SPEICHERUNG VON DATEN FÜR DIE WEITERVERARBEITUNG  *
 * IN EINEM PARSER														*
 #######################################################################*/
class Token {
	
	/***************************************************************
	 *
	 * Token
	 *
	 * The constructor initialises the data of this Token.
	 ***************************************************************/
	function __construct() {
		$this->pData = null;
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
	 * getState
	 *
	 * This method will get the State of this Token.
	 * @return The State of this Token.
	 ***************************************************************/
	function getState() {
		return $this->pState;
	}
	
	/***************************************************************
	 *
	 * getKind
	 *
	 * This method will get the kind of this Token. This is contained
	 * in the parent symbol, and defined in SymbolTypeConstants.
	 * @return The kind of this Token.
	 ***************************************************************/
	function getKind() {
		return $this->pParentSymbol->getKind ();
	}
	
	/***************************************************************
	 *
	 * getTableIndex
	 *
	 * This method will get the table index of this Token.
	 * @return The table index of this Token.
	 ***************************************************************/
	function getTableIndex() {
		return $this->pParentSymbol->getTableIndex ();
	}
	
	/***************************************************************
	 *
	 * getData
	 *
	 * This method will get the data of this Token.
	 * @return The data of this Token.
	 ***************************************************************/
	function getData() {
		return $this->pData;
	}
	
	/***************************************************************
	 *
	 * getText
	 *
	 * This method will get the text of this Token. This is the
	 * text in the parent symbol getText() method.
	 * @return The text of this Token.
	 ***************************************************************/
	function getText() {
		return $this->pParentSymbol->getText ();
	}
	
	/***************************************************************
	 *
	 * getName
	 *
	 * This method will get the name of this Token. This is the
	 * name of the parent symbol in the getName() method.
	 * @return The name of this Token.
	 ***************************************************************/
	function getName() {
		return $this->pParentSymbol->getName ();
	}
	
	/***************************************************************
	 *
	 * getPSymbol
	 *
	 * This method will get the parent symbol of this Token.
	 * @return The parent symbol of this Token.
	 ***************************************************************/
	function getPSymbol() {
		return $this->pParentSymbol;
	}
	
	/***************************************************************
	 *
	 * setState
	 *
	 * This method will set the state of this token to that passed in.
	 * @param newState The new state of the token.
	 ***************************************************************/
	function setState($newState) {
		$this->pState = $newState;
	}
	
	/***************************************************************
	 *
	 * setData
	 *
	 * This method will set the data of this token to that passed in.
	 * @param value The new data of the token.
	 ***************************************************************/
	function setData($value) {
		$this->pData = $value;
	}
	
	/***************************************************************
	 *
	 * setParentSymbol
	 *
	 * This method will set the parent symbol of this token to that passed in.
	 * @param theSymbol The new parent symbol of the token.
	 ***************************************************************/
	function setParentSymbol($theSymbol) {
		$this->pParentSymbol = $theSymbol;
	}
	
	private $pState; // Integer
	private $pData; // Object
	private $pParentSymbol; // Symbol 
}

?>