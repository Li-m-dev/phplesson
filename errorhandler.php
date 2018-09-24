

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error handler tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Signup</h2>
<form action="includes/signup2.inc.php" method="POST">

<?php
    if(isset ($_GET['first'])){
        $first = $_GET['first'];
        echo '<input type="text" name="first" placeholder="First name" value="'.$first.'">';
    }
    else{
       echo '<input type="text" name="first" placeholder="First name">';
    }

    if(isset ($_GET['last'])){
        $last = $_GET['last'];
        echo '<input type="text" name="last" placeholder="Last name" value="'.$last.'">';
    }
    else{
       echo '<input type="text" name="last" placeholder="Last name">';
    }
    
?>
    
    <input type="text" name="email" placeholder="E-mail">
<?php
    if(isset ($_GET['uid'])){
        $uid = $_GET['uid'];
        echo ' <input type="text" name="uid" placeholder="username" value="'.$uid.'">';
    }
    else{
       echo '<input type="text" name="uid" placeholder="username">';
    }
?>
    
    <input type="password" name="pwd" placeholder="password">
    <br>
    <button type="submit" name="submit">Sign up</button>
</form>

<?php
    // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // if(strpos($fullUrl, "signup2=empty") == true){
    //     echo "<p class='error'>You did not fill in all fields</p>";
    //     exit();
    // } else if(strpos($fullUrl, "signup2=char") == true){
    //     echo "<p class='error'>You use invalid characters</p>";
    //     exit();
    // } else if(strpos($fullUrl, "signup2=email") == true){
    //     echo "<p class='error'>You use an invaild email</p>";
    //     exit();
    // } else if(strpos($fullUrl, "signup2=success") == true){
    //     echo "<p class='success'>You have been signed up</p>";
    //     exit();
    // }


    if(!isset ($_GET['signup2'])){
            exit();
    }
    else{
        $signUpCheck = $_GET['signup2'];
        if($signUpCheck == "empty"){
            echo "<p class='error'>You did not fill in all fields</p>";
            exit();
        } elseif($signUpCheck == "char"){
            echo "<p class='error'>You use invalid characters</p>";
            exit();
        }elseif($signUpCheck == "email"){
            echo "<p class='error'>You use an invaild email</p>";
            exit();
        }elseif($signUpCheck == "success"){
            echo "<p class='success'>You have been signed up</p>";
            exit();
        }
    }

?>

</body>
</html>