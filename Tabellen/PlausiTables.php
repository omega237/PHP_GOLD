<?php
/***************************************************************
* Diese Datei wurde automatisch generiert, nicht modifizieren  *
***************************************************************/
include_once("../Konstanten/PlausiConstants.php");
$caseSensitive = False;
$startSymbol = 35;
$author = "omega237";
$about = "Einfache arithmetische und relationale Ausdruecke";
$version = "1.0";
$name = "IO";
$symbolTable = array(
	Symbol_Eof => array(
		"Name" => "EOF",
		"Kind" => 3,
		"Index" => 0
		) ,
	Symbol_Error => array(
		"Name" => "Error",
		"Kind" => 7,
		"Index" => 1
		) ,
	Symbol_Whitespace => array(
		"Name" => "Whitespace",
		"Kind" => 2,
		"Index" => 2
		) ,
	Symbol_Minus => array(
		"Name" => "-",
		"Kind" => 1,
		"Index" => 3
		) ,
	Symbol_Percentgt => array(
		"Name" => "%>",
		"Kind" => 1,
		"Index" => 4
		) ,
	Symbol_Lparan => array(
		"Name" => "(",
		"Kind" => 1,
		"Index" => 5
		) ,
	Symbol_Rparan => array(
		"Name" => ")",
		"Kind" => 1,
		"Index" => 6
		) ,
	Symbol_Times => array(
		"Name" => "*",
		"Kind" => 1,
		"Index" => 7
		) ,
	Symbol_Div => array(
		"Name" => "/",
		"Kind" => 1,
		"Index" => 8
		) ,
	Symbol_Colon => array(
		"Name" => ":",
		"Kind" => 1,
		"Index" => 9
		) ,
	Symbol_Coloneq => array(
		"Name" => ":=",
		"Kind" => 1,
		"Index" => 10
		) ,
	Symbol_Plus => array(
		"Name" => "+",
		"Kind" => 1,
		"Index" => 11
		) ,
	Symbol_Lt => array(
		"Name" => "<",
		"Kind" => 1,
		"Index" => 12
		) ,
	Symbol_Ltpercent => array(
		"Name" => "<%",
		"Kind" => 1,
		"Index" => 13
		) ,
	Symbol_Lteq => array(
		"Name" => "<=",
		"Kind" => 1,
		"Index" => 14
		) ,
	Symbol_Ltgt => array(
		"Name" => "<>",
		"Kind" => 1,
		"Index" => 15
		) ,
	Symbol_Eqeq => array(
		"Name" => "==",
		"Kind" => 1,
		"Index" => 16
		) ,
	Symbol_Gt => array(
		"Name" => ">",
		"Kind" => 1,
		"Index" => 17
		) ,
	Symbol_Gteq => array(
		"Name" => ">=",
		"Kind" => 1,
		"Index" => 18
		) ,
	Symbol_Identifier => array(
		"Name" => "Identifier",
		"Kind" => 1,
		"Index" => 19
		) ,
	Symbol_Integer => array(
		"Name" => "Integer",
		"Kind" => 1,
		"Index" => 20
		) ,
	Symbol_Newline => array(
		"Name" => "NewLine",
		"Kind" => 1,
		"Index" => 21
		) ,
	Symbol_Nicht => array(
		"Name" => "Nicht",
		"Kind" => 1,
		"Index" => 22
		) ,
	Symbol_Oder => array(
		"Name" => "Oder",
		"Kind" => 1,
		"Index" => 23
		) ,
	Symbol_Stringliteral => array(
		"Name" => "StringLiteral",
		"Kind" => 1,
		"Index" => 24
		) ,
	Symbol_Und => array(
		"Name" => "Und",
		"Kind" => 1,
		"Index" => 25
		) ,
	Symbol_Addexp => array(
		"Name" => "Add Exp",
		"Kind" => 0,
		"Index" => 26
		) ,
	Symbol_Expression => array(
		"Name" => "Expression",
		"Kind" => 0,
		"Index" => 27
		) ,
	Symbol_Fehlerbehandlung => array(
		"Name" => "Fehlerbehandlung",
		"Kind" => 0,
		"Index" => 28
		) ,
	Symbol_Konjunktion => array(
		"Name" => "Konjunktion",
		"Kind" => 0,
		"Index" => 29
		) ,
	Symbol_Multexp => array(
		"Name" => "Mult Exp",
		"Kind" => 0,
		"Index" => 30
		) ,
	Symbol_Negateexp => array(
		"Name" => "Negate Exp",
		"Kind" => 0,
		"Index" => 31
		) ,
	Symbol_Nl => array(
		"Name" => "nl",
		"Kind" => 0,
		"Index" => 32
		) ,
	Symbol_Nlopt => array(
		"Name" => "nl Opt",
		"Kind" => 0,
		"Index" => 33
		) ,
	Symbol_Program => array(
		"Name" => "Program",
		"Kind" => 0,
		"Index" => 34
		) ,
	Symbol_Start => array(
		"Name" => "Start",
		"Kind" => 0,
		"Index" => 35
		) ,
	Symbol_Value => array(
		"Name" => "Value",
		"Kind" => 0,
		"Index" => 36
		) ,
	Symbol_Zuweisung => array(
		"Name" => "Zuweisung",
		"Kind" => 0,
		"Index" => 37
		)  
);
$ruleTable = array(
	Rule_Nl_Newline => array(
		"Index" => 0,
		"Description" => "<nl> ::= NewLine <nl>",
		"NonTerminalIndex" => 32,
		"Symbols" => array(
			21 ,
			32 
		)
	) ,
	Rule_Nl_Newline2 => array(
		"Index" => 1,
		"Description" => "<nl> ::= NewLine",
		"NonTerminalIndex" => 32,
		"Symbols" => array(
			21 
		)
	) ,
	Rule_Nlopt_Newline => array(
		"Index" => 2,
		"Description" => "<nl Opt> ::= NewLine <nl Opt>",
		"NonTerminalIndex" => 33,
		"Symbols" => array(
			21 ,
			33 
		)
	) ,
	Rule_Nlopt => array(
		"Index" => 3,
		"Description" => "<nl Opt> ::= ",
		"NonTerminalIndex" => 33,
		"Symbols" => array(
		)
	) ,
	Rule_Start => array(
		"Index" => 4,
		"Description" => "<Start> ::= <nl Opt> <Program>",
		"NonTerminalIndex" => 35,
		"Symbols" => array(
			33 ,
			34 
		)
	) ,
	Rule_Program => array(
		"Index" => 5,
		"Description" => "<Program> ::= <Konjunktion> <Fehlerbehandlung> <nl>",
		"NonTerminalIndex" => 34,
		"Symbols" => array(
			29 ,
			28 ,
			32 
		)
	) ,
	Rule_Program2 => array(
		"Index" => 6,
		"Description" => "<Program> ::= <Konjunktion> <Fehlerbehandlung> <nl> <Program>",
		"NonTerminalIndex" => 34,
		"Symbols" => array(
			29 ,
			28 ,
			32 ,
			34 
		)
	) ,
	Rule_Program3 => array(
		"Index" => 7,
		"Description" => "<Program> ::= <Zuweisung> <nl>",
		"NonTerminalIndex" => 34,
		"Symbols" => array(
			37 ,
			32 
		)
	) ,
	Rule_Program4 => array(
		"Index" => 8,
		"Description" => "<Program> ::= <Zuweisung> <nl> <Program>",
		"NonTerminalIndex" => 34,
		"Symbols" => array(
			37 ,
			32 ,
			34 
		)
	) ,
	Rule_Zuweisung_Coloneq => array(
		"Index" => 9,
		"Description" => "<Zuweisung> ::= <Value> ':=' <Konjunktion>",
		"NonTerminalIndex" => 37,
		"Symbols" => array(
			36 ,
			10 ,
			29 
		)
	) ,
	Rule_Fehlerbehandlung_Colon_Stringliteral => array(
		"Index" => 10,
		"Description" => "<Fehlerbehandlung> ::= ':' StringLiteral",
		"NonTerminalIndex" => 28,
		"Symbols" => array(
			9 ,
			24 
		)
	) ,
	Rule_Fehlerbehandlung => array(
		"Index" => 11,
		"Description" => "<Fehlerbehandlung> ::= ",
		"NonTerminalIndex" => 28,
		"Symbols" => array(
		)
	) ,
	Rule_Konjunktion_Und => array(
		"Index" => 12,
		"Description" => "<Konjunktion> ::= <Konjunktion> Und <Expression>",
		"NonTerminalIndex" => 29,
		"Symbols" => array(
			29 ,
			25 ,
			27 
		)
	) ,
	Rule_Konjunktion_Oder => array(
		"Index" => 13,
		"Description" => "<Konjunktion> ::= <Konjunktion> Oder <Expression>",
		"NonTerminalIndex" => 29,
		"Symbols" => array(
			29 ,
			23 ,
			27 
		)
	) ,
	Rule_Konjunktion => array(
		"Index" => 14,
		"Description" => "<Konjunktion> ::= <Expression>",
		"NonTerminalIndex" => 29,
		"Symbols" => array(
			27 
		)
	) ,
	Rule_Expression_Gt => array(
		"Index" => 15,
		"Description" => "<Expression> ::= <Expression> '>' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			17 ,
			26 
		)
	) ,
	Rule_Expression_Lt => array(
		"Index" => 16,
		"Description" => "<Expression> ::= <Expression> '<' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			12 ,
			26 
		)
	) ,
	Rule_Expression_Lteq => array(
		"Index" => 17,
		"Description" => "<Expression> ::= <Expression> '<=' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			14 ,
			26 
		)
	) ,
	Rule_Expression_Gteq => array(
		"Index" => 18,
		"Description" => "<Expression> ::= <Expression> '>=' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			18 ,
			26 
		)
	) ,
	Rule_Expression_Eqeq => array(
		"Index" => 19,
		"Description" => "<Expression> ::= <Expression> '==' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			16 ,
			26 
		)
	) ,
	Rule_Expression_Ltgt => array(
		"Index" => 20,
		"Description" => "<Expression> ::= <Expression> '<>' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			15 ,
			26 
		)
	) ,
	Rule_Expression_Percentgt => array(
		"Index" => 21,
		"Description" => "<Expression> ::= <Expression> '%>' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			4 ,
			26 
		)
	) ,
	Rule_Expression_Ltpercent => array(
		"Index" => 22,
		"Description" => "<Expression> ::= <Expression> '<%' <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			27 ,
			13 ,
			26 
		)
	) ,
	Rule_Expression => array(
		"Index" => 23,
		"Description" => "<Expression> ::= <Add Exp>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			26 
		)
	) ,
	Rule_Addexp_Plus => array(
		"Index" => 24,
		"Description" => "<Add Exp> ::= <Add Exp> '+' <Mult Exp>",
		"NonTerminalIndex" => 26,
		"Symbols" => array(
			26 ,
			11 ,
			30 
		)
	) ,
	Rule_Addexp_Minus => array(
		"Index" => 25,
		"Description" => "<Add Exp> ::= <Add Exp> '-' <Mult Exp>",
		"NonTerminalIndex" => 26,
		"Symbols" => array(
			26 ,
			3 ,
			30 
		)
	) ,
	Rule_Addexp => array(
		"Index" => 26,
		"Description" => "<Add Exp> ::= <Mult Exp>",
		"NonTerminalIndex" => 26,
		"Symbols" => array(
			30 
		)
	) ,
	Rule_Multexp_Times => array(
		"Index" => 27,
		"Description" => "<Mult Exp> ::= <Mult Exp> '*' <Negate Exp>",
		"NonTerminalIndex" => 30,
		"Symbols" => array(
			30 ,
			7 ,
			31 
		)
	) ,
	Rule_Multexp_Div => array(
		"Index" => 28,
		"Description" => "<Mult Exp> ::= <Mult Exp> '/' <Negate Exp>",
		"NonTerminalIndex" => 30,
		"Symbols" => array(
			30 ,
			8 ,
			31 
		)
	) ,
	Rule_Multexp => array(
		"Index" => 29,
		"Description" => "<Mult Exp> ::= <Negate Exp>",
		"NonTerminalIndex" => 30,
		"Symbols" => array(
			31 
		)
	) ,
	Rule_Negateexp_Minus => array(
		"Index" => 30,
		"Description" => "<Negate Exp> ::= '-' <Value>",
		"NonTerminalIndex" => 31,
		"Symbols" => array(
			3 ,
			36 
		)
	) ,
	Rule_Negateexp => array(
		"Index" => 31,
		"Description" => "<Negate Exp> ::= <Value>",
		"NonTerminalIndex" => 31,
		"Symbols" => array(
			36 
		)
	) ,
	Rule_Value_Identifier => array(
		"Index" => 32,
		"Description" => "<Value> ::= Identifier",
		"NonTerminalIndex" => 36,
		"Symbols" => array(
			19 
		)
	) ,
	Rule_Value_Lparan_Rparan => array(
		"Index" => 33,
		"Description" => "<Value> ::= '(' <Konjunktion> ')'",
		"NonTerminalIndex" => 36,
		"Symbols" => array(
			5 ,
			29 ,
			6 
		)
	) ,
	Rule_Value_Integer => array(
		"Index" => 34,
		"Description" => "<Value> ::= Integer",
		"NonTerminalIndex" => 36,
		"Symbols" => array(
			20 
		)
	) ,
	Rule_Value_Stringliteral => array(
		"Index" => 35,
		"Description" => "<Value> ::= StringLiteral",
		"NonTerminalIndex" => 36,
		"Symbols" => array(
			24 
		)
	) ,
	Rule_Value_Nicht => array(
		"Index" => 36,
		"Description" => "<Value> ::= Nicht <Konjunktion>",
		"NonTerminalIndex" => 36,
		"Symbols" => array(
			22 ,
			29 
		)
	)  
);
$charSets = array(
	0 => array(
		"List" => array(
			9 ,
			11 ,
			12 ,
			32 ,
			160 ,
			)
	) ,
	1 => array(
		"List" => array(
			45 ,
			)
	) ,
	2 => array(
		"List" => array(
			37 ,
			)
	) ,
	3 => array(
		"List" => array(
			40 ,
			)
	) ,
	4 => array(
		"List" => array(
			41 ,
			)
	) ,
	5 => array(
		"List" => array(
			42 ,
			)
	) ,
	6 => array(
		"List" => array(
			47 ,
			)
	) ,
	7 => array(
		"List" => array(
			43 ,
			)
	) ,
	8 => array(
		"List" => array(
			61 ,
			)
	) ,
	9 => array(
		"List" => array(
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	10 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			)
	) ,
	11 => array(
		"List" => array(
			10 ,
			)
	) ,
	12 => array(
		"List" => array(
			34 ,
			)
	) ,
	13 => array(
		"List" => array(
			13 ,
			)
	) ,
	14 => array(
		"List" => array(
			58 ,
			)
	) ,
	15 => array(
		"List" => array(
			60 ,
			)
	) ,
	16 => array(
		"List" => array(
			62 ,
			)
	) ,
	17 => array(
		"List" => array(
			78 ,
			110 ,
			)
	) ,
	18 => array(
		"List" => array(
			79 ,
			111 ,
			)
	) ,
	19 => array(
		"List" => array(
			85 ,
			117 ,
			)
	) ,
	20 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	21 => array(
		"List" => array(
			9 ,
			32 ,
			33 ,
			35 ,
			36 ,
			37 ,
			38 ,
			39 ,
			40 ,
			41 ,
			42 ,
			43 ,
			44 ,
			45 ,
			46 ,
			47 ,
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			58 ,
			59 ,
			60 ,
			61 ,
			62 ,
			63 ,
			64 ,
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			91 ,
			92 ,
			93 ,
			94 ,
			95 ,
			96 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			123 ,
			124 ,
			125 ,
			126 ,
			160 ,
			)
	) ,
	22 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	23 => array(
		"List" => array(
			73 ,
			105 ,
			)
	) ,
	24 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	25 => array(
		"List" => array(
			67 ,
			99 ,
			)
	) ,
	26 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	27 => array(
		"List" => array(
			72 ,
			104 ,
			)
	) ,
	28 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	29 => array(
		"List" => array(
			84 ,
			116 ,
			)
	) ,
	30 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	31 => array(
		"List" => array(
			68 ,
			100 ,
			)
	) ,
	32 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			68 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	33 => array(
		"List" => array(
			69 ,
			101 ,
			)
	) ,
	34 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			78 ,
			79 ,
			80 ,
			81 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			110 ,
			111 ,
			112 ,
			113 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) ,
	35 => array(
		"List" => array(
			82 ,
			114 ,
			)
	) ,
	36 => array(
		"List" => array(
			48 ,
			49 ,
			50 ,
			51 ,
			52 ,
			53 ,
			54 ,
			55 ,
			56 ,
			57 ,
			65 ,
			66 ,
			67 ,
			68 ,
			69 ,
			70 ,
			71 ,
			72 ,
			73 ,
			74 ,
			75 ,
			76 ,
			77 ,
			79 ,
			80 ,
			81 ,
			82 ,
			83 ,
			84 ,
			85 ,
			86 ,
			87 ,
			88 ,
			89 ,
			90 ,
			95 ,
			97 ,
			98 ,
			99 ,
			100 ,
			101 ,
			102 ,
			103 ,
			104 ,
			105 ,
			106 ,
			107 ,
			108 ,
			109 ,
			111 ,
			112 ,
			113 ,
			114 ,
			115 ,
			116 ,
			117 ,
			118 ,
			119 ,
			120 ,
			121 ,
			122 ,
			)
	) 
);
$dfaTable = array(
	"InitialState" => 0,
	"States" => array(
		0 => array(
			"AcceptIndex" => -1, 
			"Edges" => array(
				array(
					"CharSetIndex" => 0,
					"Target" => 1
				) ,
				array(
					"CharSetIndex" => 1,
					"Target" => 2
				) ,
				array(
					"CharSetIndex" => 2,
					"Target" => 3
				) ,
				array(
					"CharSetIndex" => 3,
					"Target" => 5
				) ,
				array(
					"CharSetIndex" => 4,
					"Target" => 6
				) ,
				array(
					"CharSetIndex" => 5,
					"Target" => 7
				) ,
				array(
					"CharSetIndex" => 6,
					"Target" => 8
				) ,
				array(
					"CharSetIndex" => 7,
					"Target" => 9
				) ,
				array(
					"CharSetIndex" => 8,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 9,
					"Target" => 12
				) ,
				array(
					"CharSetIndex" => 10,
					"Target" => 14
				) ,
				array(
					"CharSetIndex" => 11,
					"Target" => 15
				) ,
				array(
					"CharSetIndex" => 12,
					"Target" => 16
				) ,
				array(
					"CharSetIndex" => 13,
					"Target" => 19
				) ,
				array(
					"CharSetIndex" => 14,
					"Target" => 21
				) ,
				array(
					"CharSetIndex" => 15,
					"Target" => 23
				) ,
				array(
					"CharSetIndex" => 16,
					"Target" => 27
				) ,
				array(
					"CharSetIndex" => 17,
					"Target" => 29
				) ,
				array(
					"CharSetIndex" => 18,
					"Target" => 34
				) ,
				array(
					"CharSetIndex" => 19,
					"Target" => 38
				) ,
			)
		) ,
		1 => array(
			"AcceptIndex" => 2, 
			"Edges" => array(
				array(
					"CharSetIndex" => 0,
					"Target" => 1
				) ,
			)
		) ,
		2 => array(
			"AcceptIndex" => 3, 
			"Edges" => array(
			)
		) ,
		3 => array(
			"AcceptIndex" => -1, 
			"Edges" => array(
				array(
					"CharSetIndex" => 16,
					"Target" => 4
				) ,
			)
		) ,
		4 => array(
			"AcceptIndex" => 4, 
			"Edges" => array(
			)
		) ,
		5 => array(
			"AcceptIndex" => 5, 
			"Edges" => array(
			)
		) ,
		6 => array(
			"AcceptIndex" => 6, 
			"Edges" => array(
			)
		) ,
		7 => array(
			"AcceptIndex" => 7, 
			"Edges" => array(
			)
		) ,
		8 => array(
			"AcceptIndex" => 8, 
			"Edges" => array(
			)
		) ,
		9 => array(
			"AcceptIndex" => 11, 
			"Edges" => array(
			)
		) ,
		10 => array(
			"AcceptIndex" => -1, 
			"Edges" => array(
				array(
					"CharSetIndex" => 8,
					"Target" => 11
				) ,
			)
		) ,
		11 => array(
			"AcceptIndex" => 16, 
			"Edges" => array(
			)
		) ,
		12 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 20,
					"Target" => 13
				) ,
			)
		) ,
		13 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 20,
					"Target" => 13
				) ,
			)
		) ,
		14 => array(
			"AcceptIndex" => 20, 
			"Edges" => array(
				array(
					"CharSetIndex" => 10,
					"Target" => 14
				) ,
			)
		) ,
		15 => array(
			"AcceptIndex" => 21, 
			"Edges" => array(
			)
		) ,
		16 => array(
			"AcceptIndex" => -1, 
			"Edges" => array(
				array(
					"CharSetIndex" => 21,
					"Target" => 17
				) ,
				array(
					"CharSetIndex" => 12,
					"Target" => 18
				) ,
			)
		) ,
		17 => array(
			"AcceptIndex" => -1, 
			"Edges" => array(
				array(
					"CharSetIndex" => 21,
					"Target" => 17
				) ,
				array(
					"CharSetIndex" => 12,
					"Target" => 18
				) ,
			)
		) ,
		18 => array(
			"AcceptIndex" => 24, 
			"Edges" => array(
			)
		) ,
		19 => array(
			"AcceptIndex" => 21, 
			"Edges" => array(
				array(
					"CharSetIndex" => 11,
					"Target" => 20
				) ,
			)
		) ,
		20 => array(
			"AcceptIndex" => 21, 
			"Edges" => array(
			)
		) ,
		21 => array(
			"AcceptIndex" => 9, 
			"Edges" => array(
				array(
					"CharSetIndex" => 8,
					"Target" => 22
				) ,
			)
		) ,
		22 => array(
			"AcceptIndex" => 10, 
			"Edges" => array(
			)
		) ,
		23 => array(
			"AcceptIndex" => 12, 
			"Edges" => array(
				array(
					"CharSetIndex" => 2,
					"Target" => 24
				) ,
				array(
					"CharSetIndex" => 8,
					"Target" => 25
				) ,
				array(
					"CharSetIndex" => 16,
					"Target" => 26
				) ,
			)
		) ,
		24 => array(
			"AcceptIndex" => 13, 
			"Edges" => array(
			)
		) ,
		25 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
			)
		) ,
		26 => array(
			"AcceptIndex" => 15, 
			"Edges" => array(
			)
		) ,
		27 => array(
			"AcceptIndex" => 17, 
			"Edges" => array(
				array(
					"CharSetIndex" => 8,
					"Target" => 28
				) ,
			)
		) ,
		28 => array(
			"AcceptIndex" => 18, 
			"Edges" => array(
			)
		) ,
		29 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 22,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 23,
					"Target" => 30
				) ,
			)
		) ,
		30 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 24,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 25,
					"Target" => 31
				) ,
			)
		) ,
		31 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 26,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 27,
					"Target" => 32
				) ,
			)
		) ,
		32 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 28,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 29,
					"Target" => 33
				) ,
			)
		) ,
		33 => array(
			"AcceptIndex" => 22, 
			"Edges" => array(
				array(
					"CharSetIndex" => 20,
					"Target" => 13
				) ,
			)
		) ,
		34 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 30,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 31,
					"Target" => 35
				) ,
			)
		) ,
		35 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 32,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 33,
					"Target" => 36
				) ,
			)
		) ,
		36 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 34,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 35,
					"Target" => 37
				) ,
			)
		) ,
		37 => array(
			"AcceptIndex" => 23, 
			"Edges" => array(
				array(
					"CharSetIndex" => 20,
					"Target" => 13
				) ,
			)
		) ,
		38 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 36,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 17,
					"Target" => 39
				) ,
			)
		) ,
		39 => array(
			"AcceptIndex" => 19, 
			"Edges" => array(
				array(
					"CharSetIndex" => 30,
					"Target" => 13
				) ,
				array(
					"CharSetIndex" => 31,
					"Target" => 40
				) ,
			)
		) ,
		40 => array(
			"AcceptIndex" => 25, 
			"Edges" => array(
				array(
					"CharSetIndex" => 20,
					"Target" => 13
				) ,
			)
		) ,
	)
);
$lalrTable = array(
	"InitialState" => 0,
	"States" => array(
		0 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 21,
					"Value" => 1
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 33,
					"Value" => 2
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 35,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 19,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 20,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 22,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 24,
					"Value" => 3
				) 
		)) ,
		1 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 21,
					"Value" => 1
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 33,
					"Value" => 4
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 19,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 20,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 22,
					"Value" => 3
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 24,
					"Value" => 3
				) 
		)) ,
		2 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 12
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 29,
					"Value" => 13
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 34,
					"Value" => 16
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 17
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 37,
					"Value" => 18
				) 
		)) ,
		3 => array(
			"Actions" => array(
				 array(	
					"Action" => 4,
					"SymbolIndex" => 0,
					"Value" => 0
				) 
		)) ,
		4 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 2
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 2
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 19,
					"Value" => 2
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 20,
					"Value" => 2
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 22,
					"Value" => 2
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 24,
					"Value" => 2
				) 
		)) ,
		5 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 19
				) 
		)) ,
		6 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 12
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 29,
					"Value" => 20
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		7 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 32
				) 
		)) ,
		8 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 34
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 34
				) 
		)) ,
		9 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 12
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 29,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		10 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 35
				) 
		)) ,
		11 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 23
				) 
		)) ,
		12 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 25
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 26
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 13,
					"Value" => 27
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 28
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 15,
					"Value" => 29
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 16,
					"Value" => 30
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 17,
					"Value" => 31
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 18,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 14
				) 
		)) ,
		13 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 33
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 23,
					"Value" => 34
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 25,
					"Value" => 35
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 28,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 11
				) 
		)) ,
		14 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 37
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 38
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 26
				) 
		)) ,
		15 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 29
				) 
		)) ,
		16 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 4
				) 
		)) ,
		17 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 39
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 31
				) 
		)) ,
		18 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 21,
					"Value" => 40
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 32,
					"Value" => 41
				) 
		)) ,
		19 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 30
				) 
		)) ,
		20 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 42
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 23,
					"Value" => 34
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 25,
					"Value" => 35
				) 
		)) ,
		21 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 31
				) 
		)) ,
		22 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 23,
					"Value" => 34
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 25,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 36
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 36
				) 
		)) ,
		23 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 43
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		24 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 44
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		25 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 45
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		26 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 46
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		27 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 47
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		28 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 48
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		29 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 49
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		30 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 50
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		31 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 51
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		32 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 52
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		33 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 53
				) 
		)) ,
		34 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 54
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		35 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 55
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		36 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 21,
					"Value" => 40
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 32,
					"Value" => 56
				) 
		)) ,
		37 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 57
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		38 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 58
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		39 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 12
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 29,
					"Value" => 59
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 21
				) 
		)) ,
		40 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 21,
					"Value" => 40
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 32,
					"Value" => 60
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 1
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 1
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 1
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 19,
					"Value" => 1
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 20,
					"Value" => 1
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 22,
					"Value" => 1
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 24,
					"Value" => 1
				) 
		)) ,
		41 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 12
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 29,
					"Value" => 13
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 34,
					"Value" => 61
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 17
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 37,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 7
				) 
		)) ,
		42 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 33
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 33
				) 
		)) ,
		43 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 37
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 38
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 25
				) 
		)) ,
		44 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 37
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 38
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 24
				) 
		)) ,
		45 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 21
				) 
		)) ,
		46 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 16
				) 
		)) ,
		47 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 22
				) 
		)) ,
		48 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 17
				) 
		)) ,
		49 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 20
				) 
		)) ,
		50 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 19
				) 
		)) ,
		51 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 15
				) 
		)) ,
		52 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 23
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 18
				) 
		)) ,
		53 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 10
				) 
		)) ,
		54 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 25
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 26
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 13,
					"Value" => 27
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 28
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 15,
					"Value" => 29
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 16,
					"Value" => 30
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 17,
					"Value" => 31
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 18,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 13
				) 
		)) ,
		55 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 25
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 26
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 13,
					"Value" => 27
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 28
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 15,
					"Value" => 29
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 16,
					"Value" => 30
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 17,
					"Value" => 31
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 18,
					"Value" => 32
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 12
				) 
		)) ,
		56 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 5
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 19,
					"Value" => 7
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 20,
					"Value" => 8
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 22,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 24,
					"Value" => 10
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 11
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 12
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 29,
					"Value" => 13
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 30,
					"Value" => 14
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 31,
					"Value" => 15
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 34,
					"Value" => 62
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 36,
					"Value" => 17
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 37,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 5
				) 
		)) ,
		57 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 27
				) 
		)) ,
		58 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 4,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 6,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 7,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 9,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 10,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 13,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 14,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 15,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 16,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 17,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 18,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 23,
					"Value" => 28
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 25,
					"Value" => 28
				) 
		)) ,
		59 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 23,
					"Value" => 34
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 25,
					"Value" => 35
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 21,
					"Value" => 9
				) 
		)) ,
		60 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 0
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 3,
					"Value" => 0
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 0
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 19,
					"Value" => 0
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 20,
					"Value" => 0
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 22,
					"Value" => 0
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 24,
					"Value" => 0
				) 
		)) ,
		61 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 8
				) 
		)) ,
		62 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 6
				) 
		)) 
	)
);
