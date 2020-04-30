<?php
/*######################################################################*
 * AUTOR: 		omega237											*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE ZUR REPRÄSENTATION EINES ZUSTANDES IN EINEM DFA				*
 #######################################################################*/
require_once ('FAEdge.php');

class FAState {
	
	/**
	 * 
	 */
	function __construct() {
		$this->edges = array ();
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - Insert your code here
	}
	
	/***************************************************************
	 *
	 * addEdge
	 *
	 * This method will add an edge to the FAState. It will create a
	 * new edge if there are no chars (the lambda edge), otherwise
	 * it will find the index from the target passed in, and create
	 * a new edge with the target index of the target passed in, and
	 * the characters passed in.<br>
	 * If the target is not found, it will produce an error.
	 * @param chars The set of characters associated with the edge to
	 *              be created.
	 * @param target The target index in this state.
	 ***************************************************************/
	function addEdge($chars, $target) {
		if ($chars == "") {
			$edge = new FAEdge ( );
			$edge->setChars ( "" );
			$edge->setTargetIndex ( $target );
			array_push ( $this->edges, $edge );
		} else {
			$index = - 1;
			$n = 0;
			
			while ( ($n < count ( $this->edges )) && ($index == - 1) ) {
				$tmpE = $this->edges [$n];
				if ($tmpE->getTargetIndex () == $target) {
					$index = $n;
				}
				$n ++;
			}
			
			if ($index == - 1) {
				$edge = new FAEdge ( );
				$edge->setChars ( $chars );
				$edge->setTargetIndex ( $target );
				array_push ( $this->edges, $edge );
			} else {
				$tmpEE = $this->edges [$index];
				$tmpEE->setChars ( $tmpEE->getChars () + $chars );
			}
		}
	
	}
	
	/***************************************************************
	 *
	 * edge
	 *
	 * This method will return the edge at the specified index for
	 * this state.
	 * @param index The index of the edge that will be returned.
	 * @return The FAEdge at the specified index.
	 ***************************************************************/
	function edge($index) {
		if (($index >= 0) && ($index < count ( $this->edges ))) {
			return $this->edges [$index];
		}
		return null;
	}
	
	/***************************************************************
	 *
	 * edgeCount
	 *
	 * The number of edges in this FAState.
	 * @return The number of edges in this FAState.
	 ***************************************************************/
	function edgeCount() {
		return count ( $this->edges );
	}
	
	private $edges; // Array
	public $acceptSymbol; // Integer
}

?>