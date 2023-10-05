
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container mt-4">
    <?php if($_COOKIE['user'] == ''):?>

    <div class="row">
        <h1>Форма регистрации</h1>
        <div class="col">
            <form action="validation-form/check.php" method="post">
                <div class="form-group">
                    <label for="">логин</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>    
                </div>
                <div class="form-group">
                    <label for="">имя</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" ><br>
                    
                </div>
                <div class="form-group">
                    <label for="">пароль</label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">    
                </div>
                
                
                <button type="submit" class="btn btn-success">Зарегестрировать</button>
            </form>
        </div>
        <div class="col">
            <h1>Форма авторизации</h1>
            <form action="validation-form/auth.php" method="post">
                <div class="form-group">
                    <label for="">логин</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>    
                </div>
                <div class="form-group">
                    <label for="">пароль</label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">    
                </div>
                
                
                <button type="submit" class="btn btn-success">Авторизоваться</button>
            </form>
        </div>
    </div>

    <?php else: ?>
    <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a> </p>


    <?php endif;?>

          
    </div>
</body>
</html>