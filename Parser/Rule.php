<?php
/*######################################################################*
 * AUTOR: 		omega237												*
 * VERSION: 	1.0														*
 * ERSTELLT: 	01.11.2009												*
 * BUGS: 																*
 * KEINE BEKANNTEN														*
 * FUNKTION: 															*
 * KLASSE FÜR DIE REPRÄSENTATION VON REGELN IN EINER GOLD GRAMMATIK		*
 #######################################################################*/
require_once ('SymbolTypeConstants.php');

class Rule implements SymbolTypeConstants {
	
	/***************************************************************
	 *
	 * Rule
	 *
	 * Constructor: This constructor initialises this rule and creates
	 * a new SymbolList and the table index.
	 ***************************************************************/
	function __construct() {
		$this->pRuleSymbols = new SymbolList ( );
		$this->pTableIndex = - 1;
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
	 * getTableIndex
	 *
	 * Will return what index the table index in this Rule is at.
	 * @return The table index.
	 ***************************************************************/
	function getTableIndex() {
		return $this->pTableIndex;
	}
	
	/***************************************************************
	 *
	 * getSymbolCount
	 *
	 * Will return how many symbols are contained in this Rule.
	 * @return The number of symbols.
	 ***************************************************************/
	function getSymbolCount() {
		return $this->pRuleSymbols->count ();
	}
	
	/***************************************************************
	 *
	 * getRuleNonTerminal
	 *
	 * Will return the Non-Terminal Symbol associated with this Rule.
	 * @return The Non-Terminal of this Rule.
	 ***************************************************************/
	function getRuleNonTerminal() {
		return $this->pRuleNonterminal;
	}
	
	/***************************************************************
	 *
	 * setTableIndex
	 *
	 * Will set the current table index to that passed in.
	 * @param index The table index wanted.
	 ***************************************************************/
	function setTableIndex($index) {
		$this->pTableIndex = $index;
	}
	
	/***************************************************************
	 *
	 * setRuleNonTerminal
	 *
	 * Will setup the Non-Terminal symbol to that passed in.
	 * @param nonTerminal The Non-Terminal Symbol.
	 ***************************************************************/
	function setRuleNonTerminal($nonTerminal) {
		$this->pRuleNonterminal = $nonTerminal;
	}
	
	/***************************************************************
	 *
	 * name
	 *
	 * Will return a String consisting of the Rules name. This
	 * is in the format <code>"< 'name of non-terminal' >"</code>.
	 * @return The String representing this Rule,
	 ***************************************************************/
	function getSymbols($index) {
		if (($index >= 0) && ($index < $this->pRuleSymbols->count ())) {
			return $this->pRuleSymbols->getMember ( $index );
		}
		return null;
	}
	
	/***************************************************************
	 *
	 * definition
	 *
	 * This method will return the right hand side of
	 * the rule, It does this by concatenating all the Symbols in the Symbol list.
	 * @return The String representing the definition of this Rule.
	 ***************************************************************/
	function name() {
		return "<" . $this->pRuleNonterminal->getName () . ">";
	}
	
	/***************************************************************
	 *
	 * addItem
	 *
	 * This method will add a symbol to the Symbol list.
	 * @param item The Symbol to add.
	 ***************************************************************/
	function definition() {
		$str = "";
		
		for($i = 0; $i < $this->pRuleSymbols->count (); $i ++) {
			$str .= $this->pRuleSymbols->getMember ( $i )->getText () . " ";
		}
		
		return trim ( $str );
	}
	
	/***************************************************************
	 *
	 * getText
	 *
	 * This method uses the method name() and definiton() to create
	 * a String representing the entirety of this Rule.
	 * @return The entire Rule in readable format.
	 ***************************************************************/
	function addItem($item) {
		$this->pRuleSymbols->add ( $item );
	}
	
	/***************************************************************
	 *
	 * getText
	 *
	 * This method uses the method name() and definiton() to create
	 * a String representing the entirety of this Rule.
	 * @return The entire Rule in readable format.
	 ***************************************************************/
	function getText() {
		return $this->name () . " ::= " . $this->definition ();
	}
	
	/***************************************************************
	 *
	 * containsOneNonTerminal #ver1.1#
	 *
	 * This method will check to see if the rule contains a non terminal.
	 * @return True if it does contain one non terminal, false if not.
	 ***************************************************************/
	function containsOneNonTerminal() {
		if ($this->pRuleSymbols->count () == 1) {
			if ($this->pRuleSymbols->getMember ( 0 )->getKind () == Rule::symbolTypeNonterminal) {
				return true;
			}
		}
		return false;
	}
	
	/***************************************************************
	 *
	 * isEqual #ver1.1#
	 *
	 * This method will check equality of two Rules - this and the one passed in.
	 * @param secondRule The rule to check against this one.
	 * @return True if it is equal, false if not.
	 ***************************************************************/
	function isEqual($secondRule) {
		$equal = false;
		$n = 0;
		
		if (($this->pRuleSymbols->count () == $secondRule->getSymbolCount ()) && ($this->pRuleNonterminal->isEqual ( $secondRule->getRuleNonterminal() ))) {
			$equal = true;
			while ( $equal && ($n < $this->pRuleSymbols->count ()) ) {
				$equal = $this->pRuleSymbols->getMember ( $n )->isEqual ( $secondRule->getSymbols ( $n ) );
			}
		}
		
		return $equal;
	}
	
	private $pRuleNonterminal; // Symbol
	private $pRuleSymbols; // SymbolList
	private $pTableIndex; // Integer
}

?>