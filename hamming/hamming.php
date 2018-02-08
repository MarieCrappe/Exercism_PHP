<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    // Strings need to have the same lenght
    if (strlen($a) != strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    // Compare the strings, put into arrays first
    $result = array_diff_assoc(str_split($a), str_split($b));

    // Counting the values
    return count($result);
}