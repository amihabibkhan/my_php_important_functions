public function urlToId($url)
    {
        $sbstr = substr($url, 32);

        if  (strrchr($sbstr, "&")){
            $character_needed = strpos($sbstr, '&');
            return substr($sbstr, 0, $character_needed);
        }else{
            return $sbstr;
        }

    }
