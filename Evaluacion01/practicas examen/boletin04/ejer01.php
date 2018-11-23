<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="tesimbolo2t/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
    
<?php
$str="hsantos@gmail.com";
$long=mb_strlen($str);
$simbolo1=mb_strpos($str, "@");
$simbolo2=mb_strpos($str, ".");
$verdad0=0;
$verdad1=0;
if($simbolo1!=NULL)
    $verdad0=1;
if($simbolo2!=NULL)
    $verdad1=1;
echo "Email: " . $str . "<br>";
if((($simbolo1-2)>=0) && (($simbolo2-2)>=0) && ($simbolo2+2<=($long)) && ($verdad0==1) && ($verdad1==1)){
    $nombre=mb_substr($str, (0),($simbolo1));
    $dominio=mb_substr($str, ($simbolo1+1),($long-$simbolo1-1));
    echo "Nombre: " . $nombre . "<br>";
    echo "Dominio: " . $dominio;
}
else {
    if($verdad0==0){
        echo "No esta el caracter @<br>";
    }
    if($verdad1==0){
        echo "No esta el caracter .<br>";
    }
    if(($simbolo1-2)<0){
        echo "Faltan 2 caracteres antes del @<br>";
    }
    if(($simbolo2-2)<0){
        echo "Faltan 2 caracteres antes del .<br>";
    }
    if($simbolo2+2>($long)){
        echo "Faltan 2 caracteres despues del .<br>";
    }
}
?>
</p> 
</body> 
</html> 