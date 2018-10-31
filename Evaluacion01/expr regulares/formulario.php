<?php
include ('bGeneral.php');
include ('funciones.php');
cabecera($_SERVER['PHP_SELF']);
if (! isset($_REQUEST['bAceptar'])) {
    ?>

<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
	String: <input TYPE="text" NAME="cadena"><br> 
	función: 
	<select name="ejercicio">
		<option value="f01">Función01</option>
		<option value="f02">Función02</option>
		<option value="f03">Función03</option>
		<option value="f04">Función04</option>
		<option value="f05">Función05</option>
	</select>
	<br>
	<input TYPE="file">
	  <br>
	<input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>
</body>
</html>
<?php
 // En esta parte comprobamos los datos recibidos
}
else{
    

    $str=recoge('cadena');
    $fnc=$_REQUEST['ejercicio'];
    
    
    if($fnc=="f01"){
        if(cp_Esp($str)==true){
            echo "Es correcto";
        
        }else{
            echo "No es correcto";
        }
    
    }else if($fnc=="f02"){
        if(tlf_Esp($str)==true){
            echo "Es correcto";
        }else{
            echo "No es correcto";
        }
    }else if($fnc=="f03"){
        if(calles($str)==true){
            echo "Es correcto";
        }else{
            echo "No es correcto";
        }
    }else if($fnc=="f04"){
        if(user($str)==true){
            echo "Es correcto";
        }else{
            echo "No es correcto";
        }
    }else if($fnc=="f05"){
        if(email($str)==true){
            echo "Es correcto";
        }else{
            echo "No es correcto";
        }
    }
}
?>
		  
</form>
<?php

pie();
?>