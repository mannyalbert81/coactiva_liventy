<?php
class DocumentosGeneradosController extends ControladorBase{
    
public function __construct() {
   parent::__construct();
}
   


public function index3(){
	
	session_start();
	
	if (isset(  $_SESSION['usuario_usuarios']) )
	{
	
		$_id_usuarios= $_SESSION['id_usuarios'];
		
		
		$clientes = new ClientesModel();
		$ciudad = new CiudadModel();
		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal = null;
		$provincias = new ProvinciasModel();
		$resultProv = null;
	
		$juicios = new JuiciosModel();
		$ciudad = new CiudadModel();
		$resultDatos=$ciudad->getBy("nombre_ciudad='Quito' OR nombre_ciudad='Guayaquil'");
		

		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");
		
		$origen_juicios = new OrigenJuiciosModel();
		$resultOrigen =$origen_juicios->getAll("nombre_origen_juicio");
		
		
		$nombre_controladores = "MatrizJuiciosCordinador";
		$id_rol= $_SESSION['id_rol'];
		$resultPerVer= $clientes->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		$resultSet = "";
		$resultEdit = "";
			
			
		if (!empty($resultPerVer))
		{
			$resultEstadoProcesal = $estado_procesal->getAll("nombre_estados_procesales_juicios");
			$resultProv = $provincias->getAll("nombre_provincias");
	
				
	
			$columnas ="";
			$tablas = "";
			$where = "";
			$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
			if($action == 'ajax')
			{
				
				
				$juicio_referido_titulo_credito=(isset($_POST['juicio_referido_titulo_credito']))?$_POST['juicio_referido_titulo_credito']:'';
				$numero_titulo_credito=(isset($_POST['numero_titulo_credito']))?$_POST['numero_titulo_credito']:'';
				$id_estados_procesales_juicios=(isset($_POST['id_estados_procesales_juicios']))?$_POST['id_estados_procesales_juicios']:0;
				$id_abogado=(isset($_POST['id_impulsor']))?$_POST['id_impulsor']:0;
				$id_secretario=(isset($_POST['id_secretario']))?$_POST['id_secretario']:0;
				$id_ciudad=(isset($_POST['id_ciudad']))?$_POST['id_ciudad']:0;
				
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$identificacion_clientes_1=$_POST['identificacion_clientes_1'];
				$identificacion_clientes_2=$_POST['identificacion_clientes_2'];
				$identificacion_clientes_3=$_POST['identificacion_clientes_3'];
					
				$identificacion_garantes=$_POST['identificacion_garantes'];
				$identificacion_garantes_1=$_POST['identificacion_garantes_1'];
				$identificacion_garantes_2=$_POST['identificacion_garantes_2'];
				$identificacion_garantes_3=$_POST['identificacion_garantes_3'];
					
				$documento = $_POST['documento'];
				$tipo_documento = $_POST['tipo_documento'];
				$firma = $_POST['firma'];
	
	
				$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
				//paratipodocumento
				$tipo_doc = "";
				switch ($documento)
				{
					case "AC" :
						$tipo_doc="AC";
						$columnas = "ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
								,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
								,ju.cuantia_inicial,ep.nombre_estados_procesales_juicios, ac.firmado_secretario, ac.id_avoco_conocimiento AS \"id_documento\" , ac.nombre_documento AS \"nombre_doc\"
								, ac.ruta_documento AS \"ruta_doc\" ,ju.fecha_emision_juicios,ju.fecha_ultima_providencia ,ju.descripcion_estado_procesal
								,ac.modificado, ac.creado AS \"fecha_creado\" ";
							
						$where = " 1=1 AND ac.eliminado_documento='false'";
	
							
						if($tipo_documento=="ALL")
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios ";
								
								
								
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
								
	
						}else if($tipo_documento==1)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								 AND ac.tipo_avoco = 1";
								
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
								
	
						}else if($tipo_documento==2)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								 AND ac.tipo_avoco = 2";
								
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
								
	
						}else if($tipo_documento==3)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 3";
								
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
								
	
						}
						else if($tipo_documento==6)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 6";
								
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
								
	
						}
						else if($tipo_documento==7)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 7";
								
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
								
	
						}
	
						else if($tipo_documento==12)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 12";
								
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
								
	
						}
							
						break;
							
					case "OF" :
						$tipo_doc="OF";
						$columnas = "ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
							,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
							,ju.cuantia_inicial,ep.nombre_estados_procesales_juicios , of.id_oficios  AS \"id_documento\" , of.nombre_oficio AS \"nombre_doc\"
							, of.ruta_oficio AS \"ruta_doc\" ,ju.fecha_emision_juicios,ju.fecha_ultima_providencia ,ju.descripcion_estado_procesal
							, of.modificado, of.firmado_secretario, of.creado AS \"fecha_creado\" ";
							
						$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
							INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
							INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
							INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
							INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
							INNER JOIN oficios of  ON of.id_juicios = ju.id_juicios";
							
						$where = " 1=1";
						if($firma!=""){$where.=" AND of.firmado_secretario='$firma'";}
	
						$fechaDesde="";$fechaHasta="";
						if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
						{
							$fechaDesde=$_POST["fcha_desde"];
							$fechaHasta=$_POST["fcha_hasta"];
							if ($fechaDesde != "" && $fechaHasta != "")
							{
								$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							}
	
							if($fechaDesde != "" && $fechaHasta == ""){
	
								$fechaHasta='2018/12/01';
								$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
							}
							if($fechaDesde == "" && $fechaHasta != ""){
	
								$fechaDesde='1800/01/01';
								$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
							}
						}
	
						break;
							
					case "PR" :
						$tipo_doc="PR";
						$columnas=" ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
							,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
							, pr.id_providencias  AS \"id_documento\" , pr.firmado_secretario, pr.nombre_archivo_providencias AS \"nombre_doc\" , pr.ruta_providencias AS \"ruta_doc\"
							,ju.fecha_emision_juicios,ju.cuantia_inicial, ep.nombre_estados_procesales_juicios,ju.descripcion_estado_procesal
							,pr.modificado, ju.fecha_ultima_providencia, pr.creado AS \"fecha_creado\"";
							
						$where=" 1=1 AND pr.eliminado_documento='false'";
	
						if($tipo_documento=="ALL")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias	";
	
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
	
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
								
	
						}else if($tipo_documento=="PL")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 2";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
	
						}else if($tipo_documento=="PS")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 1";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
								
						}
						else if($tipo_documento=="PCP")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 3";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
								
						}
	
						else if($tipo_documento=="PCPAVOC")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 9";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
	
						}
	
	
						else if($tipo_documento=="PRES")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 4";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
								
						}
	
	
	
						else if($tipo_documento=="PRESAVOC")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 8";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
	
						}
							
						else if($tipo_documento=="PEMCUBAN")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 5";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
								
						}
						else if($tipo_documento=="PLMCD")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 6";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
								
						}
							
						else if($tipo_documento=="PLMCF")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 7";
	
							$where=" 1=1 AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
	
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
								if($fechaDesde == "" && $fechaHasta != ""){
	
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
	
								}
							}
								
						}
	
							
						break;
							
					case "ALL" :
							
						$columnas=" ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
									,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
									, pr.id_providencias , pr.firmado_secretario, pr.nombre_archivo_providencias,ju.fecha_emision_juicios
									, pr.ruta_providencias, pr.modificado";
							
						$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								";
							
						$where=" 1=0";
	
						break;
				}
					
				if($juicio_referido_titulo_credito!=""){$where.=" AND ju.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
	
				if($numero_titulo_credito!=""){$where.=" AND tc.numero_titulo_credito='$numero_titulo_credito'";}
					
				if($identificacion_clientes!=""){$where.=" AND cl.identificacion_clientes like '$identificacion_clientes'";}
					
				
				if($id_estados_procesales_juicios!=0){$where.=" AND ep.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
	
				if($identificacion_clientes_1!=""){$where.=" AND cl.identificacion_clientes_1 like'$identificacion_clientes_1'";}
				if($identificacion_clientes_2!=""){$where.=" AND cl.identificacion_clientes_2 like '$identificacion_clientes_2'";}
				if($identificacion_clientes_3!=""){$where.=" AND cl.identificacion_clientes_3 like '$identificacion_clientes_3'";}
					
				if($identificacion_garantes!=""){$where.=" AND cl.identificacion_garantes like '$identificacion_garantes'";}
				if($identificacion_garantes_1!=""){$where.=" AND cl.identificacion_garantes_1 like '$identificacion_garantes_1'";}
				if($identificacion_garantes_2!=""){$where.=" AND cl.identificacion_garantes_2 like '$identificacion_garantes_2'";}
				if($identificacion_garantes_3!=""){$where.=" AND cl.identificacion_garantes_3 like '$identificacion_garantes_3'";}
					
				if($id_abogado!=0){$where.=" AND asv.id_abogado='$id_abogado'";}
	
				if($id_ciudad!=0){$where.=" AND asv.id_ciudad='$id_ciudad'";}
				
				if($id_secretario!=0){$where.=" AND asv.id_secretario='$id_secretario'";}
					
				
	
	
	
				$this->BuscadorCordinador($page,$columnas,$tablas,$where,$tipo_doc);
	
				exit();
			}
				
				
				
			if(isset($_POST["reporte_documentos"]))
			{
				$parametros = array();
				$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
				$parametros['id_ciudad']=isset($_POST['id_ciudad'])?trim($_POST['id_ciudad']):0;
				$parametros['id_secretario']=isset($_POST['id_secretario'])?trim($_POST['id_secretario']):0;
				$parametros['id_abogado']=isset($_POST['id_impulsor'])?trim($_POST['id_impulsor']):0;
				
				
				$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
				$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
				$parametros['id_estados_procesales_juicios']=(isset($_POST['id_estados_procesales_juicios']))?trim($_POST['id_estados_procesales_juicios']):0;
				$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
				$parametros['identificacion_clientes_1']=(isset($_POST['identificacion_clientes_1']))?trim($_POST['identificacion_clientes_1']):'';
				$parametros['identificacion_clientes_2']=(isset($_POST['identificacion_clientes_2']))?trim($_POST['identificacion_clientes_2']):'';
				$parametros['identificacion_clientes_3']=(isset($_POST['identificacion_clientes_3']))?trim($_POST['identificacion_clientes_3']):'';
				$parametros['identificacion_garantes']=(isset($_POST['identificacion_garantes']))?trim($_POST['identificacion_garantes']):'';
				$parametros['identificacion_garantes_1']=(isset($_POST['identificacion_garantes_1']))?trim($_POST['identificacion_garantes_1']):'';
				$parametros['identificacion_garantes_2']=(isset($_POST['identificacion_garantes_2']))?trim($_POST['identificacion_garantes_2']):'';
				$parametros['identificacion_garantes_3']=(isset($_POST['identificacion_garantes_3']))?trim($_POST['identificacion_garantes_3']):'';
				$parametros['documento']=(isset($_POST['documento']))?trim($_POST['documento']):'';
				$parametros['tipo_documento']=(isset($_POST['tipo_documento']))?trim($_POST['tipo_documento']):'';
				$parametros['firma']=(isset($_POST['firma']))?trim($_POST['firma']):'';
	
	
				$fechaDesde="";$fechaHasta="";
				if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
				{
					$fechaDesde=$_POST["fcha_desde"];
					$fechaHasta=$_POST["fcha_hasta"];
					if ($fechaDesde != "" && $fechaHasta != "")
					{
						$parametros['fecha_desde'] = $fechaDesde;
						$parametros['fecha_hasta'] = $fechaHasta;
					}
	
					if($fechaDesde != "" && $fechaHasta == ""){
							
						$fechaHasta='2018/12/01';
						$parametros['fecha_desde'] = $fechaDesde;
						$parametros['fecha_hasta'] = $fechaHasta;
							
					}
					if($fechaDesde == "" && $fechaHasta != ""){
							
						$fechaDesde='1800/01/01';
						$parametros['fecha_desde'] = $fechaDesde;
						$parametros['fecha_hasta'] = $fechaHasta;
					}
				}
	
	
				$pagina="contDocumentosGenerados.aspx";
	
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
	
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
	
				die();
					
			}
				
		}
			
			
			
		$this->view("DocumentosGeneradosCordinador",array(
				"resultEdit"=>$resultEdit, "resultSet"=>$resultSet, "resultDatos"=>$resultDatos, "resultEstadoProcesal"=>$resultEstadoProcesal, "resultOrigen"=>$resultOrigen
				
					
		));
			
			
	}
	else
	{
		$this->view("Login",array(
				"resultSet"=>""
	
		));
			
	}
	
	
	
	
}












public function BuscadorCordinador($page=1,$columnas,$tablas,$where_to,$tipo=null){


	$doc=($tipo!="")?$tipo:"ALL";
	$juicios = new JuiciosModel();
	$html="";
	$id="ju.id_juicios";
	$resultSet=$juicios->getCantidad("*", $tablas, $where_to);

	$cantidadResult=(int)$resultSet[0]->total;

	$per_page = 50; //la cantidad de registros que desea mostrar
	$adjacents  = 9; //brecha entre páginas después de varios adyacentes
	$offset = ($page - 1) * $per_page;

	$limit = " LIMIT   '$per_page' OFFSET '$offset'";


	$resultSet=$juicios->getCondicionesPag($columnas, $tablas, $where_to, $id, $limit);

	$count_query   = $cantidadResult;

	$total_pages = ceil($cantidadResult/$per_page);

	if ($cantidadResult>0)
	{

		$html.='<div class="col-lg-12 col-md-12 col-xs-12">';
		$html.='<div class="pull-left">';
		$html.='<span class="form-control"><strong>Registros: </strong>'.$cantidadResult.'</span>';
		$html.='<input type="hidden" value="'.$cantidadResult.'" id="total_query" name="total_query"/>' ;
		$html.='</div></div>';
		$html.='<div class="col-lg-12 col-md-12 col-xs-12">';
		$html.='<section style="height:425px; overflow-y:scroll;">';
		$html.='<table class="table table-hover">';
		$html.='<thead>';
		$html.='<tr class="info">';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Ord.</th>';
		$html.='<th style="text-align: left;  font-size: 10px;"># Juicio</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Cedula Cliente Principal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Nombres Cliente Principal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;"># Operación</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Creacion Doc</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Aprobación Secretario</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Cuantía Inicial</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Estado Procesal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Descripción Etapa Procesal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Última Providencia</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Impulsor</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Secretario</th>';

		$html.='</tr>';
		$html.='</thead>';
		$html.='<tbody>';

			

		$i=0;
			


		foreach ($resultSet as $res)
		{
			$i++;
			$firmado=$res->firmado_secretario;

			$html.='<tr>';
			$html.='<td style="font-size: 25px;"><span class="pull-right"><a target="_blank" href="index.php?controller=DocumentosGenerados&action=verDoc&documento='.$res->id_documento.'-'.$res->ruta_doc.'-'.$res->nombre_doc.'&id_juicios='. $res->id_juicios.' "><img src="view/images/logo_pdf.png" class="img-responsive zoom" width="60" height="60"></a></span></td>';

			if($firmado=='t'){
					
				$html.='<td  style="font-size: 18px; text-aling:center;"><a href="#" class="btn btn-warning" style="font-size:65%;"><i class="glyphicon glyphicon-floppy-disk"> Firmado</i></a></td>';

			}
			if($firmado=='f'){
					
				$html.='<td  style="font-size: 18px; text-aling:center;"><a href="#" class="btn btn-primary" style="font-size:65%;"><i class="glyphicon glyphicon-info-sign"> Revisando</i></a></td>';
				
			}

			$html.='<td style="font-size: 9px;">'.$i.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->numero_juicios.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->nombres_clientes.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->numero_titulo_credito.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->fecha_creado.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->modificado.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->cuantia_inicial.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->nombre_estados_procesales_juicios.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->descripcion_estado_procesal.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->fecha_ultima_providencia.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->impulsores.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->secretarios.'</td>';
			//$html.='<td style="font-size: 9px;">'.$res->nombre_doc.'</td>';


			$html.='</tr>';



		}

		$html.='</tbody>';
		$html.='</table>';
		$html.='</section></div>';
		$html.='<div class="table-pagination pull-right">';
		$html.=''. $this->paginate("index.php", $page, $total_pages, $adjacents).'';
		$html.='</div>';
			
	}else{
			
		$html.='<div class="alert alert-warning alert-dismissable">';
		$html.='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		$html.='<h4>Aviso!!!</h4> No hay datos para mostrar';
		$html.='</div>';
			
	}

	echo $html;



}




















////////////////////// ROL SECRETARIO ////////////////////////////////


public function index2(){


	session_start();
	
	if (isset(  $_SESSION['usuario_usuarios']) )
	{
	
		$clientes = new ClientesModel();
		$ciudad = new CiudadModel();
		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal = null;
		$provincias = new ProvinciasModel();
		$resultProv = null;
		
		$juicios = new JuiciosModel();
		
		$_id_usuarios= $_SESSION['id_usuarios'];
		
		$columnas = " asignacion_secretarios_view.id_abogado,
					  asignacion_secretarios_view.impulsores";
			
		$tablas   = "public.asignacion_secretarios_view";
			
		$where    = "public.asignacion_secretarios_view.id_secretario = '$_id_usuarios'";
			
		$id       = "asignacion_secretarios_view.id_abogado";
		$resultImpul=$juicios->getCondiciones($columnas ,$tablas ,$where, $id);
		
		
		$nombre_controladores = "MatrizJuiciosSecretarios";
		$id_rol= $_SESSION['id_rol'];
		$resultPerVer= $clientes->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		$resultSet = "";
		$resultEdit = "";
			
			
		if (!empty($resultPerVer))
		{
			$resultEstadoProcesal = $estado_procesal->getAll("nombre_estados_procesales_juicios");
			$resultProv = $provincias->getAll("nombre_provincias");
	
			
	
			$columnas ="";
			$tablas = "";
			$where = "";
			$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
			if($action == 'ajax')
			{
				$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
				$numero_titulo_credito=$_POST['numero_titulo_credito'];
				$id_provincias=$_POST['id_provincias'];
				$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
				$id_abogado=$_POST['id_abogado'];
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$identificacion_clientes_1=$_POST['identificacion_clientes_1'];
				$identificacion_clientes_2=$_POST['identificacion_clientes_2'];
				$identificacion_clientes_3=$_POST['identificacion_clientes_3'];
					
				$identificacion_garantes=$_POST['identificacion_garantes'];
				$identificacion_garantes_1=$_POST['identificacion_garantes_1'];
				$identificacion_garantes_2=$_POST['identificacion_garantes_2'];
				$identificacion_garantes_3=$_POST['identificacion_garantes_3'];
					
				$documento = $_POST['documento'];
				$tipo_documento = $_POST['tipo_documento'];
				$firma = $_POST['firma'];
				
				
				$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
				//paratipodocumento
				$tipo_doc = "";
				switch ($documento)
				{
					case "AC" :
						$tipo_doc="AC";
						$columnas = "ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
								,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
								,ju.cuantia_inicial,ep.nombre_estados_procesales_juicios, ac.firmado_secretario, ac.id_avoco_conocimiento AS \"id_documento\" , ac.nombre_documento AS \"nombre_doc\"
								, ac.ruta_documento AS \"ruta_doc\" ,ju.fecha_emision_juicios,ju.fecha_ultima_providencia ,ju.descripcion_estado_procesal
								,ac.modificado, ac.creado AS \"fecha_creado\" ";
							
						$where = " 1=1 AND asv.id_secretario='$_id_usuarios' AND ac.eliminado_documento='false'";
						
							
						if($tipo_documento=="ALL")
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios ";
							
							
							
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
							
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
	
						}else if($tipo_documento==1)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								 AND ac.tipo_avoco = 1";
							
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
							
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
								if($fechaDesde == "" && $fechaHasta != ""){
							
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
							}
							
	
						}else if($tipo_documento==2)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								 AND ac.tipo_avoco = 2";
							
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
							
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
								if($fechaDesde == "" && $fechaHasta != ""){
							
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
							}
							
	
						}else if($tipo_documento==3)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 3";
							
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
							
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
								if($fechaDesde == "" && $fechaHasta != ""){
							
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
							}
							
	
						}
						else if($tipo_documento==6)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 6";
							
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
							
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
								if($fechaDesde == "" && $fechaHasta != ""){
							
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
							}
							
								
						}
						else if($tipo_documento==7)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 7";
							
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
							
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
								if($fechaDesde == "" && $fechaHasta != ""){
							
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
							}
							
								
						}
						
						else if($tipo_documento==12)
						{
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 12";
							
							if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
							
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
								if($fechaDesde == "" && $fechaHasta != ""){
							
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
							}
							
								
						}
							
						break;
							
					case "OF" :
						$tipo_doc="OF";
						$columnas = "ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
							,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
							,ju.cuantia_inicial,ep.nombre_estados_procesales_juicios , of.id_oficios  AS \"id_documento\" , of.nombre_oficio AS \"nombre_doc\"
							, of.ruta_oficio AS \"ruta_doc\" ,ju.fecha_emision_juicios,ju.fecha_ultima_providencia ,ju.descripcion_estado_procesal
							, of.modificado, of.firmado_secretario, of.creado AS \"fecha_creado\" ";
							
						$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
							INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
							INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
							INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
							INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
							INNER JOIN oficios of  ON of.id_juicios = ju.id_juicios";
							
						$where = " 1=1 AND asv.id_secretario='$_id_usuarios' ";
						if($firma!=""){$where.=" AND of.firmado_secretario='$firma'";}
						
						$fechaDesde="";$fechaHasta="";
						if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
						{
							$fechaDesde=$_POST["fcha_desde"];
							$fechaHasta=$_POST["fcha_hasta"];
							if ($fechaDesde != "" && $fechaHasta != "")
							{
								$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							}
								
							if($fechaDesde != "" && $fechaHasta == ""){
						
								$fechaHasta='2018/12/01';
								$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
						
							}
							if($fechaDesde == "" && $fechaHasta != ""){
						
								$fechaDesde='1800/01/01';
								$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
						
							}
						}
						
						break;
							
					case "PR" :
						$tipo_doc="PR";
						$columnas=" ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
							,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
							, pr.id_providencias  AS \"id_documento\" , pr.firmado_secretario, pr.nombre_archivo_providencias AS \"nombre_doc\" , pr.ruta_providencias AS \"ruta_doc\"
							,ju.fecha_emision_juicios,ju.cuantia_inicial, ep.nombre_estados_procesales_juicios,ju.descripcion_estado_procesal
							,pr.modificado, ju.fecha_ultima_providencia, pr.creado AS \"fecha_creado\"";
							
						$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
						
						if($tipo_documento=="ALL")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias	";
	
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}

							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
							
								if($fechaDesde != "" && $fechaHasta == ""){
							
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
								if($fechaDesde == "" && $fechaHasta != ""){
							
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
								}
							}
							
	
						}else if($tipo_documento=="PL")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 2";
	
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
	
						}else if($tipo_documento=="PS")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 1";
	
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
						}
						else if($tipo_documento=="PCP")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 3";
								
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
						}
						
						else if($tipo_documento=="PCPAVOC")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 9";
						
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
						
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
						
								}
								if($fechaDesde == "" && $fechaHasta != ""){
						
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
						
								}
							}
								
						}
						
						
						else if($tipo_documento=="PRES")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 4";
								
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
						}
						
						
						
						else if($tipo_documento=="PRESAVOC")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 8";
						
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
						
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
						
								}
								if($fechaDesde == "" && $fechaHasta != ""){
						
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
						
								}
							}
								
						}
							
						else if($tipo_documento=="PEMCUBAN")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 5";
								
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
						}
						else if($tipo_documento=="PLMCD")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 6";
						
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
						}	
							
						else if($tipo_documento=="PLMCF")
						{
							$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 7";
								
							$where=" 1=1 AND asv.id_secretario='$_id_usuarios' AND pr.eliminado_documento='false'";
							if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
									
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
						}
						
							
						break;
							
					case "ALL" :
							
						$columnas=" ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
									,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
									, pr.id_providencias , pr.firmado_secretario, pr.nombre_archivo_providencias,ju.fecha_emision_juicios
									, pr.ruta_providencias, pr.modificado";
							
						$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								";
							
						$where=" 1=0 AND asv.id_secretario='$_id_usuarios'";
						
						break;
				}
					
				if($juicio_referido_titulo_credito!=""){$where.=" AND ju.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
	
				if($numero_titulo_credito!=""){$where.=" AND tc.numero_titulo_credito='$numero_titulo_credito'";}
					
				if($identificacion_clientes!=""){$where.=" AND cl.identificacion_clientes like '$identificacion_clientes'";}
					
				if($id_provincias!=0){$where.=" AND pv.id_provincias='$id_provincias'";}
	
				if($id_estados_procesales_juicios!=0){$where.=" AND ep.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
	
				if($identificacion_clientes_1!=""){$where.=" AND cl.identificacion_clientes_1 like'$identificacion_clientes_1'";}
				if($identificacion_clientes_2!=""){$where.=" AND cl.identificacion_clientes_2 like '$identificacion_clientes_2'";}
				if($identificacion_clientes_3!=""){$where.=" AND cl.identificacion_clientes_3 like '$identificacion_clientes_3'";}
					
				if($identificacion_garantes!=""){$where.=" AND cl.identificacion_garantes like '$identificacion_garantes'";}
				if($identificacion_garantes_1!=""){$where.=" AND cl.identificacion_garantes_1 like '$identificacion_garantes_1'";}
				if($identificacion_garantes_2!=""){$where.=" AND cl.identificacion_garantes_2 like '$identificacion_garantes_2'";}
				if($identificacion_garantes_3!=""){$where.=" AND cl.identificacion_garantes_3 like '$identificacion_garantes_3'";}
					
				if($id_abogado!=0){$where.=" AND asv.id_abogado='$id_abogado'";}
				
				
				
	
	
				$this->BuscadorSecretarios($page,$columnas,$tablas,$where,$tipo_doc);
	
				exit();
			}
			
			
			
			if(isset($_POST["reporte_documentos"]))
			{
				$parametros = array();
				$parametros['id_secretario']= $_SESSION['id_usuarios']?trim($_SESSION['id_usuarios']):0;
				$parametros['id_abogado']=isset($_POST['id_abogado'])?trim($_POST['id_abogado']):0;
				$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
				$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
				$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
				$parametros['id_provincias']=(isset($_POST['id_provincias']))?trim($_POST['id_provincias']):0;
				$parametros['id_estados_procesales_juicios']=(isset($_POST['id_estados_procesales_juicios']))?trim($_POST['id_estados_procesales_juicios']):0;
				$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
				$parametros['identificacion_clientes_1']=(isset($_POST['identificacion_clientes_1']))?trim($_POST['identificacion_clientes_1']):'';
				$parametros['identificacion_clientes_2']=(isset($_POST['identificacion_clientes_2']))?trim($_POST['identificacion_clientes_2']):'';
				$parametros['identificacion_clientes_3']=(isset($_POST['identificacion_clientes_3']))?trim($_POST['identificacion_clientes_3']):'';
				$parametros['identificacion_garantes']=(isset($_POST['identificacion_garantes']))?trim($_POST['identificacion_garantes']):'';
				$parametros['identificacion_garantes_1']=(isset($_POST['identificacion_garantes_1']))?trim($_POST['identificacion_garantes_1']):'';
				$parametros['identificacion_garantes_2']=(isset($_POST['identificacion_garantes_2']))?trim($_POST['identificacion_garantes_2']):'';
				$parametros['identificacion_garantes_3']=(isset($_POST['identificacion_garantes_3']))?trim($_POST['identificacion_garantes_3']):'';
				$parametros['documento']=(isset($_POST['documento']))?trim($_POST['documento']):'';
				$parametros['tipo_documento']=(isset($_POST['tipo_documento']))?trim($_POST['tipo_documento']):'';
				$parametros['firma']=(isset($_POST['firma']))?trim($_POST['firma']):'';
				
				
				$fechaDesde="";$fechaHasta="";
				if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
				{
					$fechaDesde=$_POST["fcha_desde"];
					$fechaHasta=$_POST["fcha_hasta"];
					if ($fechaDesde != "" && $fechaHasta != "")
					{
						$parametros['fecha_desde'] = $fechaDesde;
						$parametros['fecha_hasta'] = $fechaHasta;
					}
				
					if($fechaDesde != "" && $fechaHasta == ""){
							
						$fechaHasta='2018/12/01';
						$parametros['fecha_desde'] = $fechaDesde;
						$parametros['fecha_hasta'] = $fechaHasta;
							
					}
					if($fechaDesde == "" && $fechaHasta != ""){
							
						$fechaDesde='1800/01/01';
						$parametros['fecha_desde'] = $fechaDesde;
						$parametros['fecha_hasta'] = $fechaHasta;
					}
				}
				
				
				$pagina="contDocumentosGenerados.aspx";
				
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
				
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
				
				die();
					
			}
			
		}
			
			
			
		$this->view("DocumentosGeneradosSecretarios",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit,"resultEstadoProcesal"=>$resultEstadoProcesal,
				"resultProv"=>$resultProv, "resultImpul"=>$resultImpul
					
		));
			
			
	}
	else
	{
		$this->view("Login",array(
				"resultSet"=>""
	
		));
			
	}
	
	
	
}





public function BuscadorSecretarios($page=1,$columnas,$tablas,$where_to,$tipo=null)
{
	$doc=($tipo!="")?$tipo:"ALL";
	$juicios = new JuiciosModel();
	$html="";
	$id="ju.id_juicios";
	$resultSet=$juicios->getCantidad("*", $tablas, $where_to);

	$cantidadResult=(int)$resultSet[0]->total;

	$per_page = 50; //la cantidad de registros que desea mostrar
	$adjacents  = 9; //brecha entre páginas después de varios adyacentes
	$offset = ($page - 1) * $per_page;

	$limit = " LIMIT   '$per_page' OFFSET '$offset'";


	$resultSet=$juicios->getCondicionesPag($columnas, $tablas, $where_to, $id, $limit);

	$count_query   = $cantidadResult;

	$total_pages = ceil($cantidadResult/$per_page);

	if ($cantidadResult>0)
	{

		$html.='<div class="col-lg-12 col-md-12 col-xs-12">';
		$html.='<div class="pull-left">';
		$html.='<span class="form-control"><strong>Registros: </strong>'.$cantidadResult.'</span>';
		$html.='<input type="hidden" value="'.$cantidadResult.'" id="total_query" name="total_query"/>' ;
		$html.='</div></div>';
		$html.='<div class="col-lg-12 col-md-12 col-xs-12">';
		$html.='<section style="height:425px; overflow-y:scroll;">';
		$html.='<table class="table table-hover">';
		$html.='<thead>';
		$html.='<tr class="info">';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Ord.</th>';
		$html.='<th style="text-align: left;  font-size: 10px;"># Juicio</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Cedula Cliente Principal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Nombres Cliente Principal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;"># Operación</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Creacion Doc</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Aprobación Secretario</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Cuantía Inicial</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Estado Procesal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Descripción Etapa Procesal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Última Providencia</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Impulsor</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Secretario</th>';
		//$html.='<th style="text-align: left;  font-size: 10px;">Nombre Documento</th>';
		
		$html.='</tr>';
		$html.='</thead>';
		$html.='<tbody>';

			

		$i=0;
			
		
		
		foreach ($resultSet as $res)
		{
			$i++;
			$firmado=$res->firmado_secretario;
		
			$html.='<tr>';
			$html.='<td style="font-size: 25px;"><span class="pull-right"><a target="_blank" href="index.php?controller=DocumentosGenerados&action=verDoc&documento='.$res->id_documento.'-'.$res->ruta_doc.'-'.$res->nombre_doc.'&id_juicios='. $res->id_juicios.' "><img src="view/images/logo_pdf.png" class="img-responsive zoom" width="60" height="60"></a></span></td>';
			
			if($firmado=='t'){
			
				$html.='<td colspan="2" style="font-size: 18px; text-aling:center;"><a href="#" class="btn btn-warning" style="font-size:65%;"><i class="glyphicon glyphicon-floppy-disk"> Firmado</i></a></td>';
				
			}
			if($firmado=='f'){
					
				$html.='<td style="font-size: 18px;"><span class="pull-right"><a href="index.php?controller=DocumentosGenerados&action=firmar&id_documento='.$res->id_documento.'&ruta='.$res->ruta_doc.'&nombre_doc='.$res->nombre_doc.'" class="btn btn-success" style="font-size:65%;"><i class="glyphicon glyphicon-ok"></i></a></span></td>';
				$html.='<td style="font-size: 18px;"><span class="pull-right"><a href="index.php?controller=DocumentosGenerados&action=eliminar&id_documento='.$res->id_documento.'&ruta='.$res->ruta_doc.'&nombre_doc='.$res->nombre_doc.'" class="btn btn-danger" style="font-size:65%;"><i class="glyphicon glyphicon-trash"></i></a></span></td>';
				
			}
			
			$html.='<td style="font-size: 9px;">'.$i.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->numero_juicios.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->nombres_clientes.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->numero_titulo_credito.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->fecha_creado.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->modificado.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->cuantia_inicial.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->nombre_estados_procesales_juicios.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->descripcion_estado_procesal.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->fecha_ultima_providencia.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->impulsores.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->secretarios.'</td>';
			//$html.='<td style="font-size: 9px;">'.$res->nombre_doc.'</td>';
				

			$html.='</tr>';

			

		}

		$html.='</tbody>';
		$html.='</table>';
		$html.='</section></div>';
		$html.='<div class="table-pagination pull-right">';
		$html.=''. $this->paginate("index.php", $page, $total_pages, $adjacents).'';
		$html.='</div>';
			
	}else{
			
		$html.='<div class="alert alert-warning alert-dismissable">';
		$html.='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		$html.='<h4>Aviso!!!</h4> No hay datos para mostrar';
		$html.='</div>';
			
	}

	echo $html;


}






public function eliminar()
{

	if(isset($_GET["id_documento"]))
	{
		$id_documento=(int)$_GET["id_documento"];
		$ruta=$_GET["ruta"];
		$nombre_doc=$_GET["nombre_doc"];
		$nombre_doc .= ".pdf";
		
		
		
		
		$directorio = 'F:/coactiva/Documentos/' . $ruta . '/' . $nombre_doc;
		
		
		
		if($ruta=="Oficios"){
				
			$oficios=new OficiosModel();
			
			$resultDocumento = $oficios->getBy("id_oficios='$id_documento'" );
			$asignacion_secretarios = new AsignacionSecretariosModel();
			
				
			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$id_impulsor = $resultDocumento[0]->id_usuario_registra_oficios;
				$nombre_documento = $resultDocumento[0]->nombre_oficio;
			
				$resultSecre = $asignacion_secretarios->getBy("id_abogado_asignacion_secretarios ='$id_impulsor'");
				$id_secretario=$resultSecre[0]->id_secretario_asignacion_secretarios;
					
				
				
				
				if($id_juicios>0){
						
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Oficios";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
							}
			
						}
			
					
			
				}
					
			}
			
			
			try {
					
				$eliminado=unlink($directorio);
				$oficios->deleteBy("id_oficios",$id_documento);
					
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"no se elimino el archivo <br>".$e->getMessage()));
			}
				
				
			$traza=new TrazasModel();
			$_nombre_controlador = "Oficios";
			$_accion_trazas  = "Borrar";
			$_parametros_trazas = $id_documento;
			$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);
				
		}
		
		
		
		
		if($ruta=="Avoco_Conocimiento"){
			
			$avoco_conocimiento=new AvocoConocimientoModel();
			
			$resultDocumento = $avoco_conocimiento->getBy("id_avoco_conocimiento='$id_documento'" );
			
			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$tipo_avoco = $resultDocumento[0]->tipo_avoco;
				$id_impulsor = $resultDocumento[0]->id_impulsor;
				$id_secretario = $resultDocumento[0]->id_secretario;
				$nombre_documento = $resultDocumento[0]->nombre_documento;
			
			
				if($tipo_avoco > 0 && $id_juicios>0){
						
					if($tipo_avoco==7){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Avoco Conocimiento Nuevos Procesos";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
							}
			
						}
			
					}
					
					
					if($tipo_avoco==12){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Avoco Conocimiento Cambio Liquidador";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
					
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
							}
								
						}
							
					}
					
			
				}
					
			}
			
			
			try {
			
			//	$eliminado=unlink($directorio);
				$avoco_conocimiento->UpdateBy("firmado_secretario='true', eliminado_documento='true'", "avoco_conocimiento", "id_avoco_conocimiento='$id_documento'");
				
				//$avoco_conocimiento->deleteBy("id_avoco_conocimiento",$id_documento);
					
			
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"no se elimino el archivo <br>".$e->getMessage()));
			}
			
			
			$traza=new TrazasModel();
			$_nombre_controlador = "Avoco Conocimiento";
			$_accion_trazas  = "Borrar";
			$_parametros_trazas = $id_documento;
			$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);
			
		}
		
		
		
		if($ruta=="Providencias_Suspension" || $ruta=="Providencias_Embargo_Cuenta_Bancaria"  || $ruta=="Providencias_Pago_Total" || $ruta=="Providencias_Restructuracion"  || $ruta=="Providencias_Levantamiento"  || $ruta=="Providencias_Levantamiento_Medida_Cautelar_Discapacidad"  || $ruta=="Providencias_Levantamiento_Medida_Cautelar_Fallecimiento"    ){
				
			$providencias=new ProvidenciasModel();
			$resultDocumento = $providencias->getBy("id_providencias='$id_documento'" );
				
			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$tipo_providencias = $resultDocumento[0]->id_tipo_providencias;
				$id_impulsor = $resultDocumento[0]->id_impulsor;
				$id_secretario = $resultDocumento[0]->id_secretario;
				$nombre_archivo_providencias = $resultDocumento[0]->nombre_archivo_providencias;
			
			
			
				if($tipo_providencias > 0 && $id_juicios > 0){
			
					if($tipo_providencias==1){
							
			
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Suspensión";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
			
						}
			
			
					}
					if($tipo_providencias==2){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Levantamiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
			
						}
			
			
			
					}
					if($tipo_providencias==3){
			
			
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Pago Total";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
			
						}
							
			
					}
					if($tipo_providencias==4){
			
			
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Reestructuración";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
			
						}
							
					}
					if($tipo_providencias==5){
			
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Embargo Cuenta Bancaria";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
			
						}
							
					}
					if($tipo_providencias==6){
							
			
			
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Levantamiento Medida Cautelar Discapacidad";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
			
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
			
						}
			
			
					}
						
						
					if($tipo_providencias==7){
							
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Levantamiento Medida Cautelar Fallecimiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
							
					}
					
					
					if($tipo_providencias==8){
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Reestructuración con Avoco Conocimiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
					}
					
					if($tipo_providencias==9){
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Pago Total con Avoco Conocimiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
							
					}
					
					
				}
					
			}
			
			
			
			
			try {
					
				//$eliminado=unlink($directorio);
				$providencias->UpdateBy("firmado_secretario='true', eliminado_documento='true'", "providencias", "id_providencias='$id_documento'");
				
				//$providencias->deleteBy("id_providencias",$id_documento);
					
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"no se elimino el archivo <br>".$e->getMessage()));
			}
			
				
			$traza=new TrazasModel();
			$_nombre_controlador = "Providencias";
			$_accion_trazas  = "Borrar";
			$_parametros_trazas = $id_documento;
			$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);
			
		}
		
		
		
	}

	$this->redirect("DocumentosGenerados", "index2");
}










public function eliminar_impulsor()
{

	if(isset($_GET["id_documento"]))
	{
		$id_documento=(int)$_GET["id_documento"];
		$ruta=$_GET["ruta"];
		$nombre_doc=$_GET["nombre_doc"];
		$nombre_doc .= ".pdf";




		$directorio = 'F:/coactiva/Documentos/' . $ruta . '/' . $nombre_doc;



		if($ruta=="Oficios"){

			$oficios=new OficiosModel();
				
			$resultDocumento = $oficios->getBy("id_oficios='$id_documento'" );
			$asignacion_secretarios = new AsignacionSecretariosModel();
				

			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$id_impulsor = $resultDocumento[0]->id_usuario_registra_oficios;
				$nombre_documento = $resultDocumento[0]->nombre_oficio;
					
				$resultSecre = $asignacion_secretarios->getBy("id_abogado_asignacion_secretarios ='$id_impulsor'");
				$id_secretario=$resultSecre[0]->id_secretario_asignacion_secretarios;
					



				if($id_juicios>0){

					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Elimino Oficios";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;

							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
						}
							
					}
						
						
						
				}
					
			}
				
				
			try {
					
				$eliminado=unlink($directorio);
				$oficios->deleteBy("id_oficios",$id_documento);
					
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"no se elimino el archivo <br>".$e->getMessage()));
			}


			$traza=new TrazasModel();
			$_nombre_controlador = "Oficios";
			$_accion_trazas  = "Borrar";
			$_parametros_trazas = $id_documento;
			$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);

		}




		if($ruta=="Avoco_Conocimiento"){
				
			$avoco_conocimiento=new AvocoConocimientoModel();
				
			$resultDocumento = $avoco_conocimiento->getBy("id_avoco_conocimiento='$id_documento'" );
				
			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$tipo_avoco = $resultDocumento[0]->tipo_avoco;
				$id_impulsor = $resultDocumento[0]->id_impulsor;
				$id_secretario = $resultDocumento[0]->id_secretario;
				$nombre_documento = $resultDocumento[0]->nombre_documento;
					
					
				if($tipo_avoco > 0 && $id_juicios>0){

					if($tipo_avoco==7){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Avoco Conocimiento Nuevos Procesos";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;

								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
							}
								
						}
							
					}
						
						
					if($tipo_avoco==12){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Avoco Conocimiento Cambio Liquidador";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								

							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
							}

						}
							
					}
						
						
				}
					
			}
				
				
			try {
					
				//	$eliminado=unlink($directorio);
				$avoco_conocimiento->UpdateBy("firmado_secretario='true', eliminado_documento='true'", "avoco_conocimiento", "id_avoco_conocimiento='$id_documento'");

				//$avoco_conocimiento->deleteBy("id_avoco_conocimiento",$id_documento);
					
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"no se elimino el archivo <br>".$e->getMessage()));
			}
				
				
			$traza=new TrazasModel();
			$_nombre_controlador = "Avoco Conocimiento";
			$_accion_trazas  = "Borrar";
			$_parametros_trazas = $id_documento;
			$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);
				
		}



		if($ruta=="Providencias_Suspension" || $ruta=="Providencias_Embargo_Cuenta_Bancaria"  || $ruta=="Providencias_Pago_Total" || $ruta=="Providencias_Restructuracion"  || $ruta=="Providencias_Levantamiento"  || $ruta=="Providencias_Levantamiento_Medida_Cautelar_Discapacidad"  || $ruta=="Providencias_Levantamiento_Medida_Cautelar_Fallecimiento"    ){

			$providencias=new ProvidenciasModel();
			$resultDocumento = $providencias->getBy("id_providencias='$id_documento'" );

			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$tipo_providencias = $resultDocumento[0]->id_tipo_providencias;
				$id_impulsor = $resultDocumento[0]->id_impulsor;
				$id_secretario = $resultDocumento[0]->id_secretario;
				$nombre_archivo_providencias = $resultDocumento[0]->nombre_archivo_providencias;
					
					
					
				if($tipo_providencias > 0 && $id_juicios > 0){
						
					if($tipo_providencias==1){
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Suspensión";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
							
					}
					if($tipo_providencias==2){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Levantamiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
							
							
					}
					if($tipo_providencias==3){
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Pago Total";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
							
					}
					if($tipo_providencias==4){
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Reestructuración";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
					}
					if($tipo_providencias==5){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Embargo Cuenta Bancaria";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
					}
					if($tipo_providencias==6){
							
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Levantamiento Medida Cautelar Discapacidad";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}
								
						}
							
							
					}


					if($tipo_providencias==7){
							
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Levantamiento Medida Cautelar Fallecimiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;


							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}

						}
							
							
					}
						
						
					if($tipo_providencias==8){
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Reestructuración con Avoco Conocimiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;


							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}

						}
							
					}
						
					if($tipo_providencias==9){
							
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Elimino Providencia de Pago Total con Avoco Conocimiento";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;


							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
							}

						}
							
							
					}
						
						
				}
					
			}
				
				
				
				
			try {
					
				//$eliminado=unlink($directorio);
				$providencias->UpdateBy("firmado_secretario='true', eliminado_documento='true'", "providencias", "id_providencias='$id_documento'");

				//$providencias->deleteBy("id_providencias",$id_documento);
					
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"no se elimino el archivo <br>".$e->getMessage()));
			}
				

			$traza=new TrazasModel();
			$_nombre_controlador = "Providencias";
			$_accion_trazas  = "Borrar";
			$_parametros_trazas = $id_documento;
			$resultado = $traza->AuditoriaControladores($_accion_trazas, $_parametros_trazas, $_nombre_controlador);
				
		}



	}

	$this->redirect("DocumentosGenerados", "index");
}






public function firmar()
{

	if(isset($_GET["id_documento"]))
	{
		$id_documento=(int)$_GET["id_documento"];
		$ruta=$_GET["ruta"];
	
		$juicios = new JuiciosModel();
		
		
		
		if($ruta=="Oficios"){
		
			$oficios=new OficiosModel();
			$resultDocumento = $oficios->getBy("id_oficios='$id_documento'" );
			$asignacion_secretarios = new AsignacionSecretariosModel();
				
			
			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$id_impulsor = $resultDocumento[0]->id_usuario_registra_oficios;
				$nombre_documento = $resultDocumento[0]->nombre_oficio;
					
				$resultSecre = $asignacion_secretarios->getBy("id_abogado_asignacion_secretarios ='$id_impulsor'");
				$id_secretario=$resultSecre[0]->id_secretario_asignacion_secretarios;
					
			
			
			
				if($id_juicios>0){
			
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Oficios";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
						}
							
					}
						
						
						
				}
					
			}
			
			
			try {
					
				$oficios->UpdateBy("firmado_secretario='true'", "oficios", "id_oficios='$id_documento'");
		
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"No se actualizo la firma en oficios. <br>".$e->getMessage()));
			}
				
		}
		
		
		
		
		
		
		if($ruta=="Avoco_Conocimiento"){
				
			$avoco_conocimiento=new AvocoConocimientoModel();
			
			$resultDocumento = $avoco_conocimiento->getBy("id_avoco_conocimiento='$id_documento'" );
				
			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$tipo_avoco = $resultDocumento[0]->tipo_avoco;
				$id_impulsor = $resultDocumento[0]->id_impulsor;
				$id_secretario = $resultDocumento[0]->id_secretario;
				$nombre_documento = $resultDocumento[0]->nombre_documento;
		
					
				if($tipo_avoco > 0 && $id_juicios>0){
			
					if($tipo_avoco==7){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Firmo Avoco Conocimiento Nuevos Procesos";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
			
								
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
							}
								
						}
							
					}
					
					
					if($tipo_avoco==12){
							
						$tipo_notificaciones = new TipoNotificacionModel();
						$descripcion_tipo_notificacion="Firmo Avoco Conocimiento Cambio Liquidador";
						$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
							
							
						$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
						if (!empty($resultTipNoti)) {
							$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
								
					
							if($id_tipo_notificacion>0){
									
								$notificaciones = new NotificacionesModel();
								$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_documento);
							}
					
						}
							
					}
					
						
				}
			}
			
			
			try {
					
				$avoco_conocimiento->UpdateBy("firmado_secretario='true'", "avoco_conocimiento", "id_avoco_conocimiento='$id_documento'");
				
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"No se actualizo la firma en avoco conocimiento. <br>".$e->getMessage()));
			}
			
			
            $resultDocumento = $avoco_conocimiento->getBy("id_avoco_conocimiento='$id_documento'" );
			
            if (! empty($resultDocumento)) {
            	$id_juicios = $resultDocumento[0]->id_juicios;
            	$id_estados_procesales_juicios = $resultDocumento[0]->id_estados_procesales_juicios;
            	$fecha_avoco_conocimiento = $resultDocumento[0]->fecha_avoco_conocimiento;
            
            	if($id_juicios > 0 && $id_estados_procesales_juicios > 0){
            		
            		$juicios->UpdateBy("id_estados_procesales_juicios='$id_estados_procesales_juicios', fecha_ultima_providencia='$fecha_avoco_conocimiento'", "juicios", "id_juicios='$id_juicios'");
            		
            		
            		$historial_juicios = new HistorialJuiciosModel();
            		$funcion = "ins_historial_juicios";
            		$parametros = "'$id_juicios', '$id_estados_procesales_juicios', '$fecha_avoco_conocimiento'";
            		$historial_juicios->setFuncion($funcion);
            		$historial_juicios->setParametros($parametros);
            		$resultado=$historial_juicios->Insert();
            		
            	}
            
            }
			
			
		}
	
	if($ruta=="Providencias_Suspension" || $ruta=="Providencias_Embargo_Cuenta_Bancaria"  || $ruta=="Providencias_Pago_Total" || $ruta=="Providencias_Restructuracion"  || $ruta=="Providencias_Levantamiento"  || $ruta=="Providencias_Levantamiento_Medida_Cautelar_Discapacidad"  || $ruta=="Providencias_Levantamiento_Medida_Cautelar_Fallecimiento"    ){
		
		$providencias=new ProvidenciasModel();
			
		$id_tipo_restructuracion = 2;
		$insertarRestructuracion = false;
		
		$levantamiento_medida = true;
		$archivado_restructuracion = false;
		
		$resultDocumento = $providencias->getBy("id_providencias='$id_documento'" );
		
		if (! empty($resultDocumento)) {
			$id_juicios = $resultDocumento[0]->id_juicios;
			$tipo_providencias = $resultDocumento[0]->id_tipo_providencias;
			$id_impulsor = $resultDocumento[0]->id_impulsor;
			$id_secretario = $resultDocumento[0]->id_secretario;
			$nombre_archivo_providencias = $resultDocumento[0]->nombre_archivo_providencias;
			
			$fecha_providencia_restructuracion  = $resultDocumento[0]->fecha_providencias;
			$id_estados_procesales_juicios = $resultDocumento[0]->id_estados_procesales_juicios;
			
			if ($id_estados_procesales_juicios == 8)
			{
				$archivado_restructuracion = true;
			}
				
			if($tipo_providencias > 0 && $id_juicios>0){
					
				if($tipo_providencias==1){
						
						
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Suspensión";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
						
						
				}
				if($tipo_providencias==2){
						
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Levantamiento";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
						
						
						
				}
				if($tipo_providencias==3){
						
								
					$insertarRestructuracion = true;
					$id_tipo_restructuracion = 5; 
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Pago Total";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
						
						
				}
				if($tipo_providencias==4){
					
					$insertarRestructuracion = true;
					$id_tipo_restructuracion = 2; 
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Reestructuración";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
						
				}
				if($tipo_providencias==5){
						
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Embargo Cuenta Bancaria";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
						
				}
					
				if($tipo_providencias==6){
						
						
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Levantamiento Medida Cautelar Discapacidad";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
						
						
				}
					
					
					
				if($tipo_providencias==7){
						
						
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Levantamiento Medida Cautelar Fallecimiento";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
						
						
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
		
		
						if($id_tipo_notificacion>0){
								
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
		
					}
						
						
				}
				
				if($tipo_providencias==8){
						
					$insertarRestructuracion = true;
					$id_tipo_restructuracion = 2;
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Reestructuración con Avoco Conocimiento";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
				
				
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
				
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
				
				}
				
				
				if($tipo_providencias==9){
				
				
					$insertarRestructuracion = true;
					$id_tipo_restructuracion = 5;
					$tipo_notificaciones = new TipoNotificacionModel();
					$descripcion_tipo_notificacion="Firmo Providencia de Pago Total con Avoco Conocimiento";
					$result=$tipo_notificaciones->Inser_Tipo_Notificaciones($descripcion_tipo_notificacion, $id_impulsor, $id_secretario);
				
				
					$resultTipNoti = $tipo_notificaciones->getBy("descripcion_notificacion='$descripcion_tipo_notificacion' AND id_impulsor='$id_impulsor' AND id_secretario='$id_secretario'" );
					if (!empty($resultTipNoti)) {
						$id_tipo_notificacion = $resultTipNoti[0]->id_tipo_notificacion;
							
							
						if($id_tipo_notificacion>0){
				
							$notificaciones = new NotificacionesModel();
							$result=$notificaciones->Inser_Notificaciones($id_juicios, $id_tipo_notificacion, $nombre_archivo_providencias);
						}
							
					}
				
				
				}
			
				
				
				////aqui insertamos la restructuracion
				if ($insertarRestructuracion)
				{
					
					try {
					
						$juicios_restructuracion = new JuiciosRestructuracionModel();
						
						//ins_juicios_restructuracion( integer,  integer,  date,  boolean,  boolean)
						$funcion = "ins_juicios_restructuracion";
						$parametros = "'$id_juicios','$id_tipo_restructuracion', '$fecha_providencia_restructuracion','$levantamiento_medida', '$archivado_restructuracion'  ";
						$juicios_restructuracion->setFuncion($funcion);
						$juicios_restructuracion->setParametros($parametros);
						$resultado=$juicios_restructuracion->Insert();
					
					
					}catch (Exception $ex)
					{
					
						die($ex);
					
					}
						
					
				}
				
				
			}
			
			
			
				
		}
			
			try {
					
				$providencias->UpdateBy("firmado_secretario='true'", "providencias", "id_providencias='$id_documento'");
			
					
			} catch (Exception $e)
			{
				$this->view("Error", array("resultado"=>"No se actualizo la firma en providencias. <br>".$e->getMessage()));
			}
			
			
			$resultDocumento = $providencias->getBy("id_providencias='$id_documento'" );
				
			if (! empty($resultDocumento)) {
				$id_juicios = $resultDocumento[0]->id_juicios;
				$id_estados_procesales_juicios = $resultDocumento[0]->id_estados_procesales_juicios;
				$fecha_providencias = $resultDocumento[0]->fecha_providencias;
				
			
				if($id_juicios > 0 && $id_estados_procesales_juicios > 0){
			
					$juicios->UpdateBy("id_estados_procesales_juicios='$id_estados_procesales_juicios', fecha_ultima_providencia='$fecha_providencias'", "juicios", "id_juicios='$id_juicios'");
			
					$historial_juicios = new HistorialJuiciosModel();
					$funcion = "ins_historial_juicios";
					$parametros = "'$id_juicios', '$id_estados_procesales_juicios', '$fecha_providencias'";
					$historial_juicios->setFuncion($funcion);
					$historial_juicios->setParametros($parametros);
					$resultado=$historial_juicios->Insert();
			
				}
			
			}
						
		}
	
	}

	$this->redirect("DocumentosGenerados", "index2");
}






/////////////////////////////////////////////////////////impuslores//////////////////////////////////////////////////////////


public function index(){
	
session_start();
		
	if (isset(  $_SESSION['usuario_usuarios']) )
		{
		
			$clientes = new ClientesModel();
			$ciudad = new CiudadModel();
			$estado_procesal = new EstadosProcesalesModel();
			$resultEstadoProcesal = null;
			$provincias = new ProvinciasModel();
			$resultProv = null;
			
			$nombre_controladores = "MatrizJuicios";
			$id_rol= $_SESSION['id_rol'];			
			$resultPerVer= $clientes->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
			$resultSet = "";
			$resultEdit = "";
			
			
			if (!empty($resultPerVer))
			{
				$resultEstadoProcesal = $estado_procesal->getAll("nombre_estados_procesales_juicios");
				$resultProv = $provincias->getAll("nombre_provincias");
				
				$_id_usuarios = $_SESSION['id_usuarios'];
				
				$columnas ="";
				$tablas = "";
				$where = "";
				$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
				if($action == 'ajax')
				{
					$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
					$numero_titulo_credito=$_POST['numero_titulo_credito'];
					$id_provincias=$_POST['id_provincias'];
					$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
					
					$identificacion_clientes=$_POST['identificacion_clientes'];
					$identificacion_clientes_1=$_POST['identificacion_clientes_1'];
					$identificacion_clientes_2=$_POST['identificacion_clientes_2'];
					$identificacion_clientes_3=$_POST['identificacion_clientes_3'];					
					
					$identificacion_garantes=$_POST['identificacion_garantes'];
					$identificacion_garantes_1=$_POST['identificacion_garantes_1'];
					$identificacion_garantes_2=$_POST['identificacion_garantes_2'];
					$identificacion_garantes_3=$_POST['identificacion_garantes_3'];
					$firma = $_POST['firma'];
					
					$documento = $_POST['documento'];
					$tipo_documento = $_POST['tipo_documento'];
					$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
					//paratipodocumento
					$tipo_doc = "";
					switch ($documento)
					{
						case "AC" :
							$tipo_doc="AC";
							$columnas = "ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
								,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
								,ju.cuantia_inicial,ep.nombre_estados_procesales_juicios , ac.firmado_secretario, ac.id_avoco_conocimiento AS \"id_documento\" , ac.nombre_documento AS \"nombre_doc\"
								, ac.ruta_documento AS \"ruta_doc\" ,ju.fecha_emision_juicios,ju.fecha_ultima_providencia ,ju.descripcion_estado_procesal
								,ac.modificado, ac.creado AS \"fecha_creado\" ";
							
							$where = " 1=1 AND asv.id_abogado='$_id_usuarios' AND ac.eliminado_documento='false'";
							
							if($tipo_documento=="ALL")
							{
								$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios ";
								
								if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
										
									if($fechaDesde != "" && $fechaHasta == ""){
											
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
									if($fechaDesde == "" && $fechaHasta != ""){
											
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
								}	
								
							}else if($tipo_documento==1)
							{
								$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios 
								 AND ac.tipo_avoco = 1";
								
								if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
											
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
									if($fechaDesde == "" && $fechaHasta != ""){
											
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
								}
									
								
							}else if($tipo_documento==2)
							{
								$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								 AND ac.tipo_avoco = 2";
								
								if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
											
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
									if($fechaDesde == "" && $fechaHasta != ""){
											
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
								}
									
								
							}else if($tipo_documento==3)
							{
								$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios 
								AND ac.tipo_avoco = 3";
								
								if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
											
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
									if($fechaDesde == "" && $fechaHasta != ""){
											
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
								}
									
							}
							else if($tipo_documento==6)
							{
								$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 6";
								
								if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
											
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
									if($fechaDesde == "" && $fechaHasta != ""){
											
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
								}
									
							
							}
							else if($tipo_documento==7)
							{
								$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 7";
								
								if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
											
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
									if($fechaDesde == "" && $fechaHasta != ""){
											
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
								}
									
									
							}
							
							
							else if($tipo_documento==12)
							{
								$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN avoco_conocimiento ac  ON ac.id_juicios = ju.id_juicios
								AND ac.tipo_avoco = 12";
							
								if($firma!=""){$where.=" AND ac.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
							
									if($fechaDesde != "" && $fechaHasta == ""){
											
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
									if($fechaDesde == "" && $fechaHasta != ""){
											
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(ac.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
											
									}
								}
									
									
							}
							
							break;
							
						case "OF" :
							$tipo_doc="OF";
							$columnas = "ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
							,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
							,ju.cuantia_inicial,ep.nombre_estados_procesales_juicios , of.id_oficios  AS \"id_documento\" , of.nombre_oficio AS \"nombre_doc\"
							, of.ruta_oficio AS \"ruta_doc\" ,ju.fecha_emision_juicios,ju.fecha_ultima_providencia ,ju.descripcion_estado_procesal
							,of.modificado, of.firmado_secretario, of.creado AS \"fecha_creado\" ";
							
							$tablas = " juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
							INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes
							INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
							INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
							INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
							INNER JOIN oficios of  ON of.id_juicios = ju.id_juicios";
							
							$where = " 1=1 AND asv.id_abogado='$_id_usuarios' ";
							if($firma!=""){$where.=" AND of.firmado_secretario='$firma'";}
							$fechaDesde="";$fechaHasta="";
							if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
							{
								$fechaDesde=$_POST["fcha_desde"];
								$fechaHasta=$_POST["fcha_hasta"];
								if ($fechaDesde != "" && $fechaHasta != "")
								{
									$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								}
							
								if($fechaDesde != "" && $fechaHasta == ""){
										
									$fechaHasta='2018/12/01';
									$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
								if($fechaDesde == "" && $fechaHasta != ""){
										
									$fechaDesde='1800/01/01';
									$where .= " AND DATE(of.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
										
								}
							}
							
							break;
							
						case "PR" :
							$tipo_doc="PR";
							$columnas=" ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
							,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
							, pr.id_providencias  AS \"id_documento\" , pr.firmado_secretario, pr.nombre_archivo_providencias AS \"nombre_doc\" , pr.ruta_providencias AS \"ruta_doc\"
							,ju.fecha_emision_juicios,ju.cuantia_inicial, ep.nombre_estados_procesales_juicios,ju.descripcion_estado_procesal
							,pr.modificado, ju.fecha_ultima_providencia, pr.creado AS \"fecha_creado\"";
							
							$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
							
							if($tipo_documento=="ALL")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias	";
								
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
										
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}
									
								
							}else if($tipo_documento=="PL")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 2";
								
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}
								
							}else if($tipo_documento=="PS")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 1";
								
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}	
							}
							else if($tipo_documento=="PCP")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 3";
							
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}
									
							}
							else if($tipo_documento=="PCPAVOC")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 9";
									
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
							
									if($fechaDesde != "" && $fechaHasta == ""){
							
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
									}
									if($fechaDesde == "" && $fechaHasta != ""){
							
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
									}
								}
									
							}
							else if($tipo_documento=="PRES")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 4";
									
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}
									
							}
							
							
							else if($tipo_documento=="PRESAVOC")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 8";
									
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
							
									if($fechaDesde != "" && $fechaHasta == ""){
							
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
									}
									if($fechaDesde == "" && $fechaHasta != ""){
							
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							
									}
								}
									
							}
							
							else if($tipo_documento=="PEMCUBAN")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 5";
									
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}
									
							}
							
							else if($tipo_documento=="PLMCD")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 6";
							
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}
									
							}
							else if($tipo_documento=="PLMCF")
							{
								$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = tc.id_clientes
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias
								AND pr.id_tipo_providencias = 7";
									
								$where=" 1=1 AND asv.id_abogado='$_id_usuarios' AND pr.eliminado_documento='false'";
								if($firma!=""){$where.=" AND pr.firmado_secretario='$firma'";}
								$fechaDesde="";$fechaHasta="";
								if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
								{
									$fechaDesde=$_POST["fcha_desde"];
									$fechaHasta=$_POST["fcha_hasta"];
									if ($fechaDesde != "" && $fechaHasta != "")
									{
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									}
								
									if($fechaDesde != "" && $fechaHasta == ""){
								
										$fechaHasta='2018/12/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
									if($fechaDesde == "" && $fechaHasta != ""){
								
										$fechaDesde='1800/01/01';
										$where .= " AND DATE(pr.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
									}
								}
									
							}
							break;
							
						case "ALL" :
							
						$columnas=" ju.regional,tc.id_titulo_credito,ju.id_juicios,tc.numero_titulo_credito, ju.numero_juicios, cl.identificacion_clientes
									,cl.nombres_clientes , asv.id_abogado ,asv.impulsores ,asv.id_secretario ,asv.secretarios
									, pr.id_providencias , pr.firmado_secretario, pr.nombre_archivo_providencias,ju.fecha_emision_juicios 
									, pr.ruta_providencias, pr.modificado";
							
						$tablas=" juicios ju INNER JOIN  titulo_credito tc ON tc.id_titulo_credito = ju.id_titulo_credito
								INNER JOIN clientes cl ON cl.id_clientes = ju.id_clientes 
								INNER JOIN provincias pv ON pv.id_provincias = cl.id_provincias
								INNER JOIN estados_procesales_juicios ep ON ep.id_estados_procesales_juicios = ju.id_estados_procesales_juicios
								INNER JOIN asignacion_secretarios_view asv ON asv.id_abogado = tc.id_usuarios
								INNER JOIN providencias pr  ON pr.id_juicios = ju.id_juicios
								INNER JOIN tipo_providencias tpr ON tpr.id_tipo_providencias = pr.id_tipo_providencias";
							
						$where=" 1=0 AND asv.id_abogado='$_id_usuarios'";
						
						break;
					}
					
					if($juicio_referido_titulo_credito!=""){$where.=" AND ju.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
						
					if($numero_titulo_credito!=""){$where.=" AND tc.numero_titulo_credito='$numero_titulo_credito'";}
					
					if($identificacion_clientes!=""){$where.=" AND cl.identificacion_clientes like '$identificacion_clientes'";}
					
					if($id_provincias!=0){$where.=" AND pv.id_provincias='$id_provincias'";}
						
					if($id_estados_procesales_juicios!=0){$where.=" AND ep.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
						
					if($identificacion_clientes_1!=""){$where.=" AND cl.identificacion_clientes_1 like'$identificacion_clientes_1'";}
					if($identificacion_clientes_2!=""){$where.=" AND cl.identificacion_clientes_2 like '$identificacion_clientes_2'";}
					if($identificacion_clientes_3!=""){$where.=" AND cl.identificacion_clientes_3 like '$identificacion_clientes_3'";}
					
					if($identificacion_garantes!=""){$where.=" AND cl.identificacion_garantes like '$identificacion_garantes'";}
					if($identificacion_garantes_1!=""){$where.=" AND cl.identificacion_garantes_1 like '$identificacion_garantes_1'";}
					if($identificacion_garantes_2!=""){$where.=" AND cl.identificacion_garantes_2 like '$identificacion_garantes_2'";}
					if($identificacion_garantes_3!=""){$where.=" AND cl.identificacion_garantes_3 like '$identificacion_garantes_3'";}
					
					
					$this->Buscador($page,$columnas,$tablas,$where,$tipo_doc);
				
					exit();
				}
				
				
				
				
				
				
				if(isset($_POST["reporte_documentos"]))
				{
					$parametros = array();
					$parametros['id_abogado']=isset($_POST['id_abogado'])?trim($_POST['id_abogado']):0;
					$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
					$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
					$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
					$parametros['id_provincias']=(isset($_POST['id_provincias']))?trim($_POST['id_provincias']):0;
					$parametros['id_estados_procesales_juicios']=(isset($_POST['id_estados_procesales_juicios']))?trim($_POST['id_estados_procesales_juicios']):0;
					$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
					$parametros['identificacion_clientes_1']=(isset($_POST['identificacion_clientes_1']))?trim($_POST['identificacion_clientes_1']):'';
					$parametros['identificacion_clientes_2']=(isset($_POST['identificacion_clientes_2']))?trim($_POST['identificacion_clientes_2']):'';
					$parametros['identificacion_clientes_3']=(isset($_POST['identificacion_clientes_3']))?trim($_POST['identificacion_clientes_3']):'';
					$parametros['identificacion_garantes']=(isset($_POST['identificacion_garantes']))?trim($_POST['identificacion_garantes']):'';
					$parametros['identificacion_garantes_1']=(isset($_POST['identificacion_garantes_1']))?trim($_POST['identificacion_garantes_1']):'';
					$parametros['identificacion_garantes_2']=(isset($_POST['identificacion_garantes_2']))?trim($_POST['identificacion_garantes_2']):'';
					$parametros['identificacion_garantes_3']=(isset($_POST['identificacion_garantes_3']))?trim($_POST['identificacion_garantes_3']):'';
					$parametros['documento']=(isset($_POST['documento']))?trim($_POST['documento']):'';
					$parametros['tipo_documento']=(isset($_POST['tipo_documento']))?trim($_POST['tipo_documento']):'';
					$parametros['firma']=(isset($_POST['firma']))?trim($_POST['firma']):'';
				
				
					$fechaDesde="";$fechaHasta="";
					if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
					{
						$fechaDesde=$_POST["fcha_desde"];
						$fechaHasta=$_POST["fcha_hasta"];
						if ($fechaDesde != "" && $fechaHasta != "")
						{
							$parametros['fecha_desde'] = $fechaDesde;
							$parametros['fecha_hasta'] = $fechaHasta;
						}
				
						if($fechaDesde != "" && $fechaHasta == ""){
								
							$fechaHasta='2018/12/01';
							$parametros['fecha_desde'] = $fechaDesde;
							$parametros['fecha_hasta'] = $fechaHasta;
								
						}
						if($fechaDesde == "" && $fechaHasta != ""){
								
							$fechaDesde='1800/01/01';
							$parametros['fecha_desde'] = $fechaDesde;
							$parametros['fecha_hasta'] = $fechaHasta;
						}
					}
				
				
					$pagina="contDocumentosGenerados.aspx";
				
					$conexion_rpt = array();
					$conexion_rpt['pagina']=$pagina;
					//$conexion_rpt['port']="59584";
				
					$this->view("ReporteRpt", array(
							"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
					));
				
					die();
						
				}
				
				
			}
			
			
			
			$this->view("DocumentosGenerados",array(
					"resultSet"=>$resultSet, "resultEdit" =>$resultEdit,"resultEstadoProcesal"=>$resultEstadoProcesal,
					"resultProv"=>$resultProv
			
			));
			
			
		}
		else 
		{
			$this->view("Login",array(
					"resultSet"=>""
		
			));
			
		}
		
	}
	
	
	

	
	public function Buscador($page=1,$columnas,$tablas,$where_to,$tipo=null)
	{
		$doc=($tipo!="")?$tipo:"ALL";
		$juicios = new JuiciosModel();
		$html="";
		$id="ju.id_juicios";
	$resultSet=$juicios->getCantidad("*", $tablas, $where_to);
	
	$cantidadResult=(int)$resultSet[0]->total;

	$per_page = 50; //la cantidad de registros que desea mostrar
	$adjacents  = 9; //brecha entre páginas después de varios adyacentes
	$offset = ($page - 1) * $per_page;

	$limit = " LIMIT   '$per_page' OFFSET '$offset'";


	$resultSet=$juicios->getCondicionesPag($columnas, $tablas, $where_to, $id, $limit);

	$count_query   = $cantidadResult;

	$total_pages = ceil($cantidadResult/$per_page);

	if ($cantidadResult>0)
	{

		$html.='<div class="col-lg-12 col-md-12 col-xs-12">';
		$html.='<div class="pull-left">';
		$html.='<span class="form-control"><strong>Registros: </strong>'.$cantidadResult.'</span>';
		$html.='<input type="hidden" value="'.$cantidadResult.'" id="total_query" name="total_query"/>' ;
		$html.='</div></div>';
		$html.='<div class="col-lg-12 col-md-12 col-xs-12">';
		$html.='<section style="height:425px; overflow-y:scroll;">';
		$html.='<table class="table table-hover">';
		$html.='<thead>';
		$html.='<tr class="info">';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		$html.='<th style="text-align: left;  font-size: 10px;"></th>';
		
		$html.='<th style="text-align: left;  font-size: 10px;">Ord.</th>';
		$html.='<th style="text-align: left;  font-size: 10px;"># Juicio</th>';
		//$html.='<th style="text-align: left;  font-size: 10px;">Nombre Documento</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Cedula Cliente Principal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Nombres Cliente Principal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;"># Operación</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Creacion Doc</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Aprobacíon Secretario</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Cuantía Inicial</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Estado Procesal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Descripción Etapa Procesal</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Fecha Última Providencia</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Impulsor</th>';
		$html.='<th style="text-align: left;  font-size: 10px;">Secretario</th>';
		$html.='</tr>';
		$html.='</thead>';
		$html.='<tbody>';

			

		$i=0;
			
		foreach ($resultSet as $res)
		{
			$i++;
			$firmado=$res->firmado_secretario;
			
			$html.='<tr>';
			$html.='<td colspan="1"><span class="pull-right"><a target="_blank" href="index.php?controller=DocumentosGenerados&action=verDoc&documento='.$res->id_documento.'-'.$res->ruta_doc.'-'.$res->nombre_doc.'&id_juicios='. $res->id_juicios.' "><img src="view/images/logo_pdf.png" class="img-responsive zoom" width="60" height="60"></a></span></td>';
				
				
			if($firmado=='t'){
					
				$html.='<td colspan="2" style="font-size: 18px; text-aling:center;"><a href="#" class="btn btn-warning" style="font-size:65%;"><i class="glyphicon glyphicon-floppy-disk"> Firmado</i></a></td>';
			
			}
			if($firmado=='f'){
				$html.='<td colspan="2" style="font-size: 18px;"><span class="pull-right"><a href="index.php?controller=DocumentosGenerados&action=eliminar_impulsor&id_documento='.$res->id_documento.'&ruta='.$res->ruta_doc.'&nombre_doc='.$res->nombre_doc.'" class="btn btn-danger" style="font-size:65%;"><i class="glyphicon glyphicon-trash"></i></a></span></td>';
				//$html.='<td colspan="2" style="font-size: 18px; text-aling:center;"><a href="#" class="btn btn-primary" style="font-size:65%;"><i class="glyphicon glyphicon-alert"> Revisando</i></a></td>';
			
			}
			
			
			
			
			$html.='<td style="font-size: 9px;">'.$i.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->numero_juicios.'</td>';
			//$html.='<td style="font-size: 9px;">'.$res->nombre_doc.'</td>';
				
			$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->nombres_clientes.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->numero_titulo_credito.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->fecha_creado.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->modificado.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->cuantia_inicial.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->nombre_estados_procesales_juicios.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->descripcion_estado_procesal.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->fecha_ultima_providencia.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->impulsores.'</td>';
			$html.='<td style="font-size: 9px;">'.$res->secretarios.'</td>';
				
				
			$html.='</tr>';



		}

		$html.='</tbody>';
		$html.='</table>';
		$html.='</section></div>';
		$html.='<div class="table-pagination pull-right">';
		$html.=''. $this->paginate("index.php", $page, $total_pages, $adjacents).'';
		$html.='</div>';
			
	}else{
			
		$html.='<div class="alert alert-warning alert-dismissable">';
		$html.='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		$html.='<h4>Aviso!!!</h4> No hay datos para mostrar';
		$html.='</div>';
			
	}

	echo $html;
	
	}
	
	public function paginate($reload, $page, $tpages, $adjacents) {
	
		$prevlabel = "&lsaquo; Prev";
		$nextlabel = "Next &rsaquo;";
		$out = '<ul class="pagination pagination-large">';
	
		// previous label
	
		if($page==1) {
			$out.= "<li class='disabled'><span><a>$prevlabel</a></span></li>";
		} else if($page==2) {
			$out.= "<li><span><a href='javascript:void(0);' onclick='load_Documentos(1)'>$prevlabel</a></span></li>";
		}else {
			$out.= "<li><span><a href='javascript:void(0);' onclick='load_Documentos(".($page-1).")'>$prevlabel</a></span></li>";
	
		}
	
		// first label
		if($page>($adjacents+1)) {
			$out.= "<li><a href='javascript:void(0);' onclick='load_Documentos(1)'>1</a></li>";
		}
		// interval
		if($page>($adjacents+2)) {
			$out.= "<li><a>...</a></li>";
		}
	
		// pages
	
		$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
		$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
		for($i=$pmin; $i<=$pmax; $i++) {
			if($i==$page) {
				$out.= "<li class='active'><a>$i</a></li>";
			}else if($i==1) {
				$out.= "<li><a href='javascript:void(0);' onclick='load_Documentos(1)'>$i</a></li>";
			}else {
				$out.= "<li><a href='javascript:void(0);' onclick='load_Documentos(".$i.")'>$i</a></li>";
			}
		}
	
		// interval
	
		if($page<($tpages-$adjacents-1)) {
			$out.= "<li><a>...</a></li>";
		}
	
		// last
	
		if($page<($tpages-$adjacents)) {
			$out.= "<li><a href='javascript:void(0);' onclick='load_Documentos($tpages)'>$tpages</a></li>";
		}
	
		// next
	
		if($page<$tpages) {
			$out.= "<li><span><a href='javascript:void(0);' onclick='load_Documentos(".($page+1).")'>$nextlabel</a></span></li>";
		}else {
			$out.= "<li class='disabled'><span><a>$nextlabel</a></span></li>";
		}
	
		$out.= "</ul>";
		return $out;
	}
	
	public function verDoc()
	{
		session_start();
		if (isset($_SESSION['usuario_usuarios']) )
		{
			$id_juicios = $_GET['id_juicios'];
			$documento = $_GET['documento'];
			$arraydoc = explode('-', $documento);
			
		//para produccion
		$mi_pdf = 'F:/coactiva/Documentos/'.$arraydoc[1].'/'.$arraydoc[2].'.pdf';
		
		//para pruebas			
			//$mi_pdf = 'C:/Users/M/Desktop/paraservidor/'.$arraydoc[1].'/'.$arraydoc[2].'.pdf';
		//prueba con ruta arbitraria
	    //$mi_pdf = 'C:/Users/M/Desktop/paraservidor/Providencias_Levantamiento/Providencias_Levantamiento1012.pdf';
			
			if(file_exists($mi_pdf))
			{
				header('Content-type: application/pdf');
				header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
				readfile($mi_pdf);
			}else 
			{
				echo 'ESTIMADO USUARIO SE PRESENTAN INCONVENIENTES PARA ABRIR SU PDF, INTENTELO MAS TARDE.';
			}
			
			
		}
	}
	
	
}
?>
