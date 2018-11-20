<?php
    require "conecao.php";
    if($_POST){
        $id=$_POST['id'];
    $sql = "DELETE FROM usuario WHERE id = {$id}";
    if($connect->query($sql) === TRUE){
        echo "<h2>Usuario excluido com sucesso!!!</h2>";
        echo "<a href='../index.php'><button type='button'>Página Principal</button></a>";
    }else{
        echo "Erro ao excluir torcedor: ". $connect->error;
    }
    $connect->close();
    }
?>