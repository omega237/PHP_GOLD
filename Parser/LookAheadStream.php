<?php
/*######################################################################*
 * AUTOR: 		omega237											*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE; DIE EIN ZEICHEN WIEDER ZURÜCK IN DEN EINGABESTROM LEGT		*
 #######################################################################*/
class LookAheadStream {
	
	/**
	 * 
	 */
	function __construct() {
		$this->multiplier = 2;
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
	 * openFile
	 *
	 * This method will open the source file to read.
	 * @param <parameter name> <parameter description>
	 * @return True if the file was opened. It will not return false,
	 *          as an exception should be thrown beforehand.
	 * @throws ParserException If the PushbackReader was not initialised.
	 ***************************************************************/
	function openFile($file) {
		if (! file_exists ( $file )) {
			throw new ParserException ( "Die Quelldatei konnte nicht geöffnet werden" );
		}
		$this->buffR = array ();
		$this->unreadme = array ();
		$s = filesize ( $file );
		$this->file = fopen ( $file, "rb" );
		if ($this->file === FALSE || $s === FALSE) {
			return false;
		}
		$c = 0;
		while ( $c < $s ) {
			array_push ( $this->buffR, fread ( $this->file, 1 ) );
			$c ++;
		}
	}
	
	/***************************************************************
	 *
	 * closeFile
	 *
	 * This method will close the source file.
	 * @return True if the file was closed. It will not return false,
	 *          as an exception should be thrown beforehand.
	 * @throws ParserException if the file could not be closed.
	 ***************************************************************/
	function closeFile() {
		$this->buffR = array ();
		$this->unreadme = array ();
		if (! $this->file == NULL) {
			fclose ( $this->file );
		}
	}
	
	// this method is not accessible. It doubles the size of the
	// available array acting as a character buffer, copying the
	// contents of the old buffer to the new one.
	private function doubleArray() {
	}
	
	// this method is not accessible. It will get rid of read
	// characters which are not needed anymore.
	private function unreadChars($size) {
		for($i = 0; $i < $size; $i ++) {
			array_shift ( $this->unreadme );
		}
	}
	
	/***************************************************************
	 *
	 * done
	 *
	 * This method checks the next character to see if it is the end
	 * of the file. If it is not, it will use the functionality of the
	 * PushbackReader to push the read character back onto the stream.
	 * @return True if it is the end of file next, false if not.
	 * @throws ParserException if the stream could not be read.
	 ***************************************************************/
	function done() {
		return (count ( $this->buffR ) == 0);
	}
	
	/***************************************************************
	 *
	 * nextCharNotWhitespace
	 *
	 * A quick checker method which checks to see if the next
	 * character is whitespace.
	 * @return True if it is not whitespace, false if it is.
	 * @throws ParserException if the stream could not be read.
	 ***************************************************************/
	function nextCharNotWhiteSpace() {
		$retBool = true;
		
		reset ( $this->buffR );
		$pushR = current ( $this->buffR );
		
		if (preg_match ( "/\\s/i", $pushR )) {
			$retBool = false;
		} else {
			$retBool = true;
		}
		
		return $retBool;
	}
	
	/***************************************************************
	 *
	 * nextChar
	 *
	 * This method will read one character (int) from the stream.
	 * @return It will return the character as a String, unless
	 *          it is the end of string, where it will return the
	 *          character represented by the int "2".
	 * @throws ParserException if the stream could not be read.
	 ***************************************************************/
	function nextChar() {
		$returnStr = "";
		
		if (! $this->done ()) {
			array_push ( $this->unreadme, array_shift ( $this->buffR ) );
			end ( $this->unreadme );
			$returnStr = "" . current ( $this->unreadme );
			reset ( $this->unreadme );
		} else {
			$EOF = chr ( 2 );
			array_push ( $this->unreadme, null );
			$returnStr = "" . $EOF;
		}
		
		return $returnStr;
	}
	
	/***************************************************************
	 *
	 * read
	 *
	 * This method will return a String of length <code>size</code>.
	 * The String is contained in the buffer of read characters.
	 * @param size The number of characters to read from the buffer.
	 * @return The String created from the buffer.
	 * @throws ParserException if the stream could not be read.
	 ***************************************************************/
	function read($size) {
		$text = "";
		reset ( $this->buffR );
		reset ( $this->unreadme );
		array_unshift ( $this->buffR, array_pop ( $this->unreadme ) );
		if (current ( $this->buffR ) == NULL) {
			array_shift ( $this->buffR );
		}
		for($i = 0; $i < $size; $i ++) {
			$useBuf = current ( $this->unreadme );
			$text .= $useBuf;
			next ( $this->unreadme );
		}
		reset ( $this->unreadme );
		
		$this->unreadChars ( $size );
		
		return $text;
	}
	
	/***************************************************************
	 *
	 * readLine #ver1.1#
	 *
	 * This method will read characters from the buffer until a line
	 * feed or carriage return is found. This means characters should
	 * be read using <code>nextChar</code> first to place them on the
	 * buffer. This method had a bug where the end of the line could not
	 * be found.
	 * @return The String of characters in the buffer.
	 * @throws ParserException if the stream could not be read.
	 ***************************************************************/
	function readLine() {
		$charSpace = 0;
		$cr = 0;
		$endReached = false;
		$crPresent = false;
		$text = "";
		$ch = "";
		
		while ( $endReached && ! $this->done () ) {
			$ch = $this->nextChar ();
			$charSpace ++;
			
			if (($ch == '\f') || ($ch == '\r')) {
				$ch = $this->nextChar ();
				if (($ch == '\f') || ($ch == '\r')) {
					$crPresent = true;
					$charSpace ++;
				}
				$endReached = true;
			} else if ($ch == '\n') {
				$endReached = true;
			} else {
				$text .= $ch;
			}
		}
		$this->unreadChars ( $charSpace );
		
		return $text;
	}
	
	/***************************************************************
	 * 
	 * contentFromString
	 * 
	 * Initialisiert den Strom mit dem Text $content
	 * @param unknown_type $content der Text, der aus dem Strom gelesen werden soll
	 ***************************************************************/
	function contentFromString($content) {
		$this->buffR = str_split ( $content );
		$this->unreadme = array ();
	}
	
	private $file;
	private $buffR;
	private $unreadme;
	const kMaxBufferSize = 1024;
	private $multiplier;
}

?>