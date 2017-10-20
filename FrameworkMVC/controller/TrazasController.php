<?php
class TrazasController extends ControladorBase{
	public function __construct() {
		parent::__construct();
	}
	public function index(){
		
		//creamos el array de busqueda
		$resulMenu=array(0=>'TODOS',1=>'Usuario', 2=>'Controladores', 3=>'Accion');
	
		//Creamos el objeto usuario
		$trazas = new TrazasModel();
		$usuarios=new UsuariosModel();
		//Conseguimos todos los usuarios
		$resultSet=$trazas->getAll("id_trazas");
	
		$columnas = "trazas.id_trazas, usuarios.usuario_usuarios, usuarios.nombre_usuarios, trazas.nombre_controlador, trazas.accion_trazas, trazas.parametros_trazas, trazas.creado";
		$tablas="public.trazas, public.usuarios";
		$where="usuarios.id_usuarios = trazas.id_usuarios";
		$id="creado";
		$resultActi=$trazas->getCondiciones($columnas ,$tablas , $where, $id);
		$resultActi=null;
		
		
		//$resultEdit = "";
	
		$resultEdit = "";
		session_start();
	
	
	
		if (isset(  $_SESSION['usuario_usuarios']) )
		{
			
			
			$trazas = new TrazasModel();
			//Notificaciones
			$trazas->MostrarNotificaciones($_SESSION['id_usuarios']);
			
			
			$nombre_controladores = "Trazas";
			$id_rol= $_SESSION['id_rol'];
			$resultPer = $trazas->getPermisosVer("   controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
				
			if (!empty($resultPer))
			{
				
				if(isset($_POST["Buscar"]) )
				{
					die("entro");
					
					
					$columnas = "trazas.id_trazas, usuarios.usuario_usuarios, usuarios.nombre_usuarios, trazas.nombre_controlador, trazas.accion_trazas, trazas.parametros_trazas, trazas.creado";
					$tablas="public.trazas, public.usuarios";
					$where="usuarios.id_usuarios = trazas.id_usuarios";
					$id="creado";
					
					$accion="";	
					
					$id_accion = $_POST["ddl_accion"];
					
					switch ($id_accion){
					
						case 0: 
						$accion = "INSERTO NUEVO JUICIO";
						break; 
						case 1: 
						$accion = "Actualizo tabla juicios";
						break; 
						case 2: 
						$accion = "Actualizo tabla clientes";
						break;
						case 3:
							$accion = "Actualizo tabla titulo_credito";
							break;
						case 4:
							$accion = "Inserto o Actualizo tabla Restructuracion";
							break;
							
					}
					
					$criterio = $_POST["ddl_criterio"];
					$contenido = $_POST["contenido"];
					
						
						$where_0 = "";
						$where_1 = "";
						$where_2 = "";
						$where_3 = "";
						$where_4="";
								
						switch ($criterio) 
						{
							case 0:
								$where_0 = " ";
								break;
							case 1:
								//USUARIO
								$where_1 = " AND  usuarios.nombre_usuarios LIKE '$contenido'  ";
								break;
							case 2:
								//Controladores
								$where_2 = " AND trazas.nombre_controlador LIKE '$contenido'  ";
								break;
							case 3:
								//Accion
								$where_3 = " AND trazas.accion_trazas LIKE '$accion' ";
								break;
							
							
						}
						
						
						
						$fechaDesde="";$fechaHasta="";
						if(isset($_POST["fecha_desde"])&&isset($_POST["fecha_hasta"]))
						{
							$fechaDesde=$_POST["fecha_desde"];
							$fechaHasta=$_POST["fecha_hasta"];
							if ($fechaDesde != "" && $fechaHasta != "")
							{
								$where_4 = " AND DATE(trazas.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
							}
						
							if($fechaDesde != "" && $fechaHasta == ""){
									
								$fechaHasta='2018/12/01';
								$where_4 = " AND DATE(trazas.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									
							}
							if($fechaDesde == "" && $fechaHasta != ""){
									
								$fechaDesde='1800/01/01';
								$where_4 = " AND DATE(trazas.creado) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
									
							}
						}
							
							
							
						$where_to  = $where .  $where_0 . $where_1 . $where_2 . $where_3 . $where_4 ;
						
						//Comienza la paginacion
						$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
						
						if($action == 'ajax')
						{
						
							$html="";
							$resultSet=$trazas->getCantidad("*", $tablas, $where_to);
							$cantidadResult=(int)$resultSet[0]->total;
						
							$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
						
							$per_page = 50; //la cantidad de registros que desea mostrar
							$adjacents  = 9; //brecha entre páginas después de varios adyacentes
							$offset = ($page - 1) * $per_page;
						
							$limit = " LIMIT   '$per_page' OFFSET '$offset'";
						
						
							$resultSet=$trazas->getCondicionesPag($columnas, $tablas, $where_to, $id, $limit);
						
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
									
								$html.='<th style="text-align: left;  font-size: 10px;">Usuario.</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Nombre</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Controlador</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Acción</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Paramtros</th>';
								$html.='<th style="text-align: left;  font-size: 10px;">Creado</th>';		
								$html.='</tr>';
								$html.='</thead>';
								$html.='<tbody>';
						
									
						
								$i=0;
									
								foreach ($resultSet as $res)
								{
									$i++;
						
									$html.='<tr>';
									$html.='<td style="font-size: 9px;">'.$i.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_usuarios.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->nombre_controlador.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->accion_trazas.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->parametros_trazas.'</td>';
									$html.='<td style="font-size: 9px;">'.$res->creado.'</td>';
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
							die();
						
						}
						
							
					
					
					
				
				}
				else{
					
					
					
				}
				
	
	
				$this->view("Trazas",array(
						"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultActi" =>$resultActi,"resulMenu"=>$resulMenu
							
				));
	
	
	
			}
			else
			{
				$this->view("Error",array(
						"resultado"=>"No tiene Permisos de Acceso a Trazas"
	
				));
	
				exit();
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
		

public function index6()
{


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
					$id_accion = $_POST["ddl_accion"];
					$criterio = $_POST["ddl_criterio"];
					$contenido = $_POST["contenido"];
					
				
					$columnas = "trazas.id_trazas, usuarios.usuario_usuarios, usuarios.nombre_usuarios, trazas.nombre_controlador, trazas.accion_trazas, trazas.parametros_trazas, trazas.creado";
					$tablas="public.trazas, public.usuarios";
					$where="usuarios.id_usuarios = trazas.id_usuarios";
					$id="creado";
						
					$where_0 = "";
					$where_1 = "";
					$where_2 = "";
					$where_3 = "";
					$where_4 = "";
				

						
					if($juicio_referido_titulo_credito!=""){$where_0=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
					$where_1 = " AND  usuarios.nombre_usuarios LIKE '$contenido'  ";
					
					if($numero_titulo_credito!=""){$where_1 = " AND  usuarios.nombre_usuarios LIKE '$contenido'  ";
						}
						
					if($identificacion_clientes!=""){$where_2=" AND clientes.identificacion_clientes like '$identificacion_clientes'";}
						
					if($id_provincias!=0){$where_3=" AND provincias.id_provincias='$id_provincias'";}

					if($id_estados_procesales_juicios!=0){$where_4=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}

					/*para las fechas*/
					$fechaDesde="";$fechaHasta="";
					if(isset($_POST["fcha_desde"])&&isset($_POST["fcha_hasta"]))
					{
						$fechaDesde=$_POST["fcha_desde"];
						$fechaHasta=$_POST["fcha_hasta"];
						if ($fechaDesde != "" && $fechaHasta != "")
						{
							$where_5 = " AND DATE(juicios.fecha_ultima_providencia) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
						}

						if($fechaDesde != "" && $fechaHasta == ""){
								
							$fechaHasta='2018/12/01';
							$where_5 = " AND DATE(juicios.fecha_ultima_providencia) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
						}
						if($fechaDesde == "" && $fechaHasta != ""){
								
							$fechaDesde='1800/01/01';
							$where_5 = " AND DATE(juicios.fecha_ultima_providencia) BETWEEN '$fechaDesde' AND '$fechaHasta'  ";
								
						}
					}

					if($identificacion_clientes_1!=""){$where_6=" AND clientes.identificacion_clientes_1 like'$identificacion_clientes_1'";}
					if($identificacion_clientes_2!=""){$where_7=" AND clientes.identificacion_clientes_2 like '$identificacion_clientes_2'";}
					if($identificacion_clientes_3!=""){$where_8=" AND clientes.identificacion_clientes_3 like '$identificacion_clientes_3'";}


					if($identificacion_garantes!=""){$where_9=" AND clientes.identificacion_garantes like '$identificacion_garantes'";}
					if($identificacion_garantes_1!=""){$where_10=" AND clientes.identificacion_garantes_1 like '$identificacion_garantes_1'";}
					if($identificacion_garantes_2!=""){$where_11=" AND clientes.identificacion_garantes_2 like '$identificacion_garantes_2'";}
					if($identificacion_garantes_3!=""){$where_12=" AND clientes.identificacion_garantes_3 like '$identificacion_garantes_3'";}
						

					$where_to  = $where . $where_0 . $where_1 . $where_2 . $where_3 . $where_4.$where_5. $where_6 . $where_7 . $where_8 . $where_9.$where_10. $where_11.$where_12;

						
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
								
							$html.='<th style="text-align: left;  font-size: 10px;">Ord.</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Regional</th>';
							$html.='<th style="text-align: left;  font-size: 10px;"># Juicio</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Año Juicio</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Cliente 1</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Cliente 1</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Correo Cliente 1</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Dirección Cliente 1</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Cliente 2</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Cliente 2</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Correo Cliente 2</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Dirección Cliente 2</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Cliente 3</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Cliente 3</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Correo Cliente 3</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Dirección Cliente 3</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Cliente 4</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Cliente 4</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Correo Cliente 4</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Dirección Cliente 4</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Garante 1</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Garante 1</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Garante 2</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Garante 2</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Garante 3</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Garante 3</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Cedula Garante 4</th>';
							$html.='<th style="text-align: left;  font-size: 10px;">Nombres Garante 4</th>';
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
							$html.='</tr>';
							$html.='</thead>';
							$html.='<tbody>';

								

							$i=0;
								
							foreach ($resultSet as $res)
							{
								$i++;

								$html.='<tr>';
								$html.='<td style="font-size: 9px;">'.$i.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->regional.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->juicio_referido_titulo_credito.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->year_juicios.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombres_clientes.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->correo_clientes.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->direccion_clientes.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes_1.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombre_clientes_1.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->correo_clientes_1.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->direccion_clientes_1.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes_2.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombre_clientes_2.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->correo_clientes_2.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->direccion_clientes_2.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_clientes_3.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombre_clientes_3.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->correo_clientes_3.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->direccion_clientes_3.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_garantes.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombre_garantes.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_garantes_1.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombre_garantes_1.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_garantes_2.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombre_garantes_2.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->identificacion_garantes_3.'</td>';
								$html.='<td style="font-size: 9px;">'.$res->nombre_garantes_3.'</td>';
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
								//$html.='<td style="font-size: 15px;"><a href="javascript:null()" id="'.$res->id_juicios.'?/&'.$i.'?/&'.$res->regional.'?/&'.$res->juicio_referido_titulo_credito.'?/&'.$res->year_juicios.'?/&'.$res->identificacion_clientes.'?/&'.$res->nombres_clientes.'?/&'.$res->nombre_garantes.'?/&'.$res->identificacion_garantes.'?/&'.$res->nombre_provincias.'?/&'.$res->numero_titulo_credito.'?/&'.$res->fecha_emision_juicios.'?/&'.$res->cuantia_inicial.'?/&'.$res->riesgo_actual.'?/&'.$res->nombre_estados_procesales_juicios.'?/&'.$res->descripcion_estado_procesal.'?/&'.$res->fecha_ultima_providencia.'?/&'.$res->estrategia_seguir.'?/&'.$res->observaciones.'?/&'.$res->impulsores.'?/&'.$res->secretarios.'?/&'.$res->id_provincias.'?/&'.$res->id_estados_procesales_juicios.'?/&'.$res->id_clientes.'?/&'.$res->id_titulo_credito.'?/&'.$res->identificacion_clientes_1.'?/&'.$res->nombre_clientes_1.'?/&'.$res->identificacion_clientes_2.'?/&'.$res->nombre_clientes_2.'?/&'.$res->identificacion_clientes_3.'?/&'.$res->nombre_clientes_3.'?/&'.$res->identificacion_garantes_1.'?/&'.$res->nombre_garantes_1.'?/&'.$res->identificacion_garantes_2.'?/&'.$res->nombre_garantes_2.'?/&'.$res->identificacion_garantes_3.'?/&'.$res->nombre_garantes_3.'?/&'.$res->correo_clientes.'?/&'.$res->correo_clientes_1.'?/&'.$res->correo_clientes_2.'?/&'.$res->correo_clientes_3.'?/&'.$res->direccion_clientes.'?/&'.$res->direccion_clientes_1.'?/&'.$res->direccion_clientes_2.'?/&'.$res->direccion_clientes_3.'"  onclick="editar_matriz(this)" ><i class="glyphicon glyphicon-edit"></i></a></td>';
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
						die();

					}
				}
			}
		}
	}
}

}