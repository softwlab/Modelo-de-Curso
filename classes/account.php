<?php
    //iniciamos uma sessão
    session_start();
    include 'conexao.php';

    $lol = new Conexao();
    $lol->Conecta();

    /*
     * aqui declaramos uma nova Classe chamada Account que é extendida da Classe conexão
     * mas por que?
     * ela é extendida pois vamos utilizar a "Conexão" com  o mysql para fazer alterações no banco de dados
     * */
class Account extends Conexao
{
    // aqui declaramos que a variavel $table referente a tabela account do nosso banco de dados é protegida

    protected $table = "account";


    private $nome;
    private $password;
    private $email;
    private $data;
    private $ip;
    private $cookie;
    private $cpass;

    private $id;

    public function getNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPass($password)
    {
        $this->password = $password;
    }

    public function getCPass($cpass)
    {
        $this->cpass = $cpass;
    }

    public function getMail($email)
    {
        $this->email = $email;
    }

    public function getData($data)
    {
        $this->data = $data;
    }

    public function getIP($ip)
    {
        $this->ip = $ip;
    }

    public function getCookie($cookie)
    {
        $this->cookie = $cookie;
    }

    public function insert(){

        //verificar se o email já existe




        $query = "SELECT * FROM $this->table WHERE email = '$this->email'";
        $af    = mysql_query($query);
        $rows  = mysql_num_rows($af);
        if($rows == 0){

            if($this->password == $this->cpass)
            {
                mysql_query("INSERT INTO $this->table (nome,password,email,ip,data) VALUES ('$this->nome','$this->password','$this->email','$this->ip','$this->data')");
                echo "<script>alert('Usuario Cadastrado com sucesso!')</script>";
            }// end confirmação de senhas iguais
            else{
                // senhas não são iguais
                echo "<script>alert('Senhas não combinam!')</script>";
            }

        }
        //email já existe
        else{
            //usuario já existe
            echo "<script>alert('Usuario não combinam!')</script>";
        }


    }

    public function Login(){


        $query = mysql_query("SELECT * FROM $this->table WHERE email = '$this->email' AND password = '$this->password'");
        $rows  = mysql_num_rows($query);
        if($rows > 0){

            $lol = mysql_fetch_array($query);
            while($lol)
            {
                $id = $lol['id'];

                $_SESSION['id'] = $id;
                header('location:/include/home.php');
                exit;
            }

        }
        else{
            //usuario não encontrado
        }

    }
}