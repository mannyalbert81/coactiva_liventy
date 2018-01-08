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
		
		<link rel="stylesheet" href="view/css/pace-theme-center-atom.css" />
		 <script src="view/js/pace.js"></script>
		
				<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
	 
         
      
        
        
        
    </head>
      <body style="background-color: #d9e3e4;">
    
     <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
  
    
   <form  method="post" class="col-lg-12 col-md-12 col-xs-12">
            
           <br>
           
           <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-warning-sign'></i> Alerta Encontrada</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
           <div class="col-lg-6 col-md-6 col-xs-12">
             <?php if (!empty($existe)) {?>
        	<?php if ($existe != "") {?>
        	
        	<div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <p align="justify"><b><font face="univers" size=3>***Estimados usuarios:</font></b></p>
			</div>
			<br>
	        <div class="alert alert-danger" role="alert" style="text-align: justify;"><?php echo $existe;?></div>
			<div class="alert alert-warning" role="alert" style="margin-top: 40px; text-align: justify;"><strong>NOTA:</strong> No se puede volver a generar un documento si ya existe o esta en proceso de aprobación por su abogado secretario, una vez que lo apruebe o lo elimine el sistema le permitira generarlo nuevamente.</div>
				 
			<?php } ?>
	        
           <?php }  ?>
            </div>
             <div class="col-lg-6 col-md-6 col-xs-12">	
              <img src="view/images/alerta.png" style="margin-left: 80px;" class="img-responsive" alt="Responsive image"  width="300" height="300">
             
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









