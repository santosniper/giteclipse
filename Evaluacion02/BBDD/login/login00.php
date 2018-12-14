<?php

/*
Realiza una página de registro que permita dar de alta a un usuario 
y que este pueda añadir hasta dos amigos dando su email y nombre. 
La introducción de los datos en la BD la harás usando transacciones, 
de manera que hacemos las dos inserciones o ninguna. 
Encripta la contraseña en la BD. Una vez dado de alta permite loguearse en el sistema,
de manera que una vez logueado pase a una página privada 
de bienvenida donde tengamos un enlace para descargarnos en PDF 
la lista de usuarios del sistema (nombre e email ). 
Desde la página de bienvenida debes permitir salir.

Ten en cuenta todos los aspectos de seguridad vistos hasta ahora.


 */

include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
if (! isset($_REQUEST['bAceptar'])) {
    ?>
    <form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post" id="asdf">
Nombre:<input type="text" name="nombre" size="10"><br>
Correo:<input type="text" name="mail" size="10"><br>
Contraseña:<input type="text" name="pwd" size="10"><br>
Repite la contraseña:<input type="text" name="pwd2" size="10"><br>

<input type="submit" value="Enviar" name="bAceptar">
</form>
</body>
</html>
<?php
} // En esta parte comprobamos los datos recibidos
else {
    $name=recoge('nombre');
    $mail=recoge('mail');
    $pwd=recoge('pwd');
    $pwd2=recoge('pwd2');
    
    if (cTexto($name)== 0) {
        $error = true;
        echo 'Nombre no válido<br>';
      
       
    }
    if (correo($mail) == 0) {
        $error = true;
        echo 'correo erróneo<br>';
        
       
    }
    
    if($pwd==$pwd2){
        if (pwd($pwd) == 0){
            {
                $error = true;
                echo 'Contraseña no válida, de 8 a 12 dígitos y alfanumérica.(La "Ñ" no es válida")<br>';
                
        }
            
            
        }
    }
    
    if ($pwd!=$pwd2) {
        
        echo 'Las contraseñas no coinciden<br>';
        $error = true;
        
        
        
    }
  

    

    
  
    if (! $error) {
        header("location:form_1.php?nombre=$name&mail=$mail&pwd=$pwd");
    } else {
        
        ?>
<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD='post'>
	
	Nombre:<input type="text" name="nombre" size="10"><br>
Correo:<input type="text" name="mail" size="10"><br>
Contraseña:<input type="text" name="pwd" size="10"><br>
Repite la contraseña:<input type="text" name="pwd2" size="10"><br>

		<?php
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>


