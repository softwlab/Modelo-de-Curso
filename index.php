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
        <a href="login.php">Login</a>
    </div>
    <div id="content">
        <h2>Cadastrando Usuarios no banco de dados</h2>

            <form action="" method="post" enctype="multipart/form-data">
                <?php

                    $account = new Account();

                    if (isset($_POST['Cadastrar'])):

                        $nome     = $_POST['nome'];
                        $email    = $_POST['email'];
                        $password = $_POST['password'];
                        $cpass    = $_POST['cpassword'];
                        $data     = date("d/m/Y");
                        $ip       = $_SERVER["REMOTE_ADDR"];


                        $account->getNome($nome);
                        $account->getMail($email);
                        $account->getPass($password);
                        $account->getCPass($cpass);
                        $account->getData($data);
                        $account->getIP($ip);


                        # Insert
                        if ($account->insert()) {
                            echo "Inserido com sucesso!";
                        }

                    endif;
                ?>
                <label>
                    <span>Nome</span>
                    <input type="text" name="nome" class="fields">
                </label>
                <label>
                    <span>Senha</span>
                    <input type="password" name="password" class="fields">
                </label>
                <label>
                    <span>Confirmar Senha</span>
                    <input type="password" name="cpassword" class="fields">
                </label>
                <label>
                    <span>Email</span>
                    <input type="text" name="email" class="fields">
                </label>
                <label>
                    <input type="submit" name="Cadastrar" value="Cadastrar" class="btn">
                    <input type="reset" name="Limpar" value="Limpar" class="btn_limpar">
                </label>
            </form>


    </div>
    <div id="rodape"><p>Sistema desenvolvido pela equipe Tecnoponta Cursos 2015</p></div>

</div>
</body>
</html>