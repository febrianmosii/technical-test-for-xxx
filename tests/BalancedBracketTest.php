<?php

use PHPUnit\Framework\TestCase;

require_once 'balanced_bracket.php';

const INPUT = [
    '{ [ ( ) ] }',
    '{ [ ( ] ) }',
    '{ ( ( [ ] ) [ ] ) [ ] }',
];

class BalancedBracketTest extends TestCase {
    public function testBalancedBracketSample1() {
        $expectedOutput = "YES";

        $this->assertEquals($expectedOutput, isBalanced(INPUT[0]));
    }

    public function testBalancedBracketSample2() {
        $expectedOutput = "NO";

        $this->assertEquals($expectedOutput, isBalanced(INPUT[1]));
    }

    public function testBalancedBracketSample3() {
        $expectedOutput = "YES";

        $this->assertEquals($expectedOutput, isBalanced(INPUT[2]));
    }
}
