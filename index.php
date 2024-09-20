<?php


function getHiddenCard($number,$stars=4){

    $one = strsub($number,12,4);
    $two = str_repeat('*',$stars);
    $result = "{$two}{$one}";

}

getHiddenCard("1234567812345678", 2);