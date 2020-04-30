<?php
/*######################################################################*
 * AUTOR: 		omega237										*
 * E-MAIL: 		O.KOCH@CHARISMA-TEAM.DE									*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * AUSNAHMEN; DIE VOM PARSER GEWROFEN WERDEN							*
 #######################################################################*/
class ParserException extends Exception {
	
	/**
	 * 
	 *@param message[optional] 
	 *@param code[optional] 
	 */
	public function __construct($message, $code) {
		parent::__construct ( $message, $code );
		//TODO - Insert your code here
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - Insert your code here
	}
}

?>