<?php 

class DB{
    public $mysql=null;

    public function __construct(){

        //obtiene la conexion
        try{
            $this->mysql = $this->getConn();

            //trata de usar la base de datos
            try{
                 $stmt = $this->mysql->prepare("use parcial2");
                 $stmt->execute();

             //si no existe esta la creara automaticamente usando el sql en el folder mysql
            }catch(PDOException $e){
                echo '<div class="alert alert-primay" role="alert">
                Se ha generado la base de datos por primara vez...
                </div>';
                $comandos = "
                
                create database parcial2;
                use parcial2;

                SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
                SET AUTOCOMMIT = 0;
                START TRANSACTION;
                SET time_zone = '+00:00';

                CREATE TABLE `personas` (
                    `cedula` varchar(20) NOT NULL,
                    `nombre` varchar(50) NOT NULL,
                    `apellido` varchar(100) NOT NULL,
                    `email` varchar(100) NOT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

                  ALTER TABLE `personas` ADD PRIMARY KEY (`cedula`);
                  COMMIT;
                
                ";
                $stmt = $this->mysql->prepare($comandos);
                $stmt->execute();
            }
        }catch(PDOException $e){
             die("Error en la base de datos, " . $e->getMessage());
        }
    }


    //funcion de conexion
    private function getConn(){
        $tipo = "mysql";
        $host = "localhost";
        $usuario = "root";
        $clave = "";
        $codificacion = "utf8";
        $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("{$tipo}:host={$host};charset={$codificacion}", $usuario, $clave);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

}

?>