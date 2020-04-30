<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <title>Login</title>
</head>
<body>
    <form action="verificaLogin.php" method="post">
        E-Mail: <input required=required type=email name=email id=email><br>
        Senha: <input required=required type=text name=senha id=senha><br>
        <input id=botao type=submit value="ENVIAR">
    </form>
</body>
</html>