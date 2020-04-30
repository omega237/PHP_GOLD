var syntaxGeprueft = false;

function zeigeErgebnis(dok) {
	if (dok.getElementsByTagName("fehler")[0].text == "kein Fehler") {
		syntaxGeprueft = true;
		document.forms[0].submit();
		return true;
	} else {
		var text = "";
		var m = dok.getElementsByTagName("meldungen")[0];
		for ( var i = 0; i < m.childNodes.length; i++) {
			var k = m.childNodes[i];
			var z = 0, s = 0;
			switch (k.baseName) {
			case "syntaxfehler":
				text += "Syntaxfehler in Zeile " + k.getElementsByTagName("zeile")[0].text + ", Spalte " + k.getElementsByTagName("spalte")[0].text + "\n"; 
				break;
			case "lexikfehler":
				text += "lexikalischer Fehler in Zeile " + k.getElementsByTagName("zeile")[0].text + ", Spalte " + k.getElementsByTagName("spalte")[0].text + "\n";
				break;
			}
		}
		text += "Bitte korrigieren Sie diese Fehler.";
		alert(text);
		return false;
	}
}

function plausi(e) {
	var ausdruck = document.getElementById("Ausdruck");
	if (ausdruck.innerHTML == "") {
		alert("Es wurde kein Ausdruck eingegeben");
		e.returnValue = syntaxGeprueft;
	}
	if (!syntaxGeprueft) {
		$.post("test.php", {
			Ausdruck : ausdruck.innerHTML,
			syntax : "1"
		}, zeigeErgebnis, "xml");
		e.returnValue = syntaxGeprueft;
	} else {
		e.returnValue = syntaxGerpueft;
	}
}