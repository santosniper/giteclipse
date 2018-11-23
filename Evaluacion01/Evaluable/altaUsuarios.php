<?php
//Incluimos funciones.php para poder usar las funciones que hemos incluido en el php.
include ('funciones.php');
//Utilizamos la funcion cabezera de el php funciones.
cabecera($_SERVER['PHP_SELF']);

//Se comprueba si no se ha enviado el formulario con el boton 'enviado'
if (! isset($_REQUEST['enviado'])) {
    //en el caso de que no, mostramos form.php
    include ('form.php');
}//en caso afirmativo, comprobaremos los datos recibidos
else{
    $nombre = recoge("nombre");
    $user= recoge('user');
    $mail = recoge("mail");
    $pwd = recoge("pwd");
    $fecha = recoge("fecha");
    $img = recoge("img");
    $dir = "imagenes/";
    //configuramos el tamaña máximo deseado del archivo.
    $max_file_size = "200000";
    //creamos un array con las extensiones válidas.
    $extensionesValidas = array(
        "jpeg",
        "gif"
    );
    
    if ((cNombre($nombre) == 0)) {
        $errores['nombre'] = 'El nombre no es correcto';
        $error = true;
    }
    if ((cUser($user) == 0)) {
        $errores['user'] = 'El usuario es incorrecto';
        $error = true;
    }
    if ((cEmail($mail) == 1)) {
        $errores['mail'] = 'El email es incorrecto, reviselo';
        $error = true;
    }
    if ((cPwd($pwd) == 0)) {
        $errores['pwd'] = 'la contraseña es incorrecta, revisela';
        $error = true;
    }
    if ((cFecha($fecha) == 0)) {
        $errores['fecha'] = 'la fecha es incorrecta, revisela';
        $error = true;
    }
    /*
     if ((subida($img,$dir, $extensionesValidas, $max_file_size) == 0)) {
        $errores['img'] = 'la imagen es incorrecta, revisela';
        $error = true;
        }
     
     */
    if (! $error) {
        header("location:PrimeroCorrecto.php?nombre=$nombre&nombreUsu=$user&email=$mail&contra=$pwd&fechaN=$fecha&imagen=$img");
        
    }
    else {
        
        ?>
        
<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>" METHOD='post'>
	Nombre: <input TYPE="text" NAME="nombre" VALUE="<?php echo $nombre;?>">
	<br>
		<?php
        
        echo '<br>';
        if (isset($errores['nombre']))
            echo "$errores[nombre] <br>";
        ?>
         email: <input TYPE="text" NAME="email" VALUE="<?php echo $email;?>">
        <br>
        <?php
       
        echo '<br>';
        if (isset($errores['mail']))
            echo "$errores[mail] <br>";
        ?>
           Nombre de ususario: <input TYPE="text" NAME="nombreUsu" VALUE="<?php echo $user;?>">
        <br>
        <?php
       
        echo '<br>';
        if (isset($errores['user']))
            echo "$errores[user] <br>";
        ?>
        Contraseña: <input TYPE="text" NAME="contra" VALUE="<?php echo $pwd;?>">
        <br>
        <?php
       
        echo '<br>';
        if (isset($errores['pwd']))
            echo "$errores[pwd] <br>";
        ?>
        Fecha de nacimiento: <input TYPE="text" NAME="fechaN" VALUE="<?php echo $fecha;?>">
        <br>
        <?php
       
        echo '<br>';
        if (isset($errores['fecha']))
            echo "$errores[fecha] <br>";
        ?>
        
     
        
	    imagen: <input TYPE="text" NAME="imagen" VALUE="<?php echo $img; ?>"> 
	    <br>
		<?php
		
		/*
		
		*/
        if (isset($errores['img']))
            echo $errores['img'];
        echo '<br>';
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>