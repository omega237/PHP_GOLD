<?php
define ( "nl", chr ( 13 ) . chr ( 10 ) );

require_once("../Tabellen/PHP - Tables.php");
require_once("../Konstanten/PHP - Constants.php");
require_once("../Fassade/PlausiSchnitt.php");

$schnitt = new PlausiSchnitt();

$parser = new GOLDParser ( );
if (! $parser->loadTablesFromSkeleton ( $symbolTable, $ruleTable, $charSets, $dfaTable, $lalrTable, $caseSensitive, $startSymbol, $name, $about, $author, $version )) {
	return false;
} else {
	$baum = $schnitt->pruefeSyntax("function a() { printf( 'abcdefg' ); }", $parser);
	var_dump($baum);
}



/*

$v = $plausi->pruefeSyntax(file_get_contents("../dok/demo.txt") . nl);

$a = preg_replace("/bla.* /", "blubb", "adjkfjaksjfkldjablakdjfklsa");

echo $a;

echo preg_match("/bla.* /", "adjkfjaksjfkldjablakdjfklsa") ? "ja" : "nein";

$plausi->ausfuehren();

*/