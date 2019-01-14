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
    
    public function dameMensajes()
    {
        try {
            
            $consulta = "select * from mensajes order by Id_mensaje desc";
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
    
    
    public function buscarMensajesPorUsuario($usuario)
    {
        try {
            $consulta = "select * from mensajes where emisor like :usuario order by Id_mensaje asc";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':usuario', $usuario);
            $result->execute();
            
            return $result->fetchAll();
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function buscarMensajesPorUsuario2($usuario)
    {
        try {
            $consulta = "select * from mensajes where receptor like :usuario order by Id_mensaje asc";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':usuario', $usuario);
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
    
    public function comprueba($nick, $contrasena)
    {
        try {
            $consulta = "select Id_usuario from usuarios where nick like :nick AND contrasena like :contrasena ";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':nick', $nick);
            $result->bindParam(':contrasena', $contrasena);
            $result->execute();
            return $result->fetchAll();
            
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function dameMensaje($id)
    {
        try {
            $consulta = "select * from mensajes where Id_mensaje=:id";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':id', $id);
            $result->execute();
            return $result->fetch();
            
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    

    
    
    public function insertarUsuario($nick, $nombre, $correo, $contrasena)
    {
        $consulta = "insert into usuarios (nick, nombre, correo, contrasena) values (?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $nick);
        $result->bindParam(2, $nombre);
        $result->bindParam(3, $correo);
        $result->bindParam(4, $contrasena);
        $result->execute();
                
        return $result;
    }
    
    public function insertarMensaje($para,$asunto,$cuerpo)
    {
        $consulta = "insert into mensajes (emisor,receptor,asunto,mensaje ) values (?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $_SESSION['id_usuario']);
        $result->bindParam(2, $para);
        $result->bindParam(3, $asunto);
        $result->bindParam(4, $cuerpo);
        $result->execute();
        
        return $result;
    }

    
}
?>
