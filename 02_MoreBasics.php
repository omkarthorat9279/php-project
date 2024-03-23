<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: aqua;
    margin: auto;
    padding: 23px;


}
</style>
<body>
    <div class="container">
    <h1>Lets learn about PHP</h1>
    <p>Your party status is here:</p>
    <?php
    $age = 34;
    if($age>18){
        echo "You can go the party";
    }
    else if($age == 7){
        echo "You are 7 years old";

    }
    else{
        echo "You can not go the party";
    }

    $lang = array("PHP","Python","Html","css");
    echo $lang[0];
    
    //loops in php

    $a = 0;
    while($a <= 10){
        echo "<br>The value of a is :";
        echo $a;
        $a++;
    }

    $a = 0;
    while($a < count($lang)){
        echo "<br>The value of lang is :";
        echo $lang[$a];
        $a++;
    }

    $a = 0;
    while($a < count($lang)){
        echo "<br>The value of lang is :";
        echo $lang[$a];
        $a++;
    }

    $a = 20;
    do{
        echo "<br>The value of a is:";
        echo $a;

    }while($a < 10);

    //for loop
    for ($a=0; $a < 10; $a++) { 
        echo "<br>The value is:";
        echo $a;
    }

    //foreach

    foreach ($lang as $value) {
        echo "<br>The value is:";
        echo $value;
    }
     


    ?>
    </div>
    
</body>
</html>