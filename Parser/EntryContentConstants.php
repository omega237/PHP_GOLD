<?php
/*######################################################################*
 * AUTOR: 		omega237											*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KONSTANTEN ZUR VERARBEITUNG VON CGT DATEIEN							*
 #######################################################################*/
interface EntryContentConstants {
	/** Defined as E */
	const entryContentEmpty = 69;
	/** Defined as I - Signed, 2 byte */
	const entryContentInteger = 73;
	/** Defined as S - Unicode format */
	const entryContentString = 83;
	/** Defined as B - 1 byte, Value is 0 or 1 */
	const entryContentBoolean = 66;
	/** Defined as b */
	const entryContentByte = 98;
}

?>