<?php
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

$pass = md5($pass."whhr21wa");

$mysql = new mysqli('localhost','root','root','register-data');

$result = $mysql->query("SELECT * FROM `employee` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
if(($user) == 0){
    header('Location: AuthEr.php') ;
    exit();
}
    
setcookie('user', $user['name'], time() + 3600, "/");
if($user['user_type'] == 'Employee'){
    header('Location: /EmployeeSite/ChoseTable.php');
}
elseif($user['user_type'] == 'Admin'){
    header('Location: /AdminSite/index.php');
}
else{
    echo "<h1>Ошибка роли пользователя</h1>";
}

$mysql->close();
    
