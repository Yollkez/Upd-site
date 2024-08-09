<?php
require_once('config/db.php');
$query = "select * from users_sup_request";
$result = mysqli_query($con, $query);


// Удаление пользователей

if( isset($_GET['id'])){
    $id = $_GET['id'];
    $add=mysqli_query( $con,"INSERT INTO `reportlist`(`name`, `PhoneNumber`, `Email`) SELECT `FirstName`, `PhoneNumb`, `Email` FROM `users_sup_request` WHERE `id`= '$id'");
    $delete=mysqli_query( $con,"DELETE FROM `users_sup_request` WHERE `id`= '$id'");
    header('location:SuppRequests.php');
    
} 

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
            <a  class="btn btn-info" type="submit" href="ChoseTable.php">Назад</a>
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center">Заявки на поддержку</h2>
                            
                        </div>
                        
                        <div class="card-body">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Поиск по имени" title="Type in a name" class="input-group"> 

                            <table class="table table-bordered text-center mt-3" id="myTable">
                                <tr class="bg-dark text-white ">
                                    
                                <th style="width:15%;">Имя</th>
                                    <th style="width:15%;">Номер телефона</th>
                                    <th style="width:25%;">Почта</th>
                                    <th style="width:30%;">Время поступления заявки</th>
                                    <th style="width:15%;"></th>
                                </tr>
                                <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                    
                                    <td><?php echo $row['FirstName']; ?></td>
                                    <td><?php echo $row['PhoneNumb']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Time']; ?></td>
                                    <td><a href='SuppRequests.php?id= <?php echo $row['id'];?>' class="btn btn-primary">Принять</a></td>
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
    <script>
    function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
    }



    
    </script>
                            

</body>
</html>