<?php

    include 'classes/account.php';

    $classe = new Conexao();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div id="corpo">

    <div id="topo"></div>
    <div id="menu">
        <a href="">Inicio</a>
        <a href="">Login</a>
    </div>
    <div id="content">
        <h2>Sistema de Login Curso Tecnoponta</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <?php

                $account = new Account();

                if (isset($_POST['Login'])):


                    $email    = $_POST['email'];
                    $password = $_POST['password'];

                    $account->getMail($email);
                    $account->getPass($password);

                    if ($account->Login()) {

                    }

                endif;
            ?>
            <label>
                <span>Email</span>
                <input type="text" name="email" class="fields">
            </label>
            <label>
                <span>Senha</span>
                <input type="password" name="password" class="fields">
            </label>
            <label>
                <input type="submit" name="Login" value="Login" class="btn">
                <input type="reset" name="Limpar" value="Limpar" class="btn_limpar">
            </label>
        </form>


    </div>
    <div id="rodape"><p>Sistema desenvolvido pela equipe Tecnoponta Cursos 2015</p></div>

</div>
</body>
</html>