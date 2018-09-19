

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="username">
    <br>
    <input type="password" name="pwd" placeholder="password">
    <br>
    <button type="submit" name="submit">Sign up</button>
</form>
    
<?php
    // $sql = "SELECT * FROM users;";
    // $result = mysqli_query($conn,$sql);
    // $resultCheck = mysqli_num_rows($result);

    // if($resultCheck > 0){
    //     while ($row = mysqli_fetch_assoc($result)){
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }

   

?>

</body>
</html>