<?php

function task1(array $arr)
{
    $min_arr_step = 0;
    function check_element($min_arr_step, $arr)
    {
        $max_arr_step = count($arr) - 1;
        if ($min_arr_step < $max_arr_step && $arr[$min_arr_step] != 0) {
            check_element($min_arr_step + $arr[$min_arr_step], $arr);
        } else if ($min_arr_step == $max_arr_step) {
            echo 'yes';
        } else {
            echo 'no';
        }
    }
    return check_element($min_arr_step, $arr);
};
