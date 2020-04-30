<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KONSTANTEN FÜR DIE AUSZEICHNUNG VON SYMBOLEN							*
 #######################################################################*/
interface SymbolTypeConstants {
	/** Normal nonterminal */
	const symbolTypeNonterminal = 0;
	/** Normal terminal */
	const symbolTypeTerminal = 1;
	/** Type of terminal */
	const symbolTypeWhitespace = 2;
	/** End character (EOF) */
	const symbolTypeEnd = 3;
	/** Comment start */
	const symbolTypeCommentStart = 4;
	/** Comment end */
	const symbolTypeCommentEnd = 5;
	/** Comment line */
	const symbolTypeCommentLine = 6;
	/** Error symbol */
	const symbolTypeError = 7;
}

?>