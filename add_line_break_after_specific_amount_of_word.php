<?php

// string break for slider
function str_breaker ($string){
    $arr_str = explode(" ", $string);
    $new_str = '';
    $count = count($arr_str);
    if ($count > 4) {
        foreach ($arr_str as $key => $val) {
            if ( $key % 9 == 8 ) {
                $new_str .= $val . ' <br> ';
                continue;
            }
            $new_str .= $val . ' ';
        }
    } else {
        foreach ($arr_str as $key => $val) {
            $new_str .= $val . ' ';
        }
    }
    return $new_str;
}
