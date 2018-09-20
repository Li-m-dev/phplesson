<?php

include_once 'includes/dbh.inc.php';

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

    $data = "Admin";

    // create a template:
    $sql = "SELECT * FROM users WHERE user_uid =?;"; 
    // $result = mysqli_query($conn,$sql);
    // $resultCheck = mysqli_num_rows($result);

    //create a prepared statement
    $stmt = mysqli_stmt_init($conn);

    //prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed";
    }else{
        mysqli_stmt_bind_param($stmt, "s", $data);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)){
            echo $row['user_uid'] . "<br>";
        }
    }

 
       
    

   

?>

</body>
</html>