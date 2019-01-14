<?php
include ('libs/utils.php');

class Controller
{

	public function inicio()
	{
		$params = array(
				'mensaje' => 'Bienvenido a tu mensajeria',
				'fecha' => date('d-m-y'),
		);
		require __DIR__ . '/templates/inicio.php';
	}

	public function listar()
	{
		//Al crear el objeto, conectamos con la BD con los parámetros de config.php
		$m = new Model();
		
		//Llamamos al método dameAlimentos del modelo y cargaremos los resultados en el array $params
		$params = array(
				'usuarios' => $m->dameUsuarios(),
		);

		require __DIR__ . '/templates/mostrarUsuarios.php';
	}
	
	public function listarM()
	{
	    //Al crear el objeto, conectamos con la BD con los parámetros de config.php
	    $m = new Model();
	    
	    //Llamamos al método dameAlimentos del modelo y cargaremos los resultados en el array $params
	    $params = array(
	        'mensajes' => $m->dameMensajes(),
	    );
	    
	    require __DIR__ . '/templates/mostrarMensajes.php';
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
	        $de=recoge('de');
	        $cuerpo=recoge('cuerpo');
	        // comprobar campos formulario
	        if (validarDatos($para, $asunto,$de, $cuerpo)) {
	            if ($m->insertarMensaje(recoge('para'), recoge('asunto'), recoge('de'), recoge('cuerpo'))){
	                header('Location: index.php?ctl=enviar');
	            }else {
	                $params = array(
	                    'para' => $para,
	                    'asunto' => $asunto,
	                    'de' => $de,
	                    'cuerpo' => $cuerpo,
	                );
	                $params['mensaje'] = 'No se ha podido insertar el usuario. Revisa el formulario';
	            }
	        } else {
	            $params = array(
	                
	                'para' => $para,
	                'asunto' => $asunto,
	                'de' => $de,
	                'cuerpo' => $cuerpo,
	            );
	            $params['mensaje'] = 'Hay datos que no son correctos. Revisa el formulario';
	        }
	    }
	    
	    require __DIR__ . '/templates/enviarMensaje.php';
	}

	public function insertar()
	{
		$params = array(
				'nick' => '',
				'nombre' => '',
				'correo' => '',
				'contraseña' => '',
		);

		$m = new Model();

		if (isset ($_POST['insertar'])) {
		    $nick=recoge('nick');
		    $nombre=recoge('nombre');
		    $correo=recoge('correo');
		    $contraseña=recoge('contraseña');
			// comprobar campos formulario
		    if (validarDatos($nick, $nombre,$correo, $contraseña)) {
		            if ($m->insertarUsuario(recoge('nick'), recoge('nombre'), recoge('correo'), recoge('contraseña'))){
								header('Location: index.php?ctl=listar');
						}else {
							$params = array(
									'nick' => $nick,
									'nombre' => $nombre,
									'correo' => $correo,
									'contraseña' => $contraseña,
							);
							$params['mensaje'] = 'No se ha podido insertar el usuario. Revisa el formulario';
						}
					} else {
						$params = array(
								
						    'nick' => $nick,
						    'nombre' => $nombre,
						    'correo' => $correo,
						    'contraseña' => $contraseña,
						);
						$params['mensaje'] = 'Hay datos que no son correctos. Revisa el formulario';
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
