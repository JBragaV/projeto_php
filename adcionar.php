<?php
    require "conecao.php";
if($_POST){
    $nome = $_POST["nome"];
    $login = addslashes(trim($_POST['login']));
    $senha = md5(trim($_POST['senha']));
    $tipoUsuario = $_POST["tipo"];
    $time = $_POST["time"];
    $sql = "INSERT INTO usuario (nome, login, senha, permicao, time)
            VALUES ('$nome', '$login', '$senha', '$tipoUsuario', '$time')";
    if($connect->query($sql) === TRUE){
        echo "<p>Torcedor adcionado com sucesso!!!</p>";
        echo "<a href='../action.html'><button type='button'>Voltar</button></a>";
        echo "<a href='../index.php'><button type='button'>Página Inicial</button></a>";
    }else{
        echo "Erro ".$sql.' '.$connect->connect_error;
    }
    $connect->close();
}
?>