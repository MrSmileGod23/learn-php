<?php


//Уровень 1.6 задачника PHP

//№1 Дан массив с числами. Найдите сумму квадратов элементов этого массива.

function getOne(){
    $array = [3,3];
    $sum = 0;
    foreach ($array as $value){
        $sum = $sum + $value * $value ;
    }
    print_r($sum);
}

getOne();
print_r ("\n");



//№2 Дан массив с числами. Найдите сумму квадратных корней элементов этого массива.

function getTwo(){
    $array = [9,9];
    $sum = 0;
    foreach ($array as $value){
        $sum = $sum + sqrt($value) ;
    }
    print_r($sum);
}

getTwo();
print_r ("\n");



//№3 Дан массив с числами. Найдите сумму положительных элементов этого массива.

function getThree(){
    $array = [-1,-4,2,3];
    $sum = 0;
    foreach ($array as $value){
        if($value > 0){
            $sum = $sum + $value ;
        }
    }
    print_r($sum);
}

getThree();
print_r ("\n");



//№4 Дан массив с числами. Найдите сумму тех элементов этого массива, которые больше нуля и меньше десяти.

function getFour(){
    $array = [-1,-4,2,3,9,12];
    $sum = 0;
    foreach ($array as $value){
        if($value > 0 and $value < 10){
            $sum = $sum + $value ;
        }
    }
    print_r($sum);
}

getFour();
print_r ("\n");