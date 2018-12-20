<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 20/12/18
 * Time: 09:38
 */

class Deconnexion
{
    public function disconnect(){
        session_destroy();
        header("location:index.php");
    }
}