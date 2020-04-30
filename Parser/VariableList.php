<?php
/*######################################################################*
 * AUTOR: 		omega237											*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * BEHÄLTER FÜR VARIABLEN DER GRAMMATIKEN DIE VON GOLD ERSTELLT WERDEN	*
 #######################################################################*/
class VariableList {
	
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
	 * add
	 *
	 * This method will add a new variable to the list. It will do this
	 * if and only if there is not an equivalent variable already in
	 * the list. If there is not, it will create a new <code>
	 * VariableType</code>.
	 * @param name The name of the variable.
	 * @param value The value of the variable.
	 * @param comment Any associated comment for the variable.
	 * @return Will return true if the variable was not found, false
	 *              if it was.
	 ***************************************************************/
	function add($name, $value, $comment) {
		$n = 0;
		$found = false;
		
		while ( ($n < $this->memberCount) && ! $found ) {
			$varType = $this->memberList [$n];
			$found = $varType->getName () == $name;
			$n ++;
		}
		
		if (! $found) {
			$this->memberCount ++;
			$varT = new VariableType ( $name, $value, $comment, true );
			array_push ( $this->memberList, $varT );
		}
		
		return ! $found;
	}
	
	/***************************************************************
	 *
	 * clearValues
	 *
	 * This method will set the name of each variable to "".
	 ***************************************************************/
	function clearValues() {
		$enumA = $this->memberList;
		while ( count ( $enumA ) > 0 ) {
			$varType = array_shift ( $enumA );
			array_shift ( $this->memberList );
			$varType->setName ( "" );
			array_pop ( $this->memberList, $varType );
		}
	}
	
	/***************************************************************
	 *
	 * count
	 *
	 * This method returns the current number of variables.
	 * @return The number of variables in the list.
	 ***************************************************************/
	function count() {
		return $this->memberCount;
	}
	
	/***************************************************************
	 *
	 * name
	 *
	 * Return the name of the Variable at the specified index. It will
	 * do this if and only if the index is not less than 0, and if
	 * the index is less than the current number of variables.
	 * @param index The index of the variable to check.
	 * @return The name of the variable at the specified index.
	 ***************************************************************/
	function name($index) {
		if (($index >= 0) && ($index < $this->memberCount)) {
			$varType = $this->memberList [$index];
			return $varType->getName ();
		}
	}
	
	/***************************************************************
	 *
	 * setValue
	 *
	 * This method sets the value of a variable of the same name
	 * as that specified.
	 * @param name The name of the variable to set its value.
	 * @param value The new value to set.
	 ***************************************************************/
	function setValue($name, $value) {
		$index = $this->variableIndex ( $name );
		
		if (($index >= 0) && ($index < $this->memberCount)) {
			$varType = $this->memberList [$index];
			$varType->setValue ( $value );
		}
	}
	
	/***************************************************************
	 *
	 * getValue
	 *
	 * This method will return the value of the variable with the same
	 * name as that specified.
	 * @param name The name of the variable wanted.
	 * @return The value of the variable specified.
	 ***************************************************************/
	function getValue($name) {
		$index = $this->variableIndex ( $name );
		
		if (($index >= 0) && ($index < $this->memberCount)) {
			$varType = $this->memberList [$index];
			return $varType->getValue ();
		}
	}
	
	/***************************************************************
	 *
	 * variableIndex
	 *
	 * This method will return the index number of a variable
	 * that has the same name as that specified.
	 * @param name The name of the variable to get its index.
	 * @return The index in the list of the variable.
	 ***************************************************************/
	function variableIndex($name) {
		$index = - 1;
		$n = 0;
		
		while ( ($n < $this->memberCount) && ($index == - 1) ) {
			$varType = $this->memberList [$n];
			if ($varType->getName () == $name) {
				$index = $n;
			}
			$n ++;
		}
		
		return $index;
	}
	
	private $memberList;
	private $memberCount;
}

?>