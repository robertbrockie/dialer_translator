<?php

class DialerTranslator {

	public static $lettersToNumbers = array(
		'A' => 2,
		'B' => 2,
		'C' => 2,
		'D' => 3,
		'E' => 3,
		'F' => 3,
		'G' => 4,
		'H' => 4,
		'I' => 4,
		'J' => 5,
		'K' => 5,
		'L' => 5,
		'M' => 6,
		'N' => 6,
		'O' => 6,
		'P' => 7,
		'Q' => 7,
		'R' => 7,
		'S' => 7,
		'T' => 8,
		'U' => 8,
		'V' => 8,
		'W' => 9,
		'X' => 9,
		'Y' => 9,
		'Z' => 9,
	);

	public static function WordToNumber($word) {

		$translated_string = '';

		for ($i =0; $i < strlen($word); $i++) {
			$char = $word[$i];

			if (isset(self::$lettersToNumbers[strtoupper($char)])) {
				$translated_string .= self::$lettersToNumbers[strtoupper($char)];
			} else {
				error_log('Could not translate the character '.$char);
				return false;
			}
		}

		return $translated_string;
	}
}