<?php
class personas_model{
    private $db;
    private $personas;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    public function get_personas(){
        $consulta=$this->db->query("select * from personas;");
        while($rows=$queries->fetch_assoc()){
            $this->personas[]=$rows;
        }
        return $this->personas;
    }
}
?>
