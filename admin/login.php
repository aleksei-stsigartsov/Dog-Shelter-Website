<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    main {
        display: flex;
        height: 10vh;
        justify-content: center;
        align-items: center;
    }
</style>

<body>

    <main style="margin-top: 20px;">
        <form action="./login-action.php" method="post" class="row g-3 col-md-6" style="width: 400px;">
            <h2>Вход в админку</h2>
            <div class="col-md-12">
                <label for="var-title" class="form-label">Логин</label>
                <input type="text" class="form-control" name="login" id="var-title">
            </div>
            <div class="col-md-12">
                <label for="var-title" class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password" id="var-title">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
        </form>
    </main>


    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>