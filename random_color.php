<?php
    function random_color() {
        $dt = '';
        for($o=1;$o<=3;$o++)
        {
            $dt .= str_pad( dechex( mt_rand( 0, 175) ), 2, '0', STR_PAD_LEFT);
        }
        return $dt;
    } 