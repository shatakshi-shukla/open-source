<?php
/**
 * Language: php
 * Name: Ahmed Dabak
 * Github: https://github.com/ahmeddabak/
 */

function fizzbuzz($n)
{
    if ($n % 3 == 0 and $n % 5 == 0)
        return 'FizzBuzz';
    elseif ($n % 3 == 0)
        return 'Fizz';
    elseif ($n % 5 == 0)
        return 'Buzz';
    else {
        return (string)$n;
    }
}
