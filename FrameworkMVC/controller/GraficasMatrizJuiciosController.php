<?php
class GraficasMatrizJuiciosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    //maycol
public function index(){
	
		session_start();
		
		$id_rol= $_SESSION['id_rol'];
		
		if ($id_rol==3){
		$_id_usuarios= $_SESSION['id_usuarios'];
		$resultSet="";
		$registrosTotales = 0;
		$arraySel = "";
			
		$juicios = new JuiciosModel();
			
		
			
		$provincias = new ProvinciasModel();
		$resultProv =$provincias->getAll("nombre_provincias");
			
		$estado_procesal = new EstadosProcesalesModel();
	    $resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");;
			
	    $resultEstadoProcesal_grafico="";
	    $res_juicios="";
		
			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuicios";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		if (!empty($resultPer))
		{
		
			if(isset($_POST["buscar"]))
			{
			     
				$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
				$numero_titulo_credito=$_POST['numero_titulo_credito'];
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$id_provincias=$_POST['id_provincias'];
				$id_abogado=$_POST['id_abogado'];
				$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
		
				
				
				$columnas="COUNT(id_juicios) as total, estados_procesales_juicios.id_estados_procesales_juicios, 
  							estados_procesales_juicios.nombre_estados_procesales_juicios";
				$tablas=" public.juicios, 
 						 public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
						clientes.id_provincias = provincias.id_provincias AND
						titulo_credito.id_titulo_credito = juicios.id_titulo_credito";
				$grupo="estados_procesales_juicios.nombre_estados_procesales_juicios, estados_procesales_juicios.id_estados_procesales_juicios";
				$id="estados_procesales_juicios.nombre_estados_procesales_juicios, id_estados_procesales_juicios";
				
				
				$where_0 = "";
				$where_1 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";
				
				if($id_estados_procesales_juicios!=0){$where_0=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
				if($id_abogado!=0){$where_1=" AND juicios.id_usuarios='$id_abogado'";}
				if($juicio_referido_titulo_credito!=""){$where_2=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				if($numero_titulo_credito!=""){$where_3=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
				if($identificacion_clientes!=""){$where_4=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
				if($id_provincias!=0){$where_5=" AND provincias.id_provincias='$id_provincias'";}
				
				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);
				
				
				
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
					
				$parametros['fecha_providencias']=(isset($_POST['fecha_providencias']))?trim($_POST['fecha_providencias']):0;
				$parametros['hora_providencias']=(isset($_POST['hora_providencias']))?trim($_POST['hora_providencias']):0;
					
					
					
				$pagina="contGraficas.aspx";
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
			
					
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
					
				die();
					
			}
				
				
				
			$this->view("GraficasMatrizJuicios",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv
						
		
		
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
	
	
	
	
	
	
	if ($id_rol==5){
		
		$_id_usuarios= $_SESSION['id_usuarios'];
		$resultSet="";
		$registrosTotales = 0;
		$arraySel = "";
			
		$juicios = new JuiciosModel();
			
		$columnas = " asignacion_secretarios_view.id_abogado,
					  asignacion_secretarios_view.impulsores";
			
		$tablas   = "public.asignacion_secretarios_view";
			
		$where    = "public.asignacion_secretarios_view.id_secretario = '$_id_usuarios'";
			
		$id       = "asignacion_secretarios_view.id_abogado";
		$resultImpul=$juicios->getCondiciones($columnas ,$tablas ,$where, $id);
		
			
		$provincias = new ProvinciasModel();
		$resultProv =$provincias->getAll("nombre_provincias");
			
		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");;
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";
	
			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuiciosSecretarios";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		if (!empty($resultPer))
		{
	
			if(isset($_POST["buscar"]))
			{
	
				$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
				$numero_titulo_credito=$_POST['numero_titulo_credito'];
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$id_provincias=$_POST['id_provincias'];
				$id_abogado=$_POST['id_abogado'];
				$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
	
	
	
				$columnas="COUNT(id_juicios) as total, estados_procesales_juicios.id_estados_procesales_juicios,
  							estados_procesales_juicios.nombre_estados_procesales_juicios";
				$tablas=" public.juicios,
 						 public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
						clientes.id_provincias = provincias.id_provincias AND
						titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
						asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND asignacion_secretarios_view.id_secretario='$_id_usuarios'";
				$grupo="estados_procesales_juicios.nombre_estados_procesales_juicios, estados_procesales_juicios.id_estados_procesales_juicios";
				$id="estados_procesales_juicios.nombre_estados_procesales_juicios, id_estados_procesales_juicios";
	
	
				$where_0 = "";
				$where_1 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";
	
				if($id_estados_procesales_juicios!=0){$where_0=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
				if($id_abogado!=0){$where_1=" AND asignacion_secretarios_view.id_abogado='$id_abogado'";}
				if($juicio_referido_titulo_credito!=""){$where_2=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				if($numero_titulo_credito!=""){$where_3=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
				if($identificacion_clientes!=""){$where_4=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
				if($id_provincias!=0){$where_5=" AND provincias.id_provincias='$id_provincias'";}
	
				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);
	
	
	
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
				$parametros['fecha_providencias']=(isset($_POST['fecha_providencias']))?trim($_POST['fecha_providencias']):0;
				$parametros['hora_providencias']=(isset($_POST['hora_providencias']))?trim($_POST['hora_providencias']):0;
			
				$pagina="contGraficas.aspx";
			
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
			
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
			
				die();
			
			}
	
	
			$this->view("GraficasMatrizJuiciosSecretarios",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv, "resultImpul"=>$resultImpul
	
	
	
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
	
	
	
	
	
	
	
	
	
	
	
	
	if($id_rol==23){


		$_id_usuarios= $_SESSION['id_usuarios'];
		
		
		$juicios = new JuiciosModel();
		
		$ciudad = new CiudadModel();
		$resultDatos=$ciudad->getBy("nombre_ciudad='Quito' OR nombre_ciudad='Guayaquil'");
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";
		
		
		
		
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuiciosCordinador";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
		
		if (!empty($resultPer))
		{
		
			if(isset($_POST["buscar"]))
			{
		
				$juicio_referido_titulo_credito=(isset($_POST['juicio_referido_titulo_credito']))?$_POST['juicio_referido_titulo_credito']:'';
				$numero_titulo_credito=(isset($_POST['numero_titulo_credito']))?$_POST['numero_titulo_credito']:'';
				$identificacion_clientes=(isset($_POST['identificacion_clientes']))?$_POST['identificacion_clientes']:'';
				$id_secretario=(isset($_POST['id_secretario']))?$_POST['id_secretario']:0;
				$id_impulsor=(isset($_POST['id_impulsor']))?$_POST['id_impulsor']:0;
				$id_ciudad=(isset($_POST['id_ciudad']))?$_POST['id_ciudad']:0;
		        //$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
					
				$columnas="COUNT(id_juicios) as total, estados_procesales_juicios.id_estados_procesales_juicios,
  							estados_procesales_juicios.nombre_estados_procesales_juicios";
				$tablas=" public.juicios,
 						  public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view,
						  public.ciudad";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
				clientes.id_provincias = provincias.id_provincias AND
				titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
				asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND titulo_credito.id_ciudad = ciudad.id_ciudad";
				$grupo="estados_procesales_juicios.nombre_estados_procesales_juicios, estados_procesales_juicios.id_estados_procesales_juicios";
				$id="estados_procesales_juicios.nombre_estados_procesales_juicios, id_estados_procesales_juicios";
				
		
				$where_0 = "";
				$where_1 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";
		
		
		
		
				if($juicio_referido_titulo_credito!=""){$where_0=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				if($numero_titulo_credito!=""){$where_1=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
				if($identificacion_clientes!=""){$where_2=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
				if($id_ciudad>0){$where_3=" AND ciudad.id_ciudad='$id_ciudad'";}
				if($id_secretario>0){$where_4=" AND asignacion_secretarios_view.id_secretario='$id_secretario'";}
				if($id_impulsor>0){$where_5=" AND asignacion_secretarios_view.id_abogado='$id_impulsor'";}
		
			
				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);
				
				
	
			}
			
			if(isset($_POST["reporte_rpt"]))
			{
			
			
				$parametros = array();
				$parametros['id_ciudad']=isset($_POST['id_ciudad_1'])?trim($_POST['id_ciudad_1']):0;
				$parametros['id_secretario']=isset($_POST['id_secretario_1'])?trim($_POST['id_secretario_1']):0;
				$parametros['id_abogado']=isset($_POST['id_impulsor_1'])?trim($_POST['id_impulsor_1']):0;
				$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
				$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
				$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
				$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
					
			
				$pagina="contGraficas.aspx";
			
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
			
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
			
				die();
			
			}
		
			
			$this->view("GraficasMatrizJuiciosCordinador",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>"", "resultDatos"=>$resultDatos
					
					
	
	
	
			));
		
		
		}
		else
		{
			$this->view("Error",array(
					"resultado"=>"No tiene Permisos de Acceso a Graficas Matriz Juicios"
		
			));
		
			exit();
		}
		
		
		
		
	}
	
	
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












public function index2(){

	session_start();

	$id_rol= $_SESSION['id_rol'];

	if ($id_rol==3){
		$_id_usuarios= $_SESSION['id_usuarios'];
		$resultSet="";
		$registrosTotales = 0;
		$arraySel = "";
			
		$juicios = new JuiciosModel();
			

			
		$provincias = new ProvinciasModel();
		$resultProv =$provincias->getAll("nombre_provincias");
			
		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");;
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";

			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuicios";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		if (!empty($resultPer))
		{

			if(isset($_POST["buscar"]))
			{

				$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
				$numero_titulo_credito=$_POST['numero_titulo_credito'];
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$id_provincias=$_POST['id_provincias'];
				$id_abogado=$_POST['id_abogado'];
				$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];



				$columnas="COUNT(id_juicios) as total, TO_CHAR(juicios.modificado,'YYYY-MM') as modificado";
				$tablas="public.juicios,
 				      public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view,
				      public.ciudad";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
				clientes.id_provincias = provincias.id_provincias AND
				titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
				asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND titulo_credito.id_ciudad = ciudad.id_ciudad";
				
				$grupo="TO_CHAR(juicios.modificado,'YYYY-MM')";
				$id="TO_CHAR(juicios.modificado,'YYYY-MM')";


				$where_0 = "";
				$where_1 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";

				if($id_estados_procesales_juicios!=0){$where_0=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
				if($id_abogado!=0){$where_1=" AND juicios.id_usuarios='$id_abogado'";}
				if($juicio_referido_titulo_credito!=""){$where_2=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				if($numero_titulo_credito!=""){$where_3=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
				if($identificacion_clientes!=""){$where_4=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
				if($id_provincias!=0){$where_5=" AND provincias.id_provincias='$id_provincias'";}

				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);



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
					
				$parametros['fecha_providencias']=(isset($_POST['fecha_providencias']))?trim($_POST['fecha_providencias']):0;
				$parametros['hora_providencias']=(isset($_POST['hora_providencias']))?trim($_POST['hora_providencias']):0;
					
					
					
				$pagina="contGraficasActualizacionMatrizJuicios.aspx";
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
					
					
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
					
				die();
					
			}



			$this->view("GraficasActualizacionMatrizJuicios",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv



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






	if ($id_rol==5){

		$_id_usuarios= $_SESSION['id_usuarios'];
		$resultSet="";
		$registrosTotales = 0;
		$arraySel = "";
			
		$juicios = new JuiciosModel();
			
		$columnas = " asignacion_secretarios_view.id_abogado,
					  asignacion_secretarios_view.impulsores";
			
		$tablas   = "public.asignacion_secretarios_view";
			
		$where    = "public.asignacion_secretarios_view.id_secretario = '$_id_usuarios'";
			
		$id       = "asignacion_secretarios_view.id_abogado";
		$resultImpul=$juicios->getCondiciones($columnas ,$tablas ,$where, $id);

			
		$provincias = new ProvinciasModel();
		$resultProv =$provincias->getAll("nombre_provincias");
			
		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");;
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";

			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuiciosSecretarios";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		if (!empty($resultPer))
		{

			if(isset($_POST["buscar"]))
			{

				$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
				$numero_titulo_credito=$_POST['numero_titulo_credito'];
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$id_provincias=$_POST['id_provincias'];
				$id_abogado=$_POST['id_abogado'];
				$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];



				$columnas="COUNT(id_juicios) as total, TO_CHAR(juicios.modificado,'YYYY-MM') as modificado";
				$tablas="public.juicios,
 				      public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view,
				      public.ciudad";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
				clientes.id_provincias = provincias.id_provincias AND
				titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
				asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND titulo_credito.id_ciudad = ciudad.id_ciudad";
				
				$grupo="TO_CHAR(juicios.modificado,'YYYY-MM')";
				$id="TO_CHAR(juicios.modificado,'YYYY-MM')";
				

				$where_0 = "";
				$where_1 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";

				if($id_estados_procesales_juicios!=0){$where_0=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
				if($id_abogado!=0){$where_1=" AND asignacion_secretarios_view.id_abogado='$id_abogado'";}
				if($juicio_referido_titulo_credito!=""){$where_2=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				if($numero_titulo_credito!=""){$where_3=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
				if($identificacion_clientes!=""){$where_4=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
				if($id_provincias!=0){$where_5=" AND provincias.id_provincias='$id_provincias'";}

				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);



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
				$parametros['fecha_providencias']=(isset($_POST['fecha_providencias']))?trim($_POST['fecha_providencias']):0;
				$parametros['hora_providencias']=(isset($_POST['hora_providencias']))?trim($_POST['hora_providencias']):0;
					
					
				$pagina="contGraficasActualizacionMatrizJuicios.aspx";
					
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
					
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
					
				die();
					
			}


			$this->view("GraficasActualizacionMatrizJuiciosSecretarios",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv, "resultImpul"=>$resultImpul



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












	if($id_rol==23){


		$_id_usuarios= $_SESSION['id_usuarios'];


		$juicios = new JuiciosModel();

		$ciudad = new CiudadModel();
		$resultDatos=$ciudad->getBy("nombre_ciudad='Quito' OR nombre_ciudad='Guayaquil'");
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";
			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuiciosCordinador";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );

		if (!empty($resultPer))
		{

			if(isset($_POST["buscar"]))
			{

				$juicio_referido_titulo_credito=(isset($_POST['juicio_referido_titulo_credito']))?$_POST['juicio_referido_titulo_credito']:'';
				$numero_titulo_credito=(isset($_POST['numero_titulo_credito']))?$_POST['numero_titulo_credito']:'';
				$identificacion_clientes=(isset($_POST['identificacion_clientes']))?$_POST['identificacion_clientes']:'';
				$id_secretario=(isset($_POST['id_secretario']))?$_POST['id_secretario']:0;
				$id_impulsor=(isset($_POST['id_impulsor']))?$_POST['id_impulsor']:0;
				$id_ciudad=(isset($_POST['id_ciudad']))?$_POST['id_ciudad']:0;
				//$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
					
				$columnas="COUNT(id_juicios) as total, TO_CHAR(juicios.modificado,'YYYY-MM') as modificado";
				$tablas="public.juicios,
 				      public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view,
				      public.ciudad";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
				clientes.id_provincias = provincias.id_provincias AND
				titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
				asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND titulo_credito.id_ciudad = ciudad.id_ciudad";
				
				$grupo="TO_CHAR(juicios.modificado,'YYYY-MM')";
				$id="TO_CHAR(juicios.modificado,'YYYY-MM')";
				

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

					
				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);


			}
				
			if(isset($_POST["reporte_rpt"]))
			{
					
					
				$parametros = array();
				$parametros['id_ciudad']=isset($_POST['id_ciudad_1'])?trim($_POST['id_ciudad_1']):0;
				$parametros['id_secretario']=isset($_POST['id_secretario_1'])?trim($_POST['id_secretario_1']):0;
				$parametros['id_abogado']=isset($_POST['id_impulsor_1'])?trim($_POST['id_impulsor_1']):0;
				$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
				$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
				$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
				$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
					
					
				$pagina="contGraficasActualizacionMatrizJuicios.aspx";
					
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
					
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
					
				die();
					
			}

			$this->view("GraficasActualizacionMatrizJuiciosCordinador",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>"", "resultDatos"=>$resultDatos



			));


		}
		else
		{
			$this->view("Error",array(
					"resultado"=>"No tiene Permisos de Acceso a Graficas Matriz Juicios"

			));

			exit();
		}




	}


}


























public function index3(){

	session_start();

	$id_rol= $_SESSION['id_rol'];

	if ($id_rol==3){
		$_id_usuarios= $_SESSION['id_usuarios'];
		$resultSet="";
		$registrosTotales = 0;
		$arraySel = "";
			
		$juicios = new JuiciosModel();
			

			
		$provincias = new ProvinciasModel();
		$resultProv =$provincias->getAll("nombre_provincias");
			
		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");;
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";

			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuicios";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		if (!empty($resultPer))
		{

			if(isset($_POST["buscar"]))
			{

				$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
				$numero_titulo_credito=$_POST['numero_titulo_credito'];
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$id_provincias=$_POST['id_provincias'];
				$id_abogado=$_POST['id_abogado'];
				$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];



				$columnas="COUNT(id_juicios) as total, TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM') as fecha_ultima_providencia";
				$tablas="public.juicios,
 				      public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view,
				      public.ciudad";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
				clientes.id_provincias = provincias.id_provincias AND
				titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
				asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND titulo_credito.id_ciudad = ciudad.id_ciudad";

				$grupo="TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM')";
				$id="TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM')";


				$where_0 = "";
				$where_1 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";

				if($id_estados_procesales_juicios!=0){$where_0=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
				if($id_abogado!=0){$where_1=" AND juicios.id_usuarios='$id_abogado'";}
				if($juicio_referido_titulo_credito!=""){$where_2=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				if($numero_titulo_credito!=""){$where_3=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
				if($identificacion_clientes!=""){$where_4=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
				if($id_provincias!=0){$where_5=" AND provincias.id_provincias='$id_provincias'";}

				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);



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
					
				$parametros['fecha_providencias']=(isset($_POST['fecha_providencias']))?trim($_POST['fecha_providencias']):0;
				$parametros['hora_providencias']=(isset($_POST['hora_providencias']))?trim($_POST['hora_providencias']):0;
					
					
					
				$pagina="contGraficasProvidenciasMatrizJuicios.aspx";
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
					
					
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
					
				die();
					
			}



			$this->view("GraficasProvidenciasMatrizJuicios",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv



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






	if ($id_rol==5){

		$_id_usuarios= $_SESSION['id_usuarios'];
		$resultSet="";
		$registrosTotales = 0;
		$arraySel = "";
			
		$juicios = new JuiciosModel();
			
		$columnas = " asignacion_secretarios_view.id_abogado,
					  asignacion_secretarios_view.impulsores";
			
		$tablas   = "public.asignacion_secretarios_view";
			
		$where    = "public.asignacion_secretarios_view.id_secretario = '$_id_usuarios'";
			
		$id       = "asignacion_secretarios_view.id_abogado";
		$resultImpul=$juicios->getCondiciones($columnas ,$tablas ,$where, $id);

			
		$provincias = new ProvinciasModel();
		$resultProv =$provincias->getAll("nombre_provincias");
			
		$estado_procesal = new EstadosProcesalesModel();
		$resultEstadoProcesal =$estado_procesal->getAll("nombre_estados_procesales_juicios");;
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";

			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuiciosSecretarios";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
			
		if (!empty($resultPer))
		{

			if(isset($_POST["buscar"]))
			{

				$juicio_referido_titulo_credito=$_POST['juicio_referido_titulo_credito'];
				$numero_titulo_credito=$_POST['numero_titulo_credito'];
				$identificacion_clientes=$_POST['identificacion_clientes'];
				$id_provincias=$_POST['id_provincias'];
				$id_abogado=$_POST['id_abogado'];
				$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];



				$columnas="COUNT(id_juicios) as total, TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM') as fecha_ultima_providencia";
				$tablas="public.juicios,
 				      public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view,
				      public.ciudad";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
				clientes.id_provincias = provincias.id_provincias AND
				titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
				asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND titulo_credito.id_ciudad = ciudad.id_ciudad";

				$grupo="TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM')";
				$id="TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM')";


				$where_0 = "";
				$where_1 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";

				if($id_estados_procesales_juicios!=0){$where_0=" AND estados_procesales_juicios.id_estados_procesales_juicios='$id_estados_procesales_juicios'";}
				if($id_abogado!=0){$where_1=" AND asignacion_secretarios_view.id_abogado='$id_abogado'";}
				if($juicio_referido_titulo_credito!=""){$where_2=" AND juicios.juicio_referido_titulo_credito='$juicio_referido_titulo_credito'";}
				if($numero_titulo_credito!=""){$where_3=" AND titulo_credito.numero_titulo_credito='$numero_titulo_credito'";}
				if($identificacion_clientes!=""){$where_4=" AND clientes.identificacion_clientes='$identificacion_clientes'";}
				if($id_provincias!=0){$where_5=" AND provincias.id_provincias='$id_provincias'";}

				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);



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
				$parametros['fecha_providencias']=(isset($_POST['fecha_providencias']))?trim($_POST['fecha_providencias']):0;
				$parametros['hora_providencias']=(isset($_POST['hora_providencias']))?trim($_POST['hora_providencias']):0;
					
					
				$pagina="contGraficasProvidenciasMatrizJuicios.aspx";
					
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
					
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
					
				die();
					
			}


			$this->view("GraficasProvidenciasMatrizJuiciosSecretarios",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>$resultEstadoProcesal, "resultProv"=>$resultProv, "resultImpul"=>$resultImpul



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












	if($id_rol==23){


		$_id_usuarios= $_SESSION['id_usuarios'];


		$juicios = new JuiciosModel();

		$ciudad = new CiudadModel();
		$resultDatos=$ciudad->getBy("nombre_ciudad='Quito' OR nombre_ciudad='Guayaquil'");
			
		$resultEstadoProcesal_grafico="";
		$res_juicios="";
			
		$permisos_rol = new PermisosRolesModel();
		$nombre_controladores = "MatrizJuiciosCordinador";
		$id_rol= $_SESSION['id_rol'];
		$resultPer = $juicios->getPermisosVer("controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );

		if (!empty($resultPer))
		{

			if(isset($_POST["buscar"]))
			{

				$juicio_referido_titulo_credito=(isset($_POST['juicio_referido_titulo_credito']))?$_POST['juicio_referido_titulo_credito']:'';
				$numero_titulo_credito=(isset($_POST['numero_titulo_credito']))?$_POST['numero_titulo_credito']:'';
				$identificacion_clientes=(isset($_POST['identificacion_clientes']))?$_POST['identificacion_clientes']:'';
				$id_secretario=(isset($_POST['id_secretario']))?$_POST['id_secretario']:0;
				$id_impulsor=(isset($_POST['id_impulsor']))?$_POST['id_impulsor']:0;
				$id_ciudad=(isset($_POST['id_ciudad']))?$_POST['id_ciudad']:0;
				//$id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
					
				$columnas="COUNT(id_juicios) as total, TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM') as fecha_ultima_providencia";
				$tablas="public.juicios,
 				      public.estados_procesales_juicios, public.clientes, public.provincias, public.titulo_credito, public.asignacion_secretarios_view,
				      public.ciudad";
				$where="estados_procesales_juicios.id_estados_procesales_juicios = juicios.id_estados_procesales_juicios AND clientes.id_clientes = titulo_credito.id_clientes AND
				clientes.id_provincias = provincias.id_provincias AND
				titulo_credito.id_titulo_credito = juicios.id_titulo_credito AND
				asignacion_secretarios_view.id_abogado = titulo_credito.id_usuarios AND titulo_credito.id_ciudad = ciudad.id_ciudad";

				$grupo="TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM')";
				$id="TO_CHAR(juicios.fecha_ultima_providencia,'YYYY-MM')";


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

					
				$where_to  = $where . $where_0 . $where_1. $where_2 . $where_3 . $where_4 . $where_5 ;
				$resultEstadoProcesal_grafico=$juicios->getCondiciones_grupo($columnas, $tablas, $where_to, $grupo, $id);


			}

			if(isset($_POST["reporte_rpt"]))
			{
					
					
				$parametros = array();
				$parametros['id_ciudad']=isset($_POST['id_ciudad_1'])?trim($_POST['id_ciudad_1']):0;
				$parametros['id_secretario']=isset($_POST['id_secretario_1'])?trim($_POST['id_secretario_1']):0;
				$parametros['id_abogado']=isset($_POST['id_impulsor_1'])?trim($_POST['id_impulsor_1']):0;
				$parametros['juicio_referido_titulo_credito']=(isset($_POST['juicio_referido_titulo_credito']))?trim($_POST['juicio_referido_titulo_credito']):'';
				$parametros['numero_titulo_credito']=(isset($_POST['numero_titulo_credito']))?trim($_POST['numero_titulo_credito']):'';
				$parametros['identificacion_clientes']=(isset($_POST['identificacion_clientes']))?trim($_POST['identificacion_clientes']):'';
				$parametros['id_rol'] = $_SESSION['id_rol']?trim($_SESSION['id_rol']):0;
					
					
				$pagina="contGraficasProvidenciasMatrizJuicios.aspx";
					
				$conexion_rpt = array();
				$conexion_rpt['pagina']=$pagina;
				//$conexion_rpt['port']="59584";
					
				$this->view("ReporteRpt", array(
						"parametros"=>$parametros,"conexion_rpt"=>$conexion_rpt
				));
					
				die();
					
			}

			$this->view("GraficasProvidenciasMatrizJuiciosCordinador",array(
					"resultEstadoProcesal_grafico"=>$resultEstadoProcesal_grafico,"resultEstadoProcesal"=>"", "resultDatos"=>$resultDatos



			));


		}
		else
		{
			$this->view("Error",array(
					"resultado"=>"No tiene Permisos de Acceso a Graficas Matriz Juicios"

			));

			exit();
		}




	}


}









	
}
?>
