<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"   content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leran PHP</title>
</head> 
<body>
<!-- $_REQEST 
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post"> 
    Name : <input type=" text" name="fname">
    <input type="submit">
</form> 
-->

<!-- $_GET รับข้อมูลส่งมาจาก URL
<form action="test_get.php" method="get">
    Name <input type="text" name="name" >
    <br>
    Email <input type="text" name="email">
    <br>
    <input type="submit" >
</form>
-->

<!-- $_POST รับข้อมูลส่งมาจาก FORM
<form action="test_post.php" method="post">
    Name <input type="text" name="name" >
    <br>
    Email <input type="text" name="email">
    <br>
    <input type="submit" >
</form>
-->


    <?php 

        // ---------------------------------------------------
        //variable
        /* echo "Hello MyPHP";
        echo "<br>";
        $color = "red";
        $COLOR = "green";
        $name = "Pantawit";
        $age = 21;
        $numm = 12.5;
        echo "My Car is " . $color;
        echo "<br>";
        echo "My House is " . $COLOR;
        echo "<br>";
        echo "My Name is $name My Age is $age";
        echo "<br>"; */

        // ---------------------------------------------------
        //global % local scope (ขอบเขต)
        /* $x = 5; //global scope
        function myfunc(){
            $x = 10; //local scope
            echo "local output $x <br>";
        }
        myfunc();
        echo "global output $x"; */

        // ---------------------------------------------------
        //global keyword
        /*$x = 5;
        $y = 10;

        function test(){
            global $x , $y;
            echo $x + $y;
        }
        test(); */

        // ---------------------------------------------------
        //echo & print
        //echo more parameter
        //print one parameter
        /* echo "Hi PHP echo <br>" , "test1 " , "test2 <br>"; //ok
        //print "Hi PHP print" , "test1" , "test2"; //error
        $txt1 = "Learn PHP";
        $txt2 = "School";
        echo $txt1 . $txt2; //ok
        print "<br>";
        print $txt1 . $txt2; //ok */

        // ---------------------------------------------------
        //data types
        /*
            - String = "Hello World"  
            - Integer = 12345
            - Float = 31.4
            - Boolean = true , false
            - Arrar = array("a" , "b" , "c");
            - Object
            - NULL
        $name = "Tor";
        $num = 12345;
        $float = 3.14;
        $boolean = true;
        $arr = array("a" , "b" , "c");
        $text = "abc";
        $text = null;
        var_dump($name); //check data type
        echo "<br>";
        var_dump($num);
        echo "<br>";
        var_dump($float);
        echo "<br>";
        var_dump($boolean);
        echo "<br>";
        var_dump($arr);
        echo "<br>";
        var_dump($text);
        echo "<br>";
        echo $name[0] . $name[1] , $name[2]; */

        // ---------------------------------------------------
        //data type Object
        /* class car{
            function car(){
                $this->model = "BMW";
            }
        }
        //create an object
        $mycar = new car(); 

        //show object properties
        echo $mycar->model; */

        // ---------------------------------------------------
        //constants (ค่าคงที่)
        //constants are global
        //form define(name , value , case-insensitive(true , false)) 3 parameter
        //                           ให้เป็น case-insensitive หรือไม่? default = false
        //mostly define(name , value)
        /* define("give" , "welcome to my world");
        function mytest(){
            echo give;
        }
        mytest(); */

        // ---------------------------------------------------
        //array constants
        /* define("cars" , ["BMW" , "Ford" , "Mazda"]);
        echo cars[2]; */

        // ---------------------------------------------------
        // PHP operators
        //Arithmetic Operators
        // + - * / % **

        //Assihnment Operators
        // x = 10
        // x+= 10 ---> x = x + 10
        // x-= 10 ---> x = x - 10
        // x*= 10 ---> x = x * 10
        // x/= 10 ---> x = x / 10
        // x%= 10 ---> x = x % 10

        //compatison Operators
        //equal                         ==
        //indentical                    ===
        //not equal                     !=
        //not equal                     <>
        //not identical                 !==
        //greater than                  >
        //greater than or equal to      >=
        //less than or equal to         <=
        //spaceship                     <=>
        //Spaceship Operator
        //$x = 5;
        //$y = 10;
        //echo($x <=> $y); //return -1
        // echo($y <=> $x); //return +1
        // if $x = $y return 0

        //Increment / Decrement Operators
        //Pre-Increment     ++$x
        //Post-Increment    $x++
        //Pre-Decrement     --$x
        //Post-Decrement    $x--
        
        //Logical Operators
        //and   $x && $y
        //or    $x || $y
        //not   !$x

        //String Operators
        //Concatenation  .
        //$txt1 = "Hello ";
        //$txt2 = "World";
        //echo $txt1 . $txt2;
        //result Hello World

        //Concateration Assignment  .=
        //$txt1 = "Hello";
        //$txt2 = " World";
        //$txt1 .= $txt2;
        //echo $txt1;
        //result Hello World

        // ---------------------------------------------------
        //Associative array
        /* $x = array("a" => "red" , "b" => "blue");
        echo $x['b']; //blue
        echo "<br>";
        $age = array("N'tor" => "21" , "P'tor" => "24" , "xx" => "22" , "yy" => "23");
        foreach($age as $x => $x_value){
            echo "Name : " . $x . " Age is : " . $x_value;
            echo "<br>";
        } */

        // ---------------------------------------------------
        //switch statement
        /* $favnum = 7;
        switch($favnum){  
            case 3:
                echo "fav num is 3";
            break;
            case 5:
                echo "fav num is 5";
            break;
            case 7:
                echo "fav num is 7";
            break;
            default:
                echo 'fav num is not 3 5 7';
        } */

        // ---------------------------------------------------
        //PHP Loops
        //while
        /*while(condition is true){
            code to be executed
        }
        //do while
        do{
            code to be executed
        }
        while(condition is true);
        //for loop
        for($x=0 ; $x < 10 ; $x++){
            code to be executed
        }
        //foreach loop (loop array)
        foreach($array as $value){
            code to be executed
        } 
        //ex foreach
        $x = array("a" , "b" , "c" , "d");
        foreach($x as $value){
            echo $value . " " ;
        }
        $age = array("N'tor" => "21" , "P'tor" => "24" , "xx" => "22" , "yy" => "23");
        foreach($age as $name => $nameage){
            echo "Name : " . $name . " Age is : " . $nameage;
            echo "<br>";
        } */

        // ---------------------------------------------------
        //function
        /* function hi(){
            echo "Hi There";
        }
        Hi();

        function calplus($x , $y){
            echo $x + $y;
        }        
        calplus(5,10); */

        // ---------------------------------------------------
        //Array
        //$cars = array("honda" , "toyota" , "ford");
        //echo "My Fav Car is : $cars[2]";
        //echo "<br>";
        //function count array
        //echo count($cars);

        //tpyes of array
        // - Indexed Array
        //$x = array("a" , "b" , "c");

        // - Associative Array
        //$x = array("a" => "10" , "b" => "20" , "c" => "30");
        //or
        //$x["a"] = "10";
        //$x["b"] = "20";
        // $x["c"] = "30";
        //foreach loop
        //foreach($x as $key => $value){
        //    echo $key . " " . $value;
        //}
        
        // - Multidimenonal Array
        //  Name  |  Stock  |  Sold
        //   A    |   10    |   6
        //   B    |    8    |   3
        //   C    |    5    |   4
        //$x = array(
        //    array("A" , 10 , 6),
        //    array("B" , 8 , 3),
        //    array("C" , 5 , 4)
        //);
        //echo $x[0][0] . " Instock : " . $x[0][1] . " Sold : " . $x[0][2];
        //for ($y = 0 ; $y < 3 ; $y++){
        //    echo "row : $y";
        //    echo "<ul>";
        //        for($i = 0 ; $i < 3 ; $i++){
        //            echo "colum : $i";
        //            echo "<li>" . $x[$y][$i] . "</li>";
        //        }
        //    echo "</ul>";
        //}

        // ---------------------------------------------------
        //Superglobal Variables
        // $GLOBALS
        // $_SERVER
        // $_REQEST
        // $_POST
        // $_GET
        // $_FILES
        // $_ENV
        // $_COOKIE
        // $_SESSION
        
        //$GLOBALS
        /* $x = 5;
        $y = 10;
        function add(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "hi ";
        }
        add();
        echo $z; */

        //$_SERVER
        /*  echo $_SERVER["PHP_SELF"]; 
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["HTTP_HOST"];
        echo "<br>";
        echo $_SERVER["HTTP_USER_AGENT"];
        echo "<br>";
        echo $_SERVER["SCRIPT_NAME"];
        echo "<br>"; */

        //$_REQEST correct ข้อมูล เลือกข้อมูล หลังจากที่เรามีการกด submit form
        /* if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_REQUEST["fname"];
            if(empty($name)){
                echo "<br>";
                echo "name is emtyp";
            }
            else{
                echo "<br>";
                echo $name;
            }
        } */

        // ---------------------------------------------------
        //$_GET ส่งข้อมูลผ่านทาง URL    
        //$_POST ส่งข้อมูลผ่าน form

        // ---------------------------------------------------
        //$_SESSION

        $_SESSION["name"] = "Panatwit";
        $_SESSION["age"] = 21;




    ?>
</body>
</html>