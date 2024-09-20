<?php


//Уровень 1.5 задачника PHP

//№1 Найдите сумму всех целых чисел от 1 до 100.

function getOne(){
    $sum = 0;
    for ($i = 1; $i <= 100; $i++){
        $sum = $sum + $i;
    }
print_r($sum);
}

getOne();
print_r ("\n");



//№2 Найдите сумму всех целых четных чисел в промежутке от 1 до 100.

function getTwo(){
    $sum = 0;
    for ($i = 1; $i <= 100; $i++){
        if($i % 2 == 0) {
            $sum = $sum + $i;
        }
    }
    print_r($sum);
}

getTwo();
print_r ("\n");



//№3 Найдите сумму всех целых нечетных чисел в промежутке от 1 до 100.

function getThree(){
    $sum = 0;
    for ($i = 1; $i <= 100; $i++){
        if($i % 2 != 0) {
            $sum = $sum + $i;
        }
    }
    print_r($sum);
}

getThree();
print_r ("\n");



//№4 Даны два целых числа. Найдите остаток от деления первого числа на второе.

function getFour($one,$two){
    print_r($one % $two);
}

getFour(5,2);
print_r ("\n");



//№5 Дана некоторая строка. Переберите и выведите в консоль по очереди все символы с конца строки.

function getFive($string){

    $chars = str_split($string);

    foreach ($chars as $char){
        print_r("{$char} ");
    }

}

getFive("Hello");
print_r ("\n");