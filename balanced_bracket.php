<?php 

function isBalanced($input) {
    $patterns = [];
    $brackets = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];
    
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        
        if (in_array($char, $brackets)) { 
            array_push($patterns, $char);
        } elseif (isset($brackets[$char]) && (empty($patterns) || array_pop($patterns) !== $brackets[$char])) { 
            return 'NO';
        }
    }
    
    return "YES";
}

# uncomment to test manualy
// $input = "{ [ ( ) ] }";
// $input = "{ [ ( ] ) }";
// $input = "{ ( ( [ ] ) [ ] ) [ ] }";

// echo isBalanced($input); 
?>