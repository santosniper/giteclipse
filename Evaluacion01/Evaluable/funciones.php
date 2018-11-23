<?php

function cabecera($titulo) //el archivo actual
{
    ?>
<!DOCTYPE html>
		<html lang="es">
			<head>
				<title>
				<?php
				echo $titulo;
				?>
			
			</title>
				<meta charset="utf-8"/>
			</head>
		<body>
<?php		
}

function pie(){
	echo "</body>
	</html>";
}

function sinTildes($frase) {

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
	$texto = str_replace($no_permitidas, $permitidas ,$frase);
	return $texto;
}

function sinEspacios($frase) {
	$texto = trim(preg_replace('/ +/', ' ', $frase));
	return $texto;
}

function recoge($var)
{
	if (isset($_REQUEST[$var]))
		$tmp=strip_tags(sinEspacios($_REQUEST[$var]));
	else 
		$tmp= "";
	
	return $tmp;
}


function cTexto ($text)
{
	if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
		return 1;
	else 
		return 0;
}


function cNum ($num)
{
	if (preg_match("/^[0-9]+$/", $num))
		return 1;
	else
		return 0;
}

function cNombre($text){
    return preg_match('/^[a-zñÑ ]{1,50}$/i', $text);
}

function cUser($text){
    return preg_match('/^[a-zñÑ0-9*_$]+$/i', $text);
}

function cEmail ($text)
{
    return filter_var($text,FILTER_VALIDATE_EMAIL);
}

function cPwd ($text)
{
    return preg_match('/^[a-zA-z0-9\*_]{8,20}$/', $text);
}

function cFecha($text){
    $fecha=arrayFecha($text);
    
    //print_r($fecha);
    if (count($fecha)==3) {        
        if(checkdate($fecha[1],$fecha[0],$fecha[2])){
            return 1;
        }
    }
    return 0;
}

function arrayFecha($dato){
    $fecha=preg_split("/[-\/]/",$dato);
    return $fecha;
}
/*
 function subida($img='img',$dir = "imagenes/",$extensionesValidas = array("jpg","gif"),$max_file_size = "200000"){  
   
} 
 */



?>
