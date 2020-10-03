<?php

// get total days of a month by 't'
echo date('t', strtotime('2020-02')); // it will print 29

// get last date of month
echo date('Y-m-t', strtotime('2020-02')); // it will print 2020-02-29

// day remaining
function dayRemaining($month){
    $last_date_of_month = date_create(date('Y-m-t', strtotime($month)));
    $today = date_create(date('Y-m-d'));
    $differ = date_diff($today, $last_date_of_month); 
    $result  = $differ->format('%R%a');
    if ($result > 0) {
        return $differ->format('%a');
    }else{
        return 0;
    }
}

// day remaining for year also 
function dayRemaining($date, $type=1){
    if($type != 1){
        $date = $date . '-12-31';
    }

    $last_date_of_month = date_create(date('Y-m-t', strtotime($date)));
    $today = date_create(date('Y-m-d'));
    $differ = date_diff($today, $last_date_of_month);
    $result  = $differ->format('%R%a');
    if ($result > 0) {
        return $differ->format('%a');
    }else{
        return 0;
    }
}

