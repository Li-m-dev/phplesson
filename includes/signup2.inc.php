<?php

    if(isset($_POST['submit'])){

        // include_once 'dbh.inc.php';

        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
            header("Location: ../errorhandler.php?signup2=empty"); 
            exit(); 
        }else{
            if (!preg_match("/^[a-zA-Z]*$/", $first)|| !preg_match("/^[a-zA-Z]*$/", $last)){
                header('Location: ../errorhandler.php?signup2=char');
                exit();
            }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../errorhandler.php?signup2=email&first=$first&last=$last&uid=$uid");
                exit();
            }else{
                header("Location: ../errorhandler.php?signup2=success");
                exit();
            }
        }
    }

    }else{
        header("Location: ../errorhandler.php");
        exit();
    }
    ?>