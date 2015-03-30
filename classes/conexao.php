<?php

    /*
     * require_once é uma função muito utilizado para arquivos que necessitam de outros arquivos para funcionar corretamente.
     * caso o servidor não encontre o arquivo que foi chamado através do require_once(); a pagina não será carregada
     *
     *
     */
    require_once("config.php");

Class Conexao {

    function __construct()
    {

    }
        function Conecta()
        {
            $var = mysql_connect("localhost","root","");
            if(!$var){
                /*
                 * aqui verificamos com o comando ! se a $var = mysql_connect retornou FALSE
                 * se retornar false mostramos um erro para o usuario
                 */
               mysql_error();
            }
            else{
                 mysql_select_db("curso",$var);  // caso a conexão seja feita com sucesso selecionamos a DATABASE
            }

        }

    function Desconecta()
    {
        mysql_close();

        /*
         * aqui fechamos a conexão do mysql
         * mas por que?
         * vão existir situaçãoes em que não é interessante manter uma conexão com o mysql aberta
         * sendo que não precisamos carregar simultaneamente nada do banco de dados
         * então não é necessario manter ela aberta, isso reflete no tempo de processamento do site
         * e também na segurança do próprio banco de dados
         * visto que a conexão aberta para o usuario ela esta mais vulnerável
         */

    }

}