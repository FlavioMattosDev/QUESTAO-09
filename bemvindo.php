<?php

$uname="admin";
$pwd="admin";

session_start();

if(isset($_SESSION['uname'])){

    echo "<h1>Bem-vindo ".$_SESSION['uname']."</h1>";

    echo "<a href='perfil.php'>Perfil</a><br>";

    echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
}
else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){

    $_SESSION['uname']=$uname;

    echo "<script>location.href='bemvindo.php'</script>";
    }
    else{
        echo "<script>alert('Login ou senha incorreto!')</script>";

        echo "<script>location.href='login.php'</script>";
    }
}
?>