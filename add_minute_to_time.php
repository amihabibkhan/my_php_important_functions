// add minutes 
function addOneMinute($time, $minute_to_add){
    $time = strtotime($time);
    return  date("H:i A", strtotime("+{$minute_to_add} minutes", $time));
}
