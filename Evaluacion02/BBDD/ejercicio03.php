<?php
/*
Ejercicio 3.- Crea una tabla localidades con dos campos id_localidad y localidad, añade un
campo localidad en la tabla empleados de manera que sea clave ajena referenciando a
id_localidad. Añade varios registros a la tabla.

Crea una página con un formulario para dar de alta usuarios donde la localidad será un
desplegable con las localidades a elegir (debe mostrar el nombre de la localidad y guardar el
id_localidad).
 */


include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
if (! isset($_REQUEST['bAceptar'])) {
    ?>

<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post" id="asdf">
NOMBRE:<input type="text" name="nombre" size="10"><br>
PUESTO:<input type="text" name="puesto" size="10"><br>
F_NAC:<input type="text" name="fnac" size="10"><br>
SALARIO:<input type="text" name="salario" size="10"><br>
LOCALIDAD:<select name="localidad" form="asdf">
<option value="30">Catarroja</option>
<option value="31">Albal</option>
<option value="32">Massanassa</option>
<option value="33">Beniparrell</option>
<option value="34">Alfafar</option>

</select>
<br>
<input type="submit" value="Enviar" name="bAceptar">
</form>
</body>
</html>
<?php
} // En esta parte comprobamos los datos recibidos
else {
    $name=recoge('nombre');
    $puesto=recoge('puesto');
    $fnac=recoge('fnac');
    $salario=recoge('salario');
    $localidad=recoge('localidad');
    
    if ((cTexto($name) == 0)) {
        $error = true;
    }
    if ((cTexto($puesto) == 0)) {
        $error = true;
    }
  
    if ((cNum($salario) == 0)) {
        $error = true;
    }
  
    if (! $error) {
        header("location:form_1.php?nombre=$name&puesto=$puesto&fnac=$fnac&salario=$salario&localidad=$localidad");
    } else {
        
        ?>
<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD='post'>
	<p>Los datos que has introducido no están en el formato correcto</p>
	NOMBRE:<input type="text" name="nombre" size="10"><br>
PUESTO:<input type="text" name="puesto" size="10"><br>
F_NAC:<input type="text" name="fnac" size="10"><br>
SALARIO:<input type="text" name="salario" size="10"><br>
LOCALIDAD:<select name="localidad" form="asdf">
<option value="30">Catarroja</option>
<option value="31">Albal</option>
<option value="32">Massanassa</option>
<option value="33">Beniparrell</option>
<option value="34">Alfafar</option>

</select>
<br>
		<?php
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>