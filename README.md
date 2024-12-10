# PHP Loose Typing and empty() Function Bug

This repository demonstrates an uncommon bug in PHP related to loose typing and the `empty()` function.  The function `myFunc()` exhibits unexpected behavior when checking for emptiness with string values, specifically the string '0'.  The solution file provides a corrected version of the function.

## Bug Description

PHP's loose typing system and the behavior of the `empty()` function can lead to unexpected results.  The `empty()` function returns true for values such as 0, '0', '', false, null, and array().  This can result in logical errors in conditional statements, as showcased in this example.

## How to reproduce

1. Clone this repository.
2. Run the `bug.php` file.
3. Observe the unexpected output for the input '0'.

## Solution

The solution file `bugSolution.php` provides a corrected version that addresses the unexpected behavior by using strict comparison (===) for the values.