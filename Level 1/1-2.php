<?php


//Уровень 1.2 задачника PHP

//№1 Дано число. Выведите в консоль первую цифру этого числа.

function getFirstChar($number){

    $one = (string)$number;
    print_r($one[0]);

}

getFirstChar(2312312);
print_r ("\n");



//№2 Дано число. Выведите в консоль последнюю цифру этого числа.

function getLastChar($number){

    $one = (string)$number;
    print_r($one[-1]);

}

getLastChar(23123124);
print_r ("\n");



//№3 Дано число. Выведите в консоль сумму первой и последней цифры этого числа.

function getSumLastFirstChar($number){

    $one = (string)$number;

    print_r($one[0]+$one[-1]);

}

getSumLastFirstChar(23123124);
print_r ("\n");



//№4 Дано число. Выведите количество цифр в этом числе.

function getCountNumber($number){

    print_r(strlen($number));

}

getCountNumber(23123124);
print_r ("\n");



//№5 Даны два числа. Проверьте, что первые цифры этих чисел совпадают.

function getCompareFirstChar($one,$two){
    $oneS = (string)$one;
    $twoS = (string)$two;

    if($oneS[0] == $twoS[0]){
        print_r("Первые цифры совпадают");
    }
    else{
        print_r("Первые цифры несовпадают");
    }

}

getCompareFirstChar(2332,2443);
print_r ("\n");