  	   <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
       <?php include("view/MATRIZJUICIOS/modal/modal_matriz_juicios.php");?>

<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Matriz Juicios - coactiva 2017</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          <script type="text/javascript" src="view/MATRIZJUICIOS/js/VentanaCentrada.js"></script>
          <script type="text/javascript" src="view/MATRIZJUICIOS/js/procesos_matriz_juicios.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
		
       <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
         
  
   
  
 
 
	
  
  

        
    <script type="text/javascript">
	$(document).ready(function(){
		//load_juicios(1);

		$("#buscar").click(function(){

			load_matriz(1);
			
			});
	});

	
	function load_matriz(pagina){
		
		//iniciar variables
		 var con_juicio_referido_titulo_credito=$("#juicio_referido_titulo_credito").val();
		 var con_numero_titulo_credito=$("#numero_titulo_credito").val();
		 var con_identificacion_clientes=$("#identificacion_clientes").val();
		 var con_id_provincias=$("#id_provincias").val();
		 var con_id_estados_procesales_juicios=$("#id_estados_procesales_juicios").val();
		 
		 

		  var con_datos={
				  juicio_referido_titulo_credito:con_juicio_referido_titulo_credito,
				  numero_titulo_credito:con_numero_titulo_credito,
				  identificacion_clientes:con_identificacion_clientes,
				  id_provincias:con_id_provincias,
				  id_estados_procesales_juicios:con_id_estados_procesales_juicios,
				  action:'ajax',
				  page:pagina
				  };


		$("#matriz").fadeIn('slow');
		$.ajax({
			url:"<?php echo $helper->url("MatrizJuicios","index3");?>",
            type : "POST",
            async: true,			
			data: con_datos,
			 beforeSend: function(objeto){
			$("#matriz").html('<img src="view/images/ajax-loader.gif"> Cargando...');
			},
			success:function(data){
				$(".div_matriz").html(data).fadeIn('slow');
				$("#matriz").html("");
			}
		})
	}
	
	</script>

    </head>
    <body style="background-color: #d9e3e4;">
    
      
       
       <?php
       
  
       $sel_juicio_referido_titulo_credito="";
       $sel_numero_titulo_credito="";
       $sel_identificacion_clientes="";
       $sel_id_provincias="";
       $sel_id_estados_procesales_juicios="";
        $sel_id_abogado="";
        
       if($_SERVER['REQUEST_METHOD']=='POST' )
       {
       	
       	$sel_juicio_referido_titulo_credito = $_POST['juicio_referido_titulo_credito'];
       	$sel_numero_titulo_credito=$_POST['numero_titulo_credito'];
       	$sel_identificacion_clientes=$_POST['identificacion_clientes'];
       	$sel_id_provincias=$_POST['id_provincias'];
       	$sel_id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
       	$sel_id_abogado = $_POST['id_abogado'];
       
       }
       
    
       
       
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("MatrizJuicios","index3"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
         
               <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
            
                       <br>         
         <div class="col-lg-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Actualizar Datos Juicios</h4>
	         </div>
	         <div class="panel-body">
			            <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='modal_edit_orden' class='control-label'>Orden</label><br>
				        <input type='text' class='form-control' id='modal_edit_orden' name='modal_edit_orden' value="<?php echo $resEdit->id_juicios; ?>" readonly >
				        </div>
					    </div>
					    <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='regional' class='control-label'>Regional</label><br>
				        <input type='text' class='form-control' id='regional' name='regional' value="<?php echo $resEdit->regional; ?>" >
				        <input type='hidden' class='form-control'  id='id_juicios' name='id_juicios' value="<?php echo $resEdit->id_juicios; ?>" >
				        <input type='hidden' class='form-control'  id='id_clientes' name='id_clientes' value="<?php echo $resEdit->id_clientes; ?>">
				        <input type='hidden' class='form-control'  id='id_titulo_credito' name='id_titulo_credito' value="<?php echo $resEdit->id_titulo_credito; ?>"  >
						</div>
				        </div>	
				        <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='juicio_referido_titulo_credito' class='control-label'># Juicio</label><br>
				        <input type='text' class='form-control' id='juicio_referido_titulo_credito' name='juicio_referido_titulo_credito' value="<?php echo $resEdit->juicio_referido_titulo_credito; ?>">
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='year_juicios' class='control-label'>Año Juicio</label><br>
				        <input type='text' class='form-control' id='year_juicios' name='year_juicios' value="<?php echo $resEdit->year_juicios; ?>"  >
				        </div>
				        </div>	
			 </div>
		</div>
			
			
			 <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Actualizar Datos Cliente</h4>
	         </div>
	         <div class="panel-body">
			
						<div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_clientes' class='control-label'>Cedula Cliente 1</label><br>
				        <input type='text' class='form-control' id='identificacion_clientes' name='identificacion_clientes' value="<?php echo $resEdit->identificacion_clientes; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombres_clientes' class='control-label'>Nombres Cliente 1</label><br>
				        <input type='text' class='form-control' id='nombres_clientes' name='nombres_clientes' value="<?php echo $resEdit->nombres_clientes; ?>"  >
				        </div>
				        </div>	

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='correo_clientes' class='control-label'>Correo Cliente 1</label><br>
				        <input type='email' class='form-control' id='correo_clientes' name='correo_clientes' value="<?php echo $resEdit->correo_clientes; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='direccion_clientes' class='control-label'>Dirección Cliente 1</label><br>
				        <input type='text' class='form-control' id='direccion_clientes' name='direccion_clientes' value="<?php echo $resEdit->direccion_clientes; ?>"  >
				        </div>
				        </div>	

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_clientes_1' class='control-label'>Cedula Cliente 2</label><br>
				        <input type='text' class='form-control' id='identificacion_clientes_1' name='identificacion_clientes_1' value="<?php echo $resEdit->identificacion_clientes_1; ?>" >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombre_clientes_1' class='control-label'>Nombres Cliente 2</label><br>
				        <input type='text' class='form-control' id='nombre_clientes_1' name='nombre_clientes_1' value="<?php echo $resEdit->nombre_clientes_1; ?>"  >
				        </div>
				        </div>

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='correo_clientes_1' class='control-label'>Correo Cliente 2</label><br>
				        <input type='email' class='form-control' id='correo_clientes_1' name='correo_clientes_1' value="<?php echo $resEdit->correo_clientes_1; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='direccion_clientes_1' class='control-label'>Dirección Cliente 2</label><br>
				        <input type='text' class='form-control' id='direccion_clientes_1' name='direccion_clientes_1' value="<?php echo $resEdit->direccion_clientes_1; ?>" >
				        </div>
				        </div>

				       
				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_clientes_2' class='control-label'>Cedula Cliente 3</label><br>
				        <input type='text' class='form-control' id='identificacion_clientes_2' name='identificacion_clientes_2' value="<?php echo $resEdit->identificacion_clientes_2; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombre_clientes_2' class='control-label'>Nombres Cliente 3</label><br>
				        <input type='text' class='form-control' id='nombre_clientes_2' name='nombre_clientes_2' value="<?php echo $resEdit->nombre_clientes_2; ?>"  >
				        </div>
				        </div>

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='correo_clientes_2' class='control-label'>Correo Cliente 3</label><br>
				        <input type='email' class='form-control' id='correo_clientes_2' name='correo_clientes_2' value="<?php echo $resEdit->correo_clientes_2; ?>" >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='direccion_clientes_2' class='control-label'>Dirección Cliente 3</label><br>
				        <input type='text' class='form-control' id='direccion_clientes_2' name='direccion_clientes_2' value="<?php echo $resEdit->direccion_clientes_2; ?>"  >
				        </div>
				        </div>
				        
				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_clientes_3' class='control-label'>Cedula Cliente 4</label><br>
				        <input type='text' class='form-control' id='identificacion_clientes_3' name='identificacion_clientes_3' value="<?php echo $resEdit->identificacion_clientes_3; ?>" >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombre_clientes_3' class='control-label'>Nombres Cliente 4</label><br>
				        <input type='text' class='form-control' id='nombre_clientes_3' name='nombre_clientes_3' value="<?php echo $resEdit->nombre_clientes_3; ?>"  >
				        </div>
				        </div>

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='correo_clientes_3' class='control-label'>Correo Cliente 4</label><br>
				        <input type='email' class='form-control' id='correo_clientes_3' name='correo_clientes_3' value="<?php echo $resEdit->correo_clientes_3; ?>" >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='direccion_clientes_3' class='control-label'>Dirección Cliente 4</label><br>
				        <input type='text' class='form-control' id='direccion_clientes_3' name='direccion_clientes_3' value="<?php echo $resEdit->direccion_clientes_3; ?>"  >
				        </div>
				        </div>
			
			
			
			
			
		    </div>
		</div>
			
			<div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Actualizar Datos Garante</h4>
	         </div>
	         <div class="panel-body">
						<div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes' class='control-label'>Cedula Garante 1</label><br>
				        <input type='text' class='form-control' id='identificacion_garantes' name='identificacion_garantes' value="<?php echo $resEdit->identificacion_garantes; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes' class='control-label'>Nombres Garante 1</label><br>
				        <input type='text' class='form-control' id='nombre_garantes' name='nombre_garantes' value="<?php echo $resEdit->nombre_garantes; ?>"  >
				        </div>
				        </div>	

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes_1' class='control-label'>Cedula Garante 2</label><br>
				        <input type='text' class='form-control' id='identificacion_garantes_1' name='identificacion_garantes_1' value="<?php echo $resEdit->identificacion_garantes_1; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes_1' class='control-label'>Nombres Garante 2</label><br>
				        <input type='text' class='form-control' id='nombre_garantes_1' name='nombre_garantes_1' value="<?php echo $resEdit->nombre_garantes_1; ?>"  >
				        </div>
				        </div>	

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes_2' class='control-label'>Cedula Garante 3</label><br>
				        <input type='text' class='form-control' id='identificacion_garantes_2' name='identificacion_garantes_2' value="<?php echo $resEdit->identificacion_garantes_2; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes_2' class='control-label'>Nombres Garante 3</label><br>
				        <input type='text' class='form-control' id='nombre_garantes_2' name='nombre_garantes_2' value="<?php echo $resEdit->nombre_garantes_2; ?>"  >
				        </div>
				        </div>	

				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes_3' class='control-label'>Cedula Garante 4</label><br>
				        <input type='text' class='form-control' id='identificacion_garantes_3' name='identificacion_garantes_3' value="<?php echo $resEdit->identificacion_garantes_3; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes_3' class='control-label'>Nombres Garante 4</label><br>
				        <input type='text' class='form-control' id='nombre_garantes_3' name='nombre_garantes_3' value="<?php echo $resEdit->nombre_garantes_3; ?>"  >
				        </div>
				        </div>	
		    </div>
		</div>
		
		
		<div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Actualizar Datos Operación</h4>
	         </div>
	         <div class="panel-body">
						<div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='numero_titulo_credito' class='control-label'># Operación</label><br>
				        <input type='text' class='form-control' id='numero_titulo_credito' name='numero_titulo_credito' value="<?php echo $resEdit->numero_titulo_credito; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='fecha_emision_juicios' class='control-label'>Fecha Auto Pagos</label><br>
				        <input type='date' class='form-control' id='fecha_emision_juicios' name='fecha_emision_juicios' value="<?php echo $resEdit->fecha_emision_juicios; ?>"   >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='cuantia_inicial' class='control-label'>Cuantia Inicial</label><br>
				        <input type='text' class='form-control' id='cuantia_inicial' name='cuantia_inicial' value="<?php echo $resEdit->cuantia_inicial; ?>"  >
				        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='riesgo_actual' class='control-label'>Riesgo Actual</label><br>
				        <input type='text' class='form-control' id='riesgo_actual' name='riesgo_actual' value="<?php echo $resEdit->riesgo_actual; ?>">
				        </div>
				        </div>	
<br>
 						<div class="row" >
 						<div class="col-xs-6 col-md-2">
 						 <div class='form-group'>
			  			 <label for='id_provincias' class='control-label'>Provincia</label>
			  			<select name="id_provincias" id="id_provincias"  class="form-control" >
						<?php foreach($resultProv as $res) {?>
						<option value="<?php echo $res->id_provincias; ?>" <?php if ($res->id_provincias == $resEdit->id_provincias )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_provincias; ?> </option>
						            
						<?php } ?>
						</select> 
			  			</div>
						</div>
						
						<div class="col-xs-6 col-md-2">
 						 <div class='form-group'>
			  			 <label for='id_estados_procesales_juicios' class='control-label'>Estado Procesal</label>
			  			<select name="id_estados_procesales_juicios" id="id_estados_procesales_juicios"  class="form-control" >
						<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>" <?php if ($res->id_estados_procesales_juicios == $resEdit->id_estados_procesales_juicios )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_estados_procesales_juicios; ?> </option>
						            
						<?php } ?>
						</select> 
			  			</div>
						</div>
						
					    <div class = 'col-xs-6 col-md-2'>
				        <div class='form-group'>
				        <label for='fecha_ultima_providencia' class='control-label'>Fecha Providencia</label><br>
				        <input type='date' class='form-control' id='fecha_ultima_providencia' name='fecha_ultima_providencia' value="<?php echo $resEdit->fecha_ultima_providencia; ?>"  >
				        </div>
				        </div>
				        
				        <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='impulsores' class='control-label'>Impulsor</label><br>
				        <input type='text' class='form-control' id='impulsores' name='impulsores' value="<?php echo $resEdit->impulsores; ?>" readonly>
				        </div>
				        </div>
				        <div class = 'col-xs-6 col-md-3'>
				        <div class='form-group'>
				        <label for='secretarios' class='control-label'>Secretario</label><br>
				        <input type='text' class='form-control' id='secretarios' name='secretarios' value="<?php echo $resEdit->secretarios; ?>" readonly>
				        </div>
				        </div>
 						</div>
 						
					    <div class = 'col-xs-6 col-md-6'>
				        <div class='form-group'>
				        <label for='descripcion_estado_procesal' class='control-label'>Descripción Etapa Procesal</label><br>
				        <textarea type='text' class='form-control' id='descripcion_estado_procesal' name='descripcion_estado_procesal'  placeholder='Descripción'><?php echo $resEdit->descripcion_estado_procesal; ?></textarea>
                        </div>
				        </div>	
				        <div class = 'col-xs-6 col-md-6'>
				        <div class='form-group'>
				        <label for='estrategia_seguir' class='control-label'>Estrategia Seguir</label><br>
				        <textarea type='text' class='form-control' id='estrategia_seguir' name='estrategia_seguir'  placeholder='Estrategia a Seguir'><?php echo $resEdit->estrategia_seguir; ?></textarea>
	                    </div>
				        </div>
				        <div class = 'col-xs-6 col-md-12'>
				        <div class='form-group'>
				        <label for='observaciones' class='control-label'>Observaciones</label><br>
				        <textarea type='text' class='form-control' id='observaciones' name='observaciones'  placeholder='Observaciones'><?php echo $resEdit->observaciones; ?></textarea>
		                </div>
				        </div>
			
		    </div>
		</div>
			
			  <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="actualizar" name="actualizar"  onclick="this.form.action='<?php echo $helper->url("MatrizJuicios","ActualizarMatriz"); ?>'" value="Actualizar"  class="btn btn-info"/>
		
			  </div>
			</div> 
			<br>
			<br>
			<br>
			<br>
			
			</div>
            
            
		     <?php } } else {?>
                 
                 <br>         
         <div class="col-lg-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Actualizar Matriz Juicios</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  	
  			
  		 <div class="col-lg-2 col-md-2 col-xs-6">
			  	<p  class="formulario-subtitulo" style="" >Impulsor:</p>
			  	<select name="id_abogado" id="id_abogado"  class="form-control" readonly>
			   <option value="<?php echo $_SESSION['id_usuarios'];  ?>" <?php if($sel_id_abogado==$_SESSION['id_usuarios']){echo "selected";}?>  ><?php echo $_SESSION['nombre_usuarios'];  ?></option>  
			     
			    </select>
		 </div>
  							
  		<div class="col-lg-2 col-md-2 xs-6">
         		<p class="formulario-subtitulo" ># Juicio:</p>
			  	<input type="text"  name="juicio_referido_titulo_credito" id="juicio_referido_titulo_credito" value="<?php echo $sel_juicio_referido_titulo_credito;?>" class="form-control "/> 
			   
		 </div>
		 
		  <div class="col-lg-2 col-md-2 xs-6">
         		<p class="formulario-subtitulo" ># Opreación:</p>
			  	<input type="text"  name="numero_titulo_credito" id="numero_titulo_credito" value="<?php echo $sel_numero_titulo_credito;?>" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 xs-6">
         		<p class="formulario-subtitulo" >Identificación:</p>
			  	<input type="text"  name="identificacion_clientes" id="identificacion_clientes" value="<?php echo $sel_identificacion_clientes;?>" class="form-control "/> 
			    
		 </div>
		 
		 <div class="col-lg-2 col-md-2 xs-6">
			  	<p  class="formulario-subtitulo">Estado Procesal:</p>
			  	<select name="id_estados_procesales_juicios" id="id_estados_procesales_juicios"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>"<?php if($sel_id_estados_procesales_juicios==$res->id_estados_procesales_juicios){echo "selected";}?> ><?php echo $res->nombre_estados_procesales_juicios;  ?> </option>
			            <?php } ?>
				</select>

         </div>
         <div class="col-lg-2 col-md-2 xs-6">
			  	<p  class="formulario-subtitulo">Provincia:</p>
			  	<select name="id_provincias" id="id_provincias"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultProv as $res) {?>
						<option value="<?php echo $res->id_provincias; ?>"<?php if($sel_id_provincias==$res->id_provincias){echo "selected";}?> ><?php echo $res->nombre_provincias;  ?> </option>
			            <?php } ?>
				</select>

         </div>
         
          
        
         
          
           </div>
  		
  		
  		<div class="col-lg-12 col-md-12 xs-12 " style="text-align: center; margin-top: 10px">
  		    
		 <button type="button" id="buscar" name="buscar" value="Buscar"   class="btn btn-info" style="margin-top: 10px;"><i class="glyphicon glyphicon-search"></i></button>
		 <button type="submit" id="reporte_rpt_matriz" name="reporte_rpt_matriz" value="Reporte Matriz Juicios"   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Matriz Juicios</button>         
	  <button type="submit" id="reporte_rpt" name="reporte_rpt" value="Reporte Providencia"   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Providencias</button>
		 	
	 
	     </div>
		 
		
	     
		</div>
		    
		    </div>
	        </div>
	        </div>
         
         
        		 
		 
		 <div class="col-lg-12">
		 
	     <div class="col-lg-12">
	     
	     <div style="height: 200px; display: block;">
		
		 <h4 style="color:#ec971f;"></h4>
			  <div>					
					<div id="matriz" style="position: absolute;	text-align: center;	top: 10px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="div_matriz" ></div><!-- Datos ajax Final -->
		      </div>
		       <br>
				  
		 </div>
		 
		 </div>
		 
		
		 
		 </div>
		 
	 <?php } ?>
      
       </form>
     <br>
			<br>
			
      </div>
     
  </div>
      <!-- termina
       busqueda  -->
       
 
   </body>  

    </html>   
    
  

    
