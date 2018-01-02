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
      $(function() {
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

	<div id="dialog" title="INFORMACIÓN"><br><br><br><br>
	<p style="text-align: justify;">Estimados <strong>usuarios</strong>, les comunicamos que hemos implementado la generación automática de oficios al sistema (Allcoercive), el mismo que se puede seleccionar si desea o no generar el oficio en cualquiera de los documentos cargados en el sistema.</p>
    
	 </div> 
            
       <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
    </body>
</html>