
<!-- Formulario -->
<h1>Date de alta</h1>

<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>"METHOD="post" enctype="multipart/form-data">
Nombre:<br>
<input TYPE="text" NAME="nombre" required><br>
Usuario:<br>
<input TYPE="text" NAME="user" required><br>
Contraseña:<br>
<input TYPE="password" NAME="pwd" required><br>
Correo electrónico:<br>
<input TYPE="text" NAME="mail" required><br>
Fecha de Nacimiento:<br>
<input TYPE="text" NAME="fecha" required><br>
Foto de Perfil:<br>
<!-- 
<input TYPE="file" NAME="img" required><br>

 -->


<input TYPE="submit" name="enviado" VALUE="Darse de alta">
</form>
</body>
</html>
<?php

?>
