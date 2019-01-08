<?php


class Model extends PDO
{

    protected $conexion;

    public function __construct()
    {
        try {
            
            $this->conexion = new PDO('mysql:host=' . Config::$mvc_bd_hostname . ';dbname=' . Config::$mvc_bd_nombre . '', Config::$mvc_bd_usuario, Config::$mvc_bd_clave);
            // Realiza el enlace con la BD en utf-8
            $this->conexion->exec("set names utf8");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }

   

    public function dameUsuarios()
    {
        try {
            
            $consulta = "select * from usuarios order by nick desc";
            $result = $this->conexion->query($consulta);
            return $result->fetchAll();
           
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }

    public function buscarUsuariosPorNombre($nombre)
    {
        try {
        $consulta = "select * from usuarios where nombre like :nombre order by nombre desc";
        
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':nombre', $nombre);
        $result->execute();
           
        return $result->fetchAll();
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    
    public function buscarAlimentosPorEnergia($energia)
    {
        try {
            $consulta = "select * from alimentos where energia like :energia order by energia asc";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':energia', $energia);
            $result->execute();
            
            return $result->fetchAll();
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function dameUsuario($id)
    {
        try {
            $consulta = "select * from usuarios where Id_usuario=:id";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':id', $id);
            $result->execute();
            return $result->fetch();
            
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    
    public function insertarUsuario($nick, $nombre, $correo, $contraseña)
    {
        $consulta = "insert into usuarios (nick, nombre, correo, contraseña) values (?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $nick);
        $result->bindParam(2, $nombre);
        $result->bindParam(3, $correo);
        $result->bindParam(4, $contraseña);
        $result->execute();
                
        return $result;
    }
    
    public function insertarMensaje($para, $asunto, $de, $cuerpo)
    {
        $consulta = "insert into mensajes (Id_emisor,Id_receptor,asunto,mensaje ) values (?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $para);
        $result->bindParam(2, $asunto);
        $result->bindParam(3, $de);
        $result->bindParam(4, $cuerpo);
        $result->execute();
        
        return $result;
    }

    
}
?>
