<?php
    require "nova_acao_php/conecao.php";
    if($_GET["ID"]){
        $id=$_GET["ID"];
        //echo $id;
        $sql="SELECT * FROM usuario WHERE id='{$id}'";
        $dados=$connect->query($sql);
        $linha=$dados->fetch_assoc();
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apagar</title>
</head>
<body>
    <h3>Tem certeza que deseja apagar <?php echo $linha["nome"];?> do banco de dados</h3>
    <form action="nova_acao_php/excluir.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" value="Sim"><span> </span><a href="index.php"><button type="button">Não</button></a>
    </form>
</body>
</html>