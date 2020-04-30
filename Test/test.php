<?php
require_once ('../Fassade/PlausiFassade.php');

$plausi = new PlausiFassade ( );

define ( "nl", chr ( 13 ) . chr ( 10 ) );

header ( "Cache-Control: no-cache, must-revalidate" ); // HTTP/1.1
header ( "Expires: Sat, 26 Jul 1997 05:00:00 GMT" ); // Datum in der Vergangenheit
header ( "Content-Type: text/xml" );

$fehler = $plausi->pruefeSyntax ( stripslashes ( $_POST ["Ausdruck"] ) . nl );
if (isset ( $_POST ["syntax"] )) {
	echo '<?xml version="1.0" encoding="UTF-8"?>' . nl;
	echo '<syntaxpruefung>' . nl;
	echo '<fehler>' . nl;
	if ($fehler) {
		echo "kein Fehler";
	} else {
		echo $plausi->anzahlSyntaxFehler () + $plausi->anzahlLexikalischeFehler ();
	}
	echo "</fehler>" . nl;
	if (! $fehler) {
		echo "<meldungen>" . nl;
		for($i = 0; $i < $plausi->anzahlSyntaxFehler (); $i ++) {
			echo '<syntaxfehler>' . nl;
			echo $plausi->holeFehlermeldung ( $i, "s" );
			echo '</syntaxfehler>' . nl;
		}
		for($i = 0; $i < $plausi->anzahlLexikalischeFehler (); $i ++) {
			echo '<lexikfehler>' . nl;
			echo $plausi->holeFehlermeldung ( $i, "l" );
			echo '</lexikfehler>' . nl;
		}
		echo "</meldungen>" . nl;
	}
	echo '</syntaxpruefung>' . nl;
	return;
}
if ($fehler && ! isset ( $_POST ["syntax"] )) {
	$variablen = explode ( ';', stripslashes($_POST ["Variablen"]) );
	foreach ( $variablen as $v ) {
		$var = explode ( '=', $v );
		$plausi->setzeVariable ( $var [0], $var [1] );
	}
}

echo '<ergebnis>' . nl;
$erg = $plausi->ausfuehren ();
/*echo "<plausi>";
echo $_POST ["Ausdruck"];
echo "</plausi>";*/
echo "<fehleranzahl>" . nl;
echo $plausi->anzahlAusfuehrungsFehler ();
echo "</fehleranzahl>" . nl;
if ($plausi->anzahlAusfuehrungsFehler () == 0) {
	echo "<rueckgabe>";
	if (is_bool ( $erg )) {
		echo "<bool>";
		echo $erg ? "Wahr" : "Falsch";
		echo "</bool>";
	} else {
		echo "<wert>";
		echo $erg;
		echo "</wert>";
	}
	echo "</rueckgabe>";
} else {
	echo "<fehlermeldungen>" . nl;
	for($i = 0; $i < $plausi->anzahlAusfuehrungsFehler (); $i ++) {
		echo "<ausfuehrungsfehler>" . nl;
		echo $plausi->holeFehlermeldung ( $i, "i" );
		echo "</ausfuehrungsfehler>" . nl;
	}
	echo "</fehlermeldungen>" . nl;
}
echo '</ergebnis>';
?>