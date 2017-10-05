<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Actividades - coactiva 2016</title>
        
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
		
		
		
		<!-- TERMINA NOTIFICAIONES -->  
        	
        	
	<script>
	$(document).ready(function(){

		//alert("hola");
		$("#div_ddl_accion").hide();

		$("#ddl_criterio").change(function(){

			var ddl_criterio=$(this).val();

			if(ddl_criterio==3){
				//alert("hola");
				$("#div_ddl_accion").show();
				$("#div_contenido").hide();
				}else{
					$("#div_ddl_accion").hide();
					$("#div_contenido").show();
					}

			});
		
		});

		</script>
		
		<script>
		/*$(document).ready(function(){
			$("#Buscar").click(function(){
				//alert("hola");
				 var startDate = new Date($('#fecha_desde').val());

                 var endDate = new Date($('#fecha_hasta').val());

                 var inicio = $('#fecha_desde').val();

                 var fin = $('#fecha_hasta').val();

                 if(inicio=="" || fin==""){
                     alert("ingrese fechas de busqueda");
                	 return false;
                 }
                 
                 });
			});*/
		</script>
        
		
		<script>
		$(document).ready(function(){

	       $("#fecha_hasta").change(function() {

                var startDate = new Date($('#fecha_desde').val());

                 var endDate = new Date($('#fecha_hasta').val());

                 if (startDate > endDate){
 
                    $("#mensaje_hasta").text("Fecha desde no debe ser mayor ");
		    		$("#mensaje_hasta").fadeIn("slow"); //Muestra mensaje de error  
		    		$("#fecha_hasta").val("");

                        }

               });

	       $( "#fecha_hasta" ).focus(function() {
				  $("#mensaje_hasta").fadeOut("slow");
			   });

        });
		</script>
		
		
        
     
       
          
    </head>
    <body style="background-color: #d9e3e4;">
    
     
       <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
       
       
       
       <?php
       
       $acciones=array(0=>"INSERTO NUEVO JUICIO",1=>"Actualizo tabla juicios",2=>"Actualizo tabla clientes", 3=>"Actualizo tabla titulo_credito", 4=>"Inserto o Actualizo tabla Restructuracion");
       
		   
		?>
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
           
  
      
           <form action="<?php echo $helper->url("Trazas","Index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
     
     
                <br>         
             <div class="col-lg-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Lista de Actividades</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
     
      		
           
           
           <div class="col-lg-3 col-md-3 xs-6" id="div_desde">
         		<p class="formulario-subtitulo" >Desde:</p>
			  	<input type="date"  name="fecha_desde" id="fecha_desde" value="" class="form-control "/> 
			   <div id="mensaje_desde" class="errores"></div>
		 </div>
		 
		  <div class="col-lg-3 col-md-3 xs-6" id="div_hasta">
         		<p class="formulario-subtitulo" >Hasta:</p>
			  	<input type="date"  name="fecha_hasta" id="fecha_hasta" value="" class="form-control "/> 
			   <div id="mensaje_hasta" class="errores"></div>
		 </div>
           
            <div class="col-lg-4 col-md-4 xs-6" id="div_contenido">
         		<p class="formulario-subtitulo" >Contenido Busqueda:</p>
			  	<input type="text"  name="contenido" id="contenido" value="" class="form-control "/> 
			   <div id="mensaje_contenido" class="errores"></div>
		 </div>
          
           
          <div class="col-lg-4 col-md-4 xs-6" id="div_ddl_accion">
         		<p class="formulario-subtitulo" >Accion:</p>
			  	 <select name="ddl_accion" id="ddl_accion"  class="form-control">
                                    <?php foreach($acciones as $val=>$desc) {?>
                                         <option value="<?php echo $val ?>"><?php echo $desc ?> </option>
                                    <?php } ?>
                                        
           </select>
			   <div id="mensaje_ddl_accion" class="errores"></div>
		 </div>
            
          
          
            <div class="col-lg-2 col-md-2 xs-6" id="div_ddl_criterio">
         		<p class="formulario-subtitulo" >Criterio:</p>
			  	 <select name="ddl_criterio" id="ddl_criterio"  class="form-control">
                                    <?php foreach($resulMenu as $val=>$desc) {?>
                                         <option value="<?php echo $val ?>"><?php echo $desc ?> </option>
                                    <?php } ?>
                                        
           </select>
			   <div id="mensaje_criterio" class="errores"></div>
		 </div>
            
          
         
         </div></div>
         
          <div class="col-lg-12 col-md-12 xs-12 " style="text-align: center; margin-top: 10px">
  		   <button type="submit" id="Buscar" name="Buscar" value="Buscar" class="btn btn-info"><i class="glyphicon glyphicon-search"></i></button>
           </div>
         </div></div></div>
         
         
          </form>
        
       <!-- termina formulario de busqueda -->
       
       <div class="col-lg-12">
		 
	      <div class="col-lg-12">
		 <div class="col-lg-10"></div>
		 <div class="col-lg-2">
       <span class="form-control" style="margin-bottom:0px;"><strong>Registros:</strong><?php if(!empty($resultActi)) echo "  ".count($resultActi);?></span>
		 </div>
		 </div>
		 <div class="col-lg-12">
       
        <section class="col-lg-12 actividades" style="height:400px;overflow-y:scroll;">
        <table class="table table-hover ">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 12px;">#</th>
	    		<th style="text-align: left;  font-size: 12px;">Usuario</th>
	    		<th style="text-align: left;  font-size: 12px;">Nombre del Controlador</th>
	    		<th style="text-align: left;  font-size: 12px;">Acción</th>
	    		<th style="text-align: left;  font-size: 12px;">Identificador (Id)</th>
	    		<th style="text-align: left;  font-size: 12px;">Fecha</th>
	    		
	    		<th></th>
	    		<th></th>
	  		</tr>
            
            <?php $i=1;?>
	            <?php if (!empty($resultActi)) {  foreach($resultActi as $res) {?>
	            
	        		<tr>
	                   <td style="font-size: 11px;"> <?php echo $i++; ?></td>
		               <td style="font-size: 11px;"> <?php echo $res->nombre_usuarios; ?></td> 
		                <td style="font-size: 11px;"> <?php echo $res->nombre_controlador; ?></td> 
		                 <td style="font-size: 11px;"> <?php echo $res->accion_trazas; ?></td> 
		                  <td style="font-size: 11px;"> <?php echo $res->parametros_trazas; ?></td> 
		                  <td style="font-size: 11px;"> <?php echo date($res->creado); ?></td> 
		              
		           	  
		    		</tr>
		        <?php } }else{ ?>
                <tr>
	                  	<td></td>
            			<td></td>
            			<td></td>
            			
	                    <td colspan="1" style="color:#ec971f;font-size:12;"> <?php echo '<span id="snResult">No existen resultados</span>' ?></td>
	       				<td></td>
	       				<td></td>
	       				<td></td>
	       				<td></td>
		    	</tr>
            
            <?php 
		}
           
            
            ?>
            
       	</table>     
      </section>
      </div>
		 </div>
		 <br>
		 <br>
		 <br>
		 
		 <br>
		 <br>
		 <br>
      </div>
      </div>
    <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
   
     </body>  
    </html>   