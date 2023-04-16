
function banglaNumber($number){
    $make_array = str_split($number);
    $converted_number = '';
    foreach ($make_array as $item){
        if ($item == 0){
            $converted_number .= '০';
        }elseif ($item == 1){
            $converted_number .= '১';
        }elseif ($item == 2){
            $converted_number .= '২';
        }elseif ($item == 3){
            $converted_number .= '৩';
        }elseif ($item == 4){
            $converted_number .= '৪';
        }elseif ($item == 5){
            $converted_number .= '৫';
        }elseif ($item == 6){
            $converted_number .= '৬';
        }elseif ($item == 7){
            $converted_number .= '৭';
        }elseif ($item == 8){
            $converted_number .= '৮';
        }elseif ($item == 9){
            $converted_number .= '৯';
        } else{
            $converted_number .= $item;
        }
    }
    return $converted_number;
}
