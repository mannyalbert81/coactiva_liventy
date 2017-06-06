<?php

class MatrizJuiciosController extends ControladorBase{

	public function __construct() {
		parent::__construct();
	}


	public function index(){
	
		    session_start();
			
		    if (isset(  $_SESSION['usuario_usuarios']) )
		    {
		    
		    $id_rol= $_SESSION['id_rol'];
		    
		    if ($id_rol==3){
		    
		    $_id_usuarios= $_SESSION['id_usuarios'];
			$resultSet="";
			$registrosTotales = 0;
			$arraySel = "";
			
			$juicios = new JuiciosModel();
			
			$ciudad = new CiudadModel();
			$columnas = " usuarios.id_ciudad,
					  ciudad.nombre_ciudad,
					  usuarios.nombre_usuarios";
				
			$tablas   = "public.usuarios,
                     public.ciudad";
				
			$where    = "ciudad.id_ciudad = usuarios.id_ciudad AND usuarios.id_usuarios = '$_id_usuarios'";
			$id       = "usuarios.id_ciudad";
			$resultDatos=$ciudad->getCondiciones($columnas ,$tablas ,$where, $id);
			
			$provincias = new ProvinciasModel();
			$resultProv =$provincias->getAll("nombre_provincias");
			
			$estado_procesal = new EstadosProcesalesModel();
			$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");
			
			
				$permisos_rol = new PermisosRolesModel();
				$nombre_controladores = "MatrizJuicios";
				$id_rol= $_SESSION['id_rol'];
				$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
				if (!empty($resultPer))
				{
						
					if(isset($_POST["juicio_referido_titulo_credito"]))
					{
			
						$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
						$numero_titulo_credito=$_POST['numero_titulo_credito'];
						$identificacion_clientes=$_POST['identificacion_clientes'];
						$id_provincias=$_POST['id_provincias'];
						$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
						
						$columnas = " juicios.id_juicios,
								  juicios.orden,
								  juicios.regional,
								  juicios.juicio_referido_titulo_credito,
								  juicios.year_juicios,
								  clientes.id_clientes,
								  clientes.identificacion_clientes,
								  clientes.nombres_clientes,
								  clientes.nombre_garantes,
								  provincias.id_provincias,
								  provincias.nombre_provincias,
								  titulo_credito.id_titulo_credito,
								  titulo_credito.numero_titulo_credito,
								  juicios.fecha_emision_juicios,
								  juicios.cuantia_inicial,
								  juicios.riesgo_actual,
								  estados_procesales_juicios.id_estados_procesales_juicios,
								  estados_procesales_juicios.nombre_estados_procesales_juicios,
								  juicios.descripcion_estado_procesal,
								  juicios.fecha_ultima_providencia,
								  juicios.estrategia_seguir,
								  juicios.observaciones,
								  asignacion_secretarios_view.id_abogado,
								  asignacion_secretarios_view.impulsores,
								  asignacion_secretarios_view.id_secretario,
								  asignacion_secretarios_view.secretarios,
								  ciudad.id_ciudad,
								  ciudad.nombre_ciudad";
			
			
			
						$tablas=" public.clientes,
							  public.titulo_credito,
							  public.juicios,
							  public.asignacion_secretarios_view,
							  public.estados_procesales_juicios,
							  public.provincias,
							  public.ciudad";
			
						$where="clientes.id_clientes = titulo_credito.id_clientes AND
						  clientes.id_provincias = provincias.id_provincias AND
						  titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
						  titulo_credito.id_ciudad = ciudad.id_ciudad AND
						  juicios.id_estados_procesales_juicios = estados_procesales_juicios.id_estados_procesales_juicios AND
						  asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND asignacion_secretarios_view.id_abogado='$_id_usuarios'";
							
						$id="juicios.orden";
			
						$where_0 = "";
						$where_1 = "";
						$where_2 = "";
						$where_3 = "";
						$where_4 = "";
							
						
							
							
						if($juicio_referido_titulo_credito!=""){$where_0=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
						
						if($numero_titulo_credito!=""){$where_1=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
							
						if($identificacion_clientes!=""){$where_2=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
							
						if($id_provincias!=0){$where_3=" AND provincias.id_provincias='$id_provincias'";}
						
						if($id_estados_procesales_juicios!=0){$where_4=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
						
						
						$where_to  = $where . $where_0 . $where_1 . $where_2 . $where_3 . $where_4;
						
							
						//comienza paginacion
						
						$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
						
						if($action == 'ajax')
						{
						
							$html="";
							$resultSet=$juicios->getCantidad("*", $tablas, $where_to);
							$cantidadResult=(int)$resultSet[0]->total;
								
							$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
								
							$per_page = 50; //la cantidad de registros que desea mostrar
							$adjacents  = 9; //brecha entre páginas después de varios adyacentes
							$offset = ($page - 1) * $per_page;
								
							$limit = " LIMIT   '$per_page' OFFSET '$offset'";
								
								
							$resultSet=$juicios->getCondicionesPag($columnas, $tablas, $where_to, $id, $limit);
								
							$count_query   = $cantidadResult;
								
							$total_pages = ceil($cantidadResult/$per_page);
								
							if ($cantidadResult>0)
							{
						
									
								$html.='<div class="pull-left">';
								$html.='<span class="form-control"><strong>Registros: </strong>'.$cantidadResult.'</span>';
								$html.='<input type="hidden" value="'.$cantidadResult.'" id="total_query" name="total_query"/>' ;
								$html.='</div><br>';
								$html.='<section style="height:425px; overflow-y:scroll;">';
								$html.='<table class="table table-hover">';
								$html.='<thead>';
								$html.='<tr class="info">';
								$html.='<th style="text-align: left;  font-size: 10px;">Ord.</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Regional</th>';
								$html.='<th style="text-align: left;  font-size: 10px;"># Juicio</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Año Juicio</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Cedula Coactivado</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Nombres Coactivado</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Nombres Garante</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Provincia</th>';
								$html.='<th style="text-align: left;  font-size: 10px;"># Operación</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Fecha Auto Pago</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Cuantía Inicial</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Riesgo Actual</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Estado Procesal</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Descripción Etapa Procesal</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Fecha Última Providencia</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Estrategia a Seguir</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Observaciones</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Impulsor</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Secretario</th>';
								$html.='<th style="text-align: left;  font-size: 10px;"></th>';
								$html.='<th style="text-align: left;  font-size: 10px;"></th>';
								$html.='</tr>';
								$html.='</thead>';
								$html.='<tbody>';
						
									
								
									
									
								foreach ($resultSet as $res)
								{
									
						
									$html.='<tr>';
									$html.='<td style="font-size: 9px;">'.$res->orden.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->regional.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->juicio_referido_titulo_credito.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->year_juicios.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombres_clientes.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_garantes.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_provincias.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->numero_titulo_credito.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->fecha_emision_juicios.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->cuantia_inicial.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->riesgo_actual.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_estados_procesales_juicios.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->descripcion_estado_procesal.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->fecha_ultima_providencia.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->estrategia_seguir.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->observaciones.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->impulsores.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->secretarios.'</td>';
									$html.='<td style="color:#000000;font-size:80%;"><span class="pull-right"><a href="index.php?controller=MatrizJuicios&action=index&id_juicios='. $res->id_juicios .'&id_clientes='. $res->id_clientes.'&id_titulo_credito='. $res->id_titulo_credito.' " target="_blank"><i class="glyphicon glyphicons-edit"></i></a></span></td>';
									$html.='<td style="color:#000000;font-size:80%;"><span class="pull-right"><a href="index.php?controller=MatrizJuicios&action=Imprimir_Providencia&id_juicios='. $res->id_juicios .'&id_clientes='. $res->id_clientes.'&id_titulo_credito='. $res->id_titulo_credito.' " target="_blank"><i class="glyphicon glyphicon-print"></i></a></span></td>';
									$html.='</tr>';
						
						
										
								}
						
								$html.='</tbody>';
								$html.='</table>';
								$html.='</section>';
								$html.='<div class="table-pagination pull-right">';
								$html.=''. $this->paginate("index.php", $page, $total_pages, $adjacents).'';
								$html.='</div>';
								$html.='</section>';
						
									
							}else{
									
								$html.='<div class="alert alert-warning alert-dismissable">';
								$html.='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
								$html.='<h4>Aviso!!!</h4> No hay datos para mostrar';
								$html.='</div>';
									
							}
								
							echo $html;
							die();
								
						}
						
							
						if(isset($_POST["reporte_rpt"]))
						{
							
			
							$parametros = array();
							$parametros['id_abogado']=$_SESSION['id_usuarios']?trim($_SESSION['id_usuarios']):0;
							$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
							$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
							$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
							$parametros['id_estados_procesales_juicios']=(isset($_POST['id_estados_procesales_juicios']))?trim($_POST['id_estados_procesales_juicios']):0;
							$parametros['id_provincias']=(isset($_POST['id_provincias']))?trim($_POST['id_provincias']):0;
							$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
								
			
							$pagina="conProvidenciaSuspension.aspx";
							$conexion_rpt = array();
							$conexion_rpt['pagina']=$pagina;
							//$conexion_rpt['port']="59584";
			
							$this->view("ReporteRpt", array(
									"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
							));
			
							die();
			
						}
			
			
					}
			
					$this->view("MatrizJuicios",array(
							"resultSet"=>$resultSet, "resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv
			
								
								
					));
			
			
				}
				else
				{
					$this->view("Error",array(
							"resultado"=>"No tiene Permisos de Acceso a Matriz Juicios"
			
					));
			
					exit();
				}
			
			}
			
			
			
			
			
			
			
			
			//rol secretario
			
			
			
			
			if ($id_rol==5){
				
				$_id_usuarios= $_SESSION['id_usuarios'];
				$resultSet="";
				$registrosTotales = 0;
				$arraySel = "";
					
				$juicios = new JuiciosModel();
					
				$ciudad = new CiudadModel();
				$columnas = " usuarios.id_ciudad,
					  ciudad.nombre_ciudad,
					  usuarios.nombre_usuarios";
				
				$tablas   = "public.usuarios,
                     public.ciudad";
				
				$where    = "ciudad.id_ciudad = usuarios.id_ciudad AND usuarios.id_usuarios = '$_id_usuarios'";
				$id       = "usuarios.id_ciudad";
				$resultDatos=$ciudad->getCondiciones($columnas ,$tablas ,$where, $id);
				
				$columnas = " asignacion_secretarios_view.id_abogado,
					  asignacion_secretarios_view.impulsores";
					
				$tablas   = "public.asignacion_secretarios_view";
					
				$where    = "public.asignacion_secretarios_view.id_secretario = '$_id_usuarios'";
					
				$id       = "asignacion_secretarios_view.id_abogado";
				$resultImpul=$juicios->getCondiciones($columnas ,$tablas ,$where, $id);
				
				
				$provincias = new ProvinciasModel();
				$resultProv =$provincias->getAll("nombre_provincias");
					
				$estado_procesal = new EstadosProcesalesModel();
				$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");
					
					
				$permisos_rol = new PermisosRolesModel();
				$nombre_controladores = "MatrizJuicios";
				$id_rol= $_SESSION['id_rol'];
				$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
					
				if (!empty($resultPer))
				{
				
					if(isset($_POST["juicio_referido_titulo_credito"]))
					{
							
						$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
						$numero_titulo_credito=$_POST['numero_titulo_credito'];
						$identificacion_clientes=$_POST['identificacion_clientes'];
						$id_provincias=$_POST['id_provincias'];
						$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
						$id_abogado=$_POST['id_abogado'];
				
						$columnas = " juicios.id_juicios,
								  juicios.orden,
								  juicios.regional,
								  juicios.juicio_referido_titulo_credito,
								  juicios.year_juicios,
								  clientes.id_clientes,
								  clientes.identificacion_clientes,
								  clientes.nombres_clientes,
								  clientes.nombre_garantes,
								  provincias.id_provincias,
								  provincias.nombre_provincias,
								  titulo_credito.id_titulo_credito,
								  titulo_credito.numero_titulo_credito,
								  juicios.fecha_emision_juicios,
								  juicios.cuantia_inicial,
								  juicios.riesgo_actual,
								  estados_procesales_juicios.id_estados_procesales_juicios,
								  estados_procesales_juicios.nombre_estados_procesales_juicios,
								  juicios.descripcion_estado_procesal,
								  juicios.fecha_ultima_providencia,
								  juicios.estrategia_seguir,
								  juicios.observaciones,
								  asignacion_secretarios_view.id_abogado,
								  asignacion_secretarios_view.impulsores,
								  asignacion_secretarios_view.id_secretario,
								  asignacion_secretarios_view.secretarios,
								  ciudad.id_ciudad,
								  ciudad.nombre_ciudad";
							
							
							
						$tablas=" public.clientes,
							  public.titulo_credito,
							  public.juicios,
							  public.asignacion_secretarios_view,
							  public.estados_procesales_juicios,
							  public.provincias,
							  public.ciudad";
							
						$where="clientes.id_clientes = titulo_credito.id_clientes AND
						clientes.id_provincias = provincias.id_provincias AND
						titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
						titulo_credito.id_ciudad = ciudad.id_ciudad AND
						juicios.id_estados_procesales_juicios = estados_procesales_juicios.id_estados_procesales_juicios AND
						asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND asignacion_secretarios_view.id_secretario='$_id_usuarios'";
							
						$id="juicios.orden";
							
						$where_0 = "";
						$where_1 = "";
						$where_2 = "";
						$where_3 = "";
						$where_4 = "";
						$where_5 = "";
							
				
							
							
						if($juicio_referido_titulo_credito!=""){$where_0=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				
						if($numero_titulo_credito!=""){$where_1=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
							
						if($identificacion_clientes!=""){$where_2=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
							
						if($id_provincias!=0){$where_3=" AND provincias.id_provincias='$id_provincias'";}
				
						if($id_estados_procesales_juicios!=0){$where_4=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
				
						if($id_abogado!=0){$where_5=" AND asignacion_secretarios_view.id_abogado='$id_abogado'";}
						
				
						$where_to  = $where . $where_0 . $where_1 . $where_2 . $where_3 . $where_4 . $where_5;
				
							
						//comienza paginacion
				
						$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
				
						if($action == 'ajax')
						{
				
							$html="";
							$resultSet=$juicios->getCantidad("*", $tablas, $where_to);
							$cantidadResult=(int)$resultSet[0]->total;
				
							$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
				
							$per_page = 50; //la cantidad de registros que desea mostrar
							$adjacents  = 9; //brecha entre páginas después de varios adyacentes
							$offset = ($page - 1) * $per_page;
				
							$limit = " LIMIT   '$per_page' OFFSET '$offset'";
				
				
							$resultSet=$juicios->getCondicionesPag($columnas, $tablas, $where_to, $id, $limit);
				
							$count_query   = $cantidadResult;
				
							$total_pages = ceil($cantidadResult/$per_page);
				
							if ($cantidadResult>0)
							{
				
									
								$html.='<div class="pull-left">';
								$html.='<span class="form-control"><strong>Registros: </strong>'.$cantidadResult.'</span>';
								$html.='<input type="hidden" value="'.$cantidadResult.'" id="total_query" name="total_query"/>' ;
								$html.='</div><br>';
								$html.='<section style="height:425px; overflow-y:scroll;">';
								$html.='<table class="table table-hover">';
								$html.='<thead>';
								$html.='<tr class="info">';
								$html.='<th style="text-align: left;  font-size: 10px;">Ord.</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Regional</th>';
								$html.='<th style="text-align: left;  font-size: 10px;"># Juicio</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Año Juicio</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Cedula Coactivado</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Nombres Coactivado</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Nombres Garante</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Provincia</th>';
								$html.='<th style="text-align: left;  font-size: 10px;"># Operación</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Fecha Auto Pago</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Cuantía Inicial</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Riesgo Actual</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Estado Procesal</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Descripción Etapa Procesal</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Fecha Última Providencia</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Estrategia a Seguir</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Observaciones</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Impulsor</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Secretario</th>';
								$html.='<th style="text-align: left;  font-size: 10px;"></th>';
								$html.='<th style="text-align: left;  font-size: 10px;"></th>';
								$html.='</tr>';
								$html.='</thead>';
								$html.='<tbody>';
				
									
				
									
									
								foreach ($resultSet as $res)
								{
										
				
									$html.='<tr>';
									$html.='<td style="font-size: 9px;">'.$res->orden.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->regional.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->juicio_referido_titulo_credito.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->year_juicios.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombres_clientes.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_garantes.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_provincias.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->numero_titulo_credito.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->fecha_emision_juicios.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->cuantia_inicial.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->riesgo_actual.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_estados_procesales_juicios.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->descripcion_estado_procesal.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->fecha_ultima_providencia.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->estrategia_seguir.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->observaciones.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->impulsores.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->secretarios.'</td>';
									$html.='<td style="color:#000000;font-size:80%;"><span class="pull-right"><a href="index.php?controller=MatrizJuicios&action=index&id_juicios='. $res->id_juicios .'&id_clientes='. $res->id_clientes.'&id_titulo_credito='. $res->id_titulo_credito.' " target="_blank"><i class="glyphicon glyphicons-edit"></i></a></span></td>';
									$html.='<td style="color:#000000;font-size:80%;"><span class="pull-right"><a href="index.php?controller=MatrizJuicios&action=Imprimir_Providencia&id_juicios='. $res->id_juicios .'&id_clientes='. $res->id_clientes.'&id_titulo_credito='. $res->id_titulo_credito.' " target="_blank"><i class="glyphicon glyphicon-print"></i></a></span></td>';
									$html.='</tr>';
				
				
				
								}
				
								$html.='</tbody>';
								$html.='</table>';
								$html.='</section>';
								$html.='<div class="table-pagination pull-right">';
								$html.=''. $this->paginate("index.php", $page, $total_pages, $adjacents).'';
								$html.='</div>';
								$html.='</section>';
				
									
							}else{
									
								$html.='<div class="alert alert-warning alert-dismissable">';
								$html.='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
								$html.='<h4>Aviso!!!</h4> No hay datos para mostrar';
								$html.='</div>';
									
							}
				
							echo $html;
							die();
				
						}
				
							
						if(isset($_POST["reporte_rpt"]))
						{
								
							
							$parametros = array();
							$parametros['id_secretario']=$_SESSION['id_usuarios']?trim($_SESSION['id_usuarios']):0;
							$parametros['id_abogado']=isset($_POST['id_abogado'])?trim($_POST['id_abogado']):0;
							$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
							$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
							$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
							$parametros['id_estados_procesales_juicios']=(isset($_POST['id_estados_procesales_juicios']))?trim($_POST['id_estados_procesales_juicios']):0;
							$parametros['id_provincias']=(isset($_POST['id_provincias']))?trim($_POST['id_provincias']):0;
							$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
							
								
							$pagina="conProvidenciaSuspension.aspx";
								
							$conexion_rpt = array();
							$conexion_rpt['pagina']=$pagina;
							//$conexion_rpt['port']="59584";
								
							$this->view("ReporteRpt", array(
									"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
							));
								
							die();
								
						}
							
							
					}
						
					$this->view("MatrizJuiciosSecretarios",array(
							"resultSet"=>$resultSet, "resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv, "resultImpul"=>$resultImpul
								
				
				
					));
						
						
				}
				else
				{
					$this->view("Error",array(
							"resultado"=>"No tiene Permisos de Acceso a Matriz Juicios"
		
					));
						
					exit();
				}
					
				}
					
				
				
				if ($id_rol==23){
				
					$_id_usuarios= $_SESSION['id_usuarios'];
					$resultSet="";
					$registrosTotales = 0;
					$arraySel = "";
						
					$juicios = new JuiciosModel();
						
					$ciudad = new CiudadModel();
					$resultDatos=$ciudad->getBy("nombre_ciudad='QUITO' OR nombre_ciudad='GUAYAQUIL'");
					
					
							
					$permisos_rol = new PermisosRolesModel();
					$nombre_controladores = "MatrizJuicios";
					$id_rol= $_SESSION['id_rol'];
					$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
						
					if (!empty($resultPer))
					{
				
						if(isset($_POST["juicio_referido_titulo_credito"]))
						{
								
							$juicio_referido_titulo_credito=(isset($_POST['juicio_referido_titulo_credito']))?$_POST['juicio_referido_titulo_credito']:'';
							$numero_titulo_credito=(isset($_POST['numero_titulo_credito']))?$_POST['numero_titulo_credito']:'';
							$identificacion_clientes=(isset($_POST['identificacion_clientes']))?$_POST['identificacion_clientes']:'';
							$id_secretario=(isset($_POST['id_secretario']))?$_POST['id_secretario']:0;
							$id_impulsor=(isset($_POST['id_impulsor']))?$_POST['id_impulsor']:0;
							$id_ciudad=(isset($_POST['id_ciudad']))?$_POST['id_ciudad']:0;
				
							
							
							
							$columnas = " juicios.id_juicios,
								  juicios.orden,
								  juicios.regional,
								  juicios.juicio_referido_titulo_credito,
								  juicios.year_juicios,
								  clientes.id_clientes,
								  clientes.identificacion_clientes,
								  clientes.nombres_clientes,
								  clientes.nombre_garantes,
								  provincias.id_provincias,
								  provincias.nombre_provincias,
								  titulo_credito.id_titulo_credito,
								  titulo_credito.numero_titulo_credito,
								  juicios.fecha_emision_juicios,
								  juicios.cuantia_inicial,
								  juicios.riesgo_actual,
								  estados_procesales_juicios.id_estados_procesales_juicios,
								  estados_procesales_juicios.nombre_estados_procesales_juicios,
								  juicios.descripcion_estado_procesal,
								  juicios.fecha_ultima_providencia,
								  juicios.estrategia_seguir,
								  juicios.observaciones,
								  asignacion_secretarios_view.id_abogado,
								  asignacion_secretarios_view.impulsores,
								  asignacion_secretarios_view.id_secretario,
								  asignacion_secretarios_view.secretarios,
								  ciudad.id_ciudad,
								  ciudad.nombre_ciudad";
								
								
								
							$tablas=" public.clientes,
							  public.titulo_credito,
							  public.juicios,
							  public.asignacion_secretarios_view,
							  public.estados_procesales_juicios,
							  public.provincias,
							  public.ciudad";
								
							$where="clientes.id_clientes = titulo_credito.id_clientes AND
							clientes.id_provincias = provincias.id_provincias AND
							titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
							titulo_credito.id_ciudad = ciudad.id_ciudad AND
							juicios.id_estados_procesales_juicios = estados_procesales_juicios.id_estados_procesales_juicios AND
							asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios";
								
							$id="juicios.id_juicios";
								
							$where_0 = "";
							$where_1 = "";
							$where_2 = "";
							$where_3 = "";
							$where_4 = "";
							$where_5 = "";
								
				
								
								
							if($juicio_referido_titulo_credito!=""){$where_0=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				
							if($numero_titulo_credito!=""){$where_1=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
								
							if($identificacion_clientes!=""){$where_2=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
								
							if($id_ciudad!=0){$where_3=" AND ciudad.id_ciudad='$id_ciudad'";}
								
							if($id_secretario!=0){$where_4=" AND asignacion_secretarios_view.id_secretario='$id_secretario'";}
							
							if($id_impulsor!=0){$where_5=" AND asignacion_secretarios_view.id_abogado='$id_impulsor'";}
				
							$where_to  = $where . $where_0 . $where_1 . $where_2 . $where_3 . $where_4 . $where_5;
				
								
							//comienza paginacion
				
							$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
				
							if($action == 'ajax')
							{
				
								$html="";
								$resultSet=$juicios->getCantidad("*", $tablas, $where_to);
								$cantidadResult=(int)$resultSet[0]->total;
				
								$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
				
								$per_page = 50; //la cantidad de registros que desea mostrar
								$adjacents  = 9; //brecha entre páginas después de varios adyacentes
								$offset = ($page - 1) * $per_page;
				
								$limit = " LIMIT   '$per_page' OFFSET '$offset'";
				
				
								$resultSet=$juicios->getCondicionesPag($columnas, $tablas, $where_to, $id, $limit);
				
								$count_query   = $cantidadResult;
				
								$total_pages = ceil($cantidadResult/$per_page);
				
								if ($cantidadResult>0)
								{
				
										
									$html.='<div class="pull-left">';
									$html.='<span class="form-control"><strong>Registros: </strong>'.$cantidadResult.'</span>';
									$html.='<input type="hidden" value="'.$cantidadResult.'" id="total_query" name="total_query"/>' ;
									$html.='</div><br>';
									$html.='<section style="height:425px; overflow-y:scroll;">';
									$html.='<table class="table table-hover">';
									$html.='<thead>';
									$html.='<tr class="info">';
									$html.='<th style="text-align: left;  font-size: 10px;">Ord.</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Regional</th>';
									$html.='<th style="text-align: left;  font-size: 10px;"># Juicio</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Año Juicio</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Cedula Coactivado</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Nombres Coactivado</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Nombres Garante</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Provincia</th>';
									$html.='<th style="text-align: left;  font-size: 10px;"># Operación</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Fecha Auto Pago</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Cuantía Inicial</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Riesgo Actual</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Estado Procesal</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Descripción Etapa Procesal</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Fecha Última Providencia</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Estrategia a Seguir</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Observaciones</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Impulsor</th>';
									$html.='<th style="text-align: left;  font-size: 10px;">Secretario</th>';
									$html.='<th style="text-align: left;  font-size: 10px;"></th>';
									$html.='<th style="text-align: left;  font-size: 10px;"></th>';
									$html.='</tr>';
									$html.='</thead>';
									$html.='<tbody>';
				
										
				
										
										
									foreach ($resultSet as $res)
									{
				
				
										$html.='<tr>';
										$html.='<td style="font-size: 9px;">'.$res->orden.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->regional.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->juicio_referido_titulo_credito.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->year_juicios.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->nombres_clientes.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->nombre_garantes.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->nombre_provincias.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->numero_titulo_credito.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->fecha_emision_juicios.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->cuantia_inicial.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->riesgo_actual.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->nombre_estados_procesales_juicios.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->descripcion_estado_procesal.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->fecha_ultima_providencia.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->estrategia_seguir.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->observaciones.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->impulsores.'</td>';
										$html.='<td style="font-size: 9px;">'.$res->secretarios.'</td>';
										$html.='<td style="color:#000000;font-size:80%;"><span class="pull-right"><a href="index.php?controller=MatrizJuicios&action=index&id_juicios='. $res->id_juicios .'&id_clientes='. $res->id_clientes.'&id_titulo_credito='. $res->id_titulo_credito.' " target="_blank"><i class="glyphicon glyphicons-edit"></i></a></span></td>';
										$html.='<td style="color:#000000;font-size:80%;"><span class="pull-right"><a href="index.php?controller=MatrizJuicios&action=Imprimir_Providencia&id_juicios='. $res->id_juicios .'&id_clientes='. $res->id_clientes.'&id_titulo_credito='. $res->id_titulo_credito.' " target="_blank"><i class="glyphicon glyphicon-print"></i></a></span></td>';
										$html.='</tr>';
				
				
				
									}
				
									$html.='</tbody>';
									$html.='</table>';
									$html.='</section>';
									$html.='<div class="table-pagination pull-right">';
									$html.=''. $this->paginate("index.php", $page, $total_pages, $adjacents).'';
									$html.='</div>';
									$html.='</section>';
				
										
								}else{
										
									$html.='<div class="alert alert-warning alert-dismissable">';
									$html.='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
									$html.='<h4>Aviso!!!</h4> No hay datos para mostrar';
									$html.='</div>';
										
								}
				
								echo $html;
								die();
				
							}
				
								
							if(isset($_POST["reporte_rpt"]))
							{
								
				

								$parametros = array();
								$parametros['id_ciudad']=isset($_POST['id_ciudad'])?trim($_POST['id_ciudad']):0;
								$parametros['id_secretario']=isset($_POST['id_secretario'])?trim($_POST['id_secretario']):0;
								$parametros['id_abogado']=isset($_POST['id_impulsor'])?trim($_POST['id_impulsor']):0;
								$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
								$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
								$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
								$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
									
								
								$pagina="conProvidenciaSuspension.aspx";
				
								$conexion_rpt = array();
								$conexion_rpt['pagina']=$pagina;
								//$conexion_rpt['port']="59584";
				
								$this->view("ReporteRpt", array(
										"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
								));
				
								die();
				
							}
								
								
						}
				
						$this->view("MatrizJuiciosCordinador",array(
								"resultSet"=>$resultSet, "resultDatos"=>$resultDatos
				
				
				
						));
				
				
					}
					else
					{
						$this->view("Error",array(
								"resultado"=>"No tiene Permisos de Acceso a Matriz Juicios"
				
						));
				
						exit();
					}
						
				}
				
			}
			else
			{
				$this->view("ErrorSesion",array(
						"resultSet"=>""
			
				));
			
			}
			
			
	}
	
	public function paginate($reload, $page, $tpages, $adjacents) {
	
		$prevlabel = "&lsaquo; Prev";
		$nextlabel = "Next &rsaquo;";
		$out = '<ul class="pagination pagination-large">';
	
		// previous label
	
		if($page==1) {
			$out.= "<li class='disabled'><span><a>$prevlabel</a></span></li>";
		} else if($page==2) {
			$out.= "<li><span><a href='javascript:void(0);' onclick='load_matriz(1)'>$prevlabel</a></span></li>";
		}else {
			$out.= "<li><span><a href='javascript:void(0);' onclick='load_matriz(".($page-1).")'>$prevlabel</a></span></li>";
	
		}
	
		// first label
		if($page>($adjacents+1)) {
			$out.= "<li><a href='javascript:void(0);' onclick='load_matriz(1)'>1</a></li>";
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
				$out.= "<li><a href='javascript:void(0);' onclick='load_matriz(1)'>$i</a></li>";
			}else {
				$out.= "<li><a href='javascript:void(0);' onclick='load_matriz(".$i.")'>$i</a></li>";
			}
		}
	
		// interval
	
		if($page<($tpages-$adjacents-1)) {
			$out.= "<li><a>...</a></li>";
		}
	
		// last
	
		if($page<($tpages-$adjacents)) {
			$out.= "<li><a href='javascript:void(0);' onclick='load_matriz($tpages)'>$tpages</a></li>";
		}
	
		// next
	
		if($page<$tpages) {
			$out.= "<li><span><a href='javascript:void(0);' onclick='load_matriz(".($page+1).")'>$nextlabel</a></span></li>";
		}else {
			$out.= "<li class='disabled'><span><a>$nextlabel</a></span></li>";
		}
	
		$out.= "</ul>";
		return $out;
	}
	
	
	
	public function Secrtetarios()
	{
	
		//CONSULTA DE USUARIOS POR SU ROL
		$idciudad=(int)$_POST["ciudad"];
		$usuarios=new UsuariosModel();
		$columnas = "usuarios.id_usuarios,usuarios.nombre_usuarios";
		$tablas="usuarios,ciudad,rol";
		$where="rol.id_rol=usuarios.id_rol AND usuarios.id_ciudad=ciudad.id_ciudad
		AND rol.nombre_rol='SECRETARIO' AND ciudad.id_ciudad='$idciudad'";
		$id="usuarios.nombre_usuarios";
	
		$resultSecretario=$usuarios->getCondiciones($columnas ,$tablas , $where, $id);
	
		echo json_encode($resultSecretario);
	}
	
	public function Impulsor()
	{
		if(isset($_POST["id_ciudad"]))
		{
			//CONSULTA DE USUARIOS POR SU ROL
			$id_ciudad=(int)$_POST["id_ciudad"];
			$usuarios=new UsuariosModel();
			$columnas = "usuarios.id_usuarios,usuarios.nombre_usuarios";
			$tablas="usuarios,ciudad,rol";
			$where="rol.id_rol=usuarios.id_rol AND usuarios.id_ciudad=ciudad.id_ciudad
			AND rol.nombre_rol='ABOGADO IMPULSOR' AND ciudad.id_ciudad='$id_ciudad'";
			$id="usuarios.nombre_usuarios";
				
			$resultado=$usuarios->getCondiciones($columnas ,$tablas , $where, $id);
				
			echo json_encode($resultado);
				
		}else if(isset($_POST["usuarios"]))
		{
			//CONSULTA DE USUARIOS POR SU ROL
			$idusuarios=(int)$_POST["usuarios"];
			$usuarios=new UsuariosModel();
			$columnas = "asignacion_secretarios_view.id_abogado,
					  asignacion_secretarios_view.impulsores";
			$tablas="public.asignacion_secretarios_view";
			$id="asignacion_secretarios_view.id_abogado";
				
			$where="public.asignacion_secretarios_view.id_secretario = '$idusuarios'";
				
			$resultImpulsor=$usuarios->getCondiciones($columnas ,$tablas , $where, $id);
				
			echo json_encode($resultImpulsor);
		}
	
	}
	
	
	
	
	
	public function Imprimir_Providencia()
	{
		if(isset($_REQUEST['id_juicios']))
		{
	
			$id_juicios= $_GET['id_juicios'];
			$id_clientes= $_GET['id_clientes'];
			$id_titulo_credito= $_GET['id_titulo_credito'];
				
			
				$parametros = array();
	
				$parametros['id_juicios']=isset($id_juicios)?trim($id_juicios):0;
				$parametros['id_clientes']=isset($id_clientes)?trim($id_clientes):0;
				$parametros['id_titulo_credito']=isset($id_titulo_credito)?trim($id_titulo_credito):0;
	
				$pagina="conProvidenciaSuspension.aspx";
				
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
	
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
	
	
				die();
	
		}
	
	}
	
}
?>