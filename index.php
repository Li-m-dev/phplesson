<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<!-- <form action="" method="GET">

<input type="text" name="person">
<button>SUBMIT</button>

</form> -->

<?php
    // $name=$_GET['person'];
    // echo $name." is a handsome fellow!";

    // echo str_replace("Daniel", "Jason", "Hi Daniel");

    // $names = array("Daniel", "Dennis", "Michael");

    // echo $names['1'];

//    $a = 100;
//    echo $a;

// $x = 5;
// $y = 10;

// if($x == $y){
//     echo "True";
// }else{
//     echo 'False';
// }

// $x = 10;
// echo $x++;

// $x = 5;

// if($x==1){
//     echo "Daniel is very handsome";
// }else if($x == 2){
//     echo "Daniel is kinda handsome";
// }else {
//     echo "Dalsadfljasd";
// }


// switch($x){
//     case 1:
//     echo "The answer is 1";
//     break;
//     case 2:
//     echo "the answer is 2";
//     break;
//     case 3:
//     echo "The answer is 3";
//     break;
//     case 4:
//     echo "the answer is 4";
//     break;
//     default:
//     echo "there is no answer";
// }


// $dayofweek = date ('w');
// switch($dayofweek){
//     case 1:
//     echo "It is Monday";
//     break;
//     case 2:
//     echo "It is Tuesday";
//     break;
//     case 3:
//     echo "It is Wednesday";
//     break;
//     case 4:
//     echo "It is Thursday";
//     break;
//     case 5:
//     echo "It is Friday";
//     break;
//     case 6:
//     echo "It is Saturday";
//     break;
//     case 0:
//     echo "It is Sunday";
//     break;
// }

// $array = array('Daniel', "Jane", "Jacob", "John", "Mariane");

// foreach($array as $name){

//     echo "My name is  ". $name. "<br>";
// }

// $array = array('Daniel', "Jane", "Jacob", "John", "Mariane");

// echo $array[0];

// one function do one thing, so you can reuse it.
// $x = 100;
// function newCalc($x){
//     $newnr = $x * 0.75;
//     echo "Here is 75% of what you wrote: ".$newnr;
// }

// newCalc($x);

// echo "<br>";

// $x = 200;

// newCalc($x);


// $x = 5;

// function something(){
//     $y = 10;
//     echo $GLOBALS ['x'];
// }

// something();


setcookie('name', 'Daniel', time() + 86400);
// -86400 to destory the cookie

$_SESSION['name'] = '12';


?>



</body>
</html>