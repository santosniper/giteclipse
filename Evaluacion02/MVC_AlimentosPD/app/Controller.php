<?php
include ('libs/utils.php');

class Controller
{

	public function inicio()
	{
		$params = array(
				'mensaje' => 'Bienvenido al repositorio de alimentos',
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

		require __DIR__ . '/templates/mostrarAlimentos.php';
	}

	public function insertar()
	{
		$params = array(
				'nombre' => '',
				'energia' => '',
				'proteina' => '',
				'hc' => '',
				'fibra' => '',
				'grasa' => '',
		);

		$m = new Model();

		if (isset ($_POST['insertar'])) {
		    $nombre=recoge('nombre');
		    $energia=recoge('energia');
		    $proteina=recoge('proteina');
		    $hc=recoge('hc');
		    $fibra=recoge('fibra');
		    $grasa=recoge('grasa');
			// comprobar campos formulario
		    if (validarDatos($nombre, $energia,$proteina, $hc, $fibra, $grasa)) {
		            if ($m->insertarAlimento(recoge('nombre'), recoge('energia'), recoge('proteina'), recoge('hc'), 
                    recoge('fibra'), recoge('grasa'))){
								header('Location: index.php?ctl=listar');
						}else {
							$params = array(
									'nombre' => $nombre,
									'energia' => $energia,
									'proteina' => $proteina,
									'hc' => $hc,
									'fibra' => $fibra,
									'grasa' => $grasa,
							);
							$params['mensaje'] = 'No se ha podido insertar el alimento. Revisa el formulario';
						}
					} else {
						$params = array(
								'nombre' => $nombre,
									'energia' => $energia,
									'proteina' => $proteina,
									'hc' => $hc,
									'fibra' => $fibra,
									'grasa' => $grasa,
						);
						$params['mensaje'] = 'Hay datos que no son correctos. Revisa el formulario';
					}
		}

		require __DIR__ . '/templates/formInsertar.php';
	}

	public function buscarPorNombre()
	{
		$params = array(
				'nombre' => '',
				'resultado' => array(),
		);

		$m = new Model();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		    $nombre=recoge("nombre");
			$params['nombre'] = $nombre;
			$params['resultado'] = $m->buscarAlimentosPorNombre($nombre);
		}

		require __DIR__ . '/templates/buscarPorNombre.php';
	}
	
	
	public function buscarPorEnergia()
	{
	    $params = array(
	        'energia' => '',
	        'resultado' => array(),
	    );
	    
	    $m = new Model();
	    
	    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	        $energia=recoge("energia");
	        $params['energia'] = $energia;
	        $params['resultado'] = $m->buscarAlimentosPorEnergia($energia);
	    }
	    
	    require __DIR__ . '/templates/buscarPorEnergia.php';
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

		$alimento = $m->dameAlimento($id);

		$params = $alimento;
		//Si la consulta no ha devuelto resultados volvemos a la página de inicio
		if (empty($params))
		{
			$params = array(
					'mensaje' => 'No hay alimento que mostar',
					'fecha' => date('d-m-y'),
			);
			require __DIR__ . '/templates/inicio.php';
		}
		else

			require __DIR__ . '/templates/verAlimento.php';
	}

}
?>
