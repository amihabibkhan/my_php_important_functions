<?php

function make_number_ordinal($number){
    $suffix = date("S", mktime(0, 0, 0, 0, $number, 0));
    return $number . $suffix;
}

// it will return 1st, 2nd, 3rd........
