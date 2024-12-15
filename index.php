<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bt5</title>
	<!--css links-->
	<link rel="stylesheet"href="css/bootstrap.css">
	<link rel="stylesheet"href="css/style.css">
	<link rel="stylesheet"href="css/media.css">
</head>
<body>

      <div>
        <h1>1.String</h1>
        <?php
            $name = "rana khan";


         

      echo "$name";
       ?>
      </div>  


       <div>
        <h1>2.String</h1>
        <?php
            $name = "Hello";


         

      echo "$name";

      var_dump($name);
       ?>
      </div>  
      
      <div>
        <h1>3.Integer</h1>
        <?php
            $number=100;


        echo "$number";
       ?>
      </div>  


      <div>
        <h1>4.Integer</h1>
        <?php
            $number=1000;


         

      echo "$number";


   var_dump($number);

       ?>
      </div>  
   
    <h1>5.Float</h1>
        <?php
            $number=100.01;


         

      echo "$number";


   var_dump($number);

       ?>
      </div>  
  
  <h1>6.Float</h1>
        <?php
            $number=100.01;


         

      echo "$number";
       ?>
      </div>  


      <h1>7.Null</h1>
        <?php
            $number=null;


      echo "$number";
var_dump($number);

       ?>
      </div> 

      <h1>8.Boolean</h1>
        <?php
            $number= true;



      echo "$number";
       ?>
      </div>   

      <h1>9.Boolean</h1>
        <?php
            $number=true;


      echo "$number";
var_dump($number);

       ?>
      </div> 



<h1>10.Boolean</h1>
        <?php
            $number= false;



      echo "$number";
       ?>
      </div>   



<h1>11.Boolean</h1>
        <?php
            $number= false;



      echo "$number";
      var_dump($number);

       ?>
      </div>   

<h1>12. Array</h1>
        <?php
            $students = array("lamia","sabrina","Zerin",);



      echo $students[2];
      

       ?>
      </div>   



<h1>13. Array</h1>
        <?php
            $students = array("lamia","sabrina","Zerin",);



      echo $students[2];
      var_dump($students);

       ?>
      </div>   


<h1>14.index Array</h1>
        <?php
            $data = array("lamia","sabrina","Zerin", 100, 10.21, true);



      echo $data [5];
      

       ?>
      </div>   




<h1>15.index Array</h1>
        <?php
            $data = array("lamia","sabrina","Zerin", 100, 10.21, true);



      echo $data [5];
      var_dump($data);

       ?>
      </div>   


<h1>16.Associative Array</h1>
        <?php
            $data = array("lamia"=>50,"sabrina"=>60,"Zerin"=>70);



      echo $data ['sabrina'];
     

       ?>
      </div>   


<h1>17.Associative Array</h1>
        <?php
            $data = array("lamia"=>50,"sabrina"=>60,"Zerin"=>70);



      echo $data ['sabrina'];
     var_dump($data); 

       ?>
      </div>   


<h1>18.Addition</h1>
        <?php

            $number1= 50;
            $number2= 60;

     $result= $number1 + $number2;

      echo "$result";
     

       ?>
      </div>   


<h1>19.Substraction</h1>
        <?php

            $number1= 500;
            $number2= 60;

     $result= $number1 - $number2;

      echo "$result";
     

       ?>
      </div>  



<h1>20.multiplication</h1>
        <?php

            $number1= 500;
            $number2= 60;

     $result= $number1 * $number2;

      echo "$result";
     

       ?>
      </div>  



<h1>21.divition</h1>
        <?php

            $number1= 120;
            $number2= 60;

     $result= $number1 / $number2;

      echo "$result";
     

       ?>
      </div>  


<h1>22.modulus</h1>
        <?php

            $number1= 120;
            $number2= 60;

     $result= $number1 % $number2;

      echo "$result";
     

       ?>
      </div>  




<div>
        <h1>23. Arrays</h1>
        <?php 
        $names = array("apple", "banana", "cherry"); 

        echo $names [2]; 

        ?>
      </div>
      


<div>
        <h1>24. Arrays</h1>
        <?php 
        $names = array("apple", "banana", "cherry"); 

        echo $names [2]; 
        var_dump($names);

        ?>
      </div>


<div>
        <h1>25. Associative Arrays</h1>
        <?php 
        $assocArray = array("name" => "John", "age" => 25); 
        echo $assocArray["age"]; 
        ?>
      </div>




<div>
        <h1>26. Associative Arrays</h1>
        <?php 
        $assocArray = array("name" => "John", "age" => 25); 
        echo $assocArray["age"]; 
        var_dump($assocArray);
        ?>
      </div>



<div>

<h1>27.modulus</h1>
        <?php

            $number1= 100;
            $number2= 60;

     $result= $number1 % $number2;

      echo "$result";
     

       ?>
      </div>  


<div>
<h1>28.modulus</h1>
        <?php

            $number1= 100;
            $number2= 60;

     $result= $number1 % $number2;

      echo "$result";
     var_dump($result);

       ?>
      </div>  

<div>
<h1>29.divition</h1>
        <?php

            $number1= 1200;
            $number2= 60;

     $result= $number1 / $number2;

      echo "$result";
     

       ?>
      </div>  
<div>
<h1>30.divition</h1>
        <?php

            $number1= 1200;
            $number2= 60;

     $result= $number1 / $number2;

      echo "$result";
     var_dump($result);

       ?>
      </div>  


<div>
<h1>31.escape string</h1>
        <?php
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;

       ?>
      </div>  


<div>
<h1>32.modify string</h1>
        <?php
$x = "Hello World!";
echo strtoupper($x);

       ?>
      </div>  



<div>
<h1>33.Concatenate Strings</h1>
        <?php
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

       ?>
      </div>  


     
<div>
<h1>34.Slicing Strings</h1>
        <?php
$x = "Hello World!";
echo substr($x, 6, 5);

       ?>
      </div>




<div>
<h1>35.Slicing Strings</h1>
        <?php
$x = "Hello World!";
echo substr($x, -5, 3);

       ?>
      </div>



<div>
<h1>36.Infinity</h1>
        <?php
// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);

       ?>
      </div>


<div>
<h1>37.NaN</h1>
        <?php
// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);

       ?>
      </div>

 

<div>
<h1>38.Boolean</h1>
     
<pre>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);
?> 
</pre>

<p>If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.</p>
      </div>


<div>
<h1>39.pi() Function</h1>
        <?php
echo(pi());

       ?>
      </div>




<div>
<h1>40.sqrt() Function</h1>
        <?php
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
       ?>
      </div>

<div>
<h1>41.round() Function</h1>
        <?php
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
       ?>
      </div>

<div>
<h1>42.PHP Constant</h1>
        <?php
// case-sensitive constant name
define("GREETING", "Welcome to World!");
echo GREETING;
       ?>
      </div>




<div>
<h1>43.Constant Arrays</h1>
        <?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
       ?>
      </div>


<div>
<h1>44.Magic Constants</h1>
        <?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
       ?>
      </div>



<div>
<h1>45.Magic Constants</h1>
        <?php
echo __LINE__;
       ?>
      </div>

<div>
<h1>46.if Statements</h1>
        <?php
if (5 > 3) {
  echo "Have a good day!";
}
       ?>
      </div>



<div>
<h1>47.if Operators</h1>
        <?php
$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}
       ?>
      </div>


<div>
<h1>48.if Operators</h1>
        <?php
$x = 100;  
$y = 100;

if ($x === $y) {
  echo "$x is identical to $y";
}
       ?>
      </div>



<div>
<h1>49.PHP while Loop</h1>
        <?php
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
       ?>
      </div>


<div>
<h1>50.PHP Functions</h1>
        <?php
function myMessage() {
  echo "Hello world!";
}

myMessage();
       ?>
      </div>









<!--script links-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>