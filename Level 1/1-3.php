<?php


//Уровень 1.3 задачника PHP

//№1 Дана строка. Если в этой строке более одного символа, выведите в консоль предпоследний символ этой строки.

function getOne($string){

    if(strlen($string)>1){
        print_r($string[-2]);
    }
    else{
        print_r("Ничего");
    }

}

getOne("Hello");
print_r ("\n");



//№2 Даны два целых числа. Проверьте, что первое число без остатка делится на второе.

function getTwo($one,$two){

    if($one % $two ==0){
        print_r("Делится без остатка");
    }
    else{
        print_r("Делится с остатком");
    }

}

getTwo(10,2);
print_r ("\n");