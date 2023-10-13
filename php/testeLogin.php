<?php
session_start();

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    //Entrar
    include_once('conn.php');
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']); //cripto


    $sql = "SELECT * FROM clientes WHERE  usuario = '$usuario' AND senha = '$senha'";

    $result = $conexao->query($sql);



    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        $row = $result->fetch_assoc(); //linha de consulta
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        $_SESSION['id'] = $row['id']; // pegar o id do row
        $_SESSION['email'] = $row['email']; //pegar o email do row
        header('Location: ../index.php');
    }
} else {
    header('Location: login.php');
}
