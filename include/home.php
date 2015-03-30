<?php

    include '../classes/account.php';
    include '../classes/session.php';

    $classe = new Conexao();
    $classe->Conecta();
    $rs = new Session();
    $rs->VerificaSessao();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
<div id="corpo">

    <div id="topo"></div>
    <div id="menu">
        <a href="">Dados do Usuario</a>
        <a href="">Imagens</a>
    </div>
    <div id="content">
        <h2>Mostrando Informacoes do Usuario Logado</h2>

        <?php

            $x   = mysql_query("SELECT * FROM account WHERE id = '$_SESSION[id]'");
            $lol = mysql_fetch_array($x);

            $nome = $lol['nome'];

            echo  "<p>Ola <strong>$nome</strong>, Bem vindo ao Painel de Controle Desenvolvido pelos Alunos do Curso de PHP C MySQL da Tecnoponta</p>";
            echo "<p>Seu Email: <strong>$lol[email]</strong></p>";
            echo  '<p>Sua Senha: <strong>'.$lol['password'].'</strong></p>';
        ?>



    </div>
    <div id="rodape"><p>Sistema desenvolvido pela equipe Tecnoponta Cursos 2015</p></div>

</div>
</body>
</html>