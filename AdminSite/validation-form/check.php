<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    $user_type = filter_var(trim($_POST['UserType']),FILTER_SANITIZE_STRING);

    if(mb_strlen($login)< 5 || mb_strlen($login) > 90){
        header('Location: ErrorSites/LoginEr.php') ;
        exit();
    }
    else if (mb_strlen($name)< 3 || mb_strlen($name) > 50){
        header('Location: ErrorSites/NameEr.php') ;
        exit();
    }
    else if (mb_strlen($pass)< 2 || mb_strlen($pass) > 10){
        header('Location: ErrorSites/PassEr.php') ;
        exit();
    }

    $pass = md5($pass."whhr21wa");

    $mysql = new mysqli('localhost','root','root','register-data');
    $mysql->query("INSERT `employee`(`login`,`pass`,`name`, `user_type`) VALUES('$login','$pass','$name','$user_type')");
    $mysql->close();
    
    header('Location: /AdminSite/RegSucces.php');
?>