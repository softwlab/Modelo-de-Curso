<?php

    Class Conexao {

        function __construct()
        {

        }
        function Conecta()
        {
            $var = mysql_connect("localhost","root","");
            if(!$var){
                mysql_error();
            }
            else{
                mysql_select_db("curso",$var);
            }

        }

        function Desconecta()
        {
            mysql_close();

        }

    }



////////////////////////////////////////////////////////////////////
    $mongo = new Mongo( 'mongodb://vini:12345@localhost:27017' );
    $mongo->selectDB( 'twitterdb' )->selectCollection( 'tweets' )->insert( array( 'nome' => utf8_decode($node->user->name) , 'tweet' => $node->text ) );
