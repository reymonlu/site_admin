<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 23/11/18
 * Time: 15:48
 */

class Vue
{
    private $_path="";
    function __construct(string $path=""){
        $this->_path = $path;
    }

    function show(string $path=""){
        $p = $path ? $path : $this->_path;
        include($p);
    }
}
