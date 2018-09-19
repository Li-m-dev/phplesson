<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="secondweb.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

<?php

$_SESSION['username'] = 'dani123';

echo $_SESSION['username'];

if(!isset($_SESSION['username'])){
    echo "you are not logged in!";
} else{
    echo "you are logged in";
}

?>

</body>
</html>