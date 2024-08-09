<?php
require_once('config/db.php');
$query = "select * from users_application";
$result = mysqli_query($con, $query);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Заявки</title>
</head>
<body class="bg-dark">
    <div>
        <div class="container mt-4">
            <a  class="btn btn-info" type="submit" href="config/exit.php">Выйти</a>
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Вы авторизовались как <?=$_COOKIE['user']?>, выберите таблицу для работы</h2>
                            
                        </div>
                        
                        <div class="card-body text-center">
                            <a href='Requests.php' class="btn btn-info">Заявки на услуги</a>
                            <a href='SuppRequests.php' class="btn btn-info">Заявки на поддержку</a>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

    </div>
    
                            

</body>
</html>