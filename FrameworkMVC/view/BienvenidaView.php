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

	<div id="dialog" title="INFORMACIÓN"><br><br>
	<p style="text-align: justify;">Estimados <strong>usuarios</strong>, les comunicamos que hemos implementado los campos de actualización de la matriz de coactivados sugeridos por la Superintendencia de Bancos, el sistema (Allcoercive) ahora cuenta con los campos mensionados anteriormente y deben ser actualizados desde el proceso de Actualización de matriz en el sistema.</p>
   	<p style="text-align: justify; margin-top:40px;"><strong>Estimados Usuarios se modifico nuevamente la Actualización de la matriz y se agrego la Opción de Forma de Pago como campo obligatorio dispuesta por la Directora de Coactiva con fecha 2/07/2018</strong></p>
    <p style="text-align: justify; margin-top:40px;"><strong>Gracias por su Atención</strong></p>
    
	 </div> 
            
       <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
    </body>
</html>