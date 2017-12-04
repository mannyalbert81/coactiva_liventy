    

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
        <link href="../sample.css" rel="stylesheet" type="text/css"/>
		
		<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script type="text/javascript" src="view/ckeditor/ckeditor.js"></script>
		
    	 <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#generar").click(function() 
			{
		   
		    	var cuerpo_oficios = $("#cuerpo_oficios").val();
		     	
		    			
		    	if (cuerpo_oficios == "")
		    	{
			    	
		    		$("#mensaje_cuerpo_oficios").text("Introduzca Datos Oficio");
		    		$("#mensaje_cuerpo_oficios").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_cuerpo_oficios").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	
			}); 

	
				$( "#cuerpo_oficios" ).focus(function() {
					$("#mensaje_cuerpo_oficios").fadeOut("slow");
    			});
					    
		}); 

	</script>
	

    </head>
    <body style="background-color: #d9e3e4;">
    
        <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
       
       <?php
       
  
       $sel_cuerpo="";
       $sel_id_clientes="";
       $sel_id_juicios="";
       $sel_nombre_juicios="";
        
       
       
       if($_SERVER['REQUEST_METHOD']=='GET')
       {
       
       	if(isset($_GET['dato']))
       	{
       		$a=stripslashes($_GET['dato']);
       		$_dato=urldecode($a);
       		$_dato=unserialize($a);
       
       
       		$sel_cuerpo=$_dato['cuerpo'];
       		$sel_id_clientes=$_dato['idClientes'];
       		$sel_nombre_juicios=$_dato['NombreJuicios'];
       		$sel_id_juicios=$_dato['idJuicios'];
       		 
       	}
       
       }
    
       
       
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form  id="plevantamineto" name="plevantamiento" action="<?php echo $helper->url("MatrizJuicios","Imprimir_Oficios"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12 col-md-12 col-xs-12">
         
                 <!-- comienxza busqueda  -->
                 
                 <br>         
         <div class="col-lg-12 col-md-12 col-xs-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos Oficio</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  		
		
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" ># Juicio:</p>
			  	<input type="text"  name="juicio_referido_titulo_credito" id="juicio_referido_titulo_credito" value="<?php echo $datos['juicio_referido_titulo_credito']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-2 col-md-2 col-xs-12">
				 <p class="formulario-subtitulo" ># Operación:</p>
			  	 <input type="text"  name="numero_titulo_credito" id="numero_titulo_credito" value="<?php echo $datos['numero_titulo_credito']; ?>" class="form-control" readonly/> 
			     <input type="hidden"  name="id_juicios" id="id_juicios" value="<?php echo $datos['id_juicios']; ?>" class="form-control"/ readonly>
			     <input type="hidden"  name="id_clientes" id="id_clientes" value="<?php echo $datos['id_clientes']; ?>" class="form-control"/ readonly>
			     <input type="hidden"  name="id_titulo_credito" id="id_titulo_credito" value="<?php echo $datos['id_titulo_credito']; ?>" class="form-control"/ readonly>
			  
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 1:</p>
			  	<input type="text"  name="identificacion_clientes" id="identificacion_clientes" value="<?php echo $datos['identificacion_clientes']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Cliente 1:</p>
			  	<input type="text"  name="nombres_clientes" id="nombres_clientes" value="<?php echo $datos['nombres_clientes']; ?>" class="form-control" readonly/> 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 2:</p>
			  	<input type="text"  name="identificacion_clientes_1" id="identificacion_clientes_1" value="<?php echo $datos['identificacion_clientes_1']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Cliente 2:</p>
			  	<input type="text"  name="nombre_clientes_1" id="nombre_clientes_1" value="<?php echo $datos['nombre_clientes_1']; ?>" class="form-control" readonly/> 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 3:</p>
			  	<input type="text"  name="identificacion_clientes_2" id="identificacion_clientes_2" value="<?php echo $datos['identificacion_clientes_2']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Cliente 3:</p>
			  	<input type="text"  name="nombre_clientes_2" id="nombre_clientes_2" value="<?php echo $datos['nombre_clientes_2']; ?>" class="form-control" readonly/> 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Cliente 4:</p>
			  	<input type="text"  name="identificacion_clientes_3" id="identificacion_clientes_3" value="<?php echo $datos['identificacion_clientes_3']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Cliente 4:</p>
			  	<input type="text"  name="nombre_clientes_3" id="nombre_clientes_3" value="<?php echo $datos['nombre_clientes_3']; ?>" class="form-control" readonly/> 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 1:</p>
			  	<input type="text"  name="identificacion_garantes" id="identificacion_garantes" value="<?php echo $datos['identificacion_garantes']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Garante 1:</p>
			  	<input type="text"  name="nombre_garantes" id="nombre_garantes" value="<?php echo $datos['nombre_garantes']; ?>" class="form-control" readonly/> 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 2:</p>
			  	<input type="text"  name="identificacion_garantes_1" id="identificacion_garantes_1" value="<?php echo $datos['identificacion_garantes_1']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Garante 2:</p>
			  	<input type="text"  name="nombre_garantes_1" id="nombre_garantes_1" value="<?php echo $datos['nombre_garantes_1']; ?>" class="form-control" readonly/> 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 3:</p>
			  	<input type="text"  name="identificacion_garantes_2" id="identificacion_garantes_2" value="<?php echo $datos['identificacion_garantes_2']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Garante 3:</p>
			  	<input type="text"  name="nombre_garantes_2" id="nombre_garantes_2" value="<?php echo $datos['nombre_garantes_2']; ?>" class="form-control" readonly/> 
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >CI Garante 4:</p>
			  	<input type="text"  name="identificacion_garantes_3" id="identificacion_garantes_3" value="<?php echo $datos['identificacion_garantes_3']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Nombre Garante 4:</p>
			  	<input type="text"  name="nombre_garantes_3" id="nombre_garantes_3" value="<?php echo $datos['nombre_garantes_3']; ?>" class="form-control" readonly/> 
		 </div>
		 
		 
		 <div class="col-lg-3 col-md-3 col-xs-12">
         		<p class="formulario-subtitulo" >Secretario:</p>
			  	<input type="text"  name="secretarios" id="secretarios" value="<?php echo $datos['secretarios']; ?>" class="form-control" readonly/> 
		 </div>
		 
		 
		 <div class="col-lg-3 col-md-3 col-xs-12">
         		<p class="formulario-subtitulo" >Impulsor:</p>
			  	<input type="text"  name="impulsores" id="impulsores" value="<?php echo $datos['impulsores']; ?>" class="form-control" readonly/> 
		 </div>
		 
		 
		  <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
		    <?php  include ("ckeditor/ckeditor.php");
			   $valor = "$sel_cuerpo";
			   $CKEditor = new CKEditor();
			   $config = array();
			   $config['toolbar'] = array(
			   	      array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike','-','JustifyLeft','JustifyCenter','JustifyRight'),
			   		  array( 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo'),
			   	      array( 'TextColor','BGColor','-','NewPage','Maximize'),
			   		  array( 'NumberedList','BulletedList','-','Outdent','Indent','/'),
			   		  array( 'Styles','Format','Font','FontSize')
			   	  );
			  $CKEditor->basePatch = "./ckeditor/";
			  $CKEditor->editor("cuerpo_oficios",$valor,$config);
			   //$CKEditor->replaceAll();
	           ?> 
	           <div id="mensaje_cuerpo_oficios" class="errores"></div>
	           
	           
	      </div> 
	          
	          
	        
  			 
		 
		 
		 
	 </div>
  		
  		
  		<div class="col-lg-12 col-md-12 col-xs-12 " style="text-align: center; margin-top: 10px">
  		<button type="submit"  id="generar" name="generar" value=""   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Generar Oficios</button>         
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
    
  
