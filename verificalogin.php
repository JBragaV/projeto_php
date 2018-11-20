<?php
    require "nova_acao_php/conecao.php";
    session_start();
    $login = isset($_POST['login'])?addslashes(trim($_POST['login'])):FALSE;
    $senha = isset($_POST['senha'])?md5(trim($_POST['senha'])):FALSE;
    //echo $senha;
    //echo "<br> $login";
    if(!$login || !$senha){
        echo "Você deve informar senha e login!!";
        exit;
    }
$sql = "SELECT * FROM usuario WHERE login = '{$login}' and senha = '{$senha}'";
$dados = $connect->query($sql);
//echo $dados;
$linha = $dados->fetch_assoc();
//echo $linha;
/*echo "Esse é o id ".$linha['ID'];
echo "<br>Esse é o nome ".$linha['nome'];
echo "<br> Esse é o tipo ".$linha['permicao'];
echo "<br> Essé o meu time ".$linha['time'];
//echo "<br> Esse é minha noticia ".$linha['noticia_idnoticia1'];
echo "<br> Esse é meu login ".$linha['login'];*/
if($linha){
    if($login == $linha["login"] && $senha == $linha["senha"]){
       //echo "funcionou";
       $_SESSION["id"] = $linha["ID"];
       $_SESSION["nome"] = $linha["nome"];
       $_SESSION["tipo"] = $linha["permicao"];
       $_SESSION["time"] = $linha["time"];
       /*echo "<br>".$_SESSION["id"];
       echo "<br>".$_SESSION["nome"];
       echo "<br>".$_SESSION["tipo"];
       echo "<br>".$_SESSION["time"];*/
       header("location:index.php");
    }
}else{
    echo"<h3>Senha ou logine incorretos</h3>";
}




?>