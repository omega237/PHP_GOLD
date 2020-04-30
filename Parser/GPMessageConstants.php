<?php
/*######################################################################*
 * AUTOR: 		omega237										*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * NACHRICHTENKONSTANTEN, DIE DER GOLD-PARSER AN DEN BENUTZER GIBT		*
 #######################################################################*/
interface GPMessageConstants {
	/** A new token is read */
	const gpMsgTokenRead = 201;
	/** A rule is reduced */
	const gpMsgReduction = 202;
	/** Grammar complete */
	const gpMsgAccept = 203;
	/** No grammar is loaded */
	const gpMsgNotLoadedError = 204;
	/** Token not recognized */
	const gpMsgLexicalError = 205;
	/** Token is not expected */
	const gpMsgSyntaxError = 206;
	/** Reached the end of the file - mostly due to being stuck in comment mode */
	const gpMsgCommentError = 207;
	/** Something is wrong, very wrong */
	const gpMsgInternalError = 208;
	/** A token is shifted */
	const gpMsgShift = 209;
	/** A rule is reduced and trimmed */
	const gpMsgReductionTrimmed = 210;
}

?>