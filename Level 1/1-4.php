<?php


//Уровень 1.4 задачника PHP

//№1 Выведите в консоль все целые числа от 1 до 100.

function getOne(){

   for ($i = 1; $i <= 100; $i++){
       print_r("{$i} ");
   }

}

getOne();
print_r ("\n");



//№2 Выведите в консоль все целые числа от -100 до 0.

function getTwo(){

    for ($i = -100; $i <= 0; $i++){
        print_r("{$i} ");
    }

}

getTwo();
print_r ("\n");



//№3 Выведите в консоль все целые числа от 100 до 1.

function getThree(){

    for ($i = 100; $i >= 0; $i--){
        print_r("{$i} ");
    }

}

getThree();
print_r ("\n");



//№4 Выведите в консоль все четные числа из промежутка от 1 до 100.

function getFour(){

    for ($i = 1; $i <= 100; $i++){
        if($i % 2 == 0){
            print_r("{$i} ");
        }
    }

}

getFour();
print_r ("\n");



//№4 Выведите в консоль все числа кратные трем в промежутке от 1 до 100.

function getFive(){

    for ($i = 1; $i <= 100; $i++){
        if($i % 3 == 0){
            print_r("{$i} ");
        }
    }

}

getFive();
print_r ("\n");