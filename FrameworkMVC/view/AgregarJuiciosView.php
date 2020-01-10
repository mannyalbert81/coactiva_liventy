  	   <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>

<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Matriz Juicios - coactiva 2017</title>
         <link rel="stylesheet" href="view/css/pace-theme-center-atom.css" />
		 <script src="view/js/pace.js"></script>
		
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
         
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		
		<script src="view/js/jquery.inputmask.bundle.js"></script>
		
       <script>
      $(document).ready(function(){
      $(".cantidades").inputmask();
      });

      
    </script>
         
     <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#agregar").click(function() 
			{
		   /*
		    	var fecha_emision_juicios = $("#fecha_emision_juicios").val();
		     	var fecha_ultima_providencia = $("#fecha_ultima_providencia").val();
		     	*/
		     	var numero_titulo_credito = $("#numero_titulo_credito").val();
		     	var juicio_referido_titulo_credito = $("#juicio_referido_titulo_credito").val();
		     	var id_provincias = $("#id_provincias").val();
		     	var id_estados_procesales_juicios = $("#id_estados_procesales_juicios").val();
		     	var juicio_referido_titulo_credito = $("#juicio_referido_titulo_credito").val();
                var cuantia_inicial = $("#cuantia_inicial").val();
		     	var id_origen_juicio = $("#id_origen_juicio").val();
		  //      var numero_carton = $("#numero_carton").val();
		     //   var observaciones = $("#observaciones").val();
		  //      var tipo_leyes = $("#tipo_leyes").val();
			//    var medida_cautelar = $("#medida_cautelar").val();
			  //  var embargo_bienes = $("#embargo_bienes").val();
			    //var forma_pago = $("#forma_pago").val();
		      
		    	if (id_origen_juicio == "")
		    	{
			    	
		    		$("#mensaje_id_origen_juicio").text("Seleccione Origen");
		    		$("#mensaje_id_origen_juicio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_id_origen_juicio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				
		    /*	if (numero_carton == "")
		    	{
			    	
		    		$("#mensaje_numero_carton").text("Ingrese # Cartón");
		    		$("#mensaje_numero_carton").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_numero_carton").fadeOut("slow"); //Muestra mensaje de error
		            
				}
*/
				
		   				
		     	if (juicio_referido_titulo_credito == "")
		    	{
			    	
		    		$("#mensaje_juicio_referido_titulo_credito").text("Introduzca un Número Juicio");
		    		$("#mensaje_juicio_referido_titulo_credito").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_juicio_referido_titulo_credito").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		     	if (numero_titulo_credito == "")
		    	{
			    	
		    		$("#mensaje_numero_titulo_credito").text("Introduzca un Número Operación");
		    		$("#mensaje_numero_titulo_credito").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_numero_titulo_credito").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		      	
		     	
			     /*	if (fecha_emision_juicios == "")
		    	{
			    	
		    		$("#mensaje_fecha_emision_juicios").text("Introduzca una Fecha");
		    		$("#mensaje_fecha_emision_juicios").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_fecha_emision_juicios").fadeOut("slow"); //Muestra mensaje de error
		            
				}*/
				
		    	
		    	

		    	if (id_provincias == "")
		    	{
			    	
		    		$("#mensaje_id_provincias").text("Seleccione Una Provincia");
		    		$("#mensaje_id_provincias").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_id_provincias").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if (id_estados_procesales_juicios == "")
		    	{
			    	
		    		$("#mensaje_id_estados_procesales_juicios").text("Seleccione Una Etapa Procesal");
		    		$("#mensaje_id_estados_procesales_juicios").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_id_estados_procesales_juicios").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    
		     /*	if(observaciones==0){


		    		$("#mensaje_observaciones").text("Seleccione un Estado Procesal");
		    		$("#mensaje_observaciones").fadeIn("slow"); //Muestra mensaje de error
		            return false;


			   }else{

				   $("#mensaje_observaciones").fadeOut("slow"); //Muestra mensaje de error
			   }
		     	if(tipo_leyes==0){


		    		$("#mensaje_tipo_leyes").text("Seleccione Tipo de Ley");
		    		$("#mensaje_tipo_leyes").fadeIn("slow"); //Muestra mensaje de error
		            return false;


			   }else{

				   $("#mensaje_tipo_leyes").fadeOut("slow"); //Muestra mensaje de error
			   }
				   
		    	if(medida_cautelar==0){


		    		$("#mensaje_medida_cautelar").text("Seleccione si existe Medida Cautelar");
		    		$("#mensaje_medida_cautelar").fadeIn("slow"); //Muestra mensaje de error
		            return false;


			   }else{

				   $("#mensaje_medida_cautelar").fadeOut("slow"); //Muestra mensaje de error
			   }

		    	if(embargo_bienes==0){


		    		$("#mensaje_embargo_bienes").text("Seleccione Tipo de Embargo");
		    		$("#mensaje_embargo_bienes").fadeIn("slow"); //Muestra mensaje de error
		            return false;


			   }else{

				   $("#mensaje_embargo_bienes").fadeOut("slow"); //Muestra mensaje de error
			   }
		    	if(forma_pago==0){


		    		$("#mensaje_forma_pago").text("Seleccione Forma de Pago");
		    		$("#mensaje_forma_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;


			   }else{

				   $("#mensaje_forma_pago").fadeOut("slow"); //Muestra mensaje de error
			   }
		    

		    	if (fecha_ultima_providencia == "")
		    	{
			    	
		    		$("#mensaje_fecha_ultima_providencia").text("Introduzca una Fecha");
		    		$("#mensaje_fecha_ultima_providencia").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_fecha_ultima_providencia").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	*/
		    	
		    	
			}); 

			$( "#id_origen_juicio" ).focus(function() {
				$("#mensaje_id_origen_juicio").fadeOut("slow");
			});

			$( "#numero_carton" ).focus(function() {
				$("#mensaje_numero_carton").fadeOut("slow");
			});
			
		    $( "#juicio_referido_titulo_credito" ).focus(function() {
				$("#mensaje_juicio_referido_titulo_credito").fadeOut("slow");
			});

			$( "#numero_titulo_credito" ).focus(function() {
				$("#mensaje_numero_titulo_credito").fadeOut("slow");
			});
	
				

				$( "#id_provincias" ).focus(function() {
					$("#mensaje_id_provincias").fadeOut("slow");
    			});

				$( "#id_estados_procesales_juicios" ).focus(function() {
					$("#mensaje_id_estados_procesales_juicios").fadeOut("slow");
    			});

			/*	$( "#observaciones" ).focus(function() {
					$("#mensaje_observaciones").fadeOut("slow");
    			});
				$( "#tipo_leyes" ).focus(function() {
					$("#mensaje_tipo_leyes").fadeOut("slow");
    			});
				$( "#medida_cautelar" ).focus(function() {
					$("#mensaje_medida_cautelar").fadeOut("slow");
    			});
				$( "#embargo_bienes" ).focus(function() {
					$("#mensaje_embargo_bienes").fadeOut("slow");
    			});
				$( "#forma_pago" ).focus(function() {
					$("#mensaje_forma_pago").fadeOut("slow");
    			});*/
/*
				$( "#fecha_ultima_providencia" ).focus(function() {
					$("#mensaje_fecha_ultima_providencia").fadeOut("slow");
    			});
			*/
					    
		}); 

	</script>
	
  
   
        <script>

		$(document).ready(function(){

		 

		    $fecha=$('#fecha_emision_juicios');
		    if ($fecha[0].type!="date"){
		    	$fecha.attr('readonly','readonly');
		    	$fecha.datepicker({
		    		changeMonth: true,
		    		changeYear: true,
		    		dateFormat: "yy-mm-dd",
		    		yearRange: "1850:2018"
		    		});
		    }

		    $fecha=$('#fecha_ultima_providencia');
		    if ($fecha[0].type!="date"){
		    $fecha.attr('readonly','readonly');
		    $fecha.datepicker({
	    		changeMonth: true,
	    		changeYear: true,
	    		dateFormat: "yy-mm-dd",
	    		yearRange: "1850:2018"
	    		});
		    }

		}); 

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
       

         

<form action="<?php echo $helper->url("MatrizJuicios","AgregarJuicio"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
     
                       <br>         
         <div class="col-lg-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos del Juicio</h4>
	         </div>
	         <div class="panel-body">
			            
				        <div class="col-xs-12 col-md-9 col-lg-9">
 						 <div class='form-group'>
			  			 <label for='id_origen_juicio' class='control-label'>Origen Juicio</label>
			  			<select name="id_origen_juicio" id="id_origen_juicio"  class="form-control" >
			  			 <option value="" selected="selected">--Seleccione--</option>
						<?php foreach($resultOrigen as $res) {?>
						<option value="<?php echo $res->id_origen_juicio; ?>" ><?php echo $res->nombre_origen_juicio; ?></option>
						            
						<?php } ?>
						</select> 
						  <div id="mensaje_id_origen_juicio" class="errores"></div>
			  			</div>
						</div>
						
						 <div class = 'col-xs-12 col-md-3 col-lg-3' style="display: none">
				        <div class='form-group'>
				        <label for='numero_carton' class='control-label'># Cartón</label><br>
				        <input type='text' class='form-control' id='numero_carton' name='numero_carton' value="">
				        <div id="mensaje_numero_carton" class="errores"></div>
				        </div>
				        </div>	
						
				        <div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='juicio_referido_titulo_credito' class='control-label'># Juicio</label><br>
				        <input type='text' class='form-control' id='juicio_referido_titulo_credito' name='juicio_referido_titulo_credito' value="">
				        <div id="mensaje_juicio_referido_titulo_credito" class="errores"></div>
				        </div>
				         </div>	
			 </div>
		</div>
			
			
			 <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos del Cliente</h4>
	         </div>
	         <div class="panel-body">
			
						<div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='identificacion_clientes' class='control-label'>Cedula Cliente 1</label><br>
				        <input type='text' maxlength='13' class='form-control' id='identificacion_clientes' name='identificacion_clientes' value=""  >
				        </div>
				        </div>	
				        <div class = 'col-xs-12 col-md-4 col-lg-4'>
				        <div class='form-group'>
				        <label for='nombres_clientes' class='control-label'>Nombres Cliente 1</label><br>
				        <input type='text' class='form-control' id='nombres_clientes' name='nombres_clientes' value=""  >
				        </div>
				        </div>	
						
						<div class = 'col-xs-12 col-md-1 col-lg-1'>
				        <div class='form-group'>
				        <label for='sexo_clientes' class='control-label'>Sexo</label><br>
						<select name="sexo_clientes" id="sexo_clientes"  class="form-control">
							<option value="_" selected="selected">---</option>
										<option value="M" >M </option>
						            	<option value="F" >F </option>
					    </select>
  						</div>
				        </div>	

				        <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='correo_clientes' class='control-label'>Correo Cliente 1</label><br>
				        <input type='email' class='form-control' id='correo_clientes' name='correo_clientes' value=""  >
				        </div>
				        </div>	
				        <div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='direccion_clientes' class='control-label'>Dirección Cliente 1</label><br>
				        <input type='text' class='form-control' id='direccion_clientes' name='direccion_clientes' value=""  >
				        </div>
				        </div>	

				        			
			
		    </div>
		</div>
			
			<div class="panel panel-info" style="display: none">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos del Garante</h4>
	         </div>
	         <div class="panel-body">
	        		   
	        		    <div class = 'row'>
						<div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes' class='control-label'>Cedula Garante 1</label><br>
				        <input type='text' maxlength="13" class='form-control' id='identificacion_garantes' name='identificacion_garantes' value=""  >
				        </div>
				        </div>	
				        <div class = 'col-xs-12 col-md-4 col-lg-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes' class='control-label'>Nombres Garante 1</label><br>
				        <input type='text' class='form-control' id='nombre_garantes' name='nombre_garantes' value=""  >
				        </div>
				        </div>	

						<div class = 'col-xs-12 col-md-1 col-lg-1'>
				        <div class='form-group'>
				        <label for='sexo_garantes' class='control-label'>Sexo</label><br>
						<select name="sexo_garantes" id="sexo_garantes"  class="form-control">
							<option value="_" selected="selected">---</option>
										<option value="M" >M </option>
						            	<option value="F" >F </option>
					    </select>
  						</div>
				        </div>
				        
				         <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='correo_garantes_1' class='control-label'>Correo Garante 1</label><br>
				        <input type='email' class='form-control' id='correo_garantes_1' name='correo_garantes_1' value="" >
				        </div>
				        </div>	
				        
				        <div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='direccion_garantes_1' class='control-label'>Dirección Garante 1</label><br>
				        <input type='text' class='form-control' id='direccion_garantes_1' name='direccion_garantes_1' value=""  >
				        </div>
				        </div>
				        </div>	
				        
				        <div class = 'row'>
				        <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes_1' class='control-label'>Cedula Garante 2</label><br>
				        <input type='text' maxlength='13' class='form-control' id='identificacion_garantes_1' name='identificacion_garantes_1' value=""  >
				        </div>
				        </div>	
				        <div class = 'col-xs-12 col-md-4 col-lg-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes_1' class='control-label'>Nombres Garante 2</label><br>
				        <input type='text' class='form-control' id='nombre_garantes_1' name='nombre_garantes_1' value=""  >
				        </div>
				        </div>	

						<div class = 'col-xs-12 col-md-1 col-lg-1'>
				        <div class='form-group'>
				        <label for='sexo_garantes_1' class='control-label'>Sexo</label><br>
						<select name="sexo_garantes_1" id="sexo_garantes_1"  class="form-control">
							<option value="_" selected="selected">---</option>
										<option value="M" >M </option>
						            	<option value="F" >F </option>
					    </select>
  						</div>
				        </div>
				        
				        <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='correo_garantes_2' class='control-label'>Correo Garante 2</label><br>
				        <input type='email' class='form-control' id='correo_garantes_2' name='correo_garantes_2' value="" >
				        </div>
				        </div>	
				        
				        <div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='direccion_garantes_2' class='control-label'>Dirección Garante 2</label><br>
				        <input type='text' class='form-control' id='direccion_garantes_2' name='direccion_garantes_2' value=""  >
				        </div>
				        </div>
				        </div>
				         
				        <div class = 'row'>
				        <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes_2' class='control-label'>Cedula Garante 3</label><br>
				        <input type='text' maxlength="13" class='form-control' id='identificacion_garantes_2' name='identificacion_garantes_2' value=""  >
				        </div>
				        </div>	
				        <div class = 'col-xs-12 col-md-4 col-lg-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes_2' class='control-label'>Nombres Garante 3</label><br>
				        <input type='text' class='form-control' id='nombre_garantes_2' name='nombre_garantes_2' value=""  >
				        </div>
				        </div>	

						<div class = 'col-xs-12 col-md-1 col-lg-1'>
				        <div class='form-group'>
				        <label for='sexo_garantes_2' class='control-label'>Sexo</label><br>
						<select name="sexo_garantes_2" id="sexo_garantes_2"  class="form-control">
							<option value="_" selected="selected">---</option>
										<option value="M" >M </option>
						            	<option value="F" >F </option>
					    </select>
  						</div>
				        </div>
				        
				          <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='correo_garantes_3' class='control-label'>Correo Garante 3</label><br>
				        <input type='email' class='form-control' id='correo_garantes_3' name='correo_garantes_3' value="" >
				        </div>
				        </div>	
				        
				        <div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='direccion_garantes_3' class='control-label'>Dirección Garante 3</label><br>
				        <input type='text' class='form-control' id='direccion_garantes_3' name='direccion_garantes_3' value=""  >
				        </div>
				        </div>
				        </div>
				        
				        <div class = 'row'>
				        <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='identificacion_garantes_3' class='control-label'>Cedula Garante 4</label><br>
				        <input type='text' maxlength="13" class='form-control' id='identificacion_garantes_3' name='identificacion_garantes_3' value=""  >
				        </div>
				        </div>	
				        <div class = 'col-xs-12 col-md-4 col-lg-4'>
				        <div class='form-group'>
				        <label for='nombre_garantes_3' class='control-label'>Nombres Garante 4</label><br>
				        <input type='text' class='form-control' id='nombre_garantes_3' name='nombre_garantes_3' value=""  >
				        </div>
				        </div>	
				        
				        <div class = 'col-xs-12 col-md-1 col-lg-1'>
				        <div class='form-group'>
				        <label for='sexo_garantes_3' class='control-label'>Sexo</label><br>
						<select name="sexo_garantes_3" id="sexo_garantes_3"  class="form-control">
						<option value="_" selected="selected">---</option>
										<option value="M" >M </option>
						            	<option value="F" >F </option>
					    </select>
  						</div>
				        </div>
				        
				          <div class = 'col-xs-12 col-md-2 col-lg-2'>
				        <div class='form-group'>
				        <label for='correo_garantes_4' class='control-label'>Correo Garante 4</label><br>
				        <input type='email' class='form-control' id='correo_garantes_4' name='correo_garantes_4' value="" >
				        </div>
				        </div>	
				        
				        <div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='direccion_garantes_4' class='control-label'>Dirección Garante 4</label><br>
				        <input type='text' class='form-control' id='direccion_garantes_4' name='direccion_garantes_4' value=""  >
				        </div>
				        </div>
				        </div>
				        
		    </div>
		</div>
		
		
		<div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos de la Operación</h4>
	         </div>
	         <div class="panel-body">
						<div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='numero_titulo_credito' class='control-label'># Operación</label>
				        <input type='text' class='form-control' id='numero_titulo_credito' name='numero_titulo_credito' value=""  >
				         <div id="mensaje_numero_titulo_credito" class="errores"></div>
				        </div>
				        </div>	
				   

 						<div class="col-xs-12 col-md-3 col-lg-3">
 						 <div class='form-group'>
			  			 <label for='id_provincias' class='control-label'>Provincia</label>
			  			<select name="id_provincias" id="id_provincias"  class="form-control" >
			  			 <option value="" selected="selected">--Seleccione--</option>
						<?php foreach($resultProv as $res) {?>
						<option value="<?php echo $res->id_provincias; ?>" ><?php echo $res->nombre_provincias; ?></option>
						            
						<?php } ?>
						</select> 
						  <div id="mensaje_id_provincias" class="errores"></div>
			  			</div>
						</div>
						
						<div class="col-xs-12 col-md-3 col-lg-3">
 						 <div class='form-group'>
			  			 <label for='id_estados_procesales_juicios' class='control-label'>Etapa Procesal</label>
			  			<select name="id_estados_procesales_juicios" id="id_estados_procesales_juicios"  class="form-control" >
						 <option value="" selected="selected">--Seleccione--</option>
						<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>" ><?php echo $res->nombre_estados_procesales_juicios; ?> </option>
						            
						<?php } ?>
						</select> 
						  <div id="mensaje_id_estados_procesales_juicios" class="errores"></div>
			  			</div>
						</div>
						
					    <div class = 'col-xs-12 col-md-3 col-lg-3'>
				        <div class='form-group'>
				        <label for='fecha_ultima_providencia' class='control-label'>Fecha Ult Providencia</label>
				        <input type='date' class='form-control' id='fecha_ultima_providencia' name='fecha_ultima_providencia' min="1800-01-01" max="<?php echo date('Y-m-d');?>" value=""  >
				         <div id="mensaje_fecha_ultima_providencia" class="errores"></div>
				        </div>
				        </div>
				        
				             <div class = 'col-xs-12 col-md-2 col-lg-2' style="display: none">
				        <div class='form-group'>
				        <label for='cuantia_inicial' class='control-label'>Cuantia Inicial</label>
				        <input type='text' class='form-control cantidades' id='cuantia_inicial' name='cuantia_inicial' value="0"  
				        data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false">
				        <div id="mensaje_cuantia_inicial" class="errores"></div>
				        </div>
				        </div>	
				        
				        <div class = 'col-xs-12 col-md-4 col-lg-4' style="display: none">
				        <div class='form-group'>
				        <label for='riesgo_actual' class='control-label'>Riesgo Actual</label>
				        <input type='text' class='form-control' id='riesgo_actual' name='riesgo_actual' value="">
				        </div>
				        </div>	
				        
				        <div class="col-lg-3 col-md-3 col-xs-12" style="display: none">
				        <div class='form-group'>
			  			<label for='id_abogado'  class='control-label' >Impulsor:</label>
			  			<select name="id_abogado" id="id_abogado"  class="form-control" readonly>
			   			<option value="<?php echo $_SESSION['id_usuarios'];  ?>" <?php if($sel_id_abogado==$_SESSION['id_usuarios']){echo "selected";}?>  ><?php echo $_SESSION['nombre_usuarios'];  ?></option>  
			    		</select>
		 				</div>
		 				</div>
		 				
				         <div class="col-lg-3 col-md-3 col-xs-12" style="display: none">
				         <div class='form-group'>
			  			<label  for='id_secretario'   class='control-label'>Secretario:</label>
			  				<select name="id_secretario" id="id_secretario"  class="form-control" readonly>
						<?php foreach($resultSecre as $res) {?>
						<option value="<?php echo $res->id_secretario; ?>" ><?php echo $res->secretarios; ?></option>
						            
						<?php } ?>
						</select> 
		 				</div>
 						</div>
 						<br>
					    <div class = 'col-xs-12 col-md-6 col-lg-6' style="display: none">
				        <div class='form-group'>
				        <label for='descripcion_estado_procesal' class='control-label'>Descripción Etapa Procesal</label><br>
				        <textarea type='text' class='form-control' id='descripcion_estado_procesal' name='descripcion_estado_procesal'  placeholder='Descripción'></textarea>
                        </div>
				        </div>	
				        <div class = 'col-xs-12 col-md-6 col-lg-6'>
				        <div class='form-group'>
				        <label for='estrategia_seguir' class='control-label'>Estrategia Seguir</label><br>
				        <textarea type='text' class='form-control' id='estrategia_seguir' name='estrategia_seguir'  placeholder='Estrategia a Seguir'></textarea>
	                    </div>
				        </div>
				        <!--<div class = 'col-xs-12 col-md-12 col-lg-12'>
				        <div class='form-group'>
				        <label for='observaciones' class='control-label'>Observaciones</label><br>
				        <textarea type='text' class='form-control' id='observaciones' name='observaciones'  placeholder='Observaciones'></textarea>
		                </div>
				        </div>
				        -->
				        
				        <div class="col-lg-6 col-md-6 col-xs-12"  style="display: none">
				        <div class='form-group'>
					  	<label for='observaciones' class='control-label'>Estado Procesal</label><br>
			  			<select name="observaciones" id="observaciones"  class="form-control" >
			  			<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  			<option value="REPOSICIÓN DE PROCESOS" >REPOSICIÓN DE PROCESOS</option> 
			  			<option value="CONVENIO DE PAGO" >CONVENIO DE PAGO</option> 
			  	 		<option value="RESTRUCTURACIÓN" >RESTRUCTURACIÓN</option> 
						<option value="AVOCO" >AVOCO</option> 
						<option value="PAGO TOTAL" >PAGO TOTAL</option> 
						<option value="LEVANTAMIENTO DE SUSPENSIÓN O SUSPENSO" >LEVANTAMIENTO DE SUSPENSIÓN O SUSPENSO</option> 
						<option value="NINGUNO" >NINGUNO</option> 
						</select>
						<div id="mensaje_observaciones" class="errores"></div>
			            </div>
			            </div>	
			            
			               <div class="col-lg-6 col-md-6 col-xs-12" style="display: none" >
				        <div class='form-group'>
					  	<label for='tipo_leyes' class='control-label'>Tipo de ley</label><br>
			  			<select name="tipo_leyes" id="tipo_leyes"  class="form-control" >
			  			<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  			<option value="REACTIVACIÓN DE LA ECONOMÍA" >REACTIVACIÓN DE LA ECONOMÍA</option> 
			  			<option value="RESTRUCTURACIÓN DE LAS DEUDAS" >RESTRUCTURACIÓN DE LAS DEUDAS</option> 
			  	 		<option value="NINGUNO" >NINGUNO</option> 
			  	 		</select>
						<div id="mensaje_tipo_leyes" class="errores"></div>
			            </div>
			            </div>
			             <div class="col-lg-6 col-md-6 col-xs-12" style="display: none">
				        <div class='form-group'>
					  	<label for='medida_cautelar' class='control-label'>Medida Cautelar</label><br>
			  			<select name="medida_cautelar" id="medida_cautelar"  class="form-control" >
			  			<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  			<option value="SI" >SI</option> 
			  			<option value="NO" >NO</option> 
			  	 		</select>
						<div id="mensaje_medida_cautelar" class="errores"></div>
			            </div>
			            </div>
			               <div class="col-lg-6 col-md-6 col-xs-12" style="display: none">
				        <div class='form-group'>
					  	<label for='embargo_bienes' class='control-label'>Embargo de Bienes</label><br>
			  			<select name="embargo_bienes" id="embargo_bienes"  class="form-control" >
			  			<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  			<option value="MUEBLES" >MUEBLES</option> 
			  			<option value="INMUEBLES" >INMUEBLES</option> 
			  	 		<option value="DINERO" >DINERO</option> 
			  	 		<option value="MUEBLES, INMUEBLES" >MUEBLES, INMUEBLES</option> 
			  	 		<option value="MUEBLES, DINERO" >MUEBLES, DINERO</option> 
			  	 		<option value="INMUEBLES, DINERO" >INMUEBLES, DINERO</option> 
			  	 		<option value="MUEBLES, INMUEBLES, DINERO" >MUEBLES, INMUEBLES, DINERO</option> 
			  	 		<option value="NINGUNO" >NINGUNO</option> 
			  	 		</select>
						<div id="mensaje_embargo_bienes" class="errores"></div>
			            </div>
			            </div>
			             <div class="col-lg-6 col-md-6 col-xs-12" style="display: none">
				        <div class='form-group'>
					  	<label for='forma_pago' class='control-label'>Forma de Pago</label><br>
			  			<select name="forma_pago" id="forma_pago"  class="form-control" >
			  			<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  			<option value="PAGO TOTAL" >PAGO TOTAL</option> 
			  			<option value="REESTRUCTURA" >REESTRUCTURA</option> 
			  	 		<option value="EXTINCIÓN DE DEUDA" >EXTINCIÓN DE DEUDA</option> 
			  	 		<option value="REESTRUCTURA Y CONDONACIÓN POR DISCAPACIDAD" >REESTRUCTURA Y CONDONACIÓN POR DISCAPACIDAD</option> 
			  	 		<option value="NINGUNO" >NINGUNO</option> 
			  	 		</select>
						<div id="mensaje_forma_pago" class="errores"></div>
			            </div>
			            </div>
			            <div class = 'col-xs-12 col-md-6 col-lg-6' style="display: none">
				        <div class='form-group'>
				        <label for='detalle_embargo_bienes' class='control-label'>Detalle de Bien Embargado</label><br>
				        <textarea type='text' class='form-control' id='detalle_embargo_bienes' name='detalle_embargo_bienes'  placeholder='Detalle de Bien Embargado'></textarea>
	                    </div>
				        </div>
				        <div class = 'col-xs-12 col-md-6 col-lg-6'>
				        <div class='form-group'>
				        <label for='observacion' class='control-label'>Observaciones</label><br>
				        <textarea type='text' class='form-control' id='observacion' name='observacion'  placeholder='Observaciones'></textarea>
	                    </div>
				        </div>
			            
			         
			
		    
		</div>
			
			  <div class="row">
			  <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center;" >
			   <button type="submit" id="agregar" name="agregar" value="Agregar"   class="btn btn-success" style="margin-top: 10px;" > Agregar</button>         
	 	
			  </div>
			</div> 
			<br>
			<br>
			<br>
			<br>
			
			</div>
            </form>
            
	
     <br>
			<br>
			
      </div>
     
  </div>
      <!-- termina
       busqueda  -->
       
 
   </body>  

    </html>   
    
  

    
