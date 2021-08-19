<?php

$string      = file_get_contents('.env');

$a = explode("\n", $string);

//echo $string . PHP_EOL . PHP_EOL;

$string      = preg_split('#\n#', $string);

//var_dump($string) . PHP_EOL . PHP_EOL;

$returnArray = array();

$count = 0;
foreach ($string as $one) {
	// if (preg_match('/^(#\s)/', $one) === 1 || preg_match('/^([\\n\\r]+)/', $one)) {
		// continue;
	// }
	$entry                  = explode("=", $one, 2);
	
	if ($entry[0] != "") {
		$returnArray[$entry[0]] = isset($entry[1]) ? $entry[1] : null;
	} else {
		echo "1";
		$returnArray = "";
	}
	
	
}

$b = array_map(function ($aa) {
		return preg_split('/=/', $aa, 2);
	}, $a);
	
$c = array_map(function ($line) {
            if (count($line) === 2) {
                return [$line[0] => $line[1]];
            }

            return $line[0];
        }, $b);

function flatten($array)
{
$newArray = [];

foreach ($array as $key => $value) {
	if (is_array($value)) {
		$newArray = array_merge($newArray, flatten($value));
	} else {
		$newArray[$key] = $value;
	}
}

return $newArray;
}


echo "<pre>";
var_dump($returnArray);
echo "</pre>";


