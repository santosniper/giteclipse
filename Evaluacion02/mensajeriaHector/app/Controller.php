<?php
include ('libs/utils.php');

class Controller
{
    
    public function inicio()
    {
        $params = array(
            'mensaje' => 'Bienvenido ',
            'fecha' => date('d-m-y'),
        );
        require __DIR__ . '/templates/inicio.php';
    }
    

    
    public function listar()
    {
        //Al crear el objeto, conectamos con la BD con los parámetros de config.php
        $m = new Model();
        
        //Llamamos al método dameUsuarios del modelo y cargaremos los resultados en el array $params
        $params = array(
            'usuarios' => $m->dameUsuarios(),
        );
        
        require __DIR__ . '/templates/mostrarUsuarios.php';
    }
    
 
    
    public function enviar()
    {
        $params = array(
            'para' => '',
            'asunto' => '',
            'de' => '',
            'cuerpo' => '',
        );
        
        $m = new Model();
        
        if (isset ($_POST['enviar'])) {
            $para=recoge('para');
            $asunto=recoge('asunto');
            $cuerpo=recoge('cuerpo');
            // comprobar campos formulario
            if (validarDatosM($para, $asunto, $cuerpo)) {
                if ($m->insertarMensaje(recoge('para'), recoge('asunto'),recoge('cuerpo'))){
                    header('Location: index2.php?ctl=enviar');
                }else {
                    $params = array(
                        'para' => $para,
                        'asunto' => $asunto,
                        'cuerpo' => $cuerpo,
                    );
                    $params['mensaje'] = 'No se ha podido insertar el usuario. Revisa el formulario';
                }
            } else {
                $params = array(
                    
                    'para' => $para,
                    'asunto' => $asunto,
                    'cuerpo' => $cuerpo,
                );
                $params['mensaje'] = 'Hay datos que no son correctos. Revisa el formulario';
            }
        }
        
        require __DIR__ . '/templates/enviarMensaje.php';
    }
    
    
    public function login()
    {
        if (isset($_SESSION['id_usuario'])){
            $SESION=$_SESSION['id_usuario'];
            //header("Location: index2.php?ctl=inicio");
            header("Location: index.php?ctl=ver&id=$SESION");
        }
        
        $params = array(
            'nick' => '',
            'contrasena' => '',
            'resultado' => array(),
        );
        
        $m = new Model();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nick=recoge('nick');
            $contrasena=recoge('contrasena');
            
            $params['nick'] = $nick;
            $params['contrasena']=$contrasena;
            
            if(validarInicio($nick, $contrasena)){
                
                if($params['resultado']=$m->comprueba($nick, $contrasena))
                    $params['resultado']=$params['resultado'][0]['Id_usuario'][0];
                    $_SESSION['id_usuario']=$params['resultado'];
                    $SESION=$_SESSION['id_usuario'];
                    if($SESION>=0&&$SESION<=9999){
                   
                        header("Location: index.php?ctl=ver&id=$SESION");
                    }else{
                        echo "No existe";
                    }
                   
                   
            }else{
                $params = array(
                    'nick' => '',
                    'contrasena' => '',
                );
                $params['mensaje'] = 'No se ha podido iniciar sesión';
            }
            
        }
        
        require __DIR__ . '/templates/formIniciar.php';
    }
    
    public function salir(){
        require __DIR__ . '/templates/salir.php';
    }
    
 
    
    
    public function insertar()
    {
        $params = array(
            'nick' => '',
            'nombre' => '',
            'correo' => '',
            'contrasena' => '',
        );
        
        $m = new Model();
        
        if (isset ($_POST['insertar'])) {
            $nick=recoge('nick');
            $nombre=recoge('nombre');
            $correo=recoge('correo');
            $contrasena=recoge('contrasena');
            // comprobar campos formulario
            if ((correo($correo))&&(pwd($contrasena)==true)) {
                
                if (validarDatos($nick, $nombre,$correo, $contrasena)) {
                    if ($m->insertarUsuario(recoge('nick'), recoge('nombre'), recoge('correo'), recoge('contrasena'))){
                        header('Location: index.php');
                    }else {
                        $params = array(
                            'nick' => $nick,
                            'nombre' => $nombre,
                            'correo' => $correo,
                            'contrasena' => $contrasena,
                        );
                        $params['mensaje'] = 'No se ha podido insertar el usuario. Revisa el formulario';
                    }
                }
                
                
                
                
                
            }
            else {
                $params = array(
                    
                    'nick' => $nick,
                    'nombre' => $nombre,
                    'correo' => $correo,
                    'contrasena' => $contrasena,
                );
                $params['mensaje'] = 'correo o contrasena inválidos.';
            }
        }
        
        require __DIR__ . '/templates/formInsertar.php';
    }
    
    
    
    
    public function buscarPorUsuario()
    {
        $params = array(
            'usuario' => '',
            'resultado' => array(),
        );
        
        $m = new Model();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario=recoge("usuario");
            $params['usuario'] = $usuario;
            $params['resultado'] = $m->buscarMensajesPorUsuario($usuario);
        }
        
        require __DIR__ . '/templates/buscarPorUsuario.php';
    }
        
         
      
       
        
       
        
        
    public function buscarPorUsuario2()
    {
        $params = array(
            'usuario' => '',
            'resultado' => array(),
        );
        
        $m = new Model();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario=recoge("usuario");
            $params['usuario'] = $usuario;
            $params['resultado'] = $m->buscarMensajesPorUsuario2($usuario);
        }
        
        require __DIR__ . '/templates/buscarPorUsuario2.php';
    }
    
    
    public function ver()
    {
        if (!isset($_GET['id'])) {
            $params = array(
                'mensaje' => 'No has seleccionado ningun elemento que mostrar',
                'fecha' => date('d-m-y'),
            );
            require __DIR__ . '/templates/inicio.php';
        }
        
        $id = recoge('id');
        
        $m = new Model();
        
        $usuario = $m->dameUsuario($id);
        
        $params = $usuario;
        //Si la consulta no ha devuelto resultados volvemos a la página de inicio
        if (empty($params))
        {
            $params = array(
                'mensaje' => 'No hay nada que mostar',
                'fecha' => date('d-m-y'),
            );
            require __DIR__ . '/templates/inicio.php';
        }
        else
            
            require __DIR__ . '/templates/verUsuario.php';
    }
    
    public function verM()
    {
        if (!isset($_GET['id'])) {
            $params = array(
                'mensaje' => 'No has seleccionado ningun elemento que mostrar',
                'fecha' => date('d-m-y'),
            );
            require __DIR__ . '/templates/inicio.php';
        }
        
        $id = recoge('id');
        
        $m = new Model();
        
        $usuario = $m->dameMensaje($id);
        
        $params = $usuario;
        //Si la consulta no ha devuelto resultados volvemos a la página de inicio
        if (empty($params))
        {
            $params = array(
                'mensaje' => 'No hay nada que mostar',
                'fecha' => date('d-m-y'),
            );
            require __DIR__ . '/templates/inicio.php';
        }
        else
            
            require __DIR__ . '/templates/verMensaje.php';
    }
    
}
?>
