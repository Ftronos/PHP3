<?
	function replace($string) {
		$strArr = str_split($string);

		foreach ($strArr as $key => $value) {
			if ($value == " ") {
				$strArr[$key] = "_";
			}
		}
		return implode("", $strArr);
	}

	echo replace("В траве сидел кузнечик");