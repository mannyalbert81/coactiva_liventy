	   <?php include("view/modulos/head.php"); ?>		
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>

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
         
 		
 		
 		
    
    
       <script type="text/javascript">
	   $(document).ready(function(){
		$("#reporte_documentos").click(function(){


			var documento = $("#documento").val();
	     	
	    	if (documento == "ALL")
	    	{	
	    		$("#mensaje_documento").text("Seleccione");
	    		$("#mensaje_documento").fadeIn("slow"); //Muestra mensaje de error
	            return false;
		    }
	    	else 
	    	{
	    		$("#mensaje_documento").fadeOut("slow"); //Muestra mensaje de error
	    		
			}



		});




		$( "#documento" ).focus(function() {
			$("#mensaje_documento").fadeOut("slow");
		});
			
	});

	</script>
     
    <script type="text/javascript">
	$(document).ready(function(){
		//load_juicios(1);

		$("#buscar").click(function(){


			var documento = $("#documento").val();
	     	
	    	if (documento == "ALL")
	    	{
		    	
	    		$("#mensaje_documento").text("Seleccione");
	    		$("#mensaje_documento").fadeIn("slow"); //Muestra mensaje de error
	            return false;
		    }
	    	else 
	    	{
	    		$("#mensaje_documento").fadeOut("slow"); //Muestra mensaje de error
	    		load_Documentos(1);
			}

	
			var fechadesde=$("#fcha_desde").val();
			 var fechahasta=$("#fcha_hasta").val();
			 var validar = true;
			 var mensaje ="";
			 
		     if(fechadesde>fechahasta)
			 {validar = false;mensaje="Fecha desde no puede ser mayor"}
			
			if(validar){
			load_Documentos(1);
			}else{
				 alert(mensaje);
			}

			});




		$( "#documento" ).focus(function() {
			$("#mensaje_documento").fadeOut("slow");
		});

		

		$('#documento').change(function(){
			if (this.value == "AC")
			{
				$('#tipo_documento').empty();
				$('#div_tipo_documento').css({"display":"block"});
				var items = {"ALL":"Todos","7": "Nuevos Procesos","1": "Pago Total","3": "Avoco Conocimiento y Suspensión","6": "Avoco Conocimiento"};
				//var items = {"ALL":"Todos","1": "Pago Total", "2": "Proceso Coactivo","3": "Avoco Conocimiento y Suspensión","6": "Avoco Conocimiento","7": "Nuevos Procesos"};
				
				$.each(items, function(key, value) {   
				     $('#tipo_documento')
				          .append($('<option>', { value : key })
				          .text(value)); 
				});
			}
			if (this.value == "OF")
			{
				$('#tipo_documento').empty();
				$('#div_tipo_documento').css({"display":"block"});
				var items = {"ALL":"Todos","OF1": "Oficio"};
				
				$.each(items, function(key, value) {   
				     $('#tipo_documento')
				          .append($('<option>', { value : key })
				          .text(value)); 
				});
			}
			if (this.value == "PR")
			{
				$('#tipo_documento').empty();
				$('#div_tipo_documento').css({"display":"block"});
				var items = {"ALL":"Todos","PS": "Providencia Suspensión", "PL": "Providencia Levantamiento", "PCP": "Providencia Pago Total", "PRES": "Providencia Restructuración", "PEMCUBAN": "Providencia Embargo Cuenta Bancaria", "PLMCD": "Providencia Levantamiento Medida Cautelar Discapacidad", "PLMCF": "Providencia Levantamiento Medida Cautelar Fallecimiento"};
				
				$.each(items, function(key, value) {   
				     $('#tipo_documento')
				          .append($('<option>', { value : key })
				          .text(value)); 
				});
			}
			if (this.value == "ALL")
			{
				$('#tipo_documento').empty();
				$('#div_tipo_documento').css({"display":"none"});
			}
		});
	});

	
	function load_Documentos(pagina){
		
		//iniciar variables
		 var con_juicio_referido_titulo_credito=$("#juicio_referido_titulo_credito").val();
		 var con_numero_titulo_credito=$("#numero_titulo_credito").val();
		 var con_id_provincias=$("#id_provincias").val();
		 var con_id_estados_procesales_juicios=$("#id_estados_procesales_juicios").val();
		 var con_fechadesde=$("#fcha_desde").val();
		 var con_fechahasta=$("#fcha_hasta").val();
		 var con_identificacion_clientes=$("#identificacion_clientes").val();
		 var con_identificacion_clientes_1=$("#identificacion_clientes_1").val();
		 var con_identificacion_clientes_2=$("#identificacion_clientes_2").val();
		 var con_identificacion_clientes_3=$("#identificacion_clientes_3").val();
		 var con_id_abogado=$("#id_abogado").val();

		 var con_identificacion_garantes=$("#identificacion_garantes").val();
		 var con_identificacion_garantes_1=$("#identificacion_garantes_1").val();
		 var con_identificacion_garantes_2=$("#identificacion_garantes_2").val();
		 var con_identificacion_garantes_3=$("#identificacion_garantes_3").val();
		 
		var con_firma=$("#firma").val();

		 
		  var con_datos={
				  buscar : 'buscar',
				  documento: $('#documento').val(),
				  tipo_documento: $('#tipo_documento').val(),
				  juicio_referido_titulo_credito:con_juicio_referido_titulo_credito,
				  numero_titulo_credito:con_numero_titulo_credito,
				  id_provincias:con_id_provincias,
				  id_estados_procesales_juicios:con_id_estados_procesales_juicios,
				  fcha_desde:con_fechadesde,
				  fcha_hasta:con_fechahasta,
				  id_abogado:con_id_abogado,
				  identificacion_clientes:con_identificacion_clientes,
				  identificacion_clientes_1:con_identificacion_clientes_1,
				  identificacion_clientes_2:con_identificacion_clientes_2,
				  identificacion_clientes_3:con_identificacion_clientes_3,
				  
				  identificacion_garantes:con_identificacion_garantes,
				  identificacion_garantes_1:con_identificacion_garantes_1,
				  identificacion_garantes_2:con_identificacion_garantes_2,
				  identificacion_garantes_3:con_identificacion_garantes_3,
				  firma:con_firma,
				  action:'ajax',
				  page:pagina
				  };


		$("#matriz").fadeIn('slow');
		$.ajax({
			url:"<?php echo $helper->url("DocumentosGenerados","index2");?>",
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
	
	
	 <script>

		$(document).ready(function(){

			$fechad=$('#fcha_desde').val();
		    $fechah=$('#fcha_hasta').val();
		    
		    if (typeof $fechad != "undefined" || $fechad != null || typeof $fechah != "undefined" || $fechah != null)
		    {
			    $fechadesde=$('#fcha_desde');
			    $fechahasta=$('#fcha_hasta');
			    if ($fechadesde[0].type!="date"){
			    $fechadesde.attr('readonly','readonly');
			    $fechadesde.datepicker({
		    		changeMonth: true,
		    		changeYear: true,
		    		dateFormat: "yy-mm-dd",
		    		yearRange: "1900:2017"
		    		});
			    }
	
			    
			    if ($fechahasta[0].type!="date"){
			    $fechahasta.attr('readonly','readonly');
			    $fechahasta.datepicker({
		    		changeMonth: true,
		    		changeYear: true,
		    		dateFormat: "yy-mm-dd",
		    		yearRange: "1900:2017"
		    		});
			    }
		    }

		    $fechaEmision=$('#fecha_emision_juicios');
		    if ($fechaEmision[0].type!="date"){
		    $fechaEmision.attr('readonly','readonly');
		    $fechaEmision.datepicker({
	    		changeMonth: true,
	    		changeYear: true,
	    		dateFormat: "yy-mm-dd",
	    		yearRange: "1800:2017"
	    		});
		    }

		    $fechaUltProv=$('#fecha_ultima_providencia');
		    if ($fechaUltProv[0].type!="date"){
		    $fechaUltProv.attr('readonly','readonly');
		    $fechaUltProv.datepicker({
	    		changeMonth: true,
	    		changeYear: true,
	    		dateFormat: "yy-mm-dd",
	    		yearRange: "1800:2017"
	    		});
		    }


		    $fechaResProv=$('#fecha_providencia_restructuracion');
		    if ($fechaResProv[0].type!="date"){
		    $fechaResProv.attr('readonly','readonly');
		    $fechaResProv.datepicker({
	    		changeMonth: true,
	    		changeYear: true,
	    		dateFormat: "yy-mm-dd",
	    		yearRange: "1800:2017"
	    		});
		    }

		    

		}); 

	</script>
	
	

    </head>
    <body style="background-color: #d9e3e4;">
    
      
       
       <?php
       
       $sel_juicio_referido_titulo_credito="";
       $sel_numero_titulo_credito="";
       
       $sel_id_provincias="";
       $sel_id_estados_procesales_juicios="";
       $sel_id_abogado="";
       
       $sel_identificacion_clientes="";
       $sel_identificacion_clientes_1="";
       $sel_identificacion_clientes_2="";
       $sel_identificacion_clientes_3="";
        
       
       $sel_identificacion_garantes="";
       $sel_identificacion_garantes_1="";
       $sel_identificacion_garantes_2="";
       $sel_identificacion_garantes_3="";
       
       if($_SERVER['REQUEST_METHOD']=='POST' )
       {
       	
       	$sel_juicio_referido_titulo_credito = $_POST['juicio_referido_titulo_credito'];
       	$sel_numero_titulo_credito=$_POST['numero_titulo_credito'];
       
       	$sel_id_provincias=$_POST['id_provincias'];
       	$sel_id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
       	$sel_id_abogado = $_POST['id_abogado'];
       	
       	$sel_identificacion_clientes=$_POST['identificacion_clientes'];
       	$sel_identificacion_clientes_1=$_POST['identificacion_clientes_1'];
       	$sel_identificacion_clientes_2=$_POST['identificacion_clientes_2'];
       	$sel_identificacion_clientes_3=$_POST['identificacion_clientes_3'];
       	
       	$sel_identificacion_garantes=$_POST['identificacion_garantes'];
       	$sel_identificacion_garantes_1=$_POST['identificacion_garantes_1'];
       	$sel_identificacion_garantes_2=$_POST['identificacion_garantes_2'];
       	$sel_identificacion_garantes_3=$_POST['identificacion_garantes_3'];
       	
       
       }
       
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
<?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
          <form action="<?php echo $helper->url("",""); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" >
     
            </form>
            
 <?php } } else {?>
 
 <form action="<?php echo $helper->url("DocumentosGenerados","index2"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
         
                 <br>         
         <div class="col-lg-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Documentos Generados</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  	
  		<div class="row">
  		 <div class="col-lg-2 col-md-2 xs-6">
			  	<p  class="formulario-subtitulo" style="" >Impulsores:</p>
			  	<select name="id_abogado" id="id_abogado"  class="form-control">
			     <option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultImpul as $res) {?>
						<option value="<?php echo $res->id_abogado; ?>"<?php if($sel_id_abogado==$res->id_abogado){echo "selected";}?> ><?php echo $res->impulsores;  ?> </option>
			            <?php } ?>
			    </select>
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p  class="formulario-subtitulo" style="" > Documento:</p>
			  	<select name="documento" id="documento"  class="form-control" >
			  	<option value="ALL">--Seleccione--</option>
			  	<option value="AC">Avoco Conocimiento</option>
			  	<option value="OF">Oficios</option>
			  	<option value="PR">Providencias</option>
			    </select>
			     <div id="mensaje_documento" class="errores"></div>
				 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12" style="display:none;" id="div_tipo_documento">
			  	<p  class="formulario-subtitulo" style="" >Tipo Documento:</p>
			  	<select name="tipo_documento" id="tipo_documento"  class="form-control" >
			   </select>
		 </div>
		 
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p  class="formulario-subtitulo" style="" > Firmado / Aprobado:</p>
			  	<select name="firma" id="firma"  class="form-control" >
			  	<option value="">--Todos--</option>
			  	<option value="TRUE">Si</option>
			  	<option value="FALSE">No</option>
			  	 </select>
			     
		 </div>
  							
  		<div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" ># Juicio:</p>
			  	<input type="text"  name="juicio_referido_titulo_credito" id="juicio_referido_titulo_credito" value="<?php echo $sel_juicio_referido_titulo_credito;?>" class="form-control "/> 
			   
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" ># Operación:</p>
			  	<input type="text"  name="numero_titulo_credito" id="numero_titulo_credito" value="<?php echo $sel_numero_titulo_credito;?>" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 1:</p>
			  	<input type="text"  name="identificacion_clientes" id="identificacion_clientes" value="<?php echo $sel_identificacion_clientes;?>" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 2:</p>
			  	<input type="text"  name="identificacion_clientes_1" id="identificacion_clientes_1" value="<?php echo $sel_identificacion_clientes_1;?>" class="form-control "/> 
			    
		 </div>
		
		
		 <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 3:</p>
			  	<input type="text"  name="identificacion_clientes_2" id="identificacion_clientes_2" value="<?php echo $sel_identificacion_clientes_2;?>" class="form-control "/> 
			    
		 </div>
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 4:</p>
			  	<input type="text"  name="identificacion_clientes_3" id="identificacion_clientes_3" value="<?php echo $sel_identificacion_clientes_3;?>" class="form-control "/> 
			    
		 </div>
		 
		 
		 
		 <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 1:</p>
			  	<input type="text"  name="identificacion_garantes" id="identificacion_garantes" value="<?php echo $sel_identificacion_garantes;?>" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 2:</p>
			  	<input type="text"  name="identificacion_garantes_1" id="identificacion_garantes_1" value="<?php echo $sel_identificacion_garantes_1;?>" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 3:</p>
			  	<input type="text"  name="identificacion_garantes_2" id="identificacion_garantes_2" value="<?php echo $sel_identificacion_garantes_2;?>" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 4:</p>
			  	<input type="text"  name="identificacion_garantes_3" id="identificacion_garantes_3" value="<?php echo $sel_identificacion_garantes_3;?>" class="form-control "/> 
			    
		 </div>
		 
		 
		 <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p  class="formulario-subtitulo">Estado Procesal:</p>
			  	<select name="id_estados_procesales_juicios" id="id_estados_procesales_juicios"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>"<?php if($sel_id_estados_procesales_juicios==$res->id_estados_procesales_juicios){echo "selected";}?> ><?php echo $res->nombre_estados_procesales_juicios;  ?> </option>
			            <?php } ?>
				</select>

         </div>
         <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p  class="formulario-subtitulo">Provincia:</p>
			  	<select name="id_provincias" id="id_provincias"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultProv as $res) {?>
						<option value="<?php echo $res->id_provincias; ?>"<?php if($sel_id_provincias==$res->id_provincias){echo "selected";}?> ><?php echo $res->nombre_provincias;  ?> </option>
			            <?php } ?>
				</select>

         </div>
         
        
		<div class="col-lg-2 col-md-2 col-xs-12">
			<p class="formulario-subtitulo" >Fecha Creación Desde:</p>
			<input type="date"  name="fcha_desde" id="fcha_desde" value="<?php echo '';?>" class="form-control "/> 
		</div>
		<div class="col-lg-2 col-md-2 col-xs-12">
			<p class="formulario-subtitulo" >Fecha Creación Hasta:</p>
			<input type="date"  name="fcha_hasta" id="fcha_hasta" value="<?php echo '';?>" class="form-control "/> 
		</div>
		<div id="div_tipo_documento" class="col-lg-2 col-md-2 col-xs-12" style="display:none;" >
			  	<p  class="formulario-subtitulo" style="" >Tipo Documento:</p>
			  	<select name="tipo_documento" id="tipo_documento"  class="form-control" >
			    </select>
		 </div> 
        
         </div>
          
           </div>
  		
  		
  		<div class="col-lg-12 col-md-12 col-xs-12 " style="text-align: center; margin-top: 10px">
  		    
		 <button type="button" id="buscar" name="buscar" value="Buscar"   class="btn btn-info" style="margin-top: 10px;"><i class="glyphicon glyphicon-search"></i></button>
		 <button type="submit" id="reporte_documentos" name="reporte_documentos" value="Reporte"   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i></button>         
	  
	     </div>
		 
		
	     
		</div>
		    
		    </div>
	        </div>
	        </div>
         
         
        		 
		 
		 <div class="col-lg-12 col-md-12 col-xs-12">
		 
	     <div class="col-lg-12 col-md-12 col-xs-12">
	     
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
    
  

    
