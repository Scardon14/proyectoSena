<?php
    include_once("conexionBD.php");
    class FotoPerfil{
        private $conexionBD;
        function __construct(){
            $this->conexionBD = new conexionBD();
            $this->conexionBD = $this->conexionBD->conectarBD();
        }

        public function obtenerFotoPerfilPorUsuari($idUsuario){
            $query = "SELECT * FROM foto_perfil WHERE idUsuario = '{$idUsuario}'";
            $statement = $this->conexionBD->prepare($query);
            $statement->execute();
            $result = $statement->fetch();
            return $result;
        }
    }
?>