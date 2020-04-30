<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KONSTANTEN FÜR DIE NACHRICHTEN, DIE DER PARSER GIBT					*
 #######################################################################*/
interface ParseResultConstants {
	const parseResultAccept = 301;
	const parseResultShift = 302;
	const parseResultReduceNormal = 303;
	const parseResultReduceEliminated = 304;
	const parseResultSyntaxError = 305;
	const parseResultInternalError = 306;
}

?>