<!DOCTYPE html>
<html lang="en">
<head>

<?php require_once 'config/global.php';?> 

  <title>AllCoercive</title>
  <link rel="shortcut icon" href="view/favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="view/css/estilos.css">
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
       
        <style>

.sub-menu {
    padding: 0;
    max-height: 200px; /* 1.5 x 3 */
    overflow-y: auto;
}
</style>
		
 
 <script type=text/javascript>
//setTimeout("document.location=document.location",2000);
$(document).ready(function(){

	var $divcontenedor = $("#div_head");

	$divcontenedor.empty();

    var datos=1;


	 var result=  $.post("<?php echo $helper->url("VerNotificaciones","iniciaNotificaciones"); ?>",  "json");

	 result.done(function( result_notificaciones ) {
		 
		 cantidad_notificaciones = JSON.parse(result_notificaciones);
		var notificaciones ='<button type="button" id="boton_notificacion" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <span class="badge">'+cantidad_notificaciones.length+'</span></button>';
         
		
		 notificaciones=notificaciones+'<ul class="dropdown-menu" id="ul_notificacion">'+'</ul>';

		  $divcontenedor.append(notificaciones);

		  var $ul=$("#ul_notificacion");

		  $.post("<?php echo $helper->url("VerNotificaciones","iniciaNotificaciones"); ?>", datos, function(resultNotificaciones) {

               
			  $.each(resultNotificaciones, function(index, value) {
				  $ul.append('<li  ><a href="index.php?controller=VerNotificaciones&action=actualizaNotificaciones&id_notificaciones='+value.id_notificaciones+'&controlador='+value.controlador_tipo_notificacion+'&acciones='+value.accion_tipo_notificacion+'">'+ value.descripcion_notificaciones+'</a></li>');	
                  
			 
                		if (value.controlador_tipo_notificacion == 0){

                			   	
                				alert('entro');
                        }

                		else{

                			
    			 	    }

			  });
          	      		 
                	
                	
              
		 		

		 		 	 		   
		  }, 'json');
		  
	 });

	
});
	

</script>  


<!-- para hacer que refresque pag -->
	
	<script>
    $(document).ready(function(){
        
    	setTimeout( '$("#noti_btn").load();' , 1000);
    });
	</script>
 
	
</head>
<body>

<div class="container"  style=" -webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.49);-moz-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.49); box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.49);">
  
  
  <div class="row" style=" background-color:#d93e1b;">
  
  <div style=" margin-top: 10px; "   class="col-xs-12 col-md-8"  >
  <img src="view/images/logo-coctiva.png" class="img-responsive" alt="Responsive image">
  </div>
  
 	 
  <!-- aqui va la class pull-right.... -->
  
  
  <div  style="margin-top: 20px;" class="col-xs-12 col-md-4">
 		<div class="col-xs-12 col-md-12">
 		<span id="siteseal" ><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=JKfl1TVGUaJawwAQhE6uRNpHTTK1xg7Dpz6sjYnYuSIBsTstwHrfe4ojuILz"></script></span>	
 		
 		</div>	
		<?php  
		$status = session_status();
		
			 if  (isset( $_SESSION['nombre_usuarios'] ))  {  
		?>
		  <input type="image" name="image" style="margin-top:4px;" src="view/DevuelveImagen.php?id_valor=<?php echo $_SESSION['id_usuarios']; ?>&id_nombre=id_usuarios&tabla=usuarios&campo=imagen_usuarios"  alt="<?php echo $_SESSION['id_usuarios'];?>" width="85" height="75"   >
 		
		  <div class="col-xs-8 col-md-5" style="margin-top:5px;">
									
			<div class="dropdown">
			
				  <button id="noti_btn" class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user" ><?php echo " ".$_SESSION['usuario_usuarios'];?></span>
				  
				  <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="index.php?controller=Usuarios&action=cerrar_sesion">Cerrar Sesión</a></li>
				    <li><a href="index.php?controller=Usuarios&action=Actualiza">Actualizar Datos de Usuario</a></li>
				    <li><a href="#">Conectado desde: <?php echo $_SESSION['ip_usuarios']?></a></li>
				  </ul>
								  
			</div>
			<img src="view/images/contacto_masoft.png" style="margin-top: 10px;" class="img-responsive">
			
		   </div>
			
		
		

			
		 	 <?php  ?> 
		<?php 
			 }
			 else 
			 {     ?>
		
		<div class="col-xs-6 col-md-5" style="margin-top:5px;">
			<div class="dropdown">
					  <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-lock" > Iniciar Sesión </span>
					  
					  </button>
		
		    </div>
		    <br>
		</div>
			
		<?php }
				
		 ?>
		 

   </div>  
  
 
  
  </div>
        
</div>

   
</body>
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

</html>