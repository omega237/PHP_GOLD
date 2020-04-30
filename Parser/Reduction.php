<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE FÜR DIE REPRÄSENTATION EINER VON EINEM PARSER VORGENOMMENEN	+
 * REDUKTION															*
 #######################################################################*/
class Reduction {
	
	/**
	 * 
	 */
	function __construct() {
		$this->pTokens = array ();
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
	 * setTokenCount
	 *
	 * This method implicitly sets the number of tokens in this
	 * Reduction. If the value is 0 or less, then we clear the tokens
	 * in this reduction and set the number of tokens to 0.
	 * @param value The number of tokens in this reduction.
	 ***************************************************************/
	function setTokenCount($value) {
		if ($value < 1) {
			$this->pTokens = array ();
			$this->pTokenCount = 0;
		} else {
			$this->pTokenCount = $value;
			for($i = 0; $i < $value; $i ++) {
				array_push ( $this->pTokens, (object) "" );
			}
		}
	}
	
	/***************************************************************
	 *
	 * getTokenCount
	 *
	 * This method returns the number of tokens.
	 * @return The number of tokens
	 ***************************************************************/
	function getTokenCount() {
		return $this->pTokenCount;
	}
	
	/***************************************************************
	 *
	 * getParentRule
	 *
	 * This method returns the rule associated with this Reduction.
	 * @return The rule associated with this Reduction.
	 ***************************************************************/
	function getParentRule() {
		return $this->pParentRule;
	}
	
	/***************************************************************
	 *
	 * getTag
	 *
	 * Will return the tag associated with this Reduction.
	 * @return The tag associated with this Reduction.
	 ***************************************************************/
	function getTag() {
		return $this->pTag;
	}
	
	/***************************************************************
	 *
	 * setParentRule
	 *
	 * Will set the Rule of this Reduction to the one passed in.
	 * @param newRule The parent Rule of this Reduction.
	 ***************************************************************/
	function setParentRule($newRule) {
		$this->pParentRule = $newRule;
	}
	
	/***************************************************************
	 *
	 * setTag
	 *
	 * Will set the tag of this Reduction to that passed in.
	 * @param value The value of the tag.
	 ***************************************************************/
	function setTag($value) {
		$this->pTag = $value;
	}
	
	/***************************************************************
	 *
	 * getToken
	 *
	 * Will retrieve a Token at the specified index. The index
	 * specified must be equal or greater than 0 and less than
	 * the current number of Tokens.
	 * @param index The index of the token in this Reduction.
	 * @return The Token at the specified index.
	 ***************************************************************/
	function getToken($index) {
		if (($index >= 0) && ($index < $this->pTokenCount)) {
			return $this->pTokens [$index];
		} else {
			return null;
		}
	}
	
	/***************************************************************
	 *
	 * setToken
	 *
	 * Will place a Token at the specified index. It will only do this
	 * if the index is greater or equal to 0, and less than the
	 * token count.
	 * @param index The index to place the token at.
	 * @param value The token to set at the index.
	 ***************************************************************/
	function setToken($index, $value) {
		if (($index >= 0) && ($index < $this->pTokenCount)) {
			$this->pTokens [$index] = $value;
		}
	}
	
	private $pTokens;
	private $pTokenCount; // Integer
	private $parentRule; // Rule
	private $pTag; // Integer
}

?>