<?php
class DBConnection{
	private $server, $user, $password, $dbName, $connection, $consulta, $resultado;

	    public function DBConnection(){
        $this->server = "localhost";
        $this->user = "root";
       // $this->password = "saucr.092";
        $this->dbName = "artesania_db";
    }

    public function connect(){
        $this->connection = mysqli_connect($this->server, $this->user, $this->dbName);
        return $this->connection;
    }

    public function executeQuery($query) {
      //aquí se realizan las consultas a la base de datos
      $sql = $this->consulta=mysqli_query($this->connection, $query);
      return $sql;
    } 

    //obtener resultados de la consulta
    public function queryToArray() {
      //aquí se obtienen los datos de la consulta
      $this->resultado=mysqli_fetch_array($this->consulta);
      return $this->resultado;
    }
    
    public function close(){
        mysqli_close($this->connection);
    }

	}
?>