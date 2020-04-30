<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * NACHRICHTENKONSTANTEN, DIE DER PARSER AN DEN DRIVER ZURÜCKGIBT		*
 #######################################################################*/
interface ActionConstants {
	/** Shift a symbol and goto a state */
	const actionShift = 1;
	/** Reduce by a specified rule */
	const actionReduce = 2;
	/** Goto to a state on reduction */
	const actionGoto = 3;
	/** Input successfully parsed */
	const actionAccept = 4;
	/** Programmars see this often! */
	const actionError = 5;
}

?>