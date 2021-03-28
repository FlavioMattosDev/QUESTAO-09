<?php
    session_start();

    if(isset($_SESSION['uname'])){

        echo "<h2>Bem-vindo ao seu Perfil</h2>";

        echo "<br><a href='bemvindo.php'><input type=button name=voltar value=voltar></a>";
    }
    else{
        echo "<script>location.href='login.php'</script>";
    }
?>