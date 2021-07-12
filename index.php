<?php
function task1($a){
    if($a === null){
        echo "Верно";
    }
    else{
        echo "Неверно";
    }
}

$a = null;
task1($a);

function task2($b){
    $b .= "";
    $b = $b[0] . 0 . $b[2];
    echo "<br/>$b";
}
$b = 121;
task2($b);

function task3(){
    echo "</br>";
    $a = 4;
    $b = 5;
    if(($a <= 1) && ($b >= 3)){
        echo $a + $b;
    }
    else {
        echo $a - $b;
    }
}

task3();

function task4() {
    echo "</br>";
    $str = "1bcdfg";
    if($str[0] === "a"){
        echo "Да";
    }
    else {
        echo "Нет";
    }
}

task4();

function task5(){
    echo "</br>";
    $str = "123123";
    if($str[0] + $str[1] + $str[2] === $str[3] + $str[4] + $str[5]){
        echo "да";
    }
    else{
        echo "нет";
    }
}

task5();

function task6(){
    echo "</br>";
    $degree = "120";
    if($degree <= 360 && $degree >= 0){
        $result = intdiv("$degree", "12");
        echo "Вы повернуты на $result часов";
    }
    else{
        echo "Введено не верное значение (значение должно быть от 0 до 360)";
    }
}

task6();

function task7(){
    for($i = 20; $i <= 45; $i++){
        if(($i % 5) == 0){
            echo "</br>$i";
        }
    }
}

task7();

function task8(){
    echo "</br>";
    $number = "66666";
    for($i = 0; $i <= 4; $i++){
        if(($i + 1) % 2 == 0){
            $number[$i] = 0;
        }
    }
    echo "$number";
}

task8();

function task9While()
{
    $n = 0;
    $num = 1000;
    while($num >= 50){
        $num = $num/2;
        $n++;
    }
    echo "</br>итераций: $n";
    echo "</br>число: $num";
}

task9While();

function task9For(){
    for($num = 1000; $num >= 50; $num = $num / 2){
        $n = $n + 1;
    }
    echo "</br>число $num";
    echo "</br>итераций $n";
}

task9For();
