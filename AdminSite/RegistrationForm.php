<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial=scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">
        <div class="container mt-4">
        <a  class="btn btn-info" type="submit" href="index.php">Назад</a>
            
            <div class="row">
                <div class="col mt-5">
                    <h1 class="text-white text-center">Регистрация пользователей</h1>
                <form style="text-align:center" class= "mt-4" action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <select class="form-control" name="UserType">
                                <option value="Employee">Сотрудник</option>
                                <option value="Admin">Администратор</option>
                    </select>         
                    <button class="btn btn-info mt-4" type="submit">Зарегистрировать</button>
                    
                </form>
                </div>
            

            </div>
        </div>

    
    
</body>
</html>