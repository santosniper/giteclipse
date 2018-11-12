<?php
/*
4. Realiza una función que nos devuelva el nº de días que han pasado
 entre dos fechas. Hay que tener en cuenta que tendremos que validar las fechas 
 antes o durante la función.
 */


function func04($fecha01, $fecha02) {
    $dia01=$fecha01[0].$fecha01[1];
    $dia02=$fecha02[0].$fecha02[1];
    
    $mes01=$fecha01[3].$fecha01[4];
    $mes02=$fecha02[3].$fecha02[4];
    
    $año01=$fecha01[6].$fecha01[7].$fecha01[8].$fecha01[9];
    $año02=$fecha02[6].$fecha02[7].$fecha02[8].$fecha02[9];
    
    $compr01=checkdate($mes01, $dia01, $año01);
    $compr02=checkdate($mes02, $dia02, $año02);
    if($compr01 && $compr02 == true){
        if($año01>$año02){
            
            $fecha01 = mktime(0,0,0,$mes01, $dia01, $año01);
            $fecha02 = mktime(0,0,0,$mes02, $dia02, $año02);
            
            $resta=($fecha01-$fecha02);
            $restafD=round($resta/60/60/24);
            echo $restafD;
            
        }else if($año01<$año02){
            $fecha01 = mktime(0,0,0,$mes01, $dia01, $año01);
            $fecha02 = mktime(0,0,0,$mes02, $dia02, $año02);
            
            $resta=($fecha02-$fecha01);
            $restafD=round($resta/60/60/24);
            echo $restafD;
            
        }else if($año01==$año02){
            if($mes01>$mes02){
                
                $fecha01 = mktime(0,0,0,$mes01, $dia01, $año01);
                $fecha02 = mktime(0,0,0,$mes02, $dia02, $año02);
                
                $resta=($fecha01-$fecha02);
                $restafD=round($resta/60/60/24);
                echo $restafD;
                
            }else if($mes01<$mes02){
                
                $fecha01 = mktime(0,0,0,$mes01, $dia01, $año01);
                $fecha02 = mktime(0,0,0,$mes02, $dia02, $año02);
                
                $resta=($fecha02-$fecha01);
                $restafD=round($resta/60/60/24);
                echo $restafD;
                
            }else if($mes01==$mes02){
                if($dia01>$dia02){
                    $fecha01 = mktime(0,0,0,$mes01, $dia01, $año01);
                    $fecha02 = mktime(0,0,0,$mes02, $dia02, $año02);
                    
                    $resta=($fecha01-$fecha02);
                    $restafD=round($resta/60/60/24);
                    echo $restafD;
                }else if($dia01<$dia02){
                    $fecha01 = mktime(0,0,0,$mes01, $dia01, $año01);
                    $fecha02 = mktime(0,0,0,$mes02, $dia02, $año02);
                    
                    $resta=($fecha02-$fecha01);
                    $restafD=round($resta/60/60/24);
                    echo $restafD;
                }else if($dia01==$dia02){
                    echo "Mismas fechas";
                }
                
            }
            
        }
       

        
        
    }else{
        echo "Fechas incorrectas.";
    }
    
   
}

func04("15/10/2001", "15/10/2001");