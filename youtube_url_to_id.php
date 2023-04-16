function urlToId($url)
{
    $sbstr = substr($url, 32);
    $sbstr_share = substr($url, 17);

    if (substr($url, 0, 17) == "https://youtu.be/"){
        $final_string = $sbstr_share;
    } else{
        $final_string = $sbstr;
    } 
    if  (strrchr($final_string, "&")){
        $character_needed = strpos($final_string, '&');
        return substr($final_string, 0, $character_needed);
    }else{
        return $final_string;
    }
}
