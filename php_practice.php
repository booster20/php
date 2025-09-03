<!--Hello World!

<h1>Hello World!</h1>

<style>
    h1 {
        color:blue;   
    }
</style>

<script>    
    alert("Hello World!");
</script>
-->

<?php 
    //echo "Hello World!";
    # echo "Hello World!";
?>

<!-- Hello -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->
    
    <?php //echo "<b>Hellow my name is James</b>";

    // aZ09_
    /*$a = 5;
    var_dump($a);

    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([1,2,3]);
    var_dump(null);
    */

    // $a =5;//global

    // echo $a."<br>";

    // function test(){
    //     //$a = 0; //local
    //     static $a = 0; //static
    //     echo $a."<br>";
    //     $a++;
    // }
   
    // test();
    // test();

    // echo("Hello<br>"),("Hello<br>"),("Hello<br>");
    // echo "World!<br>","World!<br>","World!<br>";
    // print("Hello<br>");
    // print "World!<br>";
    
    // $a =5;
    // echo "$a Eggs";

    $a = "John Cruz";
    $b = -5;  
    $c = 3.14;
    $d = false;
    $e = [1,2,3];   
    $f = new stdClass();
    $g = null;
    $h = fopen("php_practice.php", "r");

    // var_dump($a);
    // echo '<br>';
    // var_dump($b);
    // echo '<br>';
    // var_dump($c);
    // echo '<br>';
    // var_dump($d);
    // echo '<br>';
    // var_dump($e);
    // echo '<br>';
    // var_dump($f);
    // echo '<br>';
    // var_dump($g);
    // echo '<br>';
    // var_dump($h);
    // echo '<br>';
    
    // echo strlen($a), "<br>";
    // echo str_word_count($a), "<br>";
    // echo strpos($a, "Day"), "<br>";
    // echo strtoupper($a), "<br>";
    // echo strtolower($a), "<br>";
    // echo str_replace("Day", "Maliwat", $a), "<br>";
    // echo strrev($a), "<br>";
    // echo trim("Hello Love! "), "<br>";
    // var_dump(explode("o", "Hello Love!"));
    
    // echo var_dump("Hello" . "World!");
    // $x = "Hello";
    // $y = "World";

    // echo "$x $y <br>";

    // echo "John \$Bay \" Cruz";

    // $a = 5;
    // $b = 3.14;
    // $c = "5";

    // echo PHP_INT_MAX, "<br>";
    // echo PHP_INT_MIN, "<br>";
    // echo PHP_INT_SIZE, "<br>";

    // echo is_int($c), "<br>";

    // echo PHP_FLOAT_MAX, "<br>";
    // echo PHP_FLOAT_MIN, "<br>";
    // echo PHP_FLOAT_DIG, "<br>";
    // echo PHP_FLOAT_EPSILON, "<br>";

    // echo is_float($b), "<br><br>";

    // echo is_numeric($c), "<br>";

    // $a = (string) "John Cruz";
    // $b = (string) -5;  
    // $c = (string) 3.14;
    // $d = (string) true;
    // $e = (string) null;
    // $f = (string) fopen("php_practice.php", "r");

    // $a = (int) "John Cruz";
    // $b = (int) -5;  
    // $c = (int) 3.14;
    // $d = (int) false;
    // $e = (int) null;
    // $f = (int) fopen("php_practice.php", "r");

    // $a = (float) "John Cruz";
    // $b = (float) -5;  
    // $c = (float) 3.14;
    // $d = (float) false;
    // $e = (float) null;
    // $f = (float) fopen("php_practice.php", "r");

    // $a = (bool) "John Cruz";
    // $b = (bool) -5;  
    // $c = (bool) 3.14;
    // $d = (bool) false;
    // $e = (bool) null;
    // $f = (bool) fopen("php_practice.php", "r");

    // $a = (array) "John Cruz";
    // $b = (array) -5;  
    // $c = (array) 3.14;
    // $d = (array) false;
    // $e = (array) null;
    // $f = (array) fopen("php_practice.php", "r");

    // $a = "John Cruz";
    // $b = -5;  
    // $c = 3.14;
    // $d = false;
    // $e = null;
    // $f = fopen("php_practice.php", "r");

    // unset($a);

    // var_dump($a);
    // echo '<br>';
    // var_dump($b);
    // echo '<br>';
    // var_dump($c);
    // echo '<br>';
    // var_dump($d);
    // echo '<br>';
    // var_dump($e);
    // echo '<br>';
    // var_dump($f);
    // echo '<br>';

    // echo pi();

    // echo min (5,1,3,2);
    // echo max (5,1,3,2);

    // echo abs(-10);

    // echo sqrt(16);

    // echo round(3.45);

     //echo rand(5, 10);

    // constants
    // $x = 10;
    // define("_GREETING", "Hello World!");

    // //echo $x;
    // //var_dump(_GREETING);

    // const _GREETING2 = "Hello People!"

    // echo _GREETING2;

    // function test (){
    //     echo _GREETING2;
    // }
    
    // test();

    // echo $x;
    // unset(_GREEETING);
    // //echo _GREETING;

    // arithmetics

    // // + addittion
    // echo 10 + 100 + 20, "<br>";
    // // - subtraction
    // echo 10 - 100 - 20, "<br>";
    // // add and subtract 
    // echo 10 - 20 + 100 - 10, "<br>";
    // // * multiplication
    // echo 10 * 10 * 10, "<br>";
    // // \ division
    // echo 10 / 5 / 2, "<br>";
    // // multi and div
    // echo 10 / 5 * 2, "<br>";
    // // add, sub, div and multi
    // echo 50 + 10 / 2, "<br>"; // di, multi before add,sub
    // // % modulus
    // echo 7 % 3 , "<br>";
    // // ** exponential
    // echo 10 ** 10, "<br>";

    // assignment 
    // = equals
    // $x = 10;

    // +=
    // $x = $x + 10;
    // $x += 10;
    // echo $x;

    // -=
    // $x = $x - 10;
    // $x -= 10;
    // echo $x;
    
    // /=
    // $x = $x / 10;
    // $x /= 10;
    // echo $x;

    // *=
    // $x = $x * 10;
    // $x *= 10;
    // echo $x;

    //comparison
    // // == equals to = similar value 
    // var_dump(10 == "10");
    // // === identical = similar value and data type
    // var_dump(10 == "10");
    // // != <> not equals to = not similar value
    // var_dump(10 != "10");
    // var_dump(10 <> "10");
    // // !== not identical = not similar value and data type
    // var_dump(10 !== "10");
    // // < less than = check if the first value is less than to the second value 
    // var_dump(10 < 11);
    // // > greater than = check if the first value is greater than to the second value 
    // var_dump(10 > 11);
    // // <= less than or equal to = check if the first value is less than to the second value or equal
    // var_dump(10 <= 11);
    // // >= greater than or equal to = check if the first value is greater than to the second value or equal
    // var_dump(10 >= 11);
    // // <=> spaceship
    // var_dump(1 <=> 2);
    // var_dump(2 <=> 2);
    // var_dump(3 <=> 2);

    // incre/decre
    
    //pre-incre
    // $x = 10;
    // echo ++ $x, "<br>";
    // echo -- $x, "<br>";
    // //post-incre
    //  $y = 10;
    // echo $y++, "<br>";
    // echo $y--, "<br>";
    // echo $y, "<br>";
    
   
?>
</body>
</html>