<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial=scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма авторизации</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">

        <div class="container mt-4">
            
            <div class="row">
                <div class="col mt-5" >
                    <h1 class="text-white text-center">Авторизация</h1>
                <form style="text-align:center" class="mt-4" action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-info " type="submit">Авторизоваться</button>
                </form>
                </div>

            </div>
        </div>

    
    
</body>
</html>