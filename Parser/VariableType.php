<?php
/*######################################################################*
 * AUTOR: 		omega237											*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * EINE VARIABLE EINER VON GOLD ERSTELLTEN GRAMMATIK					*
 #######################################################################*/
class VariableType {
	
	/***************************************************************
	 *
	 * VariableType
	 *
	 * The constructor creates a new Variable.
	 * @param theName The name of the variable.
	 * @param theValue The value of the variable.
	 * @param theComment The comment associated with this variable.
	 * @param isVisible True if it public, false if not.
	 ***************************************************************/
	function __construct($theName, $theValue, $theComment, $isVisible) {
		$this->name = $theName;
		$this->value = $theValue;
		$this->comment = $theComment;
		$this->visible = $isVisible;
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
	 * This method will get the name of this variable.
	 * @return The name of this variable.
	 ***************************************************************/
	function getName() {
		return $this->name;
	}
	
	/***************************************************************
	 *
	 * getValue
	 *
	 * This method will get the value of this variable.
	 * @return The value of this variable.
	 ***************************************************************/
	function getValue() {
		return $this->value;
	}
	
	/***************************************************************
	 *
	 * getComment
	 *
	 * This method will get the comment of this variable.
	 * @return The comment of this variable.
	 ***************************************************************/
	function getComment() {
		return $this->comment;
	}
	
	/***************************************************************
	 *
	 * getVisible
	 *
	 * This method will get whether or not this variable is public.
	 * @return True if it is visible, false if not.
	 ***************************************************************/
	function getVisible() {
		return $this->visible;
	}
	
	/***************************************************************
	 *
	 * setName
	 *
	 * This method will set the name of this variable to that passed in.
	 * @param newName The new name of the variable.
	 ***************************************************************/
	function setName($newName) {
		$this->name = $newName;
	}
	
	/***************************************************************
	 *
	 * setValue
	 *
	 * This method will set the value of this variable to that passed in.
	 * @param newValue The new value of the variable.
	 ***************************************************************/
	function setValue($newValue) {
		$this->value = $newValue;
	}
	
	/***************************************************************
	 *
	 * setComment
	 *
	 * This method will set the comment of this variable to that passed in.
	 * @param newComment The new comment of the variable.
	 ***************************************************************/
	function setComment($newComment) {
		$this->comment = $newComment;
	}
	
	/***************************************************************
	 *
	 * setVisible
	 *
	 * This method will set whether or not this variable is visible.
	 * @param isVisible True if it is visible, false if not.
	 ***************************************************************/
	function setVisible($isVisible) {
		$this->visible = $isVisible;
	}
	
	private $name; // String
	private $visible; // Boolean
	private $value; // String
	private $comment; // String
}

?>