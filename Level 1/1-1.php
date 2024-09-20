<?php


//Уровень 1.1 задачника PHP

//№1 Дано число. Проверьте, отрицательное оно или нет. Выведите об этом информацию в консоль.

function getSignNumber($number){

    if($number == 0){
        print_r ("Ваше число 0");
    }
    elseif($number <= -1 ){
        print_r ("Ваше число отрицательное");
    }
    else{
        print_r ("Ваше число положительное");
    }

}

getSignNumber(-1);
print_r ("\n");



//№2 Дана строка. Выведите в консоль длину этой строки.

function getLengthString($string){

  print_r(strlen($string));

}

getLengthString("Hello, world!");
print_r ("\n");



//№3 Дана строка. Выведите в консоль последний символ строки.

function getLastChar($string){

    print_r($string[-1]);

}

getLastChar("Hello, world!");
print_r ("\n");



//№4  число. Проверьте, четное оно или нет.

function getEvenNumber($number){

    if($number % 2 == 0){
        print_r("Число четное");
    }
    else{
        print_r("Число нечетное");
    }

}

getEvenNumber(2);
print_r ("\n");



//№5 Даны два слова. Проверьте, что первые буквы этих слов совпадают.

function compareFistChar($one,$two){

    if($one[0] == $two[0]){
        print_r("Первые буквы слов совпадают");
    }
    else{
        print_r("Первые буквы слов несовпадают");
    }

}

compareFistChar("Hello","Hi");
print_r ("\n");



//№6 Дано слово. Получите его последнюю букву. Если слово заканчивается на o, то получите предпоследнюю букву.

function compareLastChar($word){

    if($word[-1] == "o"){
        print_r ($word[-2]);
    }
    else{
        print_r ("Не получилось");
    }

}

compareLastChar("Hello");
print_r ("\n");