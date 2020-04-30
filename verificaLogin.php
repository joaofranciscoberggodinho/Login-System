
<link rel="stylesheet" type="text/css" href="./style/style.css">

<?php
    session_start();

    $email = 'candido@gmail.com';
    $password = '12345';

    $checkEmail = $_POST['email'];
    $checkPass = $_POST['senha'];

    $archive = fopen("login.txt","a+");

    if($checkPass == $password and $checkEmail == $email){
        $_SESSION['userLog'] = true;
        echo "<div id='logado'> Login efetuado com sucesso </div>";
        $passCrypt = md5($checkPass);
        fwrite($archive , "E-mail: " . $checkEmail . " Senha: " . $passCrypt . "\r\n");
    }

    elseif(!isset($_SESSION['userLog'])){
        header("Location: index.php");
    }

    fclose($archive);
    session_destroy();

?>