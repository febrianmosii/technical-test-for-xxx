<?php

use PHPUnit\Framework\TestCase;

require_once 'highest_palindrome.php';

class HighestPalindromeTest extends TestCase {
    public function testHighestPalindromeSample1() {
        $input = "3943";
        $k = 1;
        $expectedOutput = "3993";

        $this->assertEquals($expectedOutput, highest_palindrome($input, $k));
    }

    public function testHighestPalindromeSample2() {
        $input = "932239";
        $k = 2;
        $expectedOutput = "992299"; 
    
        $this->assertEquals($expectedOutput, highest_palindrome($input, $k));
    }

    public function testCannotFormPalindrome() {
        $input = "12345";
        $k = 1;
        $expectedOutput = -1;

        $this->assertEquals($expectedOutput, highest_palindrome($input, $k));
    }

    public function testSingleCharacter() {
        $input = "9";
        $k = 1;
        $expectedOutput = "9";

        $this->assertEquals($expectedOutput, highest_palindrome($input, $k));
    }
}
?>
