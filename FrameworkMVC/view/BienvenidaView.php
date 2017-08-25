<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Menu - Coactiva 2016</title>
   
        
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
        
      
 	
   </head>
    <body>
     
      <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
       <?php include("view/modulos/slide.php"); ?>
      
     
      <script>
      $( function() {
    	    $( "#dialog" ).dialog({
    	        resizable: false,
    	        height: 400,
    	        width: 800,
    	        modal: true,
    	        buttons: {
    	          "Cerrar": function() {
    	            $( this ).dialog( "close" );
    	          }
    	        }
    	      });
    	  } );
	</script>
	<div id="dialog" title="INFORMACIÓN">
	
     <p style="text-align: justify;">Saludos Estimados, les comunicamos que hemos procedido con la actualización del estado procesal de los juicios que estaban en un estado procesal diferente a <strong>SUSPENSIÓN O ARCHIVADO</strong>, en un estado procesal de nombre 
     <strong> REVISAR</strong>, favor revisar y actualizar sus juicios que se encuentran en dicho estado a su estado procesal correspondiente que puede ser <strong>SUSPENSIÓN O ARCHIVADO</strong>.</p>
   
   <br>
    <p style="text-align: justify;"><strong>NOTA: </strong>Todo juicio que este en estado procesal de nombre <strong>REVISAR</strong> seran eliminados al terminar el proceso de revisón de la matriz de juicios.</p>
   
     </div> 
            
       <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
    </body>
</html>