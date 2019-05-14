<?php

/*
Given a non-empty array of integers,
return the result of multiplying the values together in order.
*/

function grow($a) {
    return array_product($a);
}

/*

function grow($a) {
    $result = 1;
    foreach ($a as $value){
        $result = $result * $value;
    }
    return $result;
}

*/