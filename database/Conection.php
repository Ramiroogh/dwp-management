<?php
class Connection {
    /**
     * PROPIEDADES PARA LA CONEXIÓN
     * LUEGO CONFIGURAR EL .ENV
     */
    private string $Server = "localhost";
    private string $Database = "password_restore";
    private string $User = "root";
    private string $Password = "";
    public string $sql;
    public $pps = null;
    private $Conector = null;

    /**
     * Método para conectarse a la DB
     */
    public function getConnection() {
        $this->Conector = new PDO(
            "mysql:host=".$this->Server.";dbname=".$this->Database,
            $this->User,
            $this->Password
        );

        $this->Conector->exec("SET NAMES utf8");

        return $this->Conector;
    }

    /**
     * LIBERAR RECURSOS DE LA DB
     */
    public function closeDataBase() {
        if($this->pps != null and $this->Conector != null)
        {
            $this->pps = null;
            $this->Conector = null;
        }
    }
}

/**
 * INICIALIZACIÓN
 */
// $conection = new Connection;

// if($conection->getConnection()) {
//     echo "conectado";
// } else {
//     echo "error";
// }
