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
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->
    
    <?php //echo "<b>Hellow my name is James</b>";

    // aZ09_
    /*$a = 5;
    var_dump($a);

    var_dump("James");
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

    $a = "James";
    $b = -5;  
    $c = 3.14;
    $d = false;
    $e = [1,2,3];   
    $f = new stdClass();
    $g = null;
    $h = fopen("php_practice.php", "r");

    var_dump($a);
    echo '<br>';
    var_dump($b);
    echo '<br>';
    var_dump($c);
    echo '<br>';
    var_dump($d);
    echo '<br>';
    var_dump($e);
    echo '<br>';
    var_dump($f);
    echo '<br>';
    var_dump($g);
    echo '<br>';
    var_dump($h);
    echo '<br>';

?>
</body>
</html>