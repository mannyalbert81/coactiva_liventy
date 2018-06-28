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
	<p style="text-align: justify;">Estimados <strong>usuarios</strong>, les comunicamos que hemos implementado los campos de actualización de la matriz de coactivados sugeridos por la Superintendencia de Bancos, el sistema (Allcoercive) ahora cuenta con los campos mensionados anteriormente y deben ser actualizados desde el proceso de Actuaslizacion de matriz en el sistema.</p>
   	<p style="text-align: justify; margin-top:40px;"><strong>Nota:</strong> Tambien por la disposición del Banco se modifcaron los campos de la matriz de exportacion tanto en tema de reporteria como en el tema de la busqueda de datos.</p>
    <p style="text-align: justify; margin-top:40px;"><strong>Nota:</strong> Por otro lado ahora existe la posibilidad de generar tres tipos de matriz como son: la de inventario de juicios, la de recaudacion de cartera y la de los procesos cancelados y archivados para su exportacion en excel como se lo hacia antes.</p>
    <p style="text-align: justify; margin-top:40px;"><strong>Gracias por su Atención</strong></p>
    
	 </div> 
            
       <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
    </body>
</html>