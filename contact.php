
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
    <?php
        echo $_POST['name'];

        echo $_SESSION['username'];
    ?>

    <form method="POST">
        <input type="hidden" name="name" value="LI">
        <button type="submit">Press me!</button>
    </form>


</body>
</html>