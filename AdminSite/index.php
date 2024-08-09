<?php
require_once('config/db.php');
$query = "select * from reportlist";
$result = mysqli_query($con, $query);
$currentuser = $_COOKIE['name'];


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
                            <h2 class="display-6 text-center">Отчет по заявкам</h2>
                            <a href="RegistrationForm.php">Зарегестрировать пользователей</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    
                                    <td>Имя</td>
                                    <td>Номер телефона</td>
                                    <td>Почта</td>
                                    <td>Время выполнения</td>
                                </tr>
                                <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                    
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['PhoneNumber']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Time']; ?></td>
                                    
                                </tr>
                                <?php
                                }
                                
                                ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>