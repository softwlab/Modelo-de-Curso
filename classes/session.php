<?php

    require_once("../classes/account.php");

class Session{

    function VerificaSessao()
    {
        if(!isset($_SESSION['id']))
        {
            header('location: ../index.php');
            exit;
        }
    }


}
