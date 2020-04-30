<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE FÜR DIE VERARBEITUNG VON CGT DATEIEN							*
 #######################################################################*/
include_once ('utf8.php');
require_once ('EntryContentConstants.php');

class SimpleDatabase implements EntryContentConstants {
	
	/**
	 * 
	 */
	function __construct() {
		$this->database = null;
		$this->bFileOpen = false;
		$this->fileNumber = 0;
		$this->buff = null;
		$this->buffPtr = 0;
		$this->fileType = "";
		$this->entryReadPosition = 0;
		$this->entryList = array ();
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
	 * retrieve
	 *
	 * This method will retrieve a set of integers that have been
	 * read by the SimpleDatabase file.
	 * @param numParams The number of records to return.
	 * @return The int array holds the integers associated with the
	 *          record.
	 ***************************************************************/
	function retrieve($numParams) {
		$n = 0;
		$returnArr = array ();
		
		while ( $n < $numParams ) {
			$intA = $this->entryList [$this->entryReadPosition];
			array_push ( $returnArr, $intA );
			$this->entryReadPosition ++;
			$n ++;
		}
		
		return $returnArr;
	}
	
	/***************************************************************
	 *
	 * retrieveDone
	 *
	 * This method checks to see if there no many fields or records
	 * to be read.
	 * @return True if there are no many fields to retrieve, false
	 *          if there is.
	 ***************************************************************/
	function retrieveDone() {
		return ! ($this->entryReadPosition < count ( $this->entryList ));
	}
	
	/***************************************************************
	 *
	 * retrieveNext
	 *
	 * This method will retrieve an Object that has been read in
	 * by the SimpleDatabase. It could be a String, Boolean etc.
	 * @return The next field.
	 ***************************************************************/
	function retrieveNext() {
		if (! $this->retrieveDone ()) {
			$returnObj = $this->entryList [$this->entryReadPosition];
			$this->entryReadPosition ++;
			return $returnObj;
		} else {
			return null;
		}
	}
	
	/***************************************************************
	 *
	 * openFile
	 *
	 * This method will open the file for reading.
	 * @param fileName the absolute pathname of the file to read.
	 * @return Will return true if the file was opened, false
	 *          if there was an IOException, or if there was an
	 *          invalid file header.
	 * @throws ParserException Thrown if there is a problem with the stream.
	 ***************************************************************/
	function openFile($fileName) {
		$retBol = false;
		
		if ($this->bFileOpen) {
			$this->fileNumber = 0;
		}
		
		if (file_exists ( $fileName )) {
			$this->bFileOpen = true;
			$s = filesize ( $fileName );
			$this->database = fopen ( $fileName, "rb" );
			if (($this->database === false) || ($s === false)) {
				throw new ParserException ( "CGT Datei konnte nicht geöffnet werden." );
			}
			$this->buff = array ();
			$i = 0;
			while ( $i < $s ) {
				array_push ( $this->buff, fread ( $this->database, 1 ) );
				$i ++;
			}
			$retBol = $this->hasValidHeader ();
			return $retBol;
		} else {
			$this->bFileOpen = false;
			return false;
		}
	}
	
	/***************************************************************
	 *
	 * closeFile
	 *
	 * This method will close the file and set the Buffer to null.
	 * @throws ParserException If there was a problem closing the file.
	 ***************************************************************/
	function closeFile() {
		$this->buff = array ();
		fclose ( $this->database );
	}
	
	// this method is inaccessible. It will check the file header of
	// the file opened, and return true if it agrees with the file
	// type already set up, false if not.
	private function hasValidHeader() {
		$Char1 = - 1;
		$Char2 = - 1;
		$str = "";
		$done = false;
		
		do {
			$Char1 = $this->buff [$this->buffPtr ++];
			$Char2 = $this->buff [$this->buffPtr ++];
			if ((ord ( $Char1 ) == 0) && (ord ( $Char2 ) == 0)) {
				$done = true;
			} else {
				if (ord ( $Char1 ) == 0) {
					$t = $Char2;
					$str .= $t;
				} else {
					$t = $Char1;
					$str .= $t;
				}
			}
		
		} while ( ! $done );
		
		if ($str == $this->fileType) {
			return true;
		} else {
			return false;
		}
	}
	
	/***************************************************************
	 *
	 * setFileType
	 *
	 * This method will identify what file can be read by the
	 * simple database.
	 * @param newFileType The file type to read.
	 ***************************************************************/
	function setFileType($newFileType) {
		$this->fileType = $newFileType;
	}
	
	/***************************************************************
	 *
	 * getFileType
	 *
	 * This method will return what file type this Database instance
	 * can read.
	 * @return The file type.
	 ***************************************************************/
	function getFileType() {
		return $this->fileType;
	}
	
	/***************************************************************
	 *
	 * done
	 *
	 * This method will check to see if we have reached the end of the
	 * file.
	 * @return True if the end of the file has been reached, false if
	 *              not.
	 * @throws ParserException If there was a problem with reading the
	 *              stream.
	 ***************************************************************/
	function done() {
		$done = true;
		if ($this->bFileOpen) {
			$done &= (count ( $this->buff ) - 2) <= $this->buffPtr;
		}
		return $done;
	}
	
	/***************************************************************
	 *
	 * getNextRecord #ver1.1#
	 *
	 * This method will read the file for the next record, and place
	 * each field in the Vector to be retrieved later.
	 * <p>
	 * ver1.1 Found bug where it would always return false.
	 * @return True if there was no problems getting the next record,
	 *              and false if there was.
	 * @throws ParserException If there was some problem with the stream.
	 ***************************************************************/
	function getNextRecord() {
		$found = false;
		$retBol = false;
		
		if ($this->bFileOpen) {
			$t1 = 0;
			while ( ! $found ) {
				$t1 = $this->buff [$this->buffPtr ++];
				if (ord ( $t1 ) != 0) {
					$found = true;
				}
			}
			
			$found = false;
			
			$id = $t1;
			$t1 = 0;
			$this->clear ();
			switch (ord ( $id )) {
				case SimpleDatabase::RecordContentMulti :
					//					$count = next ( $this->buff );
					//					$t1 = next ( $this->buff );
					//$count = (ord ( $t1 ) << 8) + ord ( $count );
					$b1 = $this->buff [$this->buffPtr ++];
					$b2 = $this->buff [$this->buffPtr ++];
					
					$binar = "";
					if ((ord ( $b1 ) < 0) && (ord ( $b2 ) == 0)) {
						$tmpStr = decbin ( ord ( $b1 ) );
						$binar = substr ( strlen ( $tmpStr ) - 8 );
					} else {
						if (ord ( $b1 ) < 0) {
							$tmpStr = decbin ( ord ( $b2 ) );
							$binar = $tmpStr;
							$tmpStr = decbin ( ord ( $b1 ) );
							$binar .= substr ( strlen ( $tmpStr ) - 8 );
						} else {
							if (ord ( $b2 ) == 0) {
								$binar = decbin ( ord ( $b1 ) );
							} else {
								$binar = decbin ( ord ( $b1 ) );
								$len = strlen ( $binar );
								$leadingZeros = 8 - $len;
								for($i = 0; $i < $leadingZeros; $i ++) {
									$binar = "0" . $binar;
								}
								
								$binar = decbin ( ord ( $b2 ) ) . $binar;
							}
						}
					}
					
					$realInt = 0;
					$multiplier = 1;
					
					for($i = strlen ( $binar ) - 1; $i >= 0; $i --) {
						if ($binar [$i] == '1') {
							$realInt += $multiplier;
						}
						$multiplier *= 2;
					}
					$intA = $realInt;
					$count = $intA;
					//					echo $count . nl;
					for($i = 0; $i < $count; $i ++) {
						$this->readEntry ();
					}
					$this->entryReadPosition = 0;
					$retBol = true;
					break;
				
				default :
					$retBol = false;
			}
		} else {
			$retBol = false;
		}
		
		return $retBol;
	}
	
	// this method is inaccesible. It will read a portion of the
	// database file and create a new Object or an integer depending
	// on what the next field is, which is identified by the number of
	// the byte - which itself is given in the EntryContentConstants
	// interface. Please do NOT edit this method! Nasty things will
	// happen.
	function readEntry() {
		$t1 = 0;
		$t2 = 0;
		$found = false;
		
		while ( ! $found ) {
			$t1 = $this->buff [$this->buffPtr ++];
			if (ord ( $t1 ) != 0) {
				$found = true;
			}
		}
		
		switch (ord ( $t1 )) {
			case SimpleDatabase::entryContentEmpty :
				$empty = ( object ) "";
				array_push ( $this->entryList, $empty );
				break;
			
			case SimpleDatabase::entryContentInteger :
				$b1 = $this->buff [$this->buffPtr ++];
				$b2 = $this->buff [$this->buffPtr ++];
				
				$binar = "";
				if ((ord ( $b1 ) < 0) && (ord ( $b2 ) == 0)) {
					$tmpStr = decbin ( ord ( $b1 ) );
					$binar = substr ( strlen ( $tmpStr ) - 8 );
				} else {
					if (ord ( $b1 ) < 0) {
						$tmpStr = decbin ( ord ( $b2 ) );
						$binar = $tmpStr;
						$tmpStr = decbin ( ord ( $b1 ) );
						$binar .= substr ( strlen ( $tmpStr ) - 8 );
					} else {
						if (ord ( $b2 ) == 0) {
							$binar = decbin ( ord ( $b1 ) );
						} else {
							$binar = decbin ( ord ( $b1 ) );
							$len = strlen ( $binar );
							$leadingZeros = 8 - $len;
							for($i = 0; $i < $leadingZeros; $i ++) {
								$binar = "0" . $binar;
							}
							
							$binar = decbin ( ord ( $b2 ) ) . $binar;
						}
					}
				}
				
				$realInt = 0;
				$multiplier = 1;
				
				for($i = strlen ( $binar ) - 1; $i >= 0; $i --) {
					if ($binar [$i] == '1') {
						$realInt += $multiplier;
					}
					$multiplier *= 2;
				}
				$intA = $realInt;
				//				echo $intA . nl;
				array_push ( $this->entryList, $realInt );
				break;
			
			case SimpleDatabase::entryContentString :
				$done = false;
				$str = "";
				
				do {
					$c1 = $this->buff [$this->buffPtr ++];
					$c2 = $this->buff [$this->buffPtr ++];
					if (ord ( $c1 ) == 0 && ord ( $c2 ) == 0) {
						$done = true;
					} else {
						if (ord ( $c2 ) == 0) {
							$ch = $c1;
							$str .= $ch;
						} else {
							$arr = array ($c1, $c2 );
							$str .= unicodeToUtf8 ( $arr );
						}
					}
				} while ( ! $done );
				//				echo $str . nl;
				array_push ( $this->entryList, $str );
				break;
			
			case SimpleDatabase::entryContentBoolean :
				$bool = $this->buff [$this->buffPtr ++];
				if (ord ( $bool ) == 1) {
					$bool = true;
				} else {
					$bool = false;
				}
				array_push ( $this->entryList, $bool );
				break;
			
			case SimpleDatabase::entryContentByte :
				$byte1 = $this->buff [$this->buffPtr ++];
				$intA = $byte1;
				array_push ( $this->entryList, $intA );
				break;
		}
	}
	
	/***************************************************************
	 *
	 * clear
	 *
	 * This method will reset all the currently read fields.
	 ***************************************************************/
	function clear() {
		$this->entryReadPosition = 0;
		$this->entryList = array ();
	}
	
	private $database; // 
	private $bFileOpen; // Boolean
	private $fileNumber; // Integer
	private $buff; // Array
	private $buffPtr; // Integer
	private $fileType; // String
	const RecordContentMulti = 77;
	
	private $entryReadPosition;
	private $entryList; // Array
}

?>