<?php 

    class Crud{
        private $conexion;
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $bd = "agenda";

        public function __construct() {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->pass);
        }

    public function read(){
        $query = "SELECT c.id, c.nombre, c.telefono, c.email, ro.rol AS nombre_categoria FROM contactos c LEFT JOIN rol ro ON c.categoria = ro.id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
    public function readRol(){
        $query = "SELECT * FROM rol";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
    public function create($datos){
        $query = "INSERT INTO contactos(nombre, telefono, email, categoria) VALUES (:nombre, :telefono, :email, :categoria)";
        $stmt= $this->conexion->prepare($query); 
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":telefono",$datos["telefono"]);
        $stmt->bindParam(":email",$datos["email"]);
        $stmt->bindParam(":categoria",$datos["rol"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }
    public function createRol($datos){
        $query = "INSERT INTO rol(rol) VALUES (:rol)";
        $stmt= $this->conexion->prepare($query);
        $stmt->bindParam(":rol",$datos["rol"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }
    public function update($datos){
        $query = "UPDATE contactos SET nombre=:nombre, telefono=:telefono, email=:email, rol=:rol where id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$datos["id"]);
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":telefono",$datos["telefono"]);
        $stmt->bindParam(":email",$datos["email"]);
        $stmt->bindParam(":rol",$datos["rol"]);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function updateRol($datos){
        $query = "UPDATE rol SET rol=:rol where id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$datos["id"]);
        $stmt->bindParam(":rol",$datos["rol"]);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function delete($id){
        $query = "DELETE FROM contactos WHERE id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function deleteRol($id){
        $query = "DELETE FROM rol WHERE id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function show($id){
        $query = "SELECT * FROM contactos WHERE id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
    public function showRol($id){
        $query = "SELECT * FROM rol WHERE id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
}

?>