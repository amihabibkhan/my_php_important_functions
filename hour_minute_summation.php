function date_maker($date, $format){
    return date_format(date_create($date), $format);
}


function hourCalculator($time_1, $time_2){
    $minuite_1 = date_maker($time_1, 'i')/60;
    $minuite_2 = date_maker($time_2, 'i')/60;
    $made_time_1 = date_maker($time_1, 'H') + $minuite_1;
    $made_time_2 = date_maker($time_2, 'H') + $minuite_2;
    $total_hour = $made_time_1 + $made_time_2;
    $get_minute = ($total_hour - floor($total_hour)) * 60;
    $result = floor($total_hour) . '.' . $get_minute;
    return $result;
}

echo hourCalculator('5:30:00', '4:11:23');
