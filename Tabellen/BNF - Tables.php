<?php
/***************************************************************
* Diese Datei wurde automatisch generiert, nicht modifizieren  *
***************************************************************/
include_once("../Konstanten/BNF - Constants.php");
$caseSensitive = False;
$startSymbol = 24;
$author = "Enter your name";
$about = "A short description of the grammar";
$version = "The version of the grammar and/or language";
$name = "Enter the name of the grammar";
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
	Symbol_Colon => array(
		"Name" => ":",
		"Kind" => 1,
		"Index" => 3
		) ,
	Symbol_Lbracket => array(
		"Name" => "[",
		"Kind" => 1,
		"Index" => 4
		) ,
	Symbol_Rbracket => array(
		"Name" => "]",
		"Kind" => 1,
		"Index" => 5
		) ,
	Symbol_Lbrace => array(
		"Name" => "{",
		"Kind" => 1,
		"Index" => 6
		) ,
	Symbol_Pipe => array(
		"Name" => "|",
		"Kind" => 1,
		"Index" => 7
		) ,
	Symbol_Rbrace => array(
		"Name" => "}",
		"Kind" => 1,
		"Index" => 8
		) ,
	Symbol_Lt => array(
		"Name" => "<",
		"Kind" => 1,
		"Index" => 9
		) ,
	Symbol_Eq => array(
		"Name" => "=",
		"Kind" => 1,
		"Index" => 10
		) ,
	Symbol_Gt => array(
		"Name" => ">",
		"Kind" => 1,
		"Index" => 11
		) ,
	Symbol_Definitionszeichen => array(
		"Name" => "Definitionszeichen",
		"Kind" => 1,
		"Index" => 12
		) ,
	Symbol_Newline => array(
		"Name" => "NewLine",
		"Kind" => 1,
		"Index" => 13
		) ,
	Symbol_Zeichenkette => array(
		"Name" => "ZeichenKette",
		"Kind" => 1,
		"Index" => 14
		) ,
	Symbol_Alternative => array(
		"Name" => "alternative",
		"Kind" => 0,
		"Index" => 15
		) ,
	Symbol_Bez => array(
		"Name" => "bez",
		"Kind" => 0,
		"Index" => 16
		) ,
	Symbol_Bez1 => array(
		"Name" => "bez1",
		"Kind" => 0,
		"Index" => 17
		) ,
	Symbol_Def => array(
		"Name" => "def",
		"Kind" => 0,
		"Index" => 18
		) ,
	Symbol_Links => array(
		"Name" => "links",
		"Kind" => 0,
		"Index" => 19
		) ,
	Symbol_Name => array(
		"Name" => "name",
		"Kind" => 0,
		"Index" => 20
		) ,
	Symbol_Neueregel => array(
		"Name" => "neue regel",
		"Kind" => 0,
		"Index" => 21
		) ,
	Symbol_Nl => array(
		"Name" => "NL",
		"Kind" => 0,
		"Index" => 22
		) ,
	Symbol_Option => array(
		"Name" => "option",
		"Kind" => 0,
		"Index" => 23
		) ,
	Symbol_Program => array(
		"Name" => "Program",
		"Kind" => 0,
		"Index" => 24
		) ,
	Symbol_Rechts => array(
		"Name" => "rechts",
		"Kind" => 0,
		"Index" => 25
		) ,
	Symbol_Regel => array(
		"Name" => "regel",
		"Kind" => 0,
		"Index" => 26
		) ,
	Symbol_Wiederholung => array(
		"Name" => "wiederholung",
		"Kind" => 0,
		"Index" => 27
		)  
);
$ruleTable = array(
	Rule_Program => array(
		"Index" => 0,
		"Description" => "<Program> ::= <regel>",
		"NonTerminalIndex" => 24,
		"Symbols" => array(
			26 
		)
	) ,
	Rule_Nl_Newline => array(
		"Index" => 1,
		"Description" => "<NL> ::= NewLine <NL>",
		"NonTerminalIndex" => 22,
		"Symbols" => array(
			13 ,
			22 
		)
	) ,
	Rule_Nl_Newline2 => array(
		"Index" => 2,
		"Description" => "<NL> ::= NewLine",
		"NonTerminalIndex" => 22,
		"Symbols" => array(
			13 
		)
	) ,
	Rule_Regel_Definitionszeichen => array(
		"Index" => 3,
		"Description" => "<regel> ::= <links> Definitionszeichen <rechts>",
		"NonTerminalIndex" => 26,
		"Symbols" => array(
			19 ,
			12 ,
			25 
		)
	) ,
	Rule_Regel => array(
		"Index" => 4,
		"Description" => "<regel> ::= ",
		"NonTerminalIndex" => 26,
		"Symbols" => array(
		)
	) ,
	Rule_Links => array(
		"Index" => 5,
		"Description" => "<links> ::= <bez>",
		"NonTerminalIndex" => 19,
		"Symbols" => array(
			16 
		)
	) ,
	Rule_Rechts => array(
		"Index" => 6,
		"Description" => "<rechts> ::= <def>",
		"NonTerminalIndex" => 25,
		"Symbols" => array(
			18 
		)
	) ,
	Rule_Neueregel_Definitionszeichen => array(
		"Index" => 7,
		"Description" => "<neue regel> ::= Definitionszeichen <rechts>",
		"NonTerminalIndex" => 21,
		"Symbols" => array(
			12 ,
			25 
		)
	) ,
	Rule_Name_Zeichenkette => array(
		"Index" => 8,
		"Description" => "<name> ::= ZeichenKette",
		"NonTerminalIndex" => 20,
		"Symbols" => array(
			14 
		)
	) ,
	Rule_Name_Zeichenkette_Colon_Zeichenkette => array(
		"Index" => 9,
		"Description" => "<name> ::= ZeichenKette ':' ZeichenKette",
		"NonTerminalIndex" => 20,
		"Symbols" => array(
			14 ,
			3 ,
			14 
		)
	) ,
	Rule_Bez_Lt_Zeichenkette_Gt => array(
		"Index" => 10,
		"Description" => "<bez> ::= '<' ZeichenKette '>'",
		"NonTerminalIndex" => 16,
		"Symbols" => array(
			9 ,
			14 ,
			11 
		)
	) ,
	Rule_Bez_Lt_Gt => array(
		"Index" => 11,
		"Description" => "<bez> ::= '<' <name> '>'",
		"NonTerminalIndex" => 16,
		"Symbols" => array(
			9 ,
			20 ,
			11 
		)
	) ,
	Rule_Bez1_Lt_Zeichenkette_Gt => array(
		"Index" => 12,
		"Description" => "<bez1> ::= '<' ZeichenKette '>' <def>",
		"NonTerminalIndex" => 17,
		"Symbols" => array(
			9 ,
			14 ,
			11 ,
			18 
		)
	) ,
	Rule_Bez1_Lt_Gt => array(
		"Index" => 13,
		"Description" => "<bez1> ::= '<' <name> '>' <def>",
		"NonTerminalIndex" => 17,
		"Symbols" => array(
			9 ,
			20 ,
			11 ,
			18 
		)
	) ,
	Rule_Def => array(
		"Index" => 14,
		"Description" => "<def> ::= <alternative>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			15 
		)
	) ,
	Rule_Def2 => array(
		"Index" => 15,
		"Description" => "<def> ::= <bez1>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			17 
		)
	) ,
	Rule_Def3 => array(
		"Index" => 16,
		"Description" => "<def> ::= <option>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			23 
		)
	) ,
	Rule_Def4 => array(
		"Index" => 17,
		"Description" => "<def> ::= <wiederholung>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			27 
		)
	) ,
	Rule_Def_Zeichenkette => array(
		"Index" => 18,
		"Description" => "<def> ::= ZeichenKette <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			14 ,
			18 
		)
	) ,
	Rule_Def5 => array(
		"Index" => 19,
		"Description" => "<def> ::= <neue regel>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			21 
		)
	) ,
	Rule_Def_Colon => array(
		"Index" => 20,
		"Description" => "<def> ::= ':' <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			3 ,
			18 
		)
	) ,
	Rule_Def_Lt => array(
		"Index" => 21,
		"Description" => "<def> ::= '<' <bez1>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			9 ,
			17 
		)
	) ,
	Rule_Def_Gt => array(
		"Index" => 22,
		"Description" => "<def> ::= '>' <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			11 ,
			18 
		)
	) ,
	Rule_Def_Rbracket => array(
		"Index" => 23,
		"Description" => "<def> ::= ']' <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			5 ,
			18 
		)
	) ,
	Rule_Def_Lbracket => array(
		"Index" => 24,
		"Description" => "<def> ::= '[' <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			4 ,
			18 
		)
	) ,
	Rule_Def_Eq => array(
		"Index" => 25,
		"Description" => "<def> ::= '=' <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			10 ,
			18 
		)
	) ,
	Rule_Def_Rbrace => array(
		"Index" => 26,
		"Description" => "<def> ::= '}' <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			8 ,
			18 
		)
	) ,
	Rule_Def_Lbrace => array(
		"Index" => 27,
		"Description" => "<def> ::= '{' <def>",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
			6 ,
			18 
		)
	) ,
	Rule_Def6 => array(
		"Index" => 28,
		"Description" => "<def> ::= ",
		"NonTerminalIndex" => 18,
		"Symbols" => array(
		)
	) ,
	Rule_Option_Lbracket_Rbracket => array(
		"Index" => 29,
		"Description" => "<option> ::= '[' <def> ']' <def>",
		"NonTerminalIndex" => 23,
		"Symbols" => array(
			4 ,
			18 ,
			5 ,
			18 
		)
	) ,
	Rule_Wiederholung_Lbrace_Rbrace => array(
		"Index" => 30,
		"Description" => "<wiederholung> ::= '{' <def> '}' <def>",
		"NonTerminalIndex" => 27,
		"Symbols" => array(
			6 ,
			18 ,
			8 ,
			18 
		)
	) ,
	Rule_Alternative_Pipe => array(
		"Index" => 31,
		"Description" => "<alternative> ::= '|' <def>",
		"NonTerminalIndex" => 15,
		"Symbols" => array(
			7 ,
			18 
		)
	)  
);
$charSets = array(
	0 => array(
		"List" => array(
			9 ,
			10 ,
			11 ,
			12 ,
			13 ,
			)
	) ,
	1 => array(
		"List" => array(
			91 ,
			)
	) ,
	2 => array(
		"List" => array(
			93 ,
			)
	) ,
	3 => array(
		"List" => array(
			123 ,
			)
	) ,
	4 => array(
		"List" => array(
			124 ,
			)
	) ,
	5 => array(
		"List" => array(
			125 ,
			)
	) ,
	6 => array(
		"List" => array(
			60 ,
			)
	) ,
	7 => array(
		"List" => array(
			61 ,
			)
	) ,
	8 => array(
		"List" => array(
			62 ,
			)
	) ,
	9 => array(
		"List" => array(
			33 ,
			34 ,
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
			59 ,
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
			92 ,
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
			126 ,
			)
	) ,
	10 => array(
		"List" => array(
			32 ,
			160 ,
			)
	) ,
	11 => array(
		"List" => array(
			58 ,
			)
	) ,
	12 => array(
		"List" => array(
			78 ,
			110 ,
			)
	) ,
	13 => array(
		"List" => array(
			9 ,
			10 ,
			11 ,
			12 ,
			13 ,
			32 ,
			160 ,
			)
	) ,
	14 => array(
		"List" => array(
			32 ,
			33 ,
			34 ,
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
			59 ,
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
			92 ,
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
			126 ,
			160 ,
			)
	) ,
	15 => array(
		"List" => array(
			33 ,
			34 ,
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
			59 ,
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
			92 ,
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
			126 ,
			)
	) ,
	16 => array(
		"List" => array(
			32 ,
			33 ,
			34 ,
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
			59 ,
			63 ,
			64 ,
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
			92 ,
			94 ,
			95 ,
			96 ,
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
			126 ,
			160 ,
			)
	) ,
	17 => array(
		"List" => array(
			69 ,
			101 ,
			)
	) ,
	18 => array(
		"List" => array(
			32 ,
			33 ,
			34 ,
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
			59 ,
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
			88 ,
			89 ,
			90 ,
			92 ,
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
			120 ,
			121 ,
			122 ,
			126 ,
			160 ,
			)
	) ,
	19 => array(
		"List" => array(
			87 ,
			119 ,
			)
	) ,
	20 => array(
		"List" => array(
			32 ,
			33 ,
			34 ,
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
			59 ,
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
			92 ,
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
			126 ,
			160 ,
			)
	) ,
	21 => array(
		"List" => array(
			76 ,
			108 ,
			)
	) ,
	22 => array(
		"List" => array(
			32 ,
			33 ,
			34 ,
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
			59 ,
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
			92 ,
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
			126 ,
			160 ,
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
			32 ,
			33 ,
			34 ,
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
			59 ,
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
			92 ,
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
			126 ,
			160 ,
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
					"Target" => 4
				) ,
				array(
					"CharSetIndex" => 4,
					"Target" => 5
				) ,
				array(
					"CharSetIndex" => 5,
					"Target" => 6
				) ,
				array(
					"CharSetIndex" => 6,
					"Target" => 7
				) ,
				array(
					"CharSetIndex" => 7,
					"Target" => 8
				) ,
				array(
					"CharSetIndex" => 8,
					"Target" => 9
				) ,
				array(
					"CharSetIndex" => 9,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 10,
					"Target" => 11
				) ,
				array(
					"CharSetIndex" => 11,
					"Target" => 12
				) ,
				array(
					"CharSetIndex" => 12,
					"Target" => 15
				) ,
			)
		) ,
		1 => array(
			"AcceptIndex" => 2, 
			"Edges" => array(
				array(
					"CharSetIndex" => 13,
					"Target" => 1
				) ,
			)
		) ,
		2 => array(
			"AcceptIndex" => 4, 
			"Edges" => array(
			)
		) ,
		3 => array(
			"AcceptIndex" => 5, 
			"Edges" => array(
			)
		) ,
		4 => array(
			"AcceptIndex" => 6, 
			"Edges" => array(
			)
		) ,
		5 => array(
			"AcceptIndex" => 7, 
			"Edges" => array(
			)
		) ,
		6 => array(
			"AcceptIndex" => 8, 
			"Edges" => array(
			)
		) ,
		7 => array(
			"AcceptIndex" => 9, 
			"Edges" => array(
			)
		) ,
		8 => array(
			"AcceptIndex" => 10, 
			"Edges" => array(
			)
		) ,
		9 => array(
			"AcceptIndex" => 11, 
			"Edges" => array(
			)
		) ,
		10 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
				array(
					"CharSetIndex" => 14,
					"Target" => 10
				) ,
			)
		) ,
		11 => array(
			"AcceptIndex" => 2, 
			"Edges" => array(
				array(
					"CharSetIndex" => 0,
					"Target" => 1
				) ,
				array(
					"CharSetIndex" => 15,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 10,
					"Target" => 11
				) ,
			)
		) ,
		12 => array(
			"AcceptIndex" => 3, 
			"Edges" => array(
				array(
					"CharSetIndex" => 11,
					"Target" => 13
				) ,
			)
		) ,
		13 => array(
			"AcceptIndex" => -1, 
			"Edges" => array(
				array(
					"CharSetIndex" => 7,
					"Target" => 14
				) ,
			)
		) ,
		14 => array(
			"AcceptIndex" => 12, 
			"Edges" => array(
			)
		) ,
		15 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
				array(
					"CharSetIndex" => 16,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 17,
					"Target" => 16
				) ,
			)
		) ,
		16 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
				array(
					"CharSetIndex" => 18,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 19,
					"Target" => 17
				) ,
			)
		) ,
		17 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
				array(
					"CharSetIndex" => 20,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 21,
					"Target" => 18
				) ,
			)
		) ,
		18 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
				array(
					"CharSetIndex" => 22,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 23,
					"Target" => 19
				) ,
			)
		) ,
		19 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
				array(
					"CharSetIndex" => 24,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 12,
					"Target" => 20
				) ,
			)
		) ,
		20 => array(
			"AcceptIndex" => 14, 
			"Edges" => array(
				array(
					"CharSetIndex" => 16,
					"Target" => 10
				) ,
				array(
					"CharSetIndex" => 17,
					"Target" => 21
				) ,
			)
		) ,
		21 => array(
			"AcceptIndex" => 13, 
			"Edges" => array(
				array(
					"CharSetIndex" => 14,
					"Target" => 10
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
					"SymbolIndex" => 9,
					"Value" => 1
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 16,
					"Value" => 2
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 19,
					"Value" => 3
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 24,
					"Value" => 4
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 26,
					"Value" => 5
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 4
				) 
		)) ,
		1 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 6
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 20,
					"Value" => 7
				) 
		)) ,
		2 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 5
				) 
		)) ,
		3 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 8
				) 
		)) ,
		4 => array(
			"Actions" => array(
				 array(	
					"Action" => 4,
					"SymbolIndex" => 0,
					"Value" => 0
				) 
		)) ,
		5 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 0
				) 
		)) ,
		6 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 10
				) 
		)) ,
		7 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 11
				) 
		)) ,
		8 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 25
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 25,
					"Value" => 28
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		9 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 30
				) 
		)) ,
		10 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 10
				) 
		)) ,
		11 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 12,
					"Value" => 11
				) 
		)) ,
		12 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 31
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		13 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 32
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		14 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 33
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		15 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 34
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		16 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 35
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		17 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 36
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		18 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 37
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 38
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 39
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 20,
					"Value" => 40
				) 
		)) ,
		19 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 41
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		20 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 42
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		21 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 25
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 25,
					"Value" => 43
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		22 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 44
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		23 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 14
				) 
		)) ,
		24 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 15
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 15
				) 
		)) ,
		25 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 6
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 6
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 6
				) 
		)) ,
		26 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 19
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 19
				) 
		)) ,
		27 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 16
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 16
				) 
		)) ,
		28 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 3
				) 
		)) ,
		29 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 17
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 17
				) 
		)) ,
		30 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 11,
					"Value" => 9
				) 
		)) ,
		31 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 20
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 20
				) 
		)) ,
		32 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 45
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 24
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 24
				) 
		)) ,
		33 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 23
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 23
				) 
		)) ,
		34 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 46
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 27
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 27
				) 
		)) ,
		35 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 31
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 31
				) 
		)) ,
		36 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 26
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 26
				) 
		)) ,
		37 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 38
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 20,
					"Value" => 40
				) 
		)) ,
		38 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 9
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 47
				) 
		)) ,
		39 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 21
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 21
				) 
		)) ,
		40 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 48
				) 
		)) ,
		41 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 25
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 25
				) 
		)) ,
		42 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 22
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 22
				) 
		)) ,
		43 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 7
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 7
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 7
				) 
		)) ,
		44 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 18
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 18
				) 
		)) ,
		45 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 49
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		46 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 50
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		47 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 51
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		48 => array(
			"Actions" => array(
				 array(	
					"Action" => 1,
					"SymbolIndex" => 3,
					"Value" => 12
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 4,
					"Value" => 13
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 5,
					"Value" => 14
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 6,
					"Value" => 15
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 7,
					"Value" => 16
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 8,
					"Value" => 17
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 9,
					"Value" => 18
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 10,
					"Value" => 19
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 11,
					"Value" => 20
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 12,
					"Value" => 21
				) ,
				 array(	
					"Action" => 1,
					"SymbolIndex" => 14,
					"Value" => 22
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 15,
					"Value" => 23
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 17,
					"Value" => 24
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 18,
					"Value" => 52
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 21,
					"Value" => 26
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 23,
					"Value" => 27
				) ,
				 array(	
					"Action" => 3,
					"SymbolIndex" => 27,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 28
				) 
		)) ,
		49 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 29
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 29
				) 
		)) ,
		50 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 30
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 30
				) 
		)) ,
		51 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 12
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 12
				) 
		)) ,
		52 => array(
			"Actions" => array(
				 array(	
					"Action" => 2,
					"SymbolIndex" => 0,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 5,
					"Value" => 13
				) ,
				 array(	
					"Action" => 2,
					"SymbolIndex" => 8,
					"Value" => 13
				) 
		)) 
	)
);
