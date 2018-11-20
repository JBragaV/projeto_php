<?php
    require "nova_acao_php/conecao.php";
    if($_GET['ID']){
        $id = $_GET['ID'];
        //echo $id;
        $sql = "SELECT * FROM usuario WHERE ID='{$id}'";
        $dados=$connect->query($sql);
        $linha=$dados->fetch_assoc();
        $connect->close();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
<fieldset>
    <legend>Editar Toredor</legend>
        <form action="nova_acao_php/modificacao.php" method="post">
            <table>
            <tr>
                <th>Nome:</th>
                <td><input type="text" name="nome" placeholder="Nome completo" value="<?php echo $linha['nome']?>"></td>
            </tr>
            <tr>
                <th>Login:</th>
                <td><input type="text" name="login" placeholder="Login" value="<?php echo $linha['login']?>"></td>
            </tr>
            <tr>
                <th>Senha:</th>
                <td><input type="password" name="senha" placeholder="Nova Senha"></td>
            </tr>
            <tr>
                <th>Permição:</th>
                <td><input type="text" name="permicao" placeholder="Permição" value="<?php echo $linha['permicao']?>"></td>
            </tr>
            <tr>
                <th>Time do Coração:</th>
                <td><input type="text" name="time" placeholder="Time" value="<?php echo $linha['time']?>"></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $linha['ID']?>">
                <td><button type="submit">Salvar modificações</button></td>
                <td><a href="index.php"><button type="button">Voltar</button></a></td>
            </tr>                
            </table>
        </form>
</fieldset>
    
</body>
</html>