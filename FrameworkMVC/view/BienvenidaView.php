﻿<!DOCTYPE HTML>
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

            
       <footer class="col-lg-12">
           <?php include("view/modulos/footer.php"); ?>
        </footer>
    </body>
</html>