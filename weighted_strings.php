<?php

const QUERIES = [1, 3, 9, 8];
const MAX_CHARS = 26;

function calculateWeight($character) {
    if (strlen($character) > 1) {
        throw new Exception("Maximum character length is 1, input parameter invalid");
    }
    
    $weightScores = [];
    
    $i = 'a';
    $n = 1;
    
    while ($n <= MAX_CHARS) {
        $weightScores[$i] = $n;
        $i++;
        $n++;
    }

    // Prevent special characters.
    if (empty($weightScores[$character])) {
        throw new Exception("Invalid character value");
    }

    return $weightScores[$character];
}

function getWeights($str) {
    $weights      = [];
    $stringLength =  strlen($str);

    for ($i = 0; $i < $stringLength; ) {
        $character         = $str[$i];
        $weightOfCharacter = calculateWeight($character);
        
        $j = $i;

        while ($j < $stringLength && $str[$j] == $character) {
            $j++;
        }

        $count = $j - $i;

        for ($k = 1; $k <= $count; $k++) {
            $weights[] = $weightOfCharacter * $k;
        }

        $i = $j;
    }

    return $weights;
}

function WeightedStrings($string) {
    $queries = QUERIES;
    $weights = getWeights($string);
    $result  = [];

    foreach ($queries as $query) {
        $result[] = in_array($query, $weights) ? "Yes" : "No";
    }

    return $result;
}

$string = "abbcccd";
$output = WeightedStrings($string);

# uncomment to test manualy
// print_r($output); 
?>
