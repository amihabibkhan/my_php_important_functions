
function duration_calculator($starting_time, $ending_time){
    date_default_timezone_set('GMT');
    $starting_time_create = date_format(date_create($starting_time), 'H:i');
    $ending_time_create = date_format(date_create($ending_time), 'H:i');
    $result = strtotime($starting_time_create) - strtotime($ending_time_create); 
    return date('H:i', $result); 
}

echo duration_calculator('12:00 AM', '06:00 PM'); 
