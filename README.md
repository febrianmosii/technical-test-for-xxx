# Technical Test 
PHP Native REST API to solve problems:

  - Weighted Strings
  - Balanced Bracket
  - Highest Polindrome

## Installation on local machine

PHP Used: 8.2

First, please open terminal and cd to installed directory.


    composer install




## Tests

### Manual Testing
Please uncomment code first and open it using terminal with

**Weighted String**


    php weighted_strings.php




**Balanced Bracket**


    php balanced_bracket.php


**Highest Polindrome**


    php balanced_bracket.php





### Unit Testing

**Weighted String**


    vendor/bin/phpunit tests/WeightedStringsTest.php




**Balanced Bracket**


    vendor/bin/phpunit tests/BalancedBracketTest.php


**Highest Polindrome**


    vendor/bin/phpunit tests/HighestPalindromeTest.php

Note: If you want to change the input, feel free to edit test files.


## Complexity of Balanced Bracket

Based on my analysis, the score of complexity of my code is low and ease of maintance.

- Cyclomatic Complexity 

  The function consists of a single loop with no nested loops or conditionals. Therefore, its cyclomatic complexity is relatively low.

- Cognitive Complexity 

  The cognitive complexity of the function is also relatively low. It contains straightforward logic without deeply nested conditionals or complex control flow.

- Maintainability 

  Based on the low cyclomatic and cognitive complexity, the function should be easy to maintain and understand.
