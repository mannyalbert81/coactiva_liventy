   	 
  <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
     
<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Matriz Juicios - coactiva 2017</title>
        <link rel="stylesheet" href="view/css/pace-theme-center-atom.css" />
		 <script src="view/js/pace.js"></script>
		
		
		
		
		
		 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
         
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		
		<script src="view/js/jquery.inputmask.bundle.js"></script>
		
		
		
		
		
		
		
      
      <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 9 )
          {
       	   $("#div_datos_embargo_cuenta").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_embargo_cuenta").fadeOut("slow");
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 9)
              {
           	   $("#div_datos_embargo_cuenta").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_embargo_cuenta").fadeOut("slow");
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
         
      <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 16 )
          {
       	   $("#div_datos_retencion_fondos").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_retencion_fondos").fadeOut("slow");
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 16)
              {
           	   $("#div_datos_retencion_fondos").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_retencion_fondos").fadeOut("slow");
              }
              
              
		    });
	}); 	
	   
      </script>
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 20 )
          {
       	   $("#div_datos_retencion_cuentas").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_retencion_cuentas").fadeOut("slow");
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 16)
              {
           	   $("#div_datos_retencion_cuentas").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_retencion_cuentas").fadeOut("slow");
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 17 )
          {
       	   $("#div_datos_retencion_fondos_avoco_conocimiento").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_retencion_fondos_avoco_conocimiento").fadeOut("slow");
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 17)
              {
           	   $("#div_datos_retencion_fondos_avoco_conocimiento").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_retencion_fondos_avoco_conocimiento").fadeOut("slow");
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#citado").click(function() {
			
          var citado = $(this).val();
			
          if(citado == "No")
          {
       	   $("#div_citado").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_citado").fadeOut("slow");
         
         
     	
          
          }
         
	    });
	    
	    $("#citado").change(function() {
			
              
              var citado = $(this).val();
				
              
              if(citado == "No")
              {
           	   $("#div_citado").fadeIn("slow");
              }
           	
              else
              {
              $("#div_citado").fadeOut("slow");
           
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#remplaza_impulsor").click(function() {
			
          var remplaza_impulsor = $(this).val();
			
          if(remplaza_impulsor == "Si")
          {
       	   $("#div_impulsor_cambio_liquidador").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_impulsor_cambio_liquidador").fadeOut("slow");
         
         
     	
          
          }
         
	    });
	    
	    $("#remplaza_impulsor").change(function() {
			
              
              var remplaza_impulsor = $(this).val();
				
              
              if(remplaza_impulsor == "Si")
              {
           	   $("#div_impulsor_cambio_liquidador").fadeIn("slow");
              }
           	
              else
              {
              $("#div_impulsor_cambio_liquidador").fadeOut("slow");
           
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#generar_oficio").click(function() {
			
          var generar_oficio = $(this).val();
			
          if(generar_oficio == "Si")
          {
       	   $("#div_datos_generar_oficio").fadeIn("slow");
       	 
          }
       	
          else
          {
        	
              
           $("#div_datos_generar_oficio").fadeOut("slow");
           $("#div_datos_cantidad_oficios").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_1").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_2").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_3").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_4").fadeOut("slow");
    	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
    	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
    	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
    	
          }
         
	    });
	    
	    $("#generar_oficio").change(function() {
			
              
              var generar_oficio = $(this).val();
				
              
              if(generar_oficio == "Si")
              {
           	   $("#div_datos_generar_oficio").fadeIn("slow");
              }
           	
              else
              {
            	  
                  
              $("#div_datos_generar_oficio").fadeOut("slow");
              $("#div_datos_cantidad_oficios").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_1").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_2").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_3").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_4").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
     
              }
              
              
		    });
	}); 	
	   
      </script>
		
		
		
		
		<script type="text/javascript">
      $(document).ready(function(){
          
      $("#cantidad_oficios_generar").click(function() {
			
          var cantidad_oficios_generar = $(this).val();
			
          if(cantidad_oficios_generar == "1")
          {
       	   $("#div_datos_cantidad_oficios").fadeIn("slow");
       	 
          }
       	
          else  if(cantidad_oficios_generar == "2")
              
          {
        	   $("#div_datos_cantidad_oficios").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
              	
          }

          else  if(cantidad_oficios_generar == "3")
              
          {
        	   $("#div_datos_cantidad_oficios").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
               
          }
          else  if(cantidad_oficios_generar == "4")
              
          {
        	   $("#div_datos_cantidad_oficios").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
               
          }

		else  if(cantidad_oficios_generar == "5")
              
          {
        	   $("#div_datos_cantidad_oficios").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
          }

		else  if(cantidad_oficios_generar == "6")
            
        {
      	   $("#div_datos_cantidad_oficios").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_5").fadeIn("slow");
        }

		else  if(cantidad_oficios_generar == "7")
            
        {
      	   $("#div_datos_cantidad_oficios").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_5").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_6").fadeIn("slow");
        }

		else  if(cantidad_oficios_generar == "8")
            
        {
      	   $("#div_datos_cantidad_oficios").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_5").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_6").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_7").fadeIn("slow");
        }



          else{

        	  $("#div_datos_cantidad_oficios").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_1").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_2").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_3").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_4").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");

          }
         
	    });
	    
	    $("#cantidad_oficios_generar").change(function() {
			
              
              var cantidad_oficios_generar = $(this).val();
				
              if(cantidad_oficios_generar == "1")
              {
           	   $("#div_datos_cantidad_oficios").fadeIn("slow");
           	  $("#div_datos_cantidad_oficios_1").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_2").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_3").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_4").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
           	 
              }
           	
              else  if(cantidad_oficios_generar == "2")
                  
              {
            	   $("#div_datos_cantidad_oficios").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_2").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_3").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_4").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
              }

              else  if(cantidad_oficios_generar == "3")
                  
              {
            	   $("#div_datos_cantidad_oficios").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_3").fadeOut("slow");
            	   $("#div_datos_cantidad_oficios_4").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
                   
              }
              else  if(cantidad_oficios_generar == "4")
                  
              {
            	   $("#div_datos_cantidad_oficios").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_4").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
              }

              else  if(cantidad_oficios_generar == "5")
                  
              {
            	   $("#div_datos_cantidad_oficios").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
             	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
              }

               else  if(cantidad_oficios_generar == "6")
                  
              {
            	   $("#div_datos_cantidad_oficios").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
             	  $("#div_datos_cantidad_oficios_5").fadeIn("slow");
             	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
              }


               else  if(cantidad_oficios_generar == "7")
                  
              {
            	   $("#div_datos_cantidad_oficios").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
             	  $("#div_datos_cantidad_oficios_5").fadeIn("slow");
             	  $("#div_datos_cantidad_oficios_6").fadeIn("slow");
             	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");
              }


               else  if(cantidad_oficios_generar == "8")
                   
               {
             	   $("#div_datos_cantidad_oficios").fadeIn("slow");
             	   $("#div_datos_cantidad_oficios_1").fadeIn("slow");
             	   $("#div_datos_cantidad_oficios_2").fadeIn("slow");
             	   $("#div_datos_cantidad_oficios_3").fadeIn("slow");
             	   $("#div_datos_cantidad_oficios_4").fadeIn("slow");
              	  $("#div_datos_cantidad_oficios_5").fadeIn("slow");
              	  $("#div_datos_cantidad_oficios_6").fadeIn("slow");
              	  $("#div_datos_cantidad_oficios_7").fadeIn("slow");
               }


              else{

            	  $("#div_datos_cantidad_oficios").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_1").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_2").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_3").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_4").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_5").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_6").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_7").fadeOut("slow");

              }
              
		    	});
			}); 	
	   
      </script>
      
      
         <script type="text/javascript">
      $(document).ready(function(){
          
      $("#anulada_oficios_pago").click(function() {
			
          var anulada_oficios_pago = $(this).val();
			
          if(anulada_oficios_pago  == "Si")
          {
           $("#div_datos_anulada_1_pago").fadeIn("slow");
   	       $("#div_datos_anulada_2_pago").fadeIn("slow");
   	       $("#div_datos_anulada_3_pago").fadeIn("slow");
   	       $("#div_datos_anulada_4_pago").fadeIn("slow");
    	   $("#div_datos_anulada_5_pago").fadeIn("slow");
    	   $("#div_datos_anulada_6_pago").fadeIn("slow");  
    	   $("#div_datos_anulada_7_pago").fadeIn("slow");
    	   $("#div_datos_anulada_8_pago").fadeIn("slow");
       	 
          }
       	
          else
          {


        	  $("#div_datos_anulada_1_pago").fadeOut("slow");
      	       $("#div_datos_anulada_2_pago").fadeOut("slow");
      	       $("#div_datos_anulada_3_pago").fadeOut("slow");
      	       $("#div_datos_anulada_4_pago").fadeOut("slow");
       	   $("#div_datos_anulada_5_pago").fadeOut("slow");
       	   $("#div_datos_anulada_6_pago").fadeOut("slow");  
       	   $("#div_datos_anulada_7_pago").fadeOut("slow");
       	   $("#div_datos_anulada_8_pago").fadeOut("slow");


          
          }
         
	    });
	    
	    $("#anulada_oficios_pago").change(function() {
			
              
              var anulada_oficios_pago = $(this).val();
				
              
              if(anulada_oficios_pago == "Si")
              {
            	  $("#div_datos_anulada_1_pago").fadeIn("slow");
          	       $("#div_datos_anulada_2_pago").fadeIn("slow");
          	       $("#div_datos_anulada_3_pago").fadeIn("slow");
          	       $("#div_datos_anulada_4_pago").fadeIn("slow");
           	   $("#div_datos_anulada_5_pago").fadeIn("slow");
           	   $("#div_datos_anulada_6_pago").fadeIn("slow");  
           	   $("#div_datos_anulada_7_pago").fadeIn("slow");
           	   $("#div_datos_anulada_8_pago").fadeIn("slow");
              }
           	
              else
              {
            	  $("#div_datos_anulada_1_pago").fadeOut("slow");
         	       $("#div_datos_anulada_2_pago").fadeOut("slow");
         	       $("#div_datos_anulada_3_pago").fadeOut("slow");
         	       $("#div_datos_anulada_4_pago").fadeOut("slow");
          	   $("#div_datos_anulada_5_pago").fadeOut("slow");
          	   $("#div_datos_anulada_6_pago").fadeOut("slow");  
          	   $("#div_datos_anulada_7_pago").fadeOut("slow");
          	   $("#div_datos_anulada_8_pago").fadeOut("slow");
            
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
      
      
      
         <script type="text/javascript">
      $(document).ready(function(){
          
      $("#cantidad_oficios_generar").click(function() {
			
          var cantidad_oficios_generar = $(this).val();
			
          if(cantidad_oficios_generar == "1")
          {
       	   $("#div_datos_anulada_1_pago").fadeIn("slow");
       	 
          }
       	
          else  if(cantidad_oficios_generar == "2")
              
          {
        	   $("#div_datos_anulada_1_pago").fadeIn("slow");
        	   $("#div_datos_anulada_2_pago").fadeIn("slow");
              	
          }

          else  if(cantidad_oficios_generar == "3")
              
          {
        	   $("#div_datos_anulada_1_pago").fadeIn("slow");
        	   $("#div_datos_anulada_2_pago").fadeIn("slow");
        	   $("#div_datos_anulada_3_pago").fadeIn("slow");
               
          }
          else  if(cantidad_oficios_generar == "4")
              
          {
        	   $("#div_datos_anulada_1_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_2_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_3_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_4_pago").fadeIn("slow");
               
          }

          else  if(cantidad_oficios_generar == "5")
              
          {
        	  $("#div_datos_anulada_1_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_2_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_3_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_4_pago").fadeIn("slow");
        	  $("#div_datos_anulada_5_pago").fadeIn("slow");
               
          }
		 else  if(cantidad_oficios_generar == "6")
              
          {
			   $("#div_datos_anulada_1_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_2_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_3_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_4_pago").fadeIn("slow");
      	       $("#div_datos_anulada_5_pago").fadeIn("slow");
      	       $("#div_datos_anulada_6_pago").fadeIn("slow");
               
          }
		 else  if(cantidad_oficios_generar == "7")
             
         {
			  $("#div_datos_anulada_1_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_2_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_3_pago").fadeIn("slow");
	       	   $("#div_datos_anulada_4_pago").fadeIn("slow");
    	       $("#div_datos_anulada_5_pago").fadeIn("slow");
    	       $("#div_datos_anulada_6_pago").fadeIn("slow");  
    	       $("#div_datos_anulada_7_pago").fadeIn("slow");  
         }
 		else  if(cantidad_oficios_generar == "8")
             
         {
 		   $("#div_datos_anulada_1_pago").fadeIn("slow");
	       $("#div_datos_anulada_2_pago").fadeIn("slow");
	       $("#div_datos_anulada_3_pago").fadeIn("slow");
	       $("#div_datos_anulada_4_pago").fadeIn("slow");
 	       $("#div_datos_anulada_5_pago").fadeIn("slow");
 	       $("#div_datos_anulada_6_pago").fadeIn("slow");  
 	       $("#div_datos_anulada_7_pago").fadeIn("slow");
 	      $("#div_datos_anulada_8_pago").fadeIn("slow");
         }


          else{

        	  $("#div_datos_anulada_1_pago").fadeOut("slow");
        	  $("#div_datos_anulada_2_pago").fadeOut("slow");
        	  $("#div_datos_anulada_3_pago").fadeOut("slow");
        	  $("#div_datos_anulada_4_pago").fadeOut("slow");
        	  $("#div_datos_anulada_5_pago").fadeOut("slow");
        	  $("#div_datos_anulada_6_pago").fadeOut("slow");
        	  $("#div_datos_anulada_7_pago").fadeOut("slow");
        	  $("#div_datos_anulada_8_pago").fadeOut("slow");
            

          }
         
	    });
	    
	    $("#cantidad_oficios_generar").change(function() {
			
              
              var cantidad_oficios_generar = $(this).val();
				
              if(cantidad_oficios_generar == "1")
              {
           	  
           	  $("#div_datos_anulada_1_pago").fadeIn("slow");
	       	  $("#div_datos_anulada_2_pago").fadeOut("slow");
	       	  $("#div_datos_anulada_3_pago").fadeOut("slow");
	       	  $("#div_datos_anulada_4_pago").fadeOut("slow");
	       	  $("#div_datos_anulada_5_pago").fadeOut("slow");
	       	  $("#div_datos_anulada_6_pago").fadeOut("slow");
	       	  $("#div_datos_anulada_7_pago").fadeOut("slow");
	       	  $("#div_datos_anulada_8_pago").fadeOut("slow");
            
           
           	 
              }
           	
              else  if(cantidad_oficios_generar == "2")
                  
              {
            	  $("#div_datos_anulada_1_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_2_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_3_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_4_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_5_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_6_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_7_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_8_pago").fadeOut("slow");
               
                
              }

              else  if(cantidad_oficios_generar == "3")
                  
              {
            	  $("#div_datos_anulada_1_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_2_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_3_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_4_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_5_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_6_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_7_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_8_pago").fadeOut("slow");
                 
                   
                   
              }
              else  if(cantidad_oficios_generar == "4")
                  
              {
            	  $("#div_datos_anulada_1_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_2_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_3_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_4_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_5_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_6_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_7_pago").fadeOut("slow");
    	       	  $("#div_datos_anulada_8_pago").fadeOut("slow");
                 
                   
              }

             else  if(cantidad_oficios_generar == "5")
                  
              {
              $("#div_datos_anulada_1_pago").fadeIn("slow");
   	       	  $("#div_datos_anulada_2_pago").fadeIn("slow");
   	       	  $("#div_datos_anulada_3_pago").fadeIn("slow");
   	       	  $("#div_datos_anulada_4_pago").fadeIn("slow");
   	       	  $("#div_datos_anulada_5_pago").fadeIn("slow");
   	       	  $("#div_datos_anulada_6_pago").fadeOut("slow");
   	       	  $("#div_datos_anulada_7_pago").fadeOut("slow");
   	       	  $("#div_datos_anulada_8_pago").fadeOut("slow");
                   
              }
             else  if(cantidad_oficios_generar == "6")
                 
             {
            	 $("#div_datos_anulada_1_pago").fadeIn("slow");
      	       	  $("#div_datos_anulada_2_pago").fadeIn("slow");
      	       	  $("#div_datos_anulada_3_pago").fadeIn("slow");
      	       	  $("#div_datos_anulada_4_pago").fadeIn("slow");
      	       	  $("#div_datos_anulada_5_pago").fadeIn("slow");
      	       	  $("#div_datos_anulada_6_pago").fadeIn("slow");
      	       	  $("#div_datos_anulada_7_pago").fadeOut("slow");
      	       	  $("#div_datos_anulada_8_pago").fadeOut("slow");
                
                  
             }
 			else  if(cantidad_oficios_generar == "7")
                 
             {
 				  $("#div_datos_anulada_1_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_2_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_3_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_4_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_5_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_6_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_7_pago").fadeIn("slow");
    	       	  $("#div_datos_anulada_8_pago").fadeOut("slow");
                
                  
             }

 			else  if(cantidad_oficios_generar == "8")
                
            {
 				$("#div_datos_anulada_1_pago").fadeIn("slow");
  	       	  $("#div_datos_anulada_2_pago").fadeIn("slow");
  	       	  $("#div_datos_anulada_3_pago").fadeIn("slow");
  	       	  $("#div_datos_anulada_4_pago").fadeIn("slow");
  	       	  $("#div_datos_anulada_5_pago").fadeIn("slow");
  	       	  $("#div_datos_anulada_6_pago").fadeIn("slow");
  	       	  $("#div_datos_anulada_7_pago").fadeIn("slow");
  	       	  $("#div_datos_anulada_8_pago").fadeIn("slow");
               
                 
            }

              else{


            	  $("#div_datos_anulada_1_pago").fadeOut("slow");
            	  $("#div_datos_anulada_2_pago").fadeOut("slow");
            	  $("#div_datos_anulada_3_pago").fadeOut("slow");
            	  $("#div_datos_anulada_4_pago").fadeOut("slow");
            	  $("#div_datos_anulada_5_pago").fadeOut("slow");
            	  $("#div_datos_anulada_6_pago").fadeOut("slow");
            	  $("#div_datos_anulada_7_pago").fadeOut("slow");
            	  $("#div_datos_anulada_8_pago").fadeOut("slow");
                

              }
              
		    });
	}); 	
	   
      </script>
      
      
           <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#generar").click(function() 
			{
		   
		    	var fecha_avoco = $("#fecha_avoco").val();
		     	var hora_avoco = $("#hora_avoco").val();
		        var tipo_avoco = $("#tipo_avoco").val();
			    var numero_oficio_embargo_cuenta = $("#numero_oficio_embargo_cuenta").val();
			    var fecha_oficio_embargo_cuenta = $("#fecha_oficio_embargo_cuenta").val();
			    var tipo_cuenta = $("#tipo_cuenta").val();
		        var numero_cuenta = $("#numero_cuenta").val();
		        var nombre_banco = $("#nombre_banco").val();
		        var monto_retenido = $("#monto_retenido").val();
		        var nombre_titular_cuenta = $("#nombre_titular_cuenta").val();
		        var identificacion_titular_cuenta = $("#identificacion_titular_cuenta").val();
		        var depositario_judicial = $("#depositario_judicial").val();
			    
			    var identificacion_depositario_judicial = $("#identificacion_depositario_judicial").val();
			    var generar_oficio= $("#generar_oficio").val();
                var entidad_va_oficio= $("#entidad_va_oficio").val();
                var asunto= $("#asunto").val();
			    

                var cantidad_oficios_generar= $("#cantidad_oficios_generar").val();
                var entidad_va_oficio_1= $("#entidad_va_oficio_1").val();
                var entidad_va_oficio_2= $("#entidad_va_oficio_2").val();
                var entidad_va_oficio_3= $("#entidad_va_oficio_3").val();
               
                var entidad_va_oficio_4= $("#entidad_va_oficio_4").val();
                var entidad_va_oficio_5= $("#entidad_va_oficio_5").val();
                var entidad_va_oficio_6= $("#entidad_va_oficio_6").val();
                var entidad_va_oficio_7= $("#entidad_va_oficio_7").val();


                var cantidad_retener= $("#cantidad_retener").val();
                var cuenta_retener1= $("#cuenta_retener1").val();
                //var nombre_entidad_cuenta= $("#nombre_entidad_cuenta").val();
                
                var remplaza_impulsor= $("#remplaza_impulsor").val();
				var impulsor_saliente_cambio_liquidador = $("#impulsor_saliente_cambio_liquidador").val();
				var cantidad_retener_avoco_conocimiento= $("#cantidad_retener_avoco_conocimiento").val();
                var direccion_juzgado= $("#direccion_juzgado").val();
				var tipo_cartera= $("#tipo_cartera").val();
				var disposicion_citar= $("#disposicion_citar").val();
				var citado= $("#citado").val();
				var tipo_acto= $("#tipo_acto").val();
			 	var anulada_oficios_pago = $("#anulada_oficios_pago").val();
				var numero_oficios_anulada_1_pago = $("#numero_oficios_anulada_1_pago").val();
				var numero_oficios_anulada_2_pago = $("#numero_oficios_anulada_2_pago").val();
				var numero_oficios_anulada_3_pago = $("#numero_oficios_anulada_3_pago").val();
				var numero_oficios_anulada_4_pago = $("#numero_oficios_anulada_4_pago").val();
				var numero_oficios_anulada_5_pago = $("#numero_oficios_anulada_5_pago").val();
				var numero_oficios_anulada_6_pago = $("#numero_oficios_anulada_6_pago").val();
				var numero_oficios_anulada_7_pago = $("#numero_oficios_anulada_7_pago").val();
				var numero_oficios_anulada_8_pago = $("#numero_oficios_anulada_8_pago").val()

				
   				
		    	if (fecha_avoco == "")
		    	{
			    	
		    		$("#mensaje_fecha").text("Introduzca una Fecha");
		    		$("#mensaje_fecha").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_fecha").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if (hora_avoco == "")
		    	{
			    	
		    		$("#mensaje_hora").text("Introduzca una Hora");
		    		$("#mensaje_hora").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_hora").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	


		    	if (tipo_avoco == 0)
		    	{
			    	
		    		$("#mensaje_tipo_avoco").text("Seleccione Tipo Embargo");
		    		$("#mensaje_tipo_avoco").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_tipo_avoco").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	
		    	if(tipo_avoco == 9  && generar_oficio == 0){
					$("#mensaje_generar_oficio").text("Seleccione");
		    		$("#mensaje_generar_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if(tipo_avoco == 9  && anulada_oficios_pago == 0 && generar_oficio=="Si"){
					$("#mensaje_anulada_oficios_pago").text("Seleccione");
		    		$("#mensaje_anulada_oficios_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_anulada_oficios_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	
		    	if (tipo_acto == 0)
		    	{
			    	
		    		$("#mensaje_tipo_acto").text("Seleccione Tipo");
		    		$("#mensaje_tipo_acto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_tipo_acto").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if(tipo_avoco == 9  && cantidad_oficios_generar == 0 && generar_oficio=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				

		    	if(tipo_avoco == 9 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && asunto == "" ){
					$("#mensaje_asunto").text("Ingrese el Asunto");
		    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if(tipo_avoco == 9  && cantidad_oficios_generar == 1 && generar_oficio == "Si" &&  anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){
					$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
				if(tipo_avoco == 9 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && entidad_va_oficio == "" ){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(tipo_avoco == 9 && cantidad_oficios_generar == 2 && generar_oficio == "Si" ){
					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
				if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

					$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
		    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;

					}else{

						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					}
				



				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}



					
				}else
				{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					   
				}
				



				//aqui 3
				
				if(tipo_avoco == 9 && cantidad_oficios_generar == 3 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}

		
					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					
						
					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
			
								}





					// aqui 4
				if(tipo_avoco == 9 && cantidad_oficios_generar == 4 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

						$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
			    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						}

					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
			
								}














				if(tipo_avoco == 9 && cantidad_oficios_generar == 5 && generar_oficio == "Si"){

					 if(asunto == ""){
							$("#mensaje_asunto").text("Ingrese el Asunto");
				    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}
						else 
				    	{
				    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
				            
						}

						if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

							$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
				    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
							}
							
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	               
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
			

	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  
	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
		         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}
				           		


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		





									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
					       
			            
					}





				if(tipo_avoco == 9 && cantidad_oficios_generar == 6 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
						
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	


	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		

		           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}

			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
			         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
				          		



				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		


					           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								    
					}







				if(tipo_avoco == 9 && cantidad_oficios_generar == 7 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		
	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		 
	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		


	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		
	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			


		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		 
		         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		
			     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
			


				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		
				           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}


					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
						           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
						     
			            
					}
				






				if(tipo_avoco == 9 && cantidad_oficios_generar == 8 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
			

	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  
	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	


	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		
		           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}

			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		
			           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
						


				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		
				         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}
						

					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
					           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_8_pago==""){

										$("#mensaje_numero_oficios_anulada_8_pago").text("Ingrese # Oficio 8");
							    		$("#mensaje_numero_oficios_anulada_8_pago").fadeIn("slow"); //Muestra mensaje de error
							            return false;

										}else{

											$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
										}
										           		


						           		 if(entidad_va_oficio_7 == ""){
												$("#mensaje_entidad_va_oficio_7").text("Ingrese a quien va Dirigido");
									    		$("#mensaje_entidad_va_oficio_7").fadeIn("slow"); //Muestra mensaje de error
									            return false;
											}else{
										    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
									   		 }
							           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
				     
			            
			            
					}
				















				
				
				
				

		    	if(tipo_avoco == 9  && numero_oficio_embargo_cuenta == ""){
					$("#mensaje_numero_oficio_embargo_cuenta").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_embargo_cuenta").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_embargo_cuenta").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 9  && fecha_oficio_embargo_cuenta == ""){
					$("#mensaje_fecha_oficio_embargo_cuenta").text("Seleccione Fecha Oficio");
		    		$("#mensaje_fecha_oficio_embargo_cuenta").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_embargo_cuenta").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	/*if(tipo_avoco == 9  && tipo_cuenta == 0){
					$("#mensaje_tipo_cuenta").text("Seleccione Tipo Cuenta");
		    		$("#mensaje_tipo_cuenta").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_tipo_cuenta").fadeOut("slow"); //Muestra mensaje de error
		            
				}*/

		    	if(tipo_avoco == 9  && numero_cuenta == ""){
					$("#mensaje_numero_cuenta").text("Ingrese # Cuenta");
		    		$("#mensaje_numero_cuenta").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_cuenta").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	  
		    	if(tipo_avoco == 9  && nombre_banco == ""){
					$("#mensaje_nombre_banco").text("Ingrese Entidad Bancaria");
		    		$("#mensaje_nombre_banco").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_nombre_banco").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 9  && monto_retenido == ""){
					$("#mensaje_monto_retenido").text("Ingrese $ Valor");
		    		$("#mensaje_monto_retenido").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_monto_retenido").fadeOut("slow"); //Muestra mensaje de error
		            
				}



		    	
			       
		    	if(tipo_avoco == 9  && nombre_titular_cuenta == ""){
					$("#mensaje_nombre_titular_cuenta").text("Ingrese Nombre Titular");
		    		$("#mensaje_nombre_titular_cuenta").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_nombre_titular_cuenta").fadeOut("slow"); //Muestra mensaje de error
		            
				}  

		    	if(tipo_avoco == 9  && identificacion_titular_cuenta == ""){
					$("#mensaje_identificacion_titular_cuenta").text("Ingrese Identificación Titular");
		    		$("#mensaje_identificacion_titular_cuenta").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_identificacion_titular_cuenta").fadeOut("slow"); //Muestra mensaje de error
		            
				} 
			       
		    	if(tipo_avoco == 9  && depositario_judicial == ""){
					$("#mensaje_depositario_judicial").text("Ingrese Nombre Depositario Judicial");
		    		$("#mensaje_depositario_judicial").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_depositario_judicial").fadeOut("slow"); //Muestra mensaje de error
		            
				} 
				    
		    	if(tipo_avoco == 9  && identificacion_depositario_judicial == ""){
					$("#mensaje_identificacion_depositario_judicial").text("Ingrese Identificación Depositario");
		    		$("#mensaje_identificacion_depositario_judicial").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_identificacion_depositario_judicial").fadeOut("slow"); //Muestra mensaje de error
		            
				} 













		    	if(tipo_avoco == 16  && generar_oficio == 0){
					$("#mensaje_generar_oficio").text("Seleccione");
		    		$("#mensaje_generar_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 16  && anulada_oficios_pago == 0 && generar_oficio=="Si"){
					$("#mensaje_anulada_oficios_pago").text("Seleccione");
		    		$("#mensaje_anulada_oficios_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_anulada_oficios_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 16  && cantidad_oficios_generar == 0 && generar_oficio=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    
		    	if(tipo_avoco == 16 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && asunto == "" ){
					$("#mensaje_asunto").text("Ingrese el Asunto");
		    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 16  && cantidad_oficios_generar == 1 && generar_oficio == "Si" &&  anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){
					$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
		    	
				if(tipo_avoco == 16 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && entidad_va_oficio == "" ){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(tipo_avoco == 16 && cantidad_oficios_generar == 2 && generar_oficio == "Si" ){
					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					
				if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

					$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
		    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;

					}else{

						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					}
				

				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}



					
				}else
				{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					   
				}
				



				//aqui 3
				
				if(tipo_avoco == 16 && cantidad_oficios_generar == 3 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					
						
					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
			
									}





					// aqui 4
				if(tipo_avoco == 16 && cantidad_oficios_generar == 4 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

						$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
			    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						}

					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
				
							}














				if(tipo_avoco == 16 && cantidad_oficios_generar == 5 && generar_oficio == "Si"){

					 if(asunto == ""){
							$("#mensaje_asunto").text("Ingrese el Asunto");
				    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}
						else 
				    	{
				    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
				            
						}
						if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

							$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
				    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
							}
							
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	               
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
				

	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  

	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}

			

	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			       		



		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		

		           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}

			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		





									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						       
			            
					}





				if(tipo_avoco == 16 && cantidad_oficios_generar == 6 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
						
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}

			

	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		
	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		


	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		
	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
					

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		
		           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		
			         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
					


				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		


					           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
					    
					}







				if(tipo_avoco == 16 && cantidad_oficios_generar == 7 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
				
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
			
	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		 

	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
			

	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
					

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		 
		           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}

			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		

			         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
				

				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
				     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}
								           		


					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
						           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
							     
			            
					}
				






				if(tipo_avoco == 16 && cantidad_oficios_generar == 8 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  

	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		

	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	        			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		
		         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}

			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
			         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
					           		



				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		
				           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}
				

					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
						           		

					         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_8_pago==""){

										$("#mensaje_numero_oficios_anulada_8_pago").text("Ingrese # Oficio 8");
							    		$("#mensaje_numero_oficios_anulada_8_pago").fadeIn("slow"); //Muestra mensaje de error
							            return false;

										}else{

											$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
										}

						
						           		 if(entidad_va_oficio_7 == ""){
												$("#mensaje_entidad_va_oficio_7").text("Ingrese a quien va Dirigido");
									    		$("#mensaje_entidad_va_oficio_7").fadeIn("slow"); //Muestra mensaje de error
									            return false;
											}else{
										    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
									   		 }
							           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
				     
			            
			            
					}
				


		    	if(tipo_avoco == 16  && cantidad_retener == 0.00){
					$("#mensaje_cantidad_retener").text("Ingrese Cantidad");
		    		$("#mensaje_cantidad_retener").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_retener").fadeOut("slow"); //Muestra mensaje de error
		            
				} 


		    	//retencion desde aki cuentas
		    	if(tipo_avoco == 20  && generar_oficio == 0){
					$("#mensaje_generar_oficio").text("Seleccione");
		    		$("#mensaje_generar_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				if(tipo_avoco == 20  && anulada_oficios_pago == 0 && generar_oficio=="Si"){
					$("#mensaje_anulada_oficios_pago").text("Seleccione");
		    		$("#mensaje_anulada_oficios_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_anulada_oficios_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 20  && cantidad_oficios_generar == 0 && generar_oficio=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 20 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && asunto == "" ){
					$("#mensaje_asunto").text("Ingrese el Asunto");
		    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if(tipo_avoco == 20  && cantidad_oficios_generar == 1 && generar_oficio == "Si" &&  anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){
					$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		  	
				if(tipo_avoco == 20 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && entidad_va_oficio == "" ){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				
// dos

				if(tipo_avoco == 20 && cantidad_oficios_generar == 2 && generar_oficio == "Si" ){
					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}

				
				if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

					$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
		    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;

					}else{

						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					}
				
			



				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}



					
				}else
				{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					   
				}
				



				//aqui 3
				
				if(tipo_avoco == 20 && cantidad_oficios_generar == 3 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
				
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					
						
					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
		
								}





					// aqui 4
				if(tipo_avoco == 20 && cantidad_oficios_generar == 4 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


					
					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

						$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
			    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						}

					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
			
									}














				if(tipo_avoco == 20 && cantidad_oficios_generar == 5 && generar_oficio == "Si"){

					 if(asunto == ""){
							$("#mensaje_asunto").text("Ingrese el Asunto");
				    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}
						else 
				    	{
				    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
				            
						}
						if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

							$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
				    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
							}
					
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	               
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  

	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}


	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		
	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			


		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		
		     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		





									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
			       
			            
					}





				if(tipo_avoco == 20 && cantidad_oficios_generar == 6 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
				
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}

	
	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		
	    			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	


	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		
			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

						$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
			    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	


		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		
		     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		
			     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
			


				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		


					           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
				    
					}







				if(tipo_avoco == 20 && cantidad_oficios_generar == 7 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	
	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		 
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		
	    				if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}



		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		 
		     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		
			         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
			


				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		

				         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}

					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
						           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
				     
			            
					}
				






				if(tipo_avoco == 20 && cantidad_oficios_generar == 8 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
		
	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  

	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		

	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	    				if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
		

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
		         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}
				           		

			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		

			         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
				

				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		
				     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}
					

					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
						           		
					         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_8_pago==""){

										$("#mensaje_numero_oficios_anulada_8_pago").text("Ingrese # Oficio 8");
							    		$("#mensaje_numero_oficios_anulada_8_pago").fadeIn("slow"); //Muestra mensaje de error
							            return false;

										}else{

											$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
										}


						           		 if(entidad_va_oficio_7 == ""){
												$("#mensaje_entidad_va_oficio_7").text("Ingrese a quien va Dirigido");
									    		$("#mensaje_entidad_va_oficio_7").fadeIn("slow"); //Muestra mensaje de error
									            return false;
											}else{
										    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
									   		 }
							           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
						     
			            
			            
					}
				


				
		    	if(tipo_avoco == 20  && cuenta_retener1 == 0.00){
					$("#mensaje_cuenta_retener1").text("Ingrese Cantidad");
		    		$("#mensaje_cuenta_retener1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cuenta_retener1").fadeOut("slow"); //Muestra mensaje de error
		            
				} 
		    	
		     	if(tipo_avoco == 20  && nombre_entidad_cuenta == 0.00){
					$("#mensaje_nombre_entidad_cuenta").text("Ingrese entidad");
		    		$("#mensaje_nombre_entidad_cuenta").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_nombre_entidad_cuenta").fadeOut("slow"); //Muestra mensaje de error
		            
				} 
		   
		    

		    	if(tipo_avoco == 17  && generar_oficio == 0){
					$("#mensaje_generar_oficio").text("Seleccione");
		    		$("#mensaje_generar_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 17  && anulada_oficios_pago == 0 && generar_oficio=="Si"){
					$("#mensaje_anulada_oficios_pago").text("Seleccione");
		    		$("#mensaje_anulada_oficios_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_anulada_oficios_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 17  && cantidad_oficios_generar == 0 && generar_oficio=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 17 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && asunto == "" ){
					$("#mensaje_asunto").text("Ingrese el Asunto");
		    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if(tipo_avoco == 17  && cantidad_oficios_generar == 1 && generar_oficio == "Si" &&  anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){
					$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}
			
				if(tipo_avoco == 17 && cantidad_oficios_generar == 1 && generar_oficio == "Si" && entidad_va_oficio == "" ){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				
//dos

				if(tipo_avoco == 17 && cantidad_oficios_generar == 2 && generar_oficio == "Si" ){
					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
				if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				
				if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

					$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
		    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;

					}else{

						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					}
	


				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}



					
				}else
				{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
					   
				}
				



				//aqui 3
				
				if(tipo_avoco == 17 && cantidad_oficios_generar == 3 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					
						
					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
			
								}





					// aqui 4
				if(tipo_avoco == 17 && cantidad_oficios_generar == 4 && generar_oficio == "Si" ){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
			
					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}

					
					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

						$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
			    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						}

					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					}else
					{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
		
								}














				if(tipo_avoco == 17 && cantidad_oficios_generar == 5 && generar_oficio == "Si"){

					 if(asunto == ""){
							$("#mensaje_asunto").text("Ingrese el Asunto");
				    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}
						else 
				    	{
				    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
				            
						}
						if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

							$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
				    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
							}
			
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	               
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	

	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}



	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	        			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
		

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		
		     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		





									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
					       
			            
					}





				if(tipo_avoco == 17 && cantidad_oficios_generar == 6 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
					
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}


	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		
	        		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		


	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		

	    				if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
		

		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
		         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}
				           		


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		
			         		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
				


				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		


					           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
		    
					}







				if(tipo_avoco == 17 && cantidad_oficios_generar == 7 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
				
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	

	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		 

	    			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
		

	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		


	if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

						$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
			    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						}
			
		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		 
		           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}


			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		
			           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
					


				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		

				           		if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}

					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
						           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
							     
			            
					}
				






				if(tipo_avoco == 17 && cantidad_oficios_generar == 8 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else 
			    	{
			    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_1_pago==""){

						$("#mensaje_numero_oficios_anulada_1_pago").text("Ingrese # Oficio 1");
			    		$("#mensaje_numero_oficios_anulada_1_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						}
				
				    if(entidad_va_oficio == ""){
							$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
				            return false;
					}else{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
				    }
	                

					if(anulada_oficios_pago == "Si" && numero_oficios_anulada_2_pago==""){

						$("#mensaje_numero_oficios_anulada_2_pago").text("Ingrese # Oficio 2");
			    		$("#mensaje_numero_oficios_anulada_2_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	
	                if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
				    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			   		 }
	           		  

	    			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_3_pago==""){

						$("#mensaje_numero_oficios_anulada_3_pago").text("Ingrese # Oficio 3");
			    		$("#mensaje_numero_oficios_anulada_3_pago").fadeIn("slow"); //Muestra mensaje de error
			            return false;

						}else{

							$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						}
	

	           		    if(entidad_va_oficio_2 == ""){
							$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
				            return false;
						}else{
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
				   		 }
		           		
	           			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_4_pago==""){

							$("#mensaje_numero_oficios_anulada_4_pago").text("Ingrese # Oficio 4");
				    		$("#mensaje_numero_oficios_anulada_4_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
							}
				


		           		 if(entidad_va_oficio_3 == ""){
								$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
					            return false;
							}else{
						    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   		 }
			           		
		     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_5_pago==""){

							$("#mensaje_numero_oficios_anulada_5_pago").text("Ingrese # Oficio 5");
				    		$("#mensaje_numero_oficios_anulada_5_pago").fadeIn("slow"); //Muestra mensaje de error
				            return false;

							}else{

								$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
							}

			           		 if(entidad_va_oficio_4 == ""){
									$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
						    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
						            return false;
								}else{
							    $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						   		 }
				           		

			     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_6_pago==""){

								$("#mensaje_numero_oficios_anulada_6_pago").text("Ingrese # Oficio 6");
					    		$("#mensaje_numero_oficios_anulada_6_pago").fadeIn("slow"); //Muestra mensaje de error
					            return false;

								}else{

									$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
								}
				

				           		 if(entidad_va_oficio_5 == ""){
										$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
							    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
							            return false;
									}else{
								    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
							   		 }
					           		
				     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_7_pago==""){

									$("#mensaje_numero_oficios_anulada_7_pago").text("Ingrese # Oficio 7");
						    		$("#mensaje_numero_oficios_anulada_7_pago").fadeIn("slow"); //Muestra mensaje de error
						            return false;

									}else{

										$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
									}
					

					           		 if(entidad_va_oficio_6 == ""){
											$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
								    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
								            return false;
										}else{
									    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
								   		 }
						           		

					     			if(anulada_oficios_pago == "Si" && numero_oficios_anulada_8_pago==""){

										$("#mensaje_numero_oficios_anulada_8_pago").text("Ingrese # Oficio 8");
							    		$("#mensaje_numero_oficios_anulada_8_pago").fadeIn("slow"); //Muestra mensaje de error
							            return false;

										}else{

											$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
										}

						           		 if(entidad_va_oficio_7 == ""){
												$("#mensaje_entidad_va_oficio_7").text("Ingrese a quien va Dirigido");
									    		$("#mensaje_entidad_va_oficio_7").fadeIn("slow"); //Muestra mensaje de error
									            return false;
											}else{
										    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
									   		 }
							           		

									
							
					}
					else 
			    	{
					    $("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
					   $("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
					    $("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow"); //Muestra mensaje de error
					     
			            
			            
					}


				


				if (tipo_avoco == 17 && tipo_cartera == 0)
		    	{
			    	
		    		$("#mensaje_tipo_cartera").text("Seleccione");
		    		$("#mensaje_tipo_cartera").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_tipo_cartera").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				

		    	if (tipo_avoco == 17 && citado == "")
		    	{
			    	
		    		$("#mensaje_citado").text("Seleccione");
		    		$("#mensaje_citado").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_citado").fadeOut("slow"); //Muestra mensaje de error
		            
				}




		    	if (tipo_avoco == 17 && citado == "No")
		    	{


					if(disposicion_citar==""){
						$("#mensaje_disposicion_citar").text("Ingrese disposición para citar");
			    		$("#mensaje_disposicion_citar").fadeIn("slow"); //Muestra mensaje de error
			            return false;

					}else{

						$("#mensaje_disposicion_citar").fadeOut("slow"); //Muestra mensaje de error
						}
			    	
		    		
			    }
		    	else 
		    	{
		    		$("#mensaje_disposicion_citar").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				

		    	if (tipo_avoco == 17 && remplaza_impulsor == "")
		    	{
			    	
		    		$("#mensaje_remplaza_impulsor").text("Seleccione");
		    		$("#mensaje_remplaza_impulsor").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_remplaza_impulsor").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if (tipo_avoco == 17 && remplaza_impulsor == "Si")
		    	{


					if(impulsor_saliente_cambio_liquidador==""){
						$("#mensaje_impulsor_saliente_cambio_liquidador").text("Ingrese Nombre Abg. Anterior");
			    		$("#mensaje_impulsor_saliente_cambio_liquidador").fadeIn("slow"); //Muestra mensaje de error
			            return false;

					}else{

						$("#mensaje_impulsor_saliente_cambio_liquidador").fadeOut("slow"); //Muestra mensaje de error
						}
			    	
		    		
			    }
		    	else 
		    	{
		    		$("#mensaje_impulsor_saliente_cambio_liquidador").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if(tipo_avoco == 17  && cantidad_retener_avoco_conocimiento == 0.00){
					$("#mensaje_cantidad_retener_avoco_conocimiento").text("Ingrese Cantidad");
		    		$("#mensaje_cantidad_retener_avoco_conocimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_retener_avoco_conocimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				} 
		    	

				if(tipo_avoco == 17  && direccion_juzgado == ""){
					$("#mensaje_direccion_juzgado").text("Ingrese Dirección de su Juzgado");
		    		$("#mensaje_direccion_juzgado").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_direccion_juzgado").fadeOut("slow"); //Muestra mensaje de error
		            
				} 
		    	
		    
				
		    	
			}); 

	
				$( "#fecha_avoco" ).focus(function() {
					$("#mensaje_fecha").fadeOut("slow");
    			});

				$( "#hora_avoco" ).focus(function() {
					$("#mensaje_hora").fadeOut("slow");
    			});

				$( "#tipo_avoco" ).focus(function() {
					$("#mensaje_tipo_avoco").fadeOut("slow");
    			});

				$( "#tipo_acto" ).focus(function() {
					$("#mensaje_tipo_acto").fadeOut("slow");
    			});
			
				$( "#generar_oficio" ).focus(function() {
					$("#mensaje_generar_oficio").fadeOut("slow");
    			});

				$( "#cantidad_oficios_generar" ).focus(function() {
					$("#mensaje_cantidad_oficios_generar").fadeOut("slow");
    			});
    			
				$( "#entidad_va_oficio" ).focus(function() {
					$("#mensaje_entidad_va_oficio").fadeOut("slow");
    			});
				$( "#asunto" ).focus(function() {
					$("#mensaje_asunto").fadeOut("slow");
    			});	

				$( "#entidad_va_oficio_1" ).focus(function() {
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow");
    			});
					

				$( "#entidad_va_oficio_2" ).focus(function() {
					$("#mensaje_entidad_va_oficio_2").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_3" ).focus(function() {
					$("#mensaje_entidad_va_oficio_3").fadeOut("slow");
    			});

				$( "#entidad_va_oficio_4" ).focus(function() {
					$("#mensaje_entidad_va_oficio_4").fadeOut("slow");
    			});

			
				$( "#entidad_va_oficio_5" ).focus(function() {
					$("#mensaje_entidad_va_oficio_5").fadeOut("slow");
    			});

				$( "#entidad_va_oficio_6" ).focus(function() {
					$("#mensaje_entidad_va_oficio_6").fadeOut("slow");
    			});

				$( "#entidad_va_oficio_7" ).focus(function() {
					$("#mensaje_entidad_va_oficio_7").fadeOut("slow");
    			});

				$( "#anulada_oficios_pago" ).focus(function() {
					$("#mensaje_anulada_oficios_pago").fadeOut("slow");
    			});
    			
				$( "#numero_oficios_anulada_1_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_1_pago").fadeOut("slow");
    			});

				$( "#numero_oficios_anulada_2_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_2_pago").fadeOut("slow");
    			});
				
				$( "#numero_oficios_anulada_3_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_3_pago").fadeOut("slow");
    			});

				$( "#numero_oficios_anulada_4_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_4_pago").fadeOut("slow");
    			});

				$( "#numero_oficios_anulada_5_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_5_pago").fadeOut("slow");
    			});
				$( "#numero_oficios_anulada_6_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_6_pago").fadeOut("slow");
    			});
				$( "#numero_oficios_anulada_7_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_7_pago").fadeOut("slow");
    			});
				$( "#numero_oficios_anulada_8_pago" ).focus(function() {
					$("#mensaje_numero_oficios_anulada_8_pago").fadeOut("slow");
    			});
    			
				$( "#numero_oficio_embargo_cuenta" ).focus(function() {
					$("#mensaje_numero_oficio_embargo_cuenta").fadeOut("slow");
    			});

				$( "#fecha_oficio_embargo_cuenta" ).focus(function() {
					$("#mensaje_fecha_oficio_embargo_cuenta").fadeOut("slow");
    			});
				/*
				$( "#tipo_cuenta" ).focus(function() {
					$("#mensaje_tipo_cuenta").fadeOut("slow");
    			});
    			*/
				$( "#numero_cuenta" ).focus(function() {
					$("#mensaje_numero_cuenta").fadeOut("slow");
    			});

				$( "#nombre_banco" ).focus(function() {
					$("#mensaje_nombre_banco").fadeOut("slow");
    			});

				$( "#monto_retenido" ).focus(function() {
					$("#mensaje_monto_retenido").fadeOut("slow");
    			});

				
				$( "#nombre_titular_cuenta" ).focus(function() {
					$("#mensaje_nombre_titular_cuenta").fadeOut("slow");
    			});
    			
				$( "#identificacion_titular_cuenta" ).focus(function() {
					$("#mensaje_identificacion_titular_cuenta").fadeOut("slow");
    			});

				$( "#depositario_judicial" ).focus(function() {
					$("#mensaje_depositario_judicial").fadeOut("slow");
    			});

				$( "#identificacion_depositario_judicial" ).focus(function() {
					$("#mensaje_identificacion_depositario_judicial").fadeOut("slow");
    			});
				
				$( "#cantidad_retener" ).focus(function() {
					$("#mensaje_cantidad_retener").fadeOut("slow");
    			});
				$( "#cuenta_retener1" ).focus(function() {
					$("#mensaje_cuenta_retener1").fadeOut("slow");
    			});
				$( "#nombre_entidad_cuenta" ).focus(function() {
					$("#mensaje_nombre_entidad_cuenta").fadeOut("slow");
    			});
		
					$( "#tipo_cartera" ).focus(function() {
					$("#mensaje_tipo_cartera").fadeOut("slow");
    			});
				




				$( "#citado" ).focus(function() {
					$("#mensaje_citado").fadeOut("slow");
    			});
				
				$( "#disposicion_citar" ).focus(function() {
					$("#mensaje_disposicion_citar").fadeOut("slow");
    			});
				

				$( "#remplaza_impulsor" ).focus(function() {
					$("#mensaje_remplaza_impulsor").fadeOut("slow");
    			});
				
				$( "#impulsor_saliente_cambio_liquidador" ).focus(function() {
					$("#mensaje_impulsor_saliente_cambio_liquidador").fadeOut("slow");
    			});


				$( "#cantidad_retener_avoco_conocimiento" ).focus(function() {
					$("#mensaje_cantidad_retener_avoco_conocimiento").fadeOut("slow");
    			});

				$( "#direccion_juzgado" ).focus(function() {
					$("#mensaje_direccion_juzgado").fadeOut("slow");
    			});
		}); 

	</script>
	
	
		
		
      <script>
      $(document).ready(function(){
      $(".cantidades1").inputmask();
      });
	  </script>
 
	
		

    </head>
    <body style="background-color: #d9e3e4;">
    
      
       
       <?php
       
  
       $sel_juicio_referido_titulo_credito="";
       $sel_numero_titulo_credito="";
       $sel_identificacion_clientes="";
       $sel_id_provincias="";
       $sel_id_estados_procesales_juicios="";
       $sel_id_abogado="";
        
       $sel_nombre_impulsor_anterior="";
       $sel_nombre_secretario_anterior="";
       $sel_tipo_avoco="";
       $sel_id_estados_procesales_juicios_actualizar="";
  
       
       
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
       	
       	$sel_juicio_referido_titulo_credito = $_POST['juicio_referido_titulo_credito'];
       	$sel_numero_titulo_credito=$_POST['numero_titulo_credito'];
       	$sel_identificacion_clientes=$_POST['identificacion_clientes'];
       	$sel_id_provincias=$_POST['id_provincias'];
       	$sel_id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
       	$sel_id_abogado = $_POST['id_abogado'];
       
       	$sel_tipo_avoco= $_POST['tipo_avoco'];
       	$sel_id_estados_procesales_juicios_actualizar= $_POST['id_estados_procesales_juicios_actualizar'];
       	
       }
       
    
       
       
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("MatrizJuicios","Imprimir_Providencia_Embargo"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
         
                 <br> 
                 <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	<p align="justify"><b><font face="univers" size=3>***Estimados usuarios al generar un documento en el sistema se actualizara la fecha de última providencia y el estado procesal del juicio cuando su abogado SECRETARIO lo apruebe.***</font></b></p>
				
            	 </div>
                 <br> 
                        
         <div class="col-lg-12 col-md-12 col-xs-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos Embargo</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  							
  		<div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha:</p>
			  	<input type="date"  name="fecha_avoco" id="fecha_avoco" min="1800-01-01" max="2018-12-30" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_providencias;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha" class="errores"></div>
			    <input type="hidden"  name="id_juicios" id="id_juicios" value="<?php echo $datos['id_juicios']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_clientes" id="id_clientes" value="<?php echo $datos['id_clientes']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_titulo_credito" id="id_titulo_credito" value="<?php echo $datos['id_titulo_credito']; ?>" class="form-control"/ readonly>
			  
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Hora:</p>
			  	<input type="time"  name="hora_avoco" id="hora_avoco" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->hora_providencias;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_hora" class="errores"></div>
			    
		 </div>
		 
		  <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Cliente:</p>
			  	<input type="text"  name="nombres_clientes" id="nombres_clientes" value="<?php echo $datos['nombres_clientes']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" ># Juicio:</p>
			  	<input type="text"  name="juicio_referido_titulo_credito" id="juicio_referido_titulo_credito" value="<?php echo $datos['juicio_referido_titulo_credito']; ?>" class="form-control" readonly/> 
			    
		 </div>
		 
		 <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" ># Operación:</p>
			  	<input type="text"  name="numero_titulo_credito" id="numero_titulo_credito" value="<?php echo $datos['numero_titulo_credito']; ?>" class="form-control" readonly/> 
			    
		 </div>
    </div>
  		
  		
  		
  		
  		
  		       <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Tipo de Embargo<br><FONT FACE="arial" SIZE=2 COLOR=red>(Seleccionar el tipo de embargo obligatoriamente.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		         <div class="col-lg-6 col-md-6 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Embargo:</p>
			  	<select name="tipo_avoco" id="tipo_avoco"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="16">PROVIDENCIA RETENCIÓN (FONDOS)</option>
			  		<option value="17">PROVIDENCIA RETENCIÓN (FONDOS Y AVOCO CONOCIMIENTO + MEDIDAS)</option>
			  		<option value="9">PROVIDENCIA EMBARGO (CUENTA BANCARIA)</option>
			  		<option value="20">PROVIDENCIA RETENCIÓN (CUENTAS)</option>
			  		
			  		
			  		<!-- <option value="13">PROVIDENCIA EMBARGO (BIENES)</option> -->
			 	</select>
				<div id="mensaje_tipo_avoco" class="errores"></div>
	            </div>
	            
	            
	              <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p  class="formulario-subtitulo">Actualizar Estado Procesal:</p>
			  	<select name="id_estados_procesales_juicios_actualizar" id="id_estados_procesales_juicios_actualizar"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>" ><?php echo $res->nombre_estados_procesales_juicios;  ?> </option>
			            <?php } ?>
				</select>
                 <FONT FACE="arial" SIZE=1.9 COLOR=red>(Seleccionar solo si desea actualizar el estado procesal del jucio.)</FONT>
                 </div>
	                         <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Seleccione Tipo de Acto:</p>
			  	<select name="tipo_acto" id="tipo_acto"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="CÚMPLASE, OFÍCIESE Y NOTIFÍQUESE" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_acto == 'CÚMPLASE, OFÍCIESE Y NOTIFÍQUESE'){echo ' selected="selected" ' ;}else{}}}else{} ?>>CÚMPLASE, OFÍCIESE Y NOTIFÍQUESE</option> 
			  		<option value="CÚMPLASE, OFÍCIESE, CÍTESE Y NOTIFÍQUESE" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_acto == 'CÚMPLASE, OFÍCIESE, CÍTESE Y NOTIFÍQUESE'){echo ' selected="selected" ' ;}else{}}}else{} ?>>CÚMPLASE, OFÍCIESE, CÍTESE Y NOTIFÍQUESE</option> 
			  	 	<option value="CÚMPLASE, OFÍCIESE Y CÍTESE" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_acto == 'CÚMPLASE, OFÍCIESE Y CÍTESE'){echo ' selected="selected" ' ;}else{}}}else{} ?>>CÚMPLASE, OFÍCIESE Y CÍTESE</option> 
			
				</select>
				<div id="mensaje_tipo_acto" class="errores"></div>
	            </div>
	            <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio" id="generar_oficio"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->genero_oficio == 't'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Si</option>
						<option value="No" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->genero_oficio == 'f'){echo ' selected="selected" ' ;}else{}}}else{} ?>>No</option>
						
						
			    </select>
				<div id="mensaje_generar_oficio" class="errores"></div>
			    </div>
		        <div id="div_datos_generar_oficio" style="display: none;">
		        
		           <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 15px;'>
			  	<p  class="formulario-subtitulo">Anulada:</p>
			  	<select name="anulada_oficios_pago" id="anulada_oficios_pago"   class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si">Si</option>
						<option value="No">No</option>
			    </select>
				<div id="mensaje_anulada_oficios_pago" class="errores"></div>
			    </div>
			    
	            <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p  class="formulario-subtitulo"># Oficios a Generar:</p>
			  	<select name="cantidad_oficios_generar" id="cantidad_oficios_generar"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="1" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '1'){echo ' selected="selected" ' ;}else{}}}else{} ?>>1</option>
						<option value="2" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '2'){echo ' selected="selected" ' ;}else{}}}else{} ?>>2</option>
						<option value="3" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '3'){echo ' selected="selected" ' ;}else{}}}else{} ?>>3</option>
						<option value="4" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '4'){echo ' selected="selected" ' ;}else{}}}else{} ?>>4</option>
						<option value="5" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '5'){echo ' selected="selected" ' ;}else{}}}else{} ?>>5</option>
						<option value="6" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '6'){echo ' selected="selected" ' ;}else{}}}else{} ?>>6</option>
						<option value="7" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '7'){echo ' selected="selected" ' ;}else{}}}else{} ?>>7</option>
						<option value="8" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->cantidad_oficios_generados == '8'){echo ' selected="selected" ' ;}else{}}}else{} ?>>8</option>
						
						
			    </select>
				<div id="mensaje_cantidad_oficios_generar" class="errores"></div>
			    </div>
	             </div>
	            
	            
	            <br>
	             <div id="div_datos_cantidad_oficios" style="display: none; margin-top: 20px;">
	             
	           <div class="panel panel-default">
	             <div class="panel-body">
	            	<div class="row">
	            			<div class="col-lg-6 col-md-6 col-xs-6" style='margin-top: 10px;'>
	            				<p  class="formulario-subtitulo">Fecha Oficios</p>
	            				<input type="date"  name="fecha_oficios" id="fecha_oficios" min="1800-01-01" max="<?php echo date('Y-m-d')."+ 10 days";?>" value="<?php ?>" class="form-control "/>			
	            			</div>
	            			<div class="col-lg-6 col-md-6 col-xs-6" style='margin-top: 10px;'>
	            				<p  class="formulario-subtitulo">Texto Integro Providencia</p>
	            				<select name="texto_oficio" id="texto_oficio"  class="form-control" >
                			  			<option value="SI" >SI</option>
                						<option value="NO" >NO</option>		
                						
                			    </select>			
	            			</div>
	            			
	            		</div>
	            		<div class="row">
    	            	    <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
            			  		<p class="formulario-subtitulo" >Asunto Oficios:</p>
            			  		 <textarea type="text"  class="form-control" id="asunto" name="asunto" value=""  placeholder="Ejem.  Dentro del juicio coactivo No. xxx, seguido en contra de xxx xxx xxx, con CC. xxxxxxxxxx, en calidad de deudor principal y otros de la operación No. xxxxxxx, en su parte pertinente dispone: "><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->asunto_oficio;}}else{} ?></textarea>
                            	<div id="mensaje_asunto" class="errores"></div>
            	            </div>
            	        </div>
	           </div>
	           </div>
	             
	            <div class="panel panel-default">
	             <div class="panel-body">
	          
	             <div id="div_datos_anulada_1_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 1:</p>
			  	<input type="text"  name="numero_oficios_anulada_1_pago" id="numero_oficios_anulada_1_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_1_pago" class="errores"></div>
	            </div>
	            </div>
	             
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #1:</p>
			  	<input type="text"  name="entidad_va_oficio" id="entidad_va_oficio" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio" class="errores"></div>
	            </div>
	            
	            
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #1 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev" id="referencia_oficios_tipo_lev" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	            </div>
	           
	            
	            
	              
		        <div id="div_datos_cantidad_oficios_1" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            
	                <div id="div_datos_anulada_2_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 2:</p>
			  	<input type="text"  name="numero_oficios_anulada_2_pago" id="numero_oficios_anulada_2_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_2_pago" class="errores"></div>
	            </div>
	            </div>
	          
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #2:</p>
			  	<input type="text"  name="entidad_va_oficio_1" id="entidad_va_oficio_1" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_2;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_1" class="errores"></div>
	            </div>
	            
	           
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #2 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_1" id="referencia_oficios_tipo_lev_1" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_2;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	           </div>
		    
		    
		    
		        <div id="div_datos_cantidad_oficios_2" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	             
	                  <div id="div_datos_anulada_3_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 3:</p>
			  	<input type="text"  name="numero_oficios_anulada_3_pago" id="numero_oficios_anulada_3_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_3_pago" class="errores"></div>
	            </div>
	            </div>
	          
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #3:</p>
			  	<input type="text"  name="entidad_va_oficio_2" id="entidad_va_oficio_2" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_3;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_2" class="errores"></div>
	            </div>
	            
	           
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #3 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_2" id="referencia_oficios_tipo_lev_2" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_3;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	           </div>
	           
	           
	           
	            <div id="div_datos_cantidad_oficios_3" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	       
	         	<div id="div_datos_anulada_4_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 4:</p>
			  	<input type="text"  name="numero_oficios_anulada_4_pago" id="numero_oficios_anulada_4_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_4_pago" class="errores"></div>
	            </div>
	            </div>   
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #4:</p>
			  	<input type="text"  name="entidad_va_oficio_3" id="entidad_va_oficio_3" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_4;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_3" class="errores"></div>
	            </div>
	            
	          
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #4 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_3" id="referencia_oficios_tipo_lev_3" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_4;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	           </div>
	            
	           
         
         
                 <div id="div_datos_cantidad_oficios_4" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	             
	                 <div id="div_datos_anulada_5_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 5:</p>
			  	<input type="text"  name="numero_oficios_anulada_5_pago" id="numero_oficios_anulada_5_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_5_pago" class="errores"></div>
	            </div>
	            </div>
	          
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #5:</p>
			  	<input type="text"  name="entidad_va_oficio_4" id="entidad_va_oficio_4" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_5;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_4" class="errores"></div>
	            </div>
	            
	          
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #5 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_4" id="referencia_oficios_tipo_lev_4" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_5;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	           </div>
         
         
                 <div id="div_datos_cantidad_oficios_5" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	          
	                 <div id="div_datos_anulada_6_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 6:</p>
			  	<input type="text"  name="numero_oficios_anulada_6_pago" id="numero_oficios_anulada_6_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_6_pago" class="errores"></div>
	            </div>
	            </div>
	    
	    
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #6:</p>
			  	<input type="text"  name="entidad_va_oficio_5" id="entidad_va_oficio_5" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_6;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_5" class="errores"></div>
	            </div>
	            
	            
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #6 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_5" id="referencia_oficios_tipo_lev_5" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_6;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	           </div>
         
         
         
       		     <div id="div_datos_cantidad_oficios_6" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	       
	                 
	              <div id="div_datos_anulada_7_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 7:</p>
			  	<input type="text"  name="numero_oficios_anulada_7_pago" id="numero_oficios_anulada_7_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_7_pago" class="errores"></div>
	            </div>
	            </div>
	            
	   
	     
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #7:</p>
			  	<input type="text"  name="entidad_va_oficio_6" id="entidad_va_oficio_6" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_7;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_6" class="errores"></div>
	            </div>
	            
	            
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #7 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_6" id="referencia_oficios_tipo_lev_6" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_7;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	           </div>
         
         
                 <div id="div_datos_cantidad_oficios_7" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	    
	          <div id="div_datos_anulada_8_pago" style="display: none;">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número Oficio 8:</p>
			  	<input type="text"  name="numero_oficios_anulada_8_pago" id="numero_oficios_anulada_8_pago" value="" class="form-control" placeholder="Número Oficio"/> 
	            <div id="mensaje_numero_oficios_anulada_8_pago" class="errores"></div>
	            </div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #8:</p>
			  	<input type="text"  name="entidad_va_oficio_7" id="entidad_va_oficio_7" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_8;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_7" class="errores"></div>
	            </div>
	            
	           
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #8 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_7" id="referencia_oficios_tipo_lev_7" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_8;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            
	           </div>
	           </div>
	           </div>
	            
	            
	            </div>
	            </div>
	            </div>
  		
  		
  		
  			
  		        <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Datos Para la Providencia de Embargo<br><FONT FACE="arial" SIZE=2 COLOR=red>(Ingresar los datos requeridos.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		       
	            <div id="div_datos_embargo_cuenta" style="display: none;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	        	
                <div class="col-lg-8 col-md-8 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio:</p>
			  	<input type="text"  name="numero_oficio_embargo_cuenta" id="numero_oficio_embargo_cuenta" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_embargo_cuenta" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio_embargo_cuenta" id="fecha_oficio_embargo_cuenta" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_oficio_embargo;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_embargo_cuenta" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Cuenta:</p>
			  	<select name="tipo_cuenta" id="tipo_cuenta"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="ahorros"   <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->numero_oficio_3_levantamiento_providencias == 'ahorros'){echo ' selected="selected" ' ;}else{}}}else{} ?>>AHORROS</option>
			  		<option value="corriente" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->numero_oficio_3_levantamiento_providencias == 'corriente'){echo ' selected="selected" ' ;}else{}}}else{} ?>>CORRIENTE</option>
					
				</select>
				<div id="mensaje_tipo_cuenta" class="errores"></div>
	            </div>
			    
			    
			    
			    <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Cuenta:</p>
			  	<input type="text"  name="numero_cuenta" id="numero_cuenta" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_1_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_cuenta" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Entidad Bancaria:</p>
			  	<input type="text"  name="nombre_banco" id="nombre_banco" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_2_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="Banco o Cooperativa"/> 
	            <div id="mensaje_nombre_banco" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo" >Valor Retenido:</p>
			  	<input type="text"  name="monto_retenido" id="monto_retenido" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->valor_retenido_embargo;}}else{} ?>" class="form-control" placeholder="10000,00 (diez mil dólares de los Estados Unidos de América)"/> 
	            <div id="mensaje_monto_retenido" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombres Titular Cuenta:</p>
			  	<input type="text"  name="nombre_titular_cuenta" id="nombre_titular_cuenta" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->nombre_titular_cuenta_embargo;}}else{} ?>" class="form-control" placeholder="Nombre Titular"/> 
	            <div id="mensaje_nombre_titular_cuenta" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Titular:</p>
			  	<input type="text"  name="identificacion_titular_cuenta" id="identificacion_titular_cuenta" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->identificacion_titular_cuenta_embargo;}}else{} ?>" class="form-control" placeholder="CI Titular"/> 
	            <div id="mensaje_identificacion_titular_cuenta" class="errores"></div>
	            </div>
	            
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Depositario Judicial:</p>
			  	<input type="text"  name="depositario_judicial" id="depositario_judicial" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="Nombre Depositario"/> 
	            <div id="mensaje_depositario_judicial" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Depositario:</p>
			  	<input type="text"  name="identificacion_depositario_judicial" id="identificacion_depositario_judicial" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->identificacion_depositario_embargo;}}else{} ?>" class="form-control" placeholder="CI Depositario"/> 
	            <div id="mensaje_identificacion_depositario_judicial" class="errores"></div>
	            </div>
	            </div>
	           </div> 
	            
	              
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	           <div class="panel panel-default">
	             <div class="panel-body">
	        	
	          <div class="col-lg-8 col-md-8 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio (Opcional 2):</p>
			  	<input type="text"  name="numero_oficio_embargo_cuenta_2" id="numero_oficio_embargo_cuenta_2" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_embargo_cuenta_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio (Opcional 2):</p>
			  	<input type="date"  name="fecha_oficio_embargo_cuenta_2" id="fecha_oficio_embargo_cuenta_2" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_embargo_cuenta_2" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Cuenta (Opcional 2):</p>
			  	<select name="tipo_cuenta_2" id="tipo_cuenta_2"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="ahorros">AHORROS</option>
			  		<option value="corriente">CORRIENTE</option>
					
				</select>
				<div id="mensaje_tipo_cuenta_2" class="errores"></div>
	            </div>
			    
			    
			    
			    <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Cuenta (Opcional 2):</p>
			  	<input type="text"  name="numero_cuenta_2" id="numero_cuenta_2" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_cuenta_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Entidad Bancaria (Opcional 2):</p>
			  	<input type="text"  name="nombre_banco_2" id="nombre_banco_2" value="" class="form-control" placeholder="Banco o Cooperativa"/> 
	            <div id="mensaje_nombre_banco_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo" >Valor Retenido (Opcional 2):</p>
			  	<input type="text"  name="monto_retenido_2" id="monto_retenido_2" value="" class="form-control" placeholder="10000,00 (diez mil dólares de los Estados Unidos de América)"/> 
	            <div id="mensaje_monto_retenido_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombres Titular Cuenta (Opcional 2):</p>
			  	<input type="text"  name="nombre_titular_cuenta_2" id="nombre_titular_cuenta_2" value="" class="form-control" placeholder="Nombre Titular"/> 
	            <div id="mensaje_nombre_titular_cuenta_2" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Titular(2):</p>
			  	<input type="text"  name="identificacion_titular_cuenta_2" id="identificacion_titular_cuenta_2" value="" class="form-control" placeholder="CI Titular"/> 
	            <div id="mensaje_identificacion_titular_cuenta_2" class="errores"></div>
	            </div>
	            
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Depositario Judicial(2):</p>
			  	<input type="text"  name="depositario_judicial_2" id="depositario_judicial_2" value="" class="form-control" placeholder="Nombre Depositario"/> 
	            <div id="mensaje_depositario_judicial_2" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Depositario(2):</p>
			  	<input type="text"  name="identificacion_depositario_judicial_2" id="identificacion_depositario_judicial_2" value="" class="form-control" placeholder="CI Depositario"/> 
	            <div id="mensaje_identificacion_depositario_judicial_2" class="errores"></div>
	            </div>
	          </div>
	          </div>
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	           <div class="panel panel-default">
	             <div class="panel-body">
	        	
	          <div class="col-lg-8 col-md-8 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio (Opcional 3):</p>
			  	<input type="text"  name="numero_oficio_embargo_cuenta_3" id="numero_oficio_embargo_cuenta_3" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_embargo_cuenta_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio (Opcional 3):</p>
			  	<input type="date"  name="fecha_oficio_embargo_cuenta_3" id="fecha_oficio_embargo_cuenta_3" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_embargo_cuenta_3" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Cuenta (Opcional 3):</p>
			  	<select name="tipo_cuenta_3" id="tipo_cuenta_3"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="ahorros">AHORROS</option>
			  		<option value="corriente">CORRIENTE</option>
					
				</select>
				<div id="mensaje_tipo_cuenta_3" class="errores"></div>
	            </div>
			    
			    
			    
			    <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Cuenta (Opcional 3):</p>
			  	<input type="text"  name="numero_cuenta_3" id="numero_cuenta_3" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_cuenta_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Entidad Bancaria (Opcional 3):</p>
			  	<input type="text"  name="nombre_banco_3" id="nombre_banco_3" value="" class="form-control" placeholder="Banco o Cooperativa"/> 
	            <div id="mensaje_nombre_banco_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo" >Valor Retenido (Opcional 3):</p>
			  	<input type="text"  name="monto_retenido_3" id="monto_retenido_3" value="" class="form-control" placeholder="10000,00 (diez mil dólares de los Estados Unidos de América)"/> 
	            <div id="mensaje_monto_retenido_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombres Titular Cuenta (Opcional 3):</p>
			  	<input type="text"  name="nombre_titular_cuenta_3" id="nombre_titular_cuenta_3" value="" class="form-control" placeholder="Nombre Titular"/> 
	            <div id="mensaje_nombre_titular_cuenta_3" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Titular(3):</p>
			  	<input type="text"  name="identificacion_titular_cuenta_3" id="identificacion_titular_cuenta_3" value="" class="form-control" placeholder="CI Titular"/> 
	            <div id="mensaje_identificacion_titular_cuenta_3" class="errores"></div>
	            </div>
	            
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Depositario Judicial(3):</p>
			  	<input type="text"  name="depositario_judicial_3" id="depositario_judicial_3" value="" class="form-control" placeholder="Nombre Depositario"/> 
	            <div id="mensaje_depositario_judicial_3" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Depositario(3):</p>
			  	<input type="text"  name="identificacion_depositario_judicial_3" id="identificacion_depositario_judicial_3" value="" class="form-control" placeholder="CI Depositario"/> 
	            <div id="mensaje_identificacion_depositario_judicial_3" class="errores"></div>
	            </div>
	          </div>
	          </div>
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	           <div class="panel panel-default">
	             <div class="panel-body">
	        	
	          <div class="col-lg-8 col-md-8 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio (Opcional 4):</p>
			  	<input type="text"  name="numero_oficio_embargo_cuenta_4" id="numero_oficio_embargo_cuenta_4" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_embargo_cuenta_4" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio (Opcional 4):</p>
			  	<input type="date"  name="fecha_oficio_embargo_cuenta_4" id="fecha_oficio_embargo_cuenta_4" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_embargo_cuenta_4" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Cuenta (Opcional 4):</p>
			  	<select name="tipo_cuenta_4" id="tipo_cuenta_4"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="ahorros">AHORROS</option>
			  		<option value="corriente">CORRIENTE</option>
					
				</select>
				<div id="mensaje_tipo_cuenta_4" class="errores"></div>
	            </div>
			    
			    
			    
			    <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Cuenta (Opcional 4):</p>
			  	<input type="text"  name="numero_cuenta_4" id="numero_cuenta_4" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_cuenta_4" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Entidad Bancaria (Opcional 4):</p>
			  	<input type="text"  name="nombre_banco_4" id="nombre_banco_4" value="" class="form-control" placeholder="Banco o Cooperativa"/> 
	            <div id="mensaje_nombre_banco_4" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo" >Valor Retenido (Opcional 4):</p>
			  	<input type="text"  name="monto_retenido_4" id="monto_retenido_4" value="" class="form-control" placeholder="10000,00 (diez mil dólares de los Estados Unidos de América)"/> 
	            <div id="mensaje_monto_retenido_4" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombres Titular Cuenta (Opcional 4):</p>
			  	<input type="text"  name="nombre_titular_cuenta_4" id="nombre_titular_cuenta_4" value="" class="form-control" placeholder="Nombre Titular"/> 
	            <div id="mensaje_nombre_titular_cuenta_4" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Titular(4):</p>
			  	<input type="text"  name="identificacion_titular_cuenta_4" id="identificacion_titular_cuenta_4" value="" class="form-control" placeholder="CI Titular"/> 
	            <div id="mensaje_identificacion_titular_cuenta_4" class="errores"></div>
	            </div>
	            
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Depositario Judicial(4):</p>
			  	<input type="text"  name="depositario_judicial_4" id="depositario_judicial_4" value="" class="form-control" placeholder="Nombre Depositario"/> 
	            <div id="mensaje_depositario_judicial_4" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Depositario(4):</p>
			  	<input type="text"  name="identificacion_depositario_judicial_4" id="identificacion_depositario_judicial_4" value="" class="form-control" placeholder="CI Depositario"/> 
	            <div id="mensaje_identificacion_depositario_judicial_4" class="errores"></div>
	            </div>
	          </div>
	          </div>
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	          
	           <div class="panel panel-default">
	             <div class="panel-body">
	        	
	          <div class="col-lg-8 col-md-8 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio (Opcional 5):</p>
			  	<input type="text"  name="numero_oficio_embargo_cuenta_5" id="numero_oficio_embargo_cuenta_5" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_embargo_cuenta_5" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio (Opcional 5):</p>
			  	<input type="date"  name="fecha_oficio_embargo_cuenta_5" id="fecha_oficio_embargo_cuenta_5" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_embargo_cuenta_5" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Cuenta (Opcional 5):</p>
			  	<select name="tipo_cuenta_5" id="tipo_cuenta_5"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="ahorros">AHORROS</option>
			  		<option value="corriente">CORRIENTE</option>
					
				</select>
				<div id="mensaje_tipo_cuenta_5" class="errores"></div>
	            </div>
			    
			    
			    
			    <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Cuenta (Opcional 5):</p>
			  	<input type="text"  name="numero_cuenta_5" id="numero_cuenta_5" value="" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_cuenta_5" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Entidad Bancaria (Opcional 5):</p>
			  	<input type="text"  name="nombre_banco_5" id="nombre_banco_5" value="" class="form-control" placeholder="Banco o Cooperativa"/> 
	            <div id="mensaje_nombre_banco_5" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo" >Valor Retenido (Opcional 5):</p>
			  	<input type="text"  name="monto_retenido_5" id="monto_retenido_5" value="" class="form-control" placeholder="10000,00 (diez mil dólares de los Estados Unidos de América)"/> 
	            <div id="mensaje_monto_retenido_5" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombres Titular Cuenta (Opcional 5):</p>
			  	<input type="text"  name="nombre_titular_cuenta_5" id="nombre_titular_cuenta_5" value="" class="form-control" placeholder="Nombre Titular"/> 
	            <div id="mensaje_nombre_titular_cuenta_5" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Titular(5):</p>
			  	<input type="text"  name="identificacion_titular_cuenta_5" id="identificacion_titular_cuenta_5" value="" class="form-control" placeholder="CI Titular"/> 
	            <div id="mensaje_identificacion_titular_cuenta_5" class="errores"></div>
	            </div>
	            
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Depositario Judicial(5):</p>
			  	<input type="text"  name="depositario_judicial_5" id="depositario_judicial_5" value="" class="form-control" placeholder="Nombre Depositario"/> 
	            <div id="mensaje_depositario_judicial_5" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p class="formulario-subtitulo" >CI Depositario(5):</p>
			  	<input type="text"  name="identificacion_depositario_judicial_5" id="identificacion_depositario_judicial_5" value="" class="form-control" placeholder="CI Depositario"/> 
	            <div id="mensaje_identificacion_depositario_judicial_5" class="errores"></div>
	            </div>
	          </div>
	          </div>
	          
	          
	          
	          
	          
	          
	          
	          
	            
	          </div> 
	          
	          
	         
	          
	          
	           <div id="div_datos_retencion_fondos" style="display: none;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	        	
                <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p class="formulario-subtitulo" >Cantidad a Retener:</p>
			  	<input type="text"  class='form-control cantidades1' id='cantidad_retener' name='cantidad_retener' value='<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->valor_retencion_fondos;}}else{ echo "0";}?>' 
			  	 data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false">
			  	
	            <div id="mensaje_cantidad_retener" class="errores"></div>
	            </div>
	            
	            
	            
	            </div>
	            </div>
	          </div>
	          
	                <div id="div_datos_retencion_cuentas" style="display: none;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	        	
                <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p class="formulario-subtitulo" >Cantidad a Retener:</p>
			  	<input type="text"  class='form-control cantidades1' id='cuenta_retener' name='cuenta_retener' value='<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->valor_retencion_cuentas;}}else{ echo "0";}?>' 
			  	 data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false">
			  	  <div id="mensaje_cuenta_retener" class="errores"></div>
	          
	              </div>
	         <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombre Entidad:</p>
			  	<input type="text"  name="nombre_entidad_cuenta" id="nombre_entidad_cuenta" value="" class="form-control" placeholder="Entidad"/> 
	            <div id="mensaje_nombre_entidad_cuenta_1" class="errores"></div>
	            </div>
	            
	               <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 16px;">
		                          <p class="formulario-subtitulo" >Dispone 8.-: (Opcional)</p>	
                                  <textarea type="text"  class="form-control" id="disponer_5" name="disponer_5" value=""  placeholder="Ejem.  Agréguese al proceso."><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->disponer_5;}}else{} ?></textarea>
                  <FONT FACE="arial" SIZE=2 COLOR=red>(Ingrese el texto en el siguiente campo, sin incluir el numeral <b>7.- </b> no olvide poner punto y raya al final del texto.-)</FONT>
			
                 <div id="mensaje_dispone_" class="errores"></div>
                 </div>
	            
	            </div>
	            </div>
	          </div>
	          
	         
	          
	          
	          
	           <div id="div_datos_retencion_fondos_avoco_conocimiento" style="display: none;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	        	
	        	<div class="col-lg-6 col-md-6 col-xs-12">
			  	<p  class="formulario-subtitulo">Tipo Cartera:</p>
			  	<select name="tipo_cartera" id="tipo_cartera"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="nueva_cartera">Nueva Cartera</option>
						<option value="antigua_cartera">Antigua Cartera</option>
				</select>
			    <div id="mensaje_tipo_cartera" class="errores"></div>
			    </div>
	            
	            
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p  class="formulario-subtitulo">Citado:</p>
			  	<select name="citado" id="citado"  class="form-control" >
			  		<option value="">--Seleccione--</option>
						<option value="Si">Si</option>
						<option value="No">No</option>
				</select>
			    <div id="mensaje_citado" class="errores"></div>
			    </div>
	            
	             
	             
	            <div id="div_citado" style="display: none;">
	            <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 10px;">
		                          <p class="formulario-subtitulo" >Disposición para Citar:</p>
		                          <textarea type="text"  class="form-control" id="disposicion_citar" name="disposicion_citar" value=""  placeholder="Ingrese solo el texto sin numeral."></textarea>
                                    <FONT FACE="arial" SIZE=1.9 COLOR=red>(Ingrese solo el texto sin numeral.)</FONT>
              
                                   <div id="mensaje_disposicion_citar" class="errores"></div>
	            </div>
	            </div>
	             
	             
	        	
	        	<div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 15px;'>
			  	<p  class="formulario-subtitulo">Reemplazar Impulsor:</p>
			  	<select name="remplaza_impulsor" id="remplaza_impulsor"  class="form-control" >
			  	<option value="">--Seleccione--</option> 
			  		<option value="No">No</option> 
			  		<option value="Si">Si</option> 
			  	
				</select>
				<div id="mensaje_remplaza_impulsor" class="errores"></div>
	            </div>
	          
	         
	            <div id="div_impulsor_cambio_liquidador" style="display: none;">
	            <div class="col-lg-8 col-md-8 col-xs-12" style='margin-top: 15px;'>
			  	<p class="formulario-subtitulo" >Nombre Impulsor Anterior:</p>
			  	<input type="text"  name="impulsor_saliente_cambio_liquidador" id="impulsor_saliente_cambio_liquidador" value="" class="form-control" placeholder="Ejem1.  de la Abg. xxx xxxx   Ejem2.  del Abg. xxx xxxx"/> 
	           <FONT FACE="arial" SIZE=1.9 COLOR=red>(Ingrese preposición dependiendo el sexo del abogado(a).)</FONT>
                <div id="mensaje_impulsor_saliente_cambio_liquidador" class="errores"></div>
	            </div>
	            </div>
	        	
	        	<br>
                <div class="col-lg-4 col-md-4 col-xs-12"  style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Cantidad a Retener:</p>
			  	<input type="text"  class='form-control cantidades1' id='cantidad_retener_avoco_conocimiento' name='cantidad_retener_avoco_conocimiento' value='0' 
			  	 data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false">
			  	
	            <div id="mensaje_cantidad_retener_avoco_conocimiento" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 10px;">
		                          <p class="formulario-subtitulo" >Dirección Juzgado:</p>
                                  <textarea type="text"  class="form-control" id="direccion_juzgado" name="direccion_juzgado" value=""  placeholder="Ejem. calle Veintimilla E9-26 y Leonidas Plaza, Edf. Uziel 2do. Piso of. 203 de la ciudad de Quito"></textarea>
                                   <div id="mensaje_direccion_juzgado" class="errores"></div>
	            </div>
	            
	            <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 10px;">
		                          <p class="formulario-subtitulo" >Disposiciones (Opcional: Si desea disponer ingrese el texto aqui):</p>
                                  <textarea type="text"  class="form-control" id="referencia" name="referencia" value=""  placeholder="Si esta citado empieze con el numeral 2.3.- Si no esta citado empieze con el numeral 3.3.-"></textarea>
                                   <div id="mensaje_referencia" class="errores"></div>
	            </div>
	            
	            </div>
	            </div>
	          </div>
	          
	          
	          
	          
	          
	          
	          <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <br><p align="justify"><font face="arial" size=2><b>NOTA:</b> Estimados usuarios el sistema automáticamente llena en la razón el siguiente texto.<br><b>RAZÓN.- </b> Siento por tal, que no se notifica con esta providencia a los coactivados, por no haber señalado domicilio judicial o correo electrónico para el efecto, en la ciudad de xxxx, "Fecha" xx xx xxxx xx xxx.- <b>LO CERTIFICO.-</b></font></p>
				 <FONT FACE="arial" SIZE=2 COLOR=red>(Si necesita cambiar el texto de la razón ingreselo en el siguiente campo, sin incluir las palabras <b>RAZÓN.- </b> y <b> LO CERTIFICO.-</b>)</FONT>
			  </div>
				   
             <div class="col-xs-12 col-md-12 col-lg-12" >
		                          <p class="formulario-subtitulo" >Razón:</p>
                                  <textarea type="text"  class="form-control" id="razon_avoco" name="razon_avoco" value=""  placeholder="Ingrese Razón"><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->razon_providencias;}}else{}?></textarea>
                                  
             </div>
  		
  		
	  		<div class="col-lg-12 col-md-12 col-xs-12 " style="text-align: center; margin-top: 10px">
	  		 <button type="submit" id="generar" name="generar" value=""   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Generar Providencia</button>         
		    </div>
  		
  		        </div>
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
    
  

    
