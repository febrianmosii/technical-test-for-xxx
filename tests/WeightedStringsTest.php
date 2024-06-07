<?php

use PHPUnit\Framework\TestCase;

require_once 'balanced_bracket.php';

class WeightedStringsTest extends TestCase {
    public function testWeightedStrings() {
        $string         = "abbcccd";
        $expectedOutput = ["Yes", "Yes", "Yes", "No"];
        
        $this->assertEquals($expectedOutput, WeightedStrings($string));
    }
}
