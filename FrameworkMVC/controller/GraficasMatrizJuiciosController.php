<?php
class GraficasMatrizJuiciosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    //maycol
public function index(){
	
		session_start();
		
		
		
		
		if (isset(  $_SESSION['usuario_usuarios']) )
		{
		
	        
			$clientes = new ClientesModel();
			$_id_usuarios= $_SESSION['id_usuarios'];
			$resultSet="";
			
				
			$juicios = new JuiciosModel();
			
			
			$nombre_controladores = "MatrizJuicios";
			$id_rol= $_SESSION['id_rol'];
			$resultPer = $clientes->getPermisosEditar("   controladores.nombre_controladores = '$nombre_controladores' AND permisos_rol.id_rol = '$id_rol' " );
				
			
			if (!empty($resultPer))
			{
				
				$columnas = " juicios.id_juicios,
								  juicios.orden,
								  juicios.regional,
								  juicios.juicio_referido_titulo_credito,
								  juicios.year_juicios,
								  clientes.id_clientes,
								  clientes.identificacion_clientes,
								  clientes.nombres_clientes,
								  clientes.nombre_garantes,
								  clientes.identificacion_garantes,
								clientes.identificacion_clientes_1,
								clientes.nombre_clientes_1,
								clientes.identificacion_clientes_2,
								clientes.nombre_clientes_2,
								clientes.identificacion_clientes_3,
								clientes.nombre_clientes_3,
								clientes.identificacion_garantes_1,
								clientes.nombre_garantes_1,
								clientes.identificacion_garantes_2,
								clientes.nombre_garantes_2,
								clientes.identificacion_garantes_3,
								clientes.nombre_garantes_3,
								clientes.correo_clientes,
								clientes.correo_clientes_1,
								clientes.correo_clientes_2,
								clientes.correo_clientes_3,
								clientes.direccion_clientes,
								clientes.direccion_clientes_1,
								clientes.direccion_clientes_2,
								clientes.direccion_clientes_3,
								 clientes.cantidad_clientes,
								  clientes.cantidad_garantes,
								  clientes.sexo_clientes,
								  clientes.sexo_clientes_1,
								  clientes.sexo_clientes_2,
								  clientes.sexo_clientes_3,
								  clientes.sexo_garantes,
								  clientes.sexo_garantes_1,
								  clientes.sexo_garantes_2,
								  clientes.sexo_garantes_3,
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
					
				
				$resultSet=$juicios->getCondiciones($columnas, $tablas, $where, $id);
				
				
				
				$this->view("GraficasMatrizJuicios",array(
						"resultSet"=>$resultSet
							
				));
				
			}else
			{
					$this->view("Error",array(
							"resultado"=>"No tiene Permisos de Acceso a Graficas Matriz Juicios"
			
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
	
	
}
?>
