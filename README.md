# PHP Silent Array Key Access

This repository demonstrates a common yet subtle bug in PHP: the silent failure when accessing non-existent array keys.  When you try to access an array element using a key that doesn't exist, PHP returns `null` without any error or warning.  This can lead to unexpected behavior and make debugging challenging.

The `bug.php` file shows the problematic code, while `bugSolution.php` presents solutions to address this issue.

## How to reproduce the bug
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe that the script executes without error, even though it attempts to access a non-existent key. The output will show unexpected results.

## Solutions
The `bugSolution.php` provides solutions, such as using `isset()` or `array_key_exists()` to check for the key's existence before accessing the array element.