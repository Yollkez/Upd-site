<?php
    setcookie('employee', $user['name'], time() - 3600, "/");
    header('Location: /');
?>