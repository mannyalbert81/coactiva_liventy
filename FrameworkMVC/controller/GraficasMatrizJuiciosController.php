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
	
	
}
	
	
}
?>
