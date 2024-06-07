<?php

function highest_palindrome($s, $k) {
    $n = strlen($s);

    // Helper function to recursively find and replace characters to form palindrome
    $replace = function(&$s, $left, $right, &$k) use (&$replace) {
        if ($left >= $right) {
            return;
        }

        if ($s[$left] != $s[$right]) {
            $max_char = max($s[$left], $s[$right]);
            $s[$left] = $s[$right] = $max_char;
            $k--;
        }

        $replace($s, $left + 1, $right - 1, $k);
    };

    $operations = 0;

    for ($i = 0; $i < $n / 2; $i++) {
        if ($s[$i] != $s[$n - $i - 1]) {
            $operations++;
        }
    }

    if ($operations > $k) {
        return -1;
    }

    // Replace characters to form palindrome recursively
    $replace($s, 0, $n - 1, $k);

    // Replace remaining operations with '9' from the ends towards the center
    $remaining = $k;
    $replace_remaining = function(&$s, $left, $right, &$remaining) use (&$replace_remaining) {
        if ($remaining == 0 || $left >= $right) {
            return;
        }

        if ($left == $right) {
            $s[$left] = '9';
            $remaining--;
        } elseif ($s[$left] != '9' && $remaining > 0) {
            $s[$left] = $s[$right] = '9';
            $remaining -= 2;
        }

        $replace_remaining($s, $left + 1, $right - 1, $remaining);
    };

    $replace_remaining($s, 0, $n - 1, $remaining);

    return $s;
}


# uncomment to test manualy
// $k     = 1;
// $input = "3943";
// $input = "932239";
// $output = highest_palindrome($input, $k);

// echo $output;