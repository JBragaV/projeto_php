<?php
    require "verifica.php";//verificação
    require "nova_acao_php/conecao.php";//coneção
    //session_start();
    /*echo "<br>".$_SESSION["id"];
    echo "<br>".$_SESSION["nome"];
    echo "<br>".$_SESSION["tipo"];
    echo "<br>".$_SESSION["time"];*/
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    
</body>
</html>
    <div class = "container-fluid">
    <div class = "row">
    <div class = "col-3 bg-success"></div>
    <div class = "col-6">
    <?php 
        if($_SESSION["tipo"]=="administrador"){
            $sql = "SELECT * FROM usuario";
            $dados = $connect->query($sql);
            $linha = $dados->fetch_assoc();
            //$total = count($linha);
            echo "<p>Bem Vindo <b>".$_SESSION['nome']."</b>. Você é ".$_SESSION["tipo"].".</p>";
    ?>
    <a href = "action.html"><button type = "button">Adcionar novo torcedor</button></a>
    <a href = "sair.php"><button type = "button">Sair</button></a>
    <table border = "1">
        <tr>
            <th>Nome</th>
            <th>Time</th>
            <th>Bandeira</th>
            <th>Tipo Usuário</th>
            <th>Opções</th>
        </tr>
    <?php
            do{
    ?>
                <tr>
                    <td>
                        <?=$linha['nome']?>
                    </td>
                    <td>
                        <?=$linha['time']?>
                    </td>
                    <td>
                        <!--<img src="<?= $linha['bandeira']?>"width="50px">-->
                    </td>
                    <td>
                        <?=$linha['permicao']?>
                    </td>
                    <td>
                        <a href="editar.php?ID=<?=$linha['ID']?>"><button type="button">Editar</button></a>
                        <a href="remover.php?ID=<?=$linha['ID']?>"><button type="button">Excluir</button></a>
                    </td>
                </tr>
    <?php
            }while($linha = mysqli_fetch_assoc($dados));
        }else{
            $sqli="SELECT * FROM usuario WHERE ID='{$_SESSION['id']}'";
            $dados=$connect->query($sqli);
            $linha=$dados->fetch_assoc();
            echo "<p>Bem Vindo <b>".$linha['nome']."</b>. Você é ".$linha["permicao"].".</p>";
            ?>
                <a href = "sair.php"><button type = "button">Sair</button></a>
                <table border = "1">
                        <tr>
                            <th>Nome</th>
                            <th>Time</th>
                            <th>Bandeira</th>
                            <th>Tipo Usuário</th>
                            <th>Opções</th>
                        </tr>
            <?php
            do{
                ?>
                        <tr>
                            <td>
                                <?=$linha['nome']?>
                            </td>
                            <td>
                                <?=$linha['time']?>
                            </td>
                            <td>
                                <!--<img src="<?= $linha['bandeira']?>"width="50px">-->
                            </td>
                            <td>
                                <?=$linha['permicao']?>
                            </td>
                            <td>
                                <a href="editar.php?ID=<?=$linha['ID']?>"><button type="button">Editar</button></a>
                                <!--<a href="remover.php?ID=<?=$linha['ID']?>"><button type="button">Excluir</button></a>-->
                            </td>
                        </tr>
                <?php
                            }while($linha = mysqli_fetch_assoc($dados));
        }
    ?>
    </div>
    <div class = "col-3 bg-success"></div>
    </div>
    </div>
    </table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php
    mysqli_free_result($dados);
?>