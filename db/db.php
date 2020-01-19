<?php

class Connect {
    public static function connect(){
        $conexion=new mysqli("localhost", "root", "", "mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
