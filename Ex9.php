<?
	$arr = [
		"�" => "a",
		"�" => "A",
		"�" => "b",
		"�" => "B",
		"�" => "v",
		"�" => "V",
		"�" => "g",
		"�" => "G",
		"�" => "d",
		"�" => "D",
		"�" => "e",
		"�" => "E",
		"�" => "yo",
		"�" => "Yo",
		"�" => "g",
		"�" => "G",
		"�" => "z",
		"�" => "Z",
		"�" => "i",
		"�" => "I",
		"�" => "y",
		"�" => "Y",
		"�" => "k",
		"�" => "K",
		"�" => "l",
		"�" => "L",
		"�" => "m",
		"�" => "M",
		"�" => "n",
		"�" => "N",
		"�" => "o",
		"�" => "O",
		"�" => "p",
		"�" => "P",
		"�" => "r",
		"�" => "R",
		"�" => "s",
		"�" => "S",
		"�" => "t",
		"�" => "T",
		"�" => "u",
		"�" => "U",
		"�" => "f",
		"�" => "F",
		"�" => "kh",
		"�" => "Kh",
		"�" => "c",
		"�" => "C",
		"�" => "ch",
		"�" => "Ch",
		"�" => "sh",
		"�" => "Sh",
		"�" => "shh",
		"�" => "Shh",
		"�" => "",
		"�" => "",
		"�" => "u",
		"�" => "U",
		"�" => "",
		"�" => "",
		"�" => "eh",
		"�" => "Eh",
		"�" => "yu",
		"�" => "Yu",
		"�" => "ya",
		"�" => "Ya"
	];

	function translit($string) {
		global $arr;
		foreach ($arr as $key => $value) {
			$string = str_replace($key, $value, $string);
		}

		$strArr = str_split($string);

		foreach ($strArr as $key => $value) {
			if ($value == " ") {
				$strArr[$key] = "_";
			}
		}

		return implode("", $strArr);
	};

	echo translit("� ����� ����� ��������");