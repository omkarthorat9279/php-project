<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP website</title>
</head>
<body>
    <div class="container">
        This is my first php website.
        <br>

    <?php
    define('PI',3.14);
        echo "Hello world and this is printed using php";
        echo "<br>";
        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";
        echo "The value of variable1 + variable2 is : ";
        echo $variable1 + $variable2;

        echo "<br>";

        $newVar = $variable1;
        echo $newVar;
        echo "<br>";

        echo $variable1 ++;
        echo "<br>";
        echo $variable1;
        echo "<br>";

        echo ++$variable1;
        echo "<br>";
        echo $variable1;

        echo "<br>";

        $var = "This is aaaa string";

        echo var_dump($var);
        echo "<br>";
        $var = 67;

        echo var_dump($var);

        echo PI;
        

        



    ?>
    </div> 
    
</body>
</html>