<?php

use PHPUnit\Framework\TestCase;

require_once 'weighted_strings.php';

class WeightedStringsTest extends TestCase {
    public function testWeightedStrings() {
        $string         = "abbcccd";
        $expectedOutput = ["Yes", "Yes", "Yes", "No"];
        
        $this->assertEquals($expectedOutput, WeightedStrings($string));
    }
}
