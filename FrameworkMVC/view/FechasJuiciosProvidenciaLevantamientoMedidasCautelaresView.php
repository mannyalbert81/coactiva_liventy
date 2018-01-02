  	 

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
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
		
      
      <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 10 )
          {
       	   $("#div_datos_medida_cautelar_discapacidad").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_medida_cautelar_discapacidad").fadeOut("slow");
          }


          if(tipo_avoco == 11 )
          {
       	   $("#div_datos_medida_cautelar_fallecimiento").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_medida_cautelar_fallecimiento").fadeOut("slow");
          }
          
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 10)
              {
           	   $("#div_datos_medida_cautelar_discapacidad").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_medida_cautelar_discapacidad").fadeOut("slow");
              }

              if(tipo_avoco == 11 )
              {
           	   $("#div_datos_medida_cautelar_fallecimiento").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_medida_cautelar_fallecimiento").fadeOut("slow");
              }
              
		    });
	}); 	
	   
      </script>
      
      
      
      
         <script type="text/javascript">
      $(document).ready(function(){
          
      $("#generar_oficio_discapacidad").click(function() {
			
          var generar_oficio_discapacidad = $(this).val();
			
          if(generar_oficio_discapacidad == "Si")
          {
       	   $("#div_datos_generar_oficio_discapacidad").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_datos_generar_oficio_discapacidad").fadeOut("slow");
         
    	
          }
         
	    });
	    
	    $("#generar_oficio_discapacidad").change(function() {
			
              
              var generar_oficio_discapacidad = $(this).val();
				
              
              if(generar_oficio_discapacidad == "Si")
              {
           	   $("#div_datos_generar_oficio_discapacidad").fadeIn("slow");
              }
           	
              else
              {
              $("#div_datos_generar_oficio_discapacidad").fadeOut("slow");
            
     
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
         <script type="text/javascript">
      $(document).ready(function(){
          
      $("#generar_oficio_fallecimiento").click(function() {
			
          var generar_oficio_fallecimiento = $(this).val();
			
          if(generar_oficio_fallecimiento == "Si")
          {
       	   $("#div_datos_generar_oficio_fallecimiento").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_datos_generar_oficio_fallecimiento").fadeOut("slow");
         
    	
          }
         
	    });
	    
	    $("#generar_oficio_fallecimiento").change(function() {
			
              
              var generar_oficio_fallecimiento = $(this).val();
				
              
              if(generar_oficio_fallecimiento == "Si")
              {
           	   $("#div_datos_generar_oficio_fallecimiento").fadeIn("slow");
              }
           	
              else
              {
              $("#div_datos_generar_oficio_fallecimiento").fadeOut("slow");
            
     
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
      
      
      
      
           <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#generar").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	
		    	var fecha_avoco = $("#fecha_avoco").val();
		     	var hora_avoco = $("#hora_avoco").val();
		        var tipo_avoco = $("#tipo_avoco").val();
			   
			    var numero_oficio_embargo_cuenta = $("#numero_oficio_embargo_cuenta").val();
			    var fecha_oficio_embargo_cuenta = $("#fecha_oficio_embargo_cuenta").val();
			    var tipo_cuenta = $("#tipo_cuenta").val();



			    var numero_oficio_medida_cuatelar_discapacidad = $("#numero_oficio_medida_cuatelar_discapacidad").val();
			    var fecha_oficio_medida_cuatelar_discapacidad = $("#fecha_oficio_medida_cuatelar_discapacidad").val();
			    var numero_liquidacion_medida_cuatelar_discapacidad = $("#numero_liquidacion_medida_cuatelar_discapacidad").val();
			    var fecha_liquidacion_medida_cuatelar_discapacidad = $("#fecha_liquidacion_medida_cuatelar_discapacidad").val();
			    var numero_solicitud_discapacidad = $("#numero_solicitud_discapacidad").val();
			    var fecha_solicitud_discapacidad = $("#fecha_solicitud_discapacidad").val();
			    var nombre_discapacitado = $("#nombre_discapacitado").val();




			    var numero_oficio_medida_cuatelar_fallecimiento = $("#numero_oficio_medida_cuatelar_fallecimiento").val();
			    var fecha_oficio_medida_cuatelar_fallecimiento = $("#fecha_oficio_medida_cuatelar_fallecimiento").val();
			    var numero_liquidacion_medida_cuatelar_fallecimiento = $("#numero_liquidacion_medida_cuatelar_fallecimiento").val();
			    var fecha_liquidacion_medida_cuatelar_fallecimiento = $("#fecha_liquidacion_medida_cuatelar_fallecimiento").val();
			    var numero_solicitud_fallecimiento = $("#numero_solicitud_fallecimiento").val();
			    var fecha_solicitud_fallecimiento = $("#fecha_solicitud_fallecimiento").val();
			    var nombre_conyuge_sobreviviente = $("#nombre_conyuge_sobreviviente").val();
			    var correo_conyuge_sobreviviente = $("#correo_conyuge_sobreviviente").val();




			    var generar_oficio_discapacidad= $("#generar_oficio_discapacidad").val();
                var entidad_va_oficio_discapacidad= $("#entidad_va_oficio_discapacidad").val();
                var asunto_discapacidad= $("#asunto_discapacidad").val();

			   

			    var generar_oficio_fallecimiento= $("#generar_oficio_fallecimiento").val();
                var entidad_va_oficio_fallecimiento= $("#entidad_va_oficio_fallecimiento").val();
                var asunto_fallecimiento= $("#asunto_fallecimiento").val();


                
			    			    	   				
		    	if (fecha_avoco == "")
		    	{
			    	
		    		$("#mensaje_fecha").text("Introduzca una Fecha");
		    		$("#mensaje_fecha").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_fecha").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if (hora_avoco == "")
		    	{
			    	
		    		$("#mensaje_hora").text("Introduzca una Hora");
		    		$("#mensaje_hora").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_hora").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	


		    	if (tipo_avoco == 0)
		    	{
			    	
		    		$("#mensaje_tipo_avoco").text("Seleccione Tipo Embargo");
		    		$("#mensaje_tipo_avoco").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_tipo_avoco").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	



		    	if(tipo_avoco == 10  && numero_oficio_medida_cuatelar_discapacidad == ""){
					$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 10  && fecha_oficio_medida_cuatelar_discapacidad == ""){
					$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").text("Seleccione Fecha");
		    		$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && numero_liquidacion_medida_cuatelar_discapacidad == ""){
					$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").text("Ingrese # Liquidación");
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && fecha_liquidacion_medida_cuatelar_discapacidad == ""){
					$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").text("Seleccione Fecha");
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 10  && numero_solicitud_discapacidad == ""){
					$("#mensaje_numero_solicitud_discapacidad").text("Ingrese # Solicitud");
		    		$("#mensaje_numero_solicitud_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_solicitud_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && fecha_solicitud_discapacidad == ""){
					$("#mensaje_fecha_solicitud_discapacidad").text("Seleccione Fecha");
		    		$("#mensaje_fecha_solicitud_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_solicitud_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 10  && nombre_discapacitado == ""){
					$("#mensaje_nombre_discapacitado").text("Ingrese Nombre");
		    		$("#mensaje_nombre_discapacitado").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_nombre_discapacitado").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && generar_oficio_discapacidad == 0){
					$("#mensaje_generar_oficio_discapacidad").text("Seleccione");
		    		$("#mensaje_generar_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 10  && generar_oficio_discapacidad == "Si" && entidad_va_oficio_discapacidad == "" ){
					$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 10  && generar_oficio_discapacidad == "Si" && asunto_discapacidad == "" ){
					$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				




		    	






		    	

		    	if(tipo_avoco == 11  && numero_oficio_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 11  && fecha_oficio_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").text("Seleccione Fecha");
		    		$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 11  && numero_liquidacion_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").text("Ingrese # Liquidación");
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if(tipo_avoco == 11  && fecha_liquidacion_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").text("Seleccione Fecha");
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 11  && numero_solicitud_fallecimiento == ""){
					$("#mensaje_numero_solicitud_fallecimiento").text("Ingrese # Solicitud");
		    		$("#mensaje_numero_solicitud_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_solicitud_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 11  && fecha_solicitud_fallecimiento == ""){
					$("#mensaje_fecha_solicitud_fallecimiento").text("Seleccione Fecha");
		    		$("#mensaje_fecha_solicitud_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_solicitud_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if(tipo_avoco == 11  && nombre_conyuge_sobreviviente == ""){
					$("#mensaje_nombre_conyuge_sobreviviente").text("Ingrese Nombre Cónyuge");
		    		$("#mensaje_nombre_conyuge_sobreviviente").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_nombre_conyuge_sobreviviente").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if (tipo_avoco == 11  && correo_conyuge_sobreviviente == "")
		    	{
			    	
		    		$("#mensaje_correo_conyuge_sobreviviente").text("Introduzca un correo");
		    		$("#mensaje_correo_conyuge_sobreviviente").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else if (tipo_avoco == 11  && regex.test($('#correo_conyuge_sobreviviente').val().trim()))
		    	{
		    		$("#mensaje_correo_conyuge_sobreviviente").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else if (tipo_avoco == 11)
		    	{
		    		$("#mensaje_correo_conyuge_sobreviviente").text("Introduzca un correo Valido");
		    		$("#mensaje_correo_conyuge_sobreviviente").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }
		    	if(tipo_avoco == 11  && generar_oficio_fallecimiento == 0){
					$("#mensaje_generar_oficio_fallecimiento").text("Seleccione");
		    		$("#mensaje_generar_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 11  && generar_oficio_fallecimiento == "Si" && entidad_va_oficio_fallecimiento == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 11  && generar_oficio_fallecimiento == "Si" && asunto_fallecimiento == "" ){
					$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}		    	
		    	
			}); 

	
				$( "#fecha_avoco" ).focus(function() {
					$("#mensaje_fecha").fadeOut("slow");
    			});

				$( "#hora_avoco" ).focus(function() {
					$("#mensaje_hora").fadeOut("slow");
    			});

				$( "#tipo_avoco" ).focus(function() {
					$("#mensaje_tipo_avoco").fadeOut("slow");
    			});

				$( "#generar_oficio_discapacidad" ).focus(function() {
					$("#mensaje_generar_oficio_discapacidad").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_discapacidad" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow");
    			});
				$( "#asunto_discapacidad" ).focus(function() {
					$("#mensaje_asunto_discapacidad").fadeOut("slow");
    			});





				$( "#generar_oficio_fallecimiento" ).focus(function() {
					$("#mensaje_generar_oficio_fallecimiento").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_fallecimiento" ).focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow");
    			});
				$( "#asunto_fallecimiento" ).focus(function() {
					$("#mensaje_asunto_fallecimiento").fadeOut("slow");
    			});

    			
				
				$( "#numero_oficio_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").fadeOut("slow");
    			});

				$( "#fecha_oficio_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").fadeOut("slow");
    			});


				$( "#numero_liquidacion_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow");
    			});

				$( "#fecha_liquidacion_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow");
    			});
				


				$( "#numero_solicitud_discapacidad" ).focus(function() {
					$("#mensaje_numero_solicitud_discapacidad").fadeOut("slow");
    			});

				$( "#fecha_solicitud_discapacidad" ).focus(function() {
					$("#mensaje_fecha_solicitud_discapacidad").fadeOut("slow");
    			});
				$( "#nombre_discapacitado" ).focus(function() {
					$("#mensaje_nombre_discapacitado").fadeOut("slow");
    			});




				$( "#numero_oficio_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#fecha_oficio_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#numero_liquidacion_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#fecha_liquidacion_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#numero_solicitud_fallecimiento" ).focus(function() {
					$("#mensaje_numero_solicitud_fallecimiento").fadeOut("slow");
    			});
				$( "#fecha_solicitud_fallecimiento" ).focus(function() {
					$("#mensaje_fecha_solicitud_fallecimiento").fadeOut("slow");
    			});
				$( "#nombre_conyuge_sobreviviente" ).focus(function() {
					$("#mensaje_nombre_conyuge_sobreviviente").fadeOut("slow");
    			});
				$( "#correo_conyuge_sobreviviente" ).focus(function() {
					$("#mensaje_correo_conyuge_sobreviviente").fadeOut("slow");
    			});

				
			   	
						
		}); 

	</script>
	

		

    </head>
    <body style="background-color: #d9e3e4;">
    
        <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
     
       
       <?php
       
  
       $sel_juicio_referido_titulo_credito="";
       $sel_numero_titulo_credito="";
       $sel_identificacion_clientes="";
       $sel_id_provincias="";
       $sel_id_estados_procesales_juicios="";
       $sel_id_abogado="";
        
       $sel_nombre_impulsor_anterior="";
       $sel_nombre_secretario_anterior="";
       $sel_tipo_avoco="";
       $sel_id_estados_procesales_juicios_actualizar="";
  
       
       
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
       	
       	$sel_juicio_referido_titulo_credito = $_POST['juicio_referido_titulo_credito'];
       	$sel_numero_titulo_credito=$_POST['numero_titulo_credito'];
       	$sel_identificacion_clientes=$_POST['identificacion_clientes'];
       	$sel_id_provincias=$_POST['id_provincias'];
       	$sel_id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
       	$sel_id_abogado = $_POST['id_abogado'];
       
       	$sel_tipo_avoco= $_POST['tipo_avoco'];
       	$sel_id_estados_procesales_juicios_actualizar= $_POST['id_estados_procesales_juicios_actualizar'];
       	
       }
       
    
       
       
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("MatrizJuicios","Imprimir_Providencia_Levantamiento_Medidas_Cautelares"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12 col-md-12 col-xs-12" target="_blank">
         
                 <br> 
                 <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <p align="justify"><b><font face="univers" size=3>***Estimados usuarios al generar un documento en el sistema se actualizara la fecha de última providencia y el estado procesal del juicio cuando su abogado SECRETARIO lo apruebe.***</font></b></p>
				
            	 </div>
                 <br> 
                        
         <div class="col-lg-12 col-md-12 col-xs-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos Levantamiento Medidas Cautelares</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  							
  		<div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha:</p>
			  	<input type="date"  name="fecha_avoco" id="fecha_avoco" value="" class="form-control "/> 
			  	<div id="mensaje_fecha" class="errores"></div>
			    <input type="hidden"  name="id_juicios" id="id_juicios" value="<?php echo $datos['id_juicios']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_clientes" id="id_clientes" value="<?php echo $datos['id_clientes']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_titulo_credito" id="id_titulo_credito" value="<?php echo $datos['id_titulo_credito']; ?>" class="form-control"/ readonly>
			  
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Hora:</p>
			  	<input type="time"  name="hora_avoco" id="hora_avoco" value="" class="form-control "/> 
			  	<div id="mensaje_hora" class="errores"></div>
			    
		 </div>
		 
		  <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Cliente:</p>
			  	<input type="text"  name="nombres_clientes" id="nombres_clientes" value="<?php echo $datos['nombres_clientes']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" ># Juicio:</p>
			  	<input type="text"  name="juicio_referido_titulo_credito" id="juicio_referido_titulo_credito" value="<?php echo $datos['juicio_referido_titulo_credito']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" ># Operación:</p>
			  	<input type="text"  name="numero_titulo_credito" id="numero_titulo_credito" value="<?php echo $datos['numero_titulo_credito']; ?>" class="form-control" readonly/> 
			    
		 </div>
    </div>
  		
  		
  		
  		
  		
  		       <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Tipo de Levantamiento Medida Cautelar<br><FONT FACE="arial" SIZE=2 COLOR=red>(Seleccionar el tipo de embargo obligatoriamente.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		         <div class="col-lg-6 col-md-6 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Levantamiento:</p>
			  	<select name="tipo_avoco" id="tipo_avoco"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="10">PROVIDENCIA LEVANTAMIENTO MEDIDA CAUTELAR (DISCAPACIDAD)</option>
					<option value="11">PROVIDENCIA LEVANTAMIENTO MEDIDA CAUTELAR (FALLECIMIENTO)</option>
					
				</select>
				<div id="mensaje_tipo_avoco" class="errores"></div>
	            </div>
	            
	            
	              <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p  class="formulario-subtitulo">Actualizar Estado Procesal:</p>
			  	<select name="id_estados_procesales_juicios_actualizar" id="id_estados_procesales_juicios_actualizar"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>" ><?php echo $res->nombre_estados_procesales_juicios;  ?> </option>
			            <?php } ?>
				</select>
                 <FONT FACE="arial" SIZE=1.9 COLOR=red>(Seleccionar solo si desea actualizar el estado procesal del jucio.)</FONT>
                 </div>
	            
	            
	            </div>
	            </div>
	            </div>
  		
  		
  		
  			
  		        <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Datos Para la Providencia de Levantamiento de Medidas Cautelares<br><FONT FACE="arial" SIZE=2 COLOR=red>(Ingresar los datos requeridos.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		       
	            <div id="div_datos_medida_cautelar_discapacidad" style="display: none;">
                <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio:</p>
			  	<input type="text"  name="numero_oficio_medida_cuatelar_discapacidad" id="numero_oficio_medida_cuatelar_discapacidad" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_medida_cuatelar_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio_medida_cuatelar_discapacidad" id="fecha_oficio_medida_cuatelar_discapacidad" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_medida_cuatelar_discapacidad" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Liquidación:</p>
			  	<input type="text"  name="numero_liquidacion_medida_cuatelar_discapacidad" id="numero_liquidacion_medida_cuatelar_discapacidad" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_liquidacion_medida_cuatelar_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Liquidación:</p>
			  	<input type="date"  name="fecha_liquidacion_medida_cuatelar_discapacidad" id="fecha_liquidacion_medida_cuatelar_discapacidad" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_liquidacion_medida_cuatelar_discapacidad" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número Solicitud de Discapacidad:</p>
			  	<input type="text"  name="numero_solicitud_discapacidad" id="numero_solicitud_discapacidad" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_solicitud_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha Solicitud de Discapacidad:</p>
			  	<input type="date"  name="fecha_solicitud_discapacidad" id="fecha_solicitud_discapacidad" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_solicitud_discapacidad" class="errores"></div>
			    </div>
			    
			  
	          
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombre del Discapacitado:</p>
			  	<input type="text"  name="nombre_discapacitado" id="nombre_discapacitado" value="" class="form-control" placeholder="Name"/> 
	            <div id="mensaje_nombre_discapacitado" class="errores"></div>
	            </div>
	            
	            
	             <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio_discapacidad" id="generar_oficio_discapacidad"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si">Si</option>
						<option value="No">No</option>
						
			    </select>
				<div id="mensaje_generar_oficio_discapacidad" class="errores"></div>
			    </div>
	            
	            <br>
	           
	            <div id="div_datos_generar_oficio_discapacidad" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad" id="entidad_va_oficio_discapacidad" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Asunto:</p>
			  		 <textarea type="text"  class="form-control" id="asunto_discapacidad" name="asunto_discapacidad" value=""  placeholder="Asunto"></textarea>
               <div id="mensaje_asunto_discapacidad" class="errores"></div>
	            </div>
	            
	            </div>
	            
	            
	          </div> 
	          
	          
	          
	          
	          
	            <div id="div_datos_medida_cautelar_fallecimiento" style="display: none;">
                <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio:</p>
			  	<input type="text"  name="numero_oficio_medida_cuatelar_fallecimiento" id="numero_oficio_medida_cuatelar_fallecimiento" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_medida_cuatelar_fallecimiento" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio_medida_cuatelar_fallecimiento" id="fecha_oficio_medida_cuatelar_fallecimiento" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_medida_cuatelar_fallecimiento" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Liquidación:</p>
			  	<input type="text"  name="numero_liquidacion_medida_cuatelar_fallecimiento" id="numero_liquidacion_medida_cuatelar_fallecimiento" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_liquidacion_medida_cuatelar_fallecimiento" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Liquidación:</p>
			  	<input type="date"  name="fecha_liquidacion_medida_cuatelar_fallecimiento" id="fecha_liquidacion_medida_cuatelar_fallecimiento" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número Solicitud de Fallecimiento:</p>
			  	<input type="text"  name="numero_solicitud_fallecimiento" id="numero_solicitud_fallecimiento" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_solicitud_fallecimiento" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha Solicitud de Fallecimiento:</p>
			  	<input type="date"  name="fecha_solicitud_fallecimiento" id="fecha_solicitud_fallecimiento" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_solicitud_fallecimiento" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombre Cónyuge Sobreviviente:</p>
			  	<input type="text"  name="nombre_conyuge_sobreviviente" id="nombre_conyuge_sobreviviente" value="" class="form-control" placeholder="Name"/> 
	            <div id="mensaje_nombre_conyuge_sobreviviente" class="errores"></div>
	            </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Correo Electrónico Cónyuge:</p>
			  	<input type="mail"  name="correo_conyuge_sobreviviente" id="correo_conyuge_sobreviviente" value="" class="form-control" placeholder="example@gmail.com"/> 
	            <div id="mensaje_correo_conyuge_sobreviviente" class="errores"></div>
	            </div>
			  
	            
	            
	             <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio_fallecimiento" id="generar_oficio_fallecimiento"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si">Si</option>
						<option value="No">No</option>
						
			    </select>
				<div id="mensaje_generar_oficio_fallecimiento" class="errores"></div>
			    </div>
	            
	            <br>
	           
	            <div id="div_datos_generar_oficio_fallecimiento" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A:</p>
			  	<input type="text"  name="entidad_va_oficio_fallecimiento" id="entidad_va_oficio_fallecimiento" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Asunto:</p>
			  	  		 <textarea type="text"  class="form-control" id="asunto_fallecimiento" name="asunto_fallecimiento" value=""  placeholder="Asunto"></textarea>
                <div id="mensaje_asunto_fallecimiento" class="errores"></div>
	            </div>
	            
	            </div>
	            
	            
	          </div> 
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <br><p align="justify"><font face="arial" size=2><b>NOTA:</b> Estimados usuarios el sistema automáticamente llena en la razón el siguiente texto.<br><b>RAZÓN.- </b> Siento por tal, que no se notifica con esta providencia a los coactivados, por no haber señalado domicilio judicial o correo electrónico para el efecto, en la ciudad de xxxx, "Fecha" xx xx xxxx xx xxx.- <b>LO CERTIFICO.-</b></font></p>
				 <FONT FACE="arial" SIZE=2 COLOR=red>(Si necesita cambiar el texto de la razón ingreselo en el siguiente campo, sin incluir las palabras <b>RAZÓN.- </b> y <b> LO CERTIFICO.-</b>)</FONT>
			  </div>
				   
             <div class="col-xs-12 col-md-12 col-lg-12" >
		                          <p class="formulario-subtitulo" >Razón:</p>
                                  <textarea type="text"  class="form-control" id="razon_avoco" name="razon_avoco" value=""  placeholder="Ingrese Razón"></textarea>
             </div>
  		
  		
	  		<div class="col-lg-12 col-md-12 col-xs-12 " style="text-align: center; margin-top: 10px">
	  		 <button type="submit" id="generar" name="generar" value=""   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Generar Providencia</button>         
		    </div>
  		
  		        </div>
	        	</div>
	            </div>
  		
  		
  		
  		
		</div>
		    
		    </div>
	        </div>
	        </div>
          
       </form>
     
      </div>
     
  </div>
      
   </body>  

    </html>   
    
  

    
