<?php
    require "conecao.php";
    if($_POST){
        $nome = $_POST["nome"];
        $login = addslashes(trim($_POST['login']));
        $senha = md5(trim($_POST['senha']));
        $permicao = $_POST["permicao"];
        $time = $_POST["time"];
        $id = $_POST['id'];
        
    $sql = "UPDATE usuario SET Nome='$nome', login='$login', senha='$senha', permicao='$permicao', time='$time' WHERE ID = {$id}";
    if($connect->query($sql)){
        echo "<p> Modificação realizada com sucesso!!!";
        echo "<p><a href='../editar.php?ID='".$id."'><button type='button'>Voltar</button></a>";
        echo "<a href='../index.php'><button type='button'>Página Inicial</button></a></p>";
    }else{
        echo "Erro ao tentar editar o torcedor: ". $connect->error;
    }
    $connect->close();
    }
?>