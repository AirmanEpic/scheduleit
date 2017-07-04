<?php

function math_mod($x, $y) {
    // Regular modulo in PHP does some weird things with negative numbers. We
    // circumvent that here.
    return (($x % $y + $y) % $y);
}

// Given a difference metric function (which takes two values and produces a "metric" value)
// and a comparator function (which takes two metrics a and b and returns whether a <= b),
// creates a new function f(x, a, b) which checks whether x is in range [a, b].
function range_checker($diff, $cmp) {
    return function ($x, $a, $b) use ($diff, $cmp) {
        $x1 = $diff($x, $a);
        $b1 = $diff($b, $a);
        return $cmp($x1, $b1);
    };
}

// Returns whether the xth hour is between the ath and bth hours (inclusive, using military time).
function hours_in_range($x, $a, $b) {
    $diff = function ($a, $b) { return math_mod($a - $b, 24); };
    $cmp = function ($a, $b) { return ($a <= $b); };
    $hours_in_range = range_checker($diff, $cmp);
    return $hours_in_range($x, $a, $b);
}

?>