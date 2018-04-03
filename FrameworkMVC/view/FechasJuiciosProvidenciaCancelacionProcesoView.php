  	 

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
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
		
		
	
		
		
		
		
      
      <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 1 || tipo_avoco== 14 )
          {
       	   $("#div_datos_pago_total").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_pago_total").fadeOut("slow");
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 1 || tipo_avoco== 14)
              {
           	   $("#div_datos_pago_total").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_pago_total").fadeOut("slow");
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 1 || tipo_avoco == 14 ) 
          {
       	   $("#div_datos_agregar_disposicion_pago_total").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_agregar_disposicion_pago_total").fadeOut("slow");
       	   }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 1 || tipo_avoco == 14)
              {
           	   $("#div_datos_agregar_disposicion_pago_total").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_agregar_disposicion_pago_total").fadeOut("slow");
           	   }
              
              
		    });
	}); 	
	   
      </script>
      
      
        <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 15 || tipo_avoco == 8 ) 
          {
       	   $("#div_datos_agregar_disposicion").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_agregar_disposicion").fadeOut("slow");
       	   }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 15 || tipo_avoco == 8)
              {
           	   $("#div_datos_agregar_disposicion").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_agregar_disposicion").fadeOut("slow");
           	   }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
        <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 15) 
          {
       	   $("#div_impulsor_activar").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_impulsor_activar").fadeOut("slow");
       	   }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 15)
              {
           	   $("#div_impulsor_activar").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_impulsor_activar").fadeOut("slow");
           	   }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 14) 
          {
       	   $("#div_impulsor_activar_pago_total").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_impulsor_activar_pago_total").fadeOut("slow");
       	   }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 14)
              {
           	   $("#div_impulsor_activar_pago_total").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_impulsor_activar_pago_total").fadeOut("slow");
           	   }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
         
        <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 8 || tipo_avoco == 13 || tipo_avoco == 15)
          {
       	   $("#div_datos_reestructuracion").fadeIn("slow");
       	 
          }
       	
          else
          {
       	   $("#div_datos_reestructuracion").fadeOut("slow");
       	  $("#div_datos_impulsor").fadeOut("slow");
    	  $("#div_datos_secretario").fadeOut("slow");
    	
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 8 || tipo_avoco == 13 || tipo_avoco == 15)
              {
           	   $("#div_datos_reestructuracion").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_reestructuracion").fadeOut("slow");
           	  $("#div_datos_impulsor").fadeOut("slow");
        	  $("#div_datos_secretario").fadeOut("slow");
     
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
          
      $("#remplaza_impulsor_pago_total").click(function() {
			
          var remplaza_impulsor = $(this).val();
			
          if(remplaza_impulsor == "Si")
          {
       	   $("#div_impulsor_cambio_liquidador_pago_total").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_impulsor_cambio_liquidador_pago_total").fadeOut("slow");
         
         
     	
          
          }
         
	    });
	    
	    $("#remplaza_impulsor_pago_total").change(function() {
			
              
              var remplaza_impulsor = $(this).val();
				
              
              if(remplaza_impulsor == "Si")
              {
           	   $("#div_impulsor_cambio_liquidador_pago_total").fadeIn("slow");
              }
           	
              else
              {
              $("#div_impulsor_cambio_liquidador_pago_total").fadeOut("slow");
           
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
           $("#div_datos_cantidad_oficios_res_1").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_res_2").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_res_3").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_res_4").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
     	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
           
      
    	
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
              $("#div_datos_cantidad_oficios_res_1").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_2").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_3").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_4").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
         	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
         	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
         	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
            
     
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
         <script type="text/javascript">
      $(document).ready(function(){
          
      $("#generar_oficio_pago_total").click(function() {
			
          var generar_oficio_pago_total = $(this).val();
			
          if(generar_oficio_pago_total == "Si")
          {
       	   $("#div_datos_generar_oficio_pago_total").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_datos_generar_oficio_pago_total").fadeOut("slow");
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
	    
	    $("#generar_oficio_pago_total").change(function() {
			
              
              var generar_oficio_pago_total = $(this).val();
				
              
              if(generar_oficio_pago_total == "Si")
              {
           	   $("#div_datos_generar_oficio_pago_total").fadeIn("slow");
              }
           	
              else
              {
              $("#div_datos_generar_oficio_pago_total").fadeOut("slow");
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
          
      $("#cantidad_oficios_generar_1").click(function() {
			
          var cantidad_oficios_generar_1 = $(this).val();
			
          if(cantidad_oficios_generar_1 == "1")
          {
       	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
       	 
          }
       	
          else  if(cantidad_oficios_generar_1 == "2")
              
          {
        	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
              	
          }

          else  if(cantidad_oficios_generar_1 == "3")
              
          {
        	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
               
          }
          else  if(cantidad_oficios_generar_1 == "4")
              
          {
        	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
               
          }
         else  if(cantidad_oficios_generar_1 == "5")
              
          {
        	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
        	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
               
          }
         else  if(cantidad_oficios_generar_1 == "6")
             
         {
       	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_6").fadeIn("slow"); 
         }
 		else  if(cantidad_oficios_generar_1 == "7")
             
         {
       	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
       	   $("#div_datos_cantidad_oficios_res_6").fadeIn("slow"); 
           $("#div_datos_cantidad_oficios_res_7").fadeIn("slow"); 
         }
 		else  if(cantidad_oficios_generar_1 == "8")
            
        {
      	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
      	   $("#div_datos_cantidad_oficios_res_6").fadeIn("slow"); 
           $("#div_datos_cantidad_oficios_res_7").fadeIn("slow"); 
           $("#div_datos_cantidad_oficios_res_8").fadeIn("slow"); 
        }

          else{

        	  $("#div_datos_cantidad_oficios_res_1").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_2").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_3").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_4").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");

          }
         
	    });
	    
	    $("#cantidad_oficios_generar_1").change(function() {
			
              
              var cantidad_oficios_generar_1 = $(this).val();
          	
              if(cantidad_oficios_generar_1 == "1")
              {
           	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
           	  $("#div_datos_cantidad_oficios_res_2").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_3").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_4").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
        	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
           	 
              }
           	
              else  if(cantidad_oficios_generar_1 == "2")
                  
              {
            	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_3").fadeOut("slow");
             	   $("#div_datos_cantidad_oficios_res_4").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
              }

              else  if(cantidad_oficios_generar_1 == "3")
                  
              {
            	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_4").fadeOut("slow");
            	   $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
                   
              }
              else  if(cantidad_oficios_generar_1 == "4")
                  
              {
            	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
              }


			 else  if(cantidad_oficios_generar_1 == "5")
                  
              {
            	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
            	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
             	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
             	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
              }


			 else  if(cantidad_oficios_generar_1 == "6")
                 
             {
           	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
            	  $("#div_datos_cantidad_oficios_res_6").fadeIn("slow");
            	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
             }


 			else  if(cantidad_oficios_generar_1 == "7")
                 
             {
           	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
           	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
            	  $("#div_datos_cantidad_oficios_res_6").fadeIn("slow");
            	  $("#div_datos_cantidad_oficios_res_7").fadeIn("slow");
            	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");
             }

 			else  if(cantidad_oficios_generar_1 == "8")
                
            {
          	   $("#div_datos_cantidad_oficios_res_1").fadeIn("slow");
          	   $("#div_datos_cantidad_oficios_res_2").fadeIn("slow");
          	   $("#div_datos_cantidad_oficios_res_3").fadeIn("slow");
          	   $("#div_datos_cantidad_oficios_res_4").fadeIn("slow");
          	   $("#div_datos_cantidad_oficios_res_5").fadeIn("slow");
           	  $("#div_datos_cantidad_oficios_res_6").fadeIn("slow");
           	  $("#div_datos_cantidad_oficios_res_7").fadeIn("slow");
           	  $("#div_datos_cantidad_oficios_res_8").fadeIn("slow");
            }

              
              else{

            	  $("#div_datos_cantidad_oficios_res_1").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_2").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_3").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_4").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_5").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_6").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_7").fadeOut("slow");
            	  $("#div_datos_cantidad_oficios_res_8").fadeOut("slow");

              }
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#reemplazar").click(function() {
			
          var reemplazar = $(this).val();
			
          if(reemplazar == 3)
          {
       	   $("#div_datos_impulsor").fadeIn("slow");
       	   $("#div_datos_secretario").fadeIn("slow");
          }
       	
          else if (reemplazar == 2)
          {
        	  $("#div_datos_impulsor").fadeIn("slow");
        	  
       	  
          }
          else if (reemplazar == 1)
          {
        	  $("#div_datos_secretario").fadeIn("slow");
        	  
       	  
          }
          else{
        	  $("#div_datos_impulsor").fadeOut("slow");
        	  $("#div_datos_secretario").fadeOut("slow");
        	  
              }
         
	    });
	    
	    $("#reemplazar").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(reemplazar == 3)
              {
           	   $("#div_datos_impulsor").fadeIn("slow");
           	   $("#div_datos_secretario").fadeIn("slow");
              }
           	
              else if (reemplazar == 2)
              {
            	  $("#div_datos_impulsor").fadeIn("slow");
            	  
           	  
              }
              else if (reemplazar == 1)
              {
            	  $("#div_datos_secretario").fadeIn("slow");
            	  
           	  
              }
              else{
            	  $("#div_datos_impulsor").fadeOut("slow");
            	  $("#div_datos_secretario").fadeOut("slow");
            	  
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
		     	var nombre_impulsor_anterior = $("#nombre_impulsor_anterior").val();
			    var nombre_secretario_anterior = $("#nombre_secretario_anterior").val();
			    var tipo_avoco = $("#tipo_avoco").val();
			    var tipo_ley = $("#tipo_ley").val();
				   
				    var numero_liquidacion = $("#numero_liquidacion").val();
			    var fecha_auto_pago = $("#fecha_auto_pago").val();

			    var numero_oficio = $("#numero_oficio").val();
			    var fecha_oficio = $("#fecha_oficio").val();


			    var numero_oficio_restructuracion = $("#numero_oficio_restructuracion").val();
			    var fecha_oficio_restructuracion = $("#fecha_oficio_restructuracion").val();
			    var numero_solicitud_restructuracion = $("#numero_solicitud_restructuracion").val();
			    var fecha_solicitud_restructuracion = $("#fecha_solicitud_restructuracion").val();
                var acta_validacion_restructuracion= $("#acta_validacion_restructuracion").val();
			    var tipo_lev= $("#tipo_lev").val();
                 var generar_oficio= $("#generar_oficio").val();
                 var entidad_va_oficio= $("#entidad_va_oficio").val();
                 var asunto= $("#asunto").val();

			    var reemplazar = $("#reemplazar").val();


			    var generar_oficio_pago_total= $("#generar_oficio_pago_total").val();
                var entidad_va_oficio_pago_total= $("#entidad_va_oficio_pago_total").val();
                var asunto_pago_total= $("#asunto_pago_total").val();


			    // PAGO TOTAL
                var cantidad_oficios_generar= $("#cantidad_oficios_generar").val();
                var entidad_va_oficio_pago_total_1= $("#entidad_va_oficio_pago_total_1").val();
                var entidad_va_oficio_pago_total_2= $("#entidad_va_oficio_pago_total_2").val();
                var entidad_va_oficio_pago_total_3= $("#entidad_va_oficio_pago_total_3").val();
                var entidad_va_oficio_pago_total_4= $("#entidad_va_oficio_pago_total_4").val();
                var entidad_va_oficio_pago_total_5= $("#entidad_va_oficio_pago_total_5").val();
                var entidad_va_oficio_pago_total_6= $("#entidad_va_oficio_pago_total_6").val();
                var entidad_va_oficio_pago_total_7= $("#entidad_va_oficio_pago_total_7").val();
                
                 //  RESTRUCTURACION
                 
                 var cantidad_oficios_generar_1= $("#cantidad_oficios_generar_1").val();
                 var entidad_va_oficio_1= $("#entidad_va_oficio_1").val();
                 var entidad_va_oficio_2= $("#entidad_va_oficio_2").val();
                 var entidad_va_oficio_3= $("#entidad_va_oficio_3").val();
                 var entidad_va_oficio_4= $("#entidad_va_oficio_4").val();
                 var entidad_va_oficio_5= $("#entidad_va_oficio_5").val();
                 var entidad_va_oficio_6= $("#entidad_va_oficio_6").val();
                 var entidad_va_oficio_7= $("#entidad_va_oficio_7").val();
                 



                 var remplaza_impulsor= $("#remplaza_impulsor").val();
 				 var impulsor_saliente_cambio_liquidador = $("#impulsor_saliente_cambio_liquidador").val();
 			
 				 var remplaza_impulsor_pago_total= $("#remplaza_impulsor_pago_total").val();
				 var impulsor_saliente_cambio_liquidador_pago_total = $("#impulsor_saliente_cambio_liquidador_pago_total").val();
			


  		       
	   				
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
			    	
		    		$("#mensaje_tipo_avoco").text("Seleccione Tipo Proceso");
		    		$("#mensaje_tipo_avoco").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_tipo_avoco").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if (tipo_ley == 0)
		    	{
			    	
		    		$("#mensaje_tipo_ley").text("Seleccione Tipo de Ley");
		    		$("#mensaje_tipo_ley").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_tipo_ley").fadeOut("slow"); //Muestra mensaje de error
		            
				}



		    	
		    

		    	if(tipo_avoco == 8  && numero_oficio_restructuracion == ""){
					$("#mensaje_numero_oficio_restructuracion").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_restructuracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_restructuracion").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 8  && fecha_oficio_restructuracion == ""){
					$("#mensaje_fecha_oficio_restructuracion").text("Ingrese Fecha de Oficio");
		    		$("#mensaje_fecha_oficio_restructuracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_restructuracion").fadeOut("slow"); //Muestra mensaje de error
		            
				}


/*
		    	
				if(tipo_avoco == 8  && acta_validacion_restructuracion == ""){
					$("#mensaje_acta_validacion_restructuracion").text("Ingrese # Restructuración");
		    		$("#mensaje_acta_validacion_restructuracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_acta_validacion_restructuracion").fadeOut("slow"); //Muestra mensaje de error
		            
				}

*/
				if(tipo_avoco == 8  && tipo_lev == 0){
					$("#mensaje_tipo_lev").text("Seleccione");
		    		$("#mensaje_tipo_lev").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_tipo_lev").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
				if(tipo_avoco == 8  && generar_oficio == 0){
					$("#mensaje_generar_oficio").text("Seleccione");
		    		$("#mensaje_generar_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				if(tipo_avoco == 8  && cantidad_oficios_generar_1 == 0 && generar_oficio=="Si"){
					$("#mensaje_cantidad_oficios_generar_1").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				

				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 1 && generar_oficio == "Si" && asunto == "" ){
					$("#mensaje_asunto").text("Ingrese el Asunto");
		    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
		            
				}




				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 1 && generar_oficio == "Si" && entidad_va_oficio == "" ){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 2 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				

	
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					         
				}
					



		         ////// AQUI 3
		         
		         
		         
		         

				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 3 && generar_oficio == "Si"){
					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
				if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}

			


				if(entidad_va_oficio_2 == ""){
					$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				
	
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					      
				}


				



				//// AQUI 4
				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 4 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						     
					}
		       	



				//// AQUI 5
				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 5 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						    
					}
		       	


				//// AQUI 6
				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 6 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						    
					}








				//// AQUI 7
				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 7 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_6 == ""){
						$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						    
					}





				//// AQUI 8
				if(tipo_avoco == 8 && cantidad_oficios_generar_1 == 8 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_6 == ""){
						$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_7 == ""){
						$("#mensaje_entidad_va_oficio_7").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_7").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
						    
					}




				








		////empieza restructuracion con avoco conocimiento GUAYAQUIL
		
		
		

			    

		    	if(tipo_avoco == 13  && numero_oficio_restructuracion == ""){
					$("#mensaje_numero_oficio_restructuracion").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_restructuracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_restructuracion").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 13  && fecha_oficio_restructuracion == ""){
					$("#mensaje_fecha_oficio_restructuracion").text("Ingrese Fecha de Oficio");
		    		$("#mensaje_fecha_oficio_restructuracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_restructuracion").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if(tipo_avoco == 13  && tipo_lev == 0){
					$("#mensaje_tipo_lev").text("Seleccione");
		    		$("#mensaje_tipo_lev").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_tipo_lev").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
				if(tipo_avoco == 13  && generar_oficio == 0){
					$("#mensaje_generar_oficio").text("Seleccione");
		    		$("#mensaje_generar_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				if(tipo_avoco == 13  && cantidad_oficios_generar_1 == 0 && generar_oficio=="Si"){
					$("#mensaje_cantidad_oficios_generar_1").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				

				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 1 && generar_oficio == "Si" && asunto == "" ){
					$("#mensaje_asunto").text("Ingrese el Asunto");
		    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
		            
				}




				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 1 && generar_oficio == "Si" && entidad_va_oficio == "" ){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 2 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				

	
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					         
				}
					



		         ////// AQUI 3
		         
		         
		         
		         

				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 3 && generar_oficio == "Si"){
					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
				if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}

			


				if(entidad_va_oficio_2 == ""){
					$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				
	
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					      
				}


				



				//// AQUI 4
				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 4 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						     
					}
		       	



				//// AQUI 5
				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 5 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						    
					}
		       	


				//// AQUI 6
				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 6 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						    
					}








				//// AQUI 7
				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 7 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_6 == ""){
						$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						    
					}





				//// AQUI 8
				if(tipo_avoco == 13 && cantidad_oficios_generar_1 == 8 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_6 == ""){
						$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_7 == ""){
						$("#mensaje_entidad_va_oficio_7").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_7").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
						    
					}













////empieza restructuracion con avoco conocimiento QUITO
		
		
		

			    

		    	if(tipo_avoco == 15  && numero_oficio_restructuracion == ""){
					$("#mensaje_numero_oficio_restructuracion").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_restructuracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_restructuracion").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 15  && fecha_oficio_restructuracion == ""){
					$("#mensaje_fecha_oficio_restructuracion").text("Ingrese Fecha de Oficio");
		    		$("#mensaje_fecha_oficio_restructuracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_restructuracion").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if(tipo_avoco == 15  && tipo_lev == 0){
					$("#mensaje_tipo_lev").text("Seleccione");
		    		$("#mensaje_tipo_lev").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_tipo_lev").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
				if(tipo_avoco == 15  && generar_oficio == 0){
					$("#mensaje_generar_oficio").text("Seleccione");
		    		$("#mensaje_generar_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				if(tipo_avoco == 15  && cantidad_oficios_generar_1 == 0 && generar_oficio=="Si"){
					$("#mensaje_cantidad_oficios_generar_1").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				

				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 1 && generar_oficio == "Si" && asunto == "" ){
					$("#mensaje_asunto").text("Ingrese el Asunto");
		    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
		            
				}




				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 1 && generar_oficio == "Si" && entidad_va_oficio == "" ){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 2 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				

	
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					         
				}
					



		         ////// AQUI 3
		         
		         
		         
		         

				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 3 && generar_oficio == "Si"){
					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}
				if(entidad_va_oficio == ""){
					$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				if(entidad_va_oficio_1 == ""){
					$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}

			


				if(entidad_va_oficio_2 == ""){
					$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				
	
				}else{
					$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
					      
				}


				



				//// AQUI 4
				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 4 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						     
					}
		       	



				//// AQUI 5
				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 5 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						    
					}
		       	


				//// AQUI 6
				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 6 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						    
					}








				//// AQUI 7
				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 7 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_6 == ""){
						$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						    
					}





				//// AQUI 8
				if(tipo_avoco == 15 && cantidad_oficios_generar_1 == 8 && generar_oficio == "Si"){

					if(asunto == ""){
						$("#mensaje_asunto").text("Ingrese el Asunto");
			    		$("#mensaje_asunto").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio == ""){
						$("#mensaje_entidad_va_oficio").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_1 == ""){
						$("#mensaje_entidad_va_oficio_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


					if(entidad_va_oficio_2 == ""){
						$("#mensaje_entidad_va_oficio_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					



					if(entidad_va_oficio_3 == ""){
						$("#mensaje_entidad_va_oficio_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_4 == ""){
						$("#mensaje_entidad_va_oficio_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_5 == ""){
						$("#mensaje_entidad_va_oficio_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_6 == ""){
						$("#mensaje_entidad_va_oficio_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_7 == ""){
						$("#mensaje_entidad_va_oficio_7").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_7").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
		
					}else{
						$("#mensaje_entidad_va_oficio").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_3").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_4").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_5").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_6").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_7").fadeOut("slow"); //Muestra mensaje de error
						    
					}




				if (tipo_avoco == 15 && remplaza_impulsor == "")
		    	{
			    	
		    		$("#mensaje_remplaza_impulsor").text("Seleccione");
		    		$("#mensaje_remplaza_impulsor").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_remplaza_impulsor").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if (tipo_avoco == 15 && remplaza_impulsor == "Si")
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











				





				


		       	
		       	
		      
		       	if(tipo_avoco == 1  && numero_oficio == ""){
					$("#mensaje_numero_oficio").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 1  && fecha_oficio == ""){
					$("#mensaje_fecha_oficio").text("Ingrese Fecha de Oficio");
		    		$("#mensaje_fecha_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		       	
/*
				if(tipo_avoco == 1  && numero_liquidacion == ""){
					$("#mensaje_numero_liquidacion").text("Ingrese # Liquidación");
		    		$("#mensaje_numero_liquidacion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_liquidacion").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 1  && fecha_auto_pago == ""){
					$("#mensaje_fecha_auto_pago").text("Ingrese Fecha Auto Pago");
		    		$("#mensaje_fecha_auto_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_auto_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}
*/

				if(tipo_avoco == 1  && generar_oficio_pago_total == 0){
					$("#mensaje_generar_oficio_pago_total").text("Seleccione");
		    		$("#mensaje_generar_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if(tipo_avoco == 1  && cantidad_oficios_generar == 0 && generar_oficio_pago_total=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 1  && cantidad_oficios_generar == 1 && generar_oficio_pago_total == "Si" && asunto_pago_total == "" ){
					$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
				if(tipo_avoco == 1 && cantidad_oficios_generar == 1 && generar_oficio_pago_total == "Si" && entidad_va_oficio_pago_total == "" ){
					$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				///aqui 2


				if(tipo_avoco == 1  && cantidad_oficios_generar == 2 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					

					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					
				}

			



				//// aqui 3



				if(tipo_avoco == 1  && cantidad_oficios_generar == 3 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					




					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					
				}




				/// aqui 4 

				if(tipo_avoco == 1  && cantidad_oficios_generar == 4 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					
				}







				/// aqui 5 

				if(tipo_avoco == 1  && cantidad_oficios_generar == 5 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					
				}





				/// aqui 6

				if(tipo_avoco == 1  && cantidad_oficios_generar == 6 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_5 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
					
				}



				/// aqui 7

				if(tipo_avoco == 1  && cantidad_oficios_generar == 7 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_5 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_6 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
					
				}



				/// aqui 8

				if(tipo_avoco == 1  && cantidad_oficios_generar == 8 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_5 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_6 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_7 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_7").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_7").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_7").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_7").fadeOut("slow"); //Muestra mensaje de error
					
				}


















				////// COMIENZA PAGO TOTAL CON AVOCO CONOCIMIENTO





		       	
			      
		       	if(tipo_avoco == 14  && numero_oficio == ""){
					$("#mensaje_numero_oficio").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 14  && fecha_oficio == ""){
					$("#mensaje_fecha_oficio").text("Ingrese Fecha de Oficio");
		    		$("#mensaje_fecha_oficio").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		       	/*

				if(tipo_avoco == 14  && numero_liquidacion == ""){
					$("#mensaje_numero_liquidacion").text("Ingrese # Liquidación");
		    		$("#mensaje_numero_liquidacion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_liquidacion").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 14  && fecha_auto_pago == ""){
					$("#mensaje_fecha_auto_pago").text("Ingrese Fecha Auto Pago");
		    		$("#mensaje_fecha_auto_pago").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_auto_pago").fadeOut("slow"); //Muestra mensaje de error
		            
				}
*/

				if(tipo_avoco == 14  && generar_oficio_pago_total == 0){
					$("#mensaje_generar_oficio_pago_total").text("Seleccione");
		    		$("#mensaje_generar_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if(tipo_avoco == 14  && cantidad_oficios_generar == 0 && generar_oficio_pago_total=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if(tipo_avoco == 14  && cantidad_oficios_generar == 1 && generar_oficio_pago_total == "Si" && asunto_pago_total == "" ){
					$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
				if(tipo_avoco == 14 && cantidad_oficios_generar == 1 && generar_oficio_pago_total == "Si" && entidad_va_oficio_pago_total == "" ){
					$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				


				///aqui 2


				if(tipo_avoco == 14  && cantidad_oficios_generar == 2 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					

					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					
				}

			



				//// aqui 3



				if(tipo_avoco == 14  && cantidad_oficios_generar == 3 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					




					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					


				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					
				}




				/// aqui 4 

				if(tipo_avoco == 14  && cantidad_oficios_generar == 4 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					
				}







				/// aqui 5 

				if(tipo_avoco == 14  && cantidad_oficios_generar == 5 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					
				}





				/// aqui 6

				if(tipo_avoco == 14  && cantidad_oficios_generar == 6 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_5 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
					
				}



				/// aqui 7

				if(tipo_avoco == 14  && cantidad_oficios_generar == 7 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_5 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_6 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
					
				}



				/// aqui 8

				if(tipo_avoco == 14  && cantidad_oficios_generar == 8 && generar_oficio_pago_total == "Si"){

					if(asunto_pago_total == ""){
						$("#mensaje_asunto_pago_total").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					if(entidad_va_oficio_pago_total == ""){
						$("#mensaje_entidad_va_oficio_pago_total").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_1 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_2 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					
					if(entidad_va_oficio_pago_total_3 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_4 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_5 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

					if(entidad_va_oficio_pago_total_6 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_pago_total_7 == ""){
						$("#mensaje_entidad_va_oficio_pago_total_7").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_pago_total_7").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_pago_total_7").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					

				}else{

					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_pago_total").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_pago_total_7").fadeOut("slow"); //Muestra mensaje de error
					
				}

				if (tipo_avoco == 14 && remplaza_impulsor_pago_total == "")
		    	{
			    	
		    		$("#mensaje_remplaza_impulsor_pago_total").text("Seleccione");
		    		$("#mensaje_remplaza_impulsor_pago_total").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_remplaza_impulsor_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if (tipo_avoco == 14 && remplaza_impulsor_pago_total == "Si")
		    	{


					if(impulsor_saliente_cambio_liquidador_pago_total==""){
						$("#mensaje_impulsor_saliente_cambio_liquidador_pago_total").text("Ingrese Nombre Abg. Anterior");
			    		$("#mensaje_impulsor_saliente_cambio_liquidador_pago_total").fadeIn("slow"); //Muestra mensaje de error
			            return false;

					}else{

						$("#mensaje_impulsor_saliente_cambio_liquidador_pago_total").fadeOut("slow"); //Muestra mensaje de error
						}
			    	
		    		
			    }
		    	else 
		    	{
		    		$("#mensaje_impulsor_saliente_cambio_liquidador_pago_total").fadeOut("slow"); //Muestra mensaje de error
		            
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
				$( "#tipo_ley" ).focus(function() {
					$("#mensaje_tipo_ley").fadeOut("slow");
    			});
				
				$( "#numero_oficio_restructuracion" ).focus(function() {
					$("#mensaje_numero_oficio_restructuracion").fadeOut("slow");
    			});
				$( "#fecha_oficio_restructuracion" ).focus(function() {
					$("#mensaje_fecha_oficio_restructuracion").fadeOut("slow");
    			});

/*
				$( "#acta_validacion_restructuracion" ).focus(function() {
					$("#mensaje_acta_validacion_restructuracion").fadeOut("slow");
    			});
*/
				$( "#tipo_lev" ).focus(function() {
					$("#mensaje_tipo_lev").fadeOut("slow");
    			});
				$( "#generar_oficio" ).focus(function() {
					$("#mensaje_generar_oficio").fadeOut("slow");
    			});
    			
				$( "#cantidad_oficios_generar_1" ).focus(function() {
					$("#mensaje_cantidad_oficios_generar_1").fadeOut("slow");
    			});
				$( "#asunto" ).focus(function() {
					$("#mensaje_asunto").fadeOut("slow");
    			});
				$( "#entidad_va_oficio" ).focus(function() {
					$("#mensaje_entidad_va_oficio").fadeOut("slow");
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


				$( "#remplaza_impulsor" ).focus(function() {
					$("#mensaje_remplaza_impulsor").fadeOut("slow");
    			});
				
				$( "#impulsor_saliente_cambio_liquidador" ).focus(function() {
					$("#mensaje_impulsor_saliente_cambio_liquidador").fadeOut("slow");
    			});
    			
    			
				$( "#numero_oficio" ).focus(function() {
					$("#mensaje_numero_oficio").fadeOut("slow");
    			});
				$( "#fecha_oficio" ).focus(function() {
					$("#mensaje_fecha_oficio").fadeOut("slow");
    			});
    			/*
				$( "#numero_liquidacion" ).focus(function() {
					$("#mensaje_numero_liquidacion").fadeOut("slow");
    			});
				$( "#fecha_auto_pago" ).focus(function() {
					$("#mensaje_fecha_auto_pago").fadeOut("slow");
    			});
*/

				$( "#generar_oficio_pago_total" ).focus(function() {
					$("#mensaje_generar_oficio_pago_total").fadeOut("slow");
    			});
				$( "#cantidad_oficios_generar" ).focus(function() {
					$("#mensaje_cantidad_oficios_generar").fadeOut("slow");
    			});
				$( "#asunto_pago_total" ).focus(function() {
					$("#mensaje_asunto_pago_total").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_pago_total" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_pago_total_1" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total_1").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_pago_total_2" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total_2").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_pago_total_3" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total_3").fadeOut("slow");
    			});

				$( "#entidad_va_oficio_pago_total_4" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total_4").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_pago_total_5" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total_5").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_pago_total_6" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total_6").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_pago_total_7" ).focus(function() {
					$("#mensaje_entidad_va_oficio_pago_total_7").fadeOut("slow");
    			});


				$( "#remplaza_impulsor_pago_total" ).focus(function() {
					$("#mensaje_remplaza_impulsor_pago_total").fadeOut("slow");
    			});
				
				$( "#impulsor_saliente_cambio_liquidador_pago_total" ).focus(function() {
					$("#mensaje_impulsor_saliente_cambio_liquidador_pago_total").fadeOut("slow");
    			});
    			
    			
				$( "#reemplazar" ).focus(function() {
					$("#mensaje_reemplazar").fadeOut("slow");
    			});
				
				
				$( "#nombre_impulsor_anterior" ).focus(function() {
					$("#mensaje_nombre_impulsor_anterior").fadeOut("slow");
    			});
				$( "#nombre_secretario_anterior" ).focus(function() {
					$("#mensaje_nombre_secretario_anterior").fadeOut("slow");
    			});

				
				
				


				
		}); 

	</script>
	





		

    </head>
    <body style="background-color: #d9e3e4;">
    
        <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
     
       
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
       $sel_numero_liquidacion="";
       $sel_fecha_auto_pago="";
       $sel_numero_oficio="";
       $sel_fecha_oficio="";
       $sel_numero_solicitud="";
       $sel_fecha_solicitud="";
       
      
       
       
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
       	
       	$sel_juicio_referido_titulo_credito = $_POST['juicio_referido_titulo_credito'];
       	$sel_numero_titulo_credito=$_POST['numero_titulo_credito'];
       	$sel_identificacion_clientes=$_POST['identificacion_clientes'];
       	$sel_id_provincias=$_POST['id_provincias'];
       	$sel_id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
       	$sel_id_abogado = $_POST['id_abogado'];
       
       	$sel_nombre_impulsor_anterior= $_POST['nombre_impulsor_anterior'];
       	$sel_nombre_secretario_anterior= $_POST['nombre_secretario_anterior'];
       	$sel_tipo_avoco= $_POST['tipo_avoco'];
       	$sel_id_estados_procesales_juicios_actualizar= $_POST['id_estados_procesales_juicios_actualizar'];
       	$sel_numero_liquidacion= $_POST['numero_liquidacion'];
       	$sel_fecha_auto_pago= $_POST['fecha_auto_pago'];
       
       	
       	$sel_numero_oficio= $_POST['numero_oficio'];
       	$sel_fecha_oficio= $_POST['fecha_oficio'];
       	$sel_numero_solicitud= $_POST['numero_solicitud'];
       	$sel_fecha_solicitud= $_POST['fecha_solicitud'];
       	
       }
       
    
       
       
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("MatrizJuicios","Imprimir_Providencia_Cancelacion_Proceso"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
         
                 <br> 
                 <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	<p align="justify"><b><font face="univers" size=3>***Estimados usuarios al generar un documento en el sistema se actualizara la fecha de última providencia y el estado procesal del juicio cuando su abogado SECRETARIO lo apruebe.***</font></b></p>
				
            	</div>
                 <br> 
                        
         <div class="col-lg-12 col-md-12 col-xs-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos Cancelación de Proceso</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  	    
  							
  		<div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha:</p>
			  	<input type="date"  name="fecha_avoco" id="fecha_avoco" min="1800-01-01" max="2018-12-30" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_providencias;}}else{if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_providencias;}}else{}} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha" class="errores"></div>
			    <input type="hidden"  name="id_juicios" id="id_juicios" value="<?php echo $datos['id_juicios']; ?>" class="form-control" readonly/>
			    <input type="hidden"  name="id_clientes" id="id_clientes" value="<?php echo $datos['id_clientes']; ?>" class="form-control" readonly/>
			    <input type="hidden"  name="id_titulo_credito" id="id_titulo_credito" value="<?php echo $datos['id_titulo_credito']; ?>" class="form-control" readonly/>
			  
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Hora:</p>
			  	<input type="time"  name="hora_avoco" id="hora_avoco" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->hora_providencias;}}else{if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->hora_providencias;}}else{}} ?>" class="form-control "/> 
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
	         		<h4><i class='glyphicon glyphicon-edit'></i> Tipo de Proceso<br><FONT FACE="arial" SIZE=2 COLOR=red>(Seleccionar el tipo de proceso obligatoriamente.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
	        	
  		         <div class="col-lg-6 col-md-6 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Proceso:</p>
			  	<select name="tipo_avoco" id="tipo_avoco"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="1">PROVIDENCIA (PAGO TOTAL)</option>
			  		<option value="14">PROVIDENCIA (PAGO TOTAL CON AVOCO CONOCIMIENTO)</option>
					<option value="8">PROVIDENCIA (RESTRUCTURACIÓN)</option>
					<option value="13">PROVIDENCIA (RESTRUCTURACIÓN CON AVOCO CONOCIMIENTO JUZGADO GUAYAQUIL)</option>
					<option value="15">PROVIDENCIA (RESTRUCTURACIÓN CON AVOCO CONOCIMIENTO JUZGADO QUITO)</option>
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
                  <div class="col-lg-12 col-md-12 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo de Ley:</p>
			  	<select name="tipo_ley" id="tipo_ley"  class="form-control" >
			  		<option value=""><?php echo "--Seleccione--";  ?> </option>
			  		<option value="LEY ORGÁNICA PARA LA REACTIVACIÓN DE LA ECONOMÍA, FORTALECIMIENTO DE LA DOLARIZACIÓN Y MODERNIZACIÓN DE LA GESTIÓN FINANCIERA" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_ley == 'LEY ORGÁNICA PARA LA REACTIVACIÓN DE LA ECONOMÍA, FORTALECIMIENTO DE LA DOLARIZACIÓN Y MODERNIZACIÓN DE LA GESTIÓN FINANCIERA'){echo ' selected="selected" ' ;}else{}}}else{} ?>>LEY ORGÁNICA PARA LA REACTIVACIÓN DE LA ECONOMÍA, FORTALECIMIENTO DE LA DOLARIZACIÓN Y MODERNIZACIÓN DE LA GESTIÓN FINANCIERA</option> 
			  		<option value="LEY ORGÁNICA PARA LA RESTRUCTURACIÓN DE LAS DEUDAS DE LA BANCA PÚBLICA, BANCA CERRADA Y GESTIÓN DEL SISTEMA FINANCIERO NACIONAL Y RÉGIMEN DE VALORES" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_ley == 'LEY ORGÁNICA PARA LA RESTRUCTURACIÓN DE LAS DEUDAS DE LA BANCA PÚBLICA, BANCA CERRADA Y GESTIÓN DEL SISTEMA FINANCIERO NACIONAL Y RÉGIMEN DE VALORES'){echo ' selected="selected" ' ;}else{}}}else{} ?>>LEY ORGÁNICA PARA LA RESTRUCTURACIÓN DE LAS DEUDAS DE LA BANCA PÚBLICA, BANCA CERRADA Y GESTIÓN DEL SISTEMA FINANCIERO NACIONAL Y RÉGIMEN DE VALORES</option> 
			  	 	
				</select>
				<div id="mensaje_tipo_ley" class="errores"></div>
	            </div>
	            
	            
	            </div>
	            </div>
	            </div>
  		
  		
  		
  			
  		        <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Datos Para la Providencia<br><FONT FACE="arial" SIZE=2 COLOR=red>(Ingresar los datos requeridos.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		        <div class="row" id="div_reemplazar" style="display: none;">
  		       <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p  class="formulario-subtitulo">Reemplazar A:</p>
			  	<select name="reemplazar" id="reemplazar"  class="form-control" >
			  		<option value="0">--Seleccione---</option>
						<option value="1">Solo Secretario</option>
						<option value="2">Solo Impulsor</option>
						<option value="3">Secretario y Impulsor</option>
			    </select>
				<div id="mensaje_reemplazar" class="errores"></div>
			    </div>
  		        </div>
  		        <br>
              
               <div class="col-lg-6 col-md-6 col-xs-12" id="div_datos_impulsor" style="display: none; margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Datos Abogado Impulsor <br><FONT FACE="arial" SIZE=2 COLOR=red>(Llenar solo si usted esta remplazando a un abogado anterior)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
	        	<div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo" >Impuslor Saliente:</p>
			  	<input type="text"  name="nombre_impulsor_anterior" id="nombre_impulsor_anterior" value="<?php echo $sel_nombre_impulsor_anterior; ?>" class="form-control" placeholder="Ejm. Abg. xxxx xxxx xxxx xxxx"/> 
	            <div id="mensaje_nombre_impulsor_anterior" class="errores"></div>
	            </div>
	        	
	        	<div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo">Impulsor Entrante:</p>
			  	<select name="id_abogado" id="id_abogado"  class="form-control" readonly/>
			    <option value="<?php echo $_SESSION['id_usuarios'];  ?>" ><?php echo $_SESSION['nombre_usuarios'];  ?></option>  
			    </select>
		        </div>
		        
	        	</div>
	        	</div>
	           </div>
	          
	            <div class="col-lg-6 col-md-6 col-xs-12" id="div_datos_secretario" style="display: none; margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Datos Abogado Secretario<br><FONT FACE="arial" SIZE=2 COLOR=red>(Llenar solo si usted esta remplazando a un abogado anterior)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
	        	<div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo" >Secretario Saliente:</p>
			  	<input type="text"  name="nombre_secretario_anterior" id="nombre_secretario_anterior" value="<?php echo $sel_nombre_secretario_anterior; ?>" class="form-control" placeholder="Ejm. Abg. xxxx xxxx xxxx xxxx"/> 
	            <div id="mensaje_nombre_secretario_anterior" class="errores"></div>
	            </div>
	        	
	        	<div class="col-lg-12 col-md-12 col-xs-12">
			  	<p  class="formulario-subtitulo">Secretario Entrante:</p>
			  	<select name="id_secretario" id="id_secretario"  class="form-control" readonly />
			  			<?php foreach($resultSecre as $res) {?>
						<option value="<?php echo $res->id_secretario; ?>" ><?php echo $res->secretarios;  ?> </option>
			            <?php } ?>
				</select>
                </div>
	        	
	        	</div>
	        	</div>
	           </div>
              
	                   
                <div id="div_datos_pago_total" style="display: none;">
                <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio:</p>
			  	<input type="text"  name="numero_oficio" id="numero_oficio" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio" id="fecha_oficio" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_oficio_pago_total;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Solicitud:</p>
			  	<input type="text"  name="numero_solicitud" id="numero_solicitud" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_1_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_solicitud" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Solicitud::</p>
			  	<input type="date"  name="fecha_solicitud" id="fecha_solicitud" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_solicitud_pago_total;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_solicitud" class="errores"></div>
			    </div>
			    
	            <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Liquidación:</p>
			  	<input type="text"  name="numero_liquidacion" id="numero_liquidacion" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_2_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_liquidacion" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Liquidación:</p>
			  	<input type="date"  name="fecha_auto_pago" id="fecha_auto_pago" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_liquidacion_pago_total;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_auto_pago" class="errores"></div>
			    </div>
			    
			       <br>
			           
	            <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 15px;'>
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio_pago_total" id="generar_oficio_pago_total"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->genero_oficio == 't'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Si</option>
						<option value="No" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->genero_oficio == 'f'){echo ' selected="selected" ' ;}else{}}}else{} ?>>No</option>
						
						
			    </select>
				<div id="mensaje_generar_oficio_pago_total" class="errores"></div>
			    </div>
	            
	            
	            <div id="div_datos_generar_oficio_pago_total" style="display: none;">
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 15px;'>
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
			  	 <textarea type="text"  class="form-control" id="asunto_pago_total" name="asunto_pago_total" value=""  placeholder="Ejem.  Dentro del juicio coactivo No. xxx, seguido en contra de xxx xxx xxx, con CC. xxxxxxxxxx, en calidad de deudor principal y otros de la operación No. xxxxxxx, en su parte pertinente dispone: "><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->asunto_oficio;}}else{} ?></textarea>
                <div id="mensaje_asunto_pago_total" class="errores"></div>
	            </div>
	           </div>
	           </div>
	           </div>
	            
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #1:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total" id="entidad_va_oficio_pago_total" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total" class="errores"></div>
	            </div>
	            
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #1 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total" id="referencia_oficios_tipo_lev_pago_total" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	           
	           
	           
	             <div id="div_datos_cantidad_oficios_1" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #2:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total_1" id="entidad_va_oficio_pago_total_1" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_2;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total_1" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #2 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total_1" id="referencia_oficios_tipo_lev_pago_total_1" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_2;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>    
	            </div>
	           
	            
	            
	             <div id="div_datos_cantidad_oficios_2" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #3:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total_2" id="entidad_va_oficio_pago_total_2" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_3;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total_2" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #3 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total_2" id="referencia_oficios_tipo_lev_pago_total_2" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_3;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>    
	            </div>
	            
	            
	              <div id="div_datos_cantidad_oficios_3" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #4:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total_3" id="entidad_va_oficio_pago_total_3" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_4;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #4 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total_3" id="referencia_oficios_tipo_lev_pago_total_3" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_4;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>    
	            </div>
	            
	            
	              <div id="div_datos_cantidad_oficios_4" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #5:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total_4" id="entidad_va_oficio_pago_total_4" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_5;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total_4" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #5 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total_4" id="referencia_oficios_tipo_lev_pago_total_4" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_5;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>    
	            </div>
	            
	            
	             <div id="div_datos_cantidad_oficios_5" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #6:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total_5" id="entidad_va_oficio_pago_total_5" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_6;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total_5" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #6 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total_5" id="referencia_oficios_tipo_lev_pago_total_5" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_6;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>    
	            </div>
	            
	            
	            <div id="div_datos_cantidad_oficios_6" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #7:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total_6" id="entidad_va_oficio_pago_total_6" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_7;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total_6" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #7 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total_6" id="referencia_oficios_tipo_lev_pago_total_6" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_7;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>    
	            </div>
	            
	            
	             <div id="div_datos_cantidad_oficios_7" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #8:</p>
			  	<input type="text"  name="entidad_va_oficio_pago_total_7" id="entidad_va_oficio_pago_total_7" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_8;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_pago_total_7" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #8 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_pago_total_7" id="referencia_oficios_tipo_lev_pago_total_7" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_8;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>    
	            </div>
	            
	            
	            <div id="div_datos_agregar_disposicion_pago_total" style="display: none;">
	            
	            <div id="div_impulsor_activar_pago_total" style="display: none;">
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 15px;'>
			  	<p  class="formulario-subtitulo">Reemplazar Impulsor:</p>
			  	<select name="remplaza_impulsor_pago_total" id="remplaza_impulsor_pago_total"  class="form-control" >
			  	<option value="">--Seleccione--</option> 
			  		<option value="No">No</option> 
			  		<option value="Si">Si</option> 
			  	</select>
				<div id="mensaje_remplaza_impulsor_pago_total" class="errores"></div>
	            </div>
	          
	         
	            <div id="div_impulsor_cambio_liquidador_pago_total" style="display: none;">
	            <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 15px;'>
			  	<p class="formulario-subtitulo" >Nombre Impulsor Anterior:</p>
			  	<input type="text"  name="impulsor_saliente_cambio_liquidador_pago_total" id="impulsor_saliente_cambio_liquidador_pago_total" value="" class="form-control" placeholder="Ejem1.  de la Abg. xxx xxxx   Ejem2.  del Abg. xxx xxxx"/> 
	            <FONT FACE="arial" SIZE=1.9 COLOR=red>(Ingrese preposición dependiendo el sexo del abogado(a).)</FONT>
                <div id="mensaje_impulsor_saliente_cambio_liquidador_pago_total" class="errores"></div>
	            </div>
	            </div>
	            </div>
	            
	            <br>
	            
	            <div class="col-lg-10 col-md-10 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Agregar Nueva Disposición (Opcional 1):</p>
			  	<textarea type="text"  name="res_agregar_disposicion_pago_total" id="res_agregar_disposicion_pago_total" value="" class="form-control" placeholder="Ingrese solo el texto sin el numeral"><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_levantamiento_providencias;}}else{} ?></textarea>
	            <div id="mensaje_res_agregar_disposicion_pago_total" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-10 col-md-10 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Agregar Nueva Disposición (Opcional 2):</p>
			  	<textarea type="text"  name="res_agregar_disposicion_1_pago_total" id="res_agregar_disposicion_1_pago_total" value="" class="form-control" placeholder="Ingrese solo el texto sin el numeral"><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dispone_1;}}else{} ?></textarea>
	            <div id="mensaje_res_agregar_disposicion_1_pago_total" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-10 col-md-10 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Agregar Nueva Disposición (Opcional 3):</p>
			  	<textarea type="text"  name="res_agregar_disposicion_2_pago_total" id="res_agregar_disposicion_2_pago_total" value="" class="form-control" placeholder="Ingrese solo el texto sin el numeral"><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dispone_2;}}else{} ?></textarea>
	            <div id="mensaje_res_agregar_disposicion_2_pago_total" class="errores"></div>
	            </div>
	            </div>
	            
	            
			     <div class="col-xs-12 col-md-10 col-lg-10" style='margin-top: 17px;'>
		                          <p class="formulario-subtitulo" >Referencia de Entidades (Opcional: Si desea nombrar a alguna entidad Ingresela empezando con el numeral 1.1.- ):</p>
                                  <textarea type="text"  class="form-control" id="referencia_pago_total" name="referencia_pago_total" value=""  placeholder="Empieze con el numeral 1.1.-"><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_entidades_pago_total;}}else{} ?></textarea>
                                   <div id="mensaje_referencia_pago_total" class="errores"></div>
	            </div>
	            
			    
			    <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Nombre y Número de Documento 1 (Opcional):</p>
			  	<input type="text"  name="nombre_numero_documento_1" id="nombre_numero_documento_1" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->nombre_numero_documento_opcional_1_pago_total;}}else{} ?>" class="form-control" placeholder="Ejemplo: oficio No. BNF-01-001"/> 
	            <div id="mensaje_nombre_numero_documento_1" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 20px;'>
         		<p class="formulario-subtitulo" >Fecha del Documento 1 (Opcional):</p>
			  	<input type="date"  name="fecha_documento_1" id="fecha_documento_1" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_documento_opcional_1_pago_total;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_documento_1" class="errores"></div>
			    </div>
			    
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo">Nombre y Número de Documento 2 (Opcional):</p>
			  	<input type="text"  name="nombre_numero_documento_2" id="nombre_numero_documento_2" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->nombre_numero_documento_opcional_2_pago_total;}}else{} ?>" class="form-control" placeholder="Ejemplo: memorando No. BNF-01-001"/> 
	            <div id="mensaje_nombre_numero_documento_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 10px;'>
         		<p class="formulario-subtitulo" >Fecha del Documento 2 (Opcional):</p>
			  	<input type="date"  name="fecha_documento_2" id="fecha_documento_2" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_documento_opcional_2_pago_total;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_documento_2" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo">Nombre y Número de Documento 3 (Opcional):</p>
			  	<input type="text"  name="nombre_numero_documento_3" id="nombre_numero_documento_3" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->nombre_numero_documento_opcional_3_pago_total;}}else{} ?>" class="form-control" placeholder="Ejemplo: solicitud No. BNF-01-001"/> 
	            <div id="mensaje_nombre_numero_documento_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 10px;'>
         		<p class="formulario-subtitulo" >Fecha del Documento 3 (Opcional):</p>
			  	<input type="date"  name="fecha_documento_3" id="fecha_documento_3" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_documento_opcional_3_pago_total;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_documento_3" class="errores"></div>
			    </div>
			    
			    
			    
			    
	          </div> 
	          
	          
	          
	          
	          
	          
	           <div id="div_datos_reestructuracion" style="display: none;">
	           
	           
	           
                <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Número de Oficio:</p>
			  	<input type="text"  name="numero_oficio_restructuracion" id="numero_oficio_restructuracion" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->numero_oficio_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_restructuracion" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 10px;'>
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio_restructuracion" id="fecha_oficio_restructuracion" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_oficio_restructuracion;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_restructuracion" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Restructuración:</p>
			  	<input type="text"  name="numero_solicitud_restructuracion" id="numero_solicitud_restructuracion" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->numero_oficio_1_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_solicitud_restructuracion" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Restructuración:</p>
			  	<input type="date"  name="fecha_solicitud_restructuracion" id="fecha_solicitud_restructuracion" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_restructuracion;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_solicitud_restructuracion" class="errores"></div>
			    </div>
			    
	             <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Acta de Validación de Restructuración:</p>
			  	<input type="text"  name="acta_validacion_restructuracion" id="acta_validacion_restructuracion" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->numero_oficio_2_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_acta_validacion_restructuracion" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p  class="formulario-subtitulo">Tipo Levantamiento:</p>
			  	<select name="tipo_lev" id="tipo_lev"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="con_levantamiento" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->numero_oficio_3_levantamiento_providencias == 'con_levantamiento'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Con Levantamiento</option>
						<option value="sin_levantamiento" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->numero_oficio_3_levantamiento_providencias == 'sin_levantamiento'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Sin Levantamiento</option>
						
			    </select>
			    <div id="mensaje_tipo_lev" class="errores"></div>
			    </div>
	            
	            <br>
	             
	             
	             
	             
	             
	             
	            <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 15px;'>
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio" id="generar_oficio"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->genero_oficio == 't'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Si</option>
						<option value="No" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->genero_oficio == 'f'){echo ' selected="selected" ' ;}else{}}}else{} ?>>No</option>
						
						
			    </select>
				<div id="mensaje_generar_oficio" class="errores"></div>
			    </div>
	            
	            
	             <div id="div_datos_generar_oficio" style="display: none;">
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 15px;'>
			  	<p  class="formulario-subtitulo"># Oficios a Generar:</p>
			  	<select name="cantidad_oficios_generar_1" id="cantidad_oficios_generar_1"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="1" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '1'){echo ' selected="selected" ' ;}else{}}}else{} ?>>1</option>
						<option value="2" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '2'){echo ' selected="selected" ' ;}else{}}}else{} ?>>2</option>
						<option value="3" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '3'){echo ' selected="selected" ' ;}else{}}}else{} ?>>3</option>
						<option value="4" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '4'){echo ' selected="selected" ' ;}else{}}}else{} ?>>4</option>
						<option value="5" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '5'){echo ' selected="selected" ' ;}else{}}}else{} ?>>5</option>
						<option value="6" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '6'){echo ' selected="selected" ' ;}else{}}}else{} ?>>6</option>
						<option value="7" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '7'){echo ' selected="selected" ' ;}else{}}}else{} ?>>7</option>
						<option value="8" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->cantidad_oficios_generados == '8'){echo ' selected="selected" ' ;}else{}}}else{} ?>>8</option>
						
						
			    </select>
				<div id="mensaje_cantidad_oficios_generar_1" class="errores"></div>
			    </div>
	             </div>
	            
	            <br>
	           
	           
	           
	             <div id="div_datos_cantidad_oficios_res_1" style="display: none; margin-top: 20px;">
	             
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
			  	 <textarea type="text"  class="form-control" id="asunto" name="asunto" value=""  placeholder="Ejem.  Dentro del juicio coactivo No. xxx, seguido en contra de xxx xxx xxx, con CC. xxxxxxxxxx, en calidad de deudor principal y otros de la operación No. xxxxxxx, en su parte pertinente dispone: "><?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->asunto_oficio;}}else{} ?></textarea>
                 <div id="mensaje_asunto" class="errores"></div>
	            </div>
	            </div>
	           </div>
	           </div>
	             
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #1:</p>
			  	<input type="text"  name="entidad_va_oficio" id="entidad_va_oficio" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio" class="errores"></div>
	            </div>
	            
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #1 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev" id="referencia_oficios_tipo_lev" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	           
	            
	            
	            
	            <div id="div_datos_cantidad_oficios_res_2" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #2:</p>
			  	<input type="text"  name="entidad_va_oficio_1" id="entidad_va_oficio_1" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_2;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_1" class="errores"></div>
	            </div>
	            
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #2 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_1" id="referencia_oficios_tipo_lev_1" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_2;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	             <div id="div_datos_cantidad_oficios_res_3" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #3:</p>
			  	<input type="text"  name="entidad_va_oficio_2" id="entidad_va_oficio_2" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_3;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #3 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_2" id="referencia_oficios_tipo_lev_2" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_3;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            <div id="div_datos_cantidad_oficios_res_4" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #4:</p>
			  	<input type="text"  name="entidad_va_oficio_3" id="entidad_va_oficio_3" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_4;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #4 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_3" id="referencia_oficios_tipo_lev_3" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_4;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	             <div id="div_datos_cantidad_oficios_res_5" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #5:</p>
			  	<input type="text"  name="entidad_va_oficio_4" id="entidad_va_oficio_4" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_5;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_4" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #5 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_4" id="referencia_oficios_tipo_lev_4" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_5;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	             <div id="div_datos_cantidad_oficios_res_6" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #6:</p>
			  	<input type="text"  name="entidad_va_oficio_5" id="entidad_va_oficio_5" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_6;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_5" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #6 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_5" id="referencia_oficios_tipo_lev_5" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_6;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            
	            <div id="div_datos_cantidad_oficios_res_7" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #7:</p>
			  	<input type="text"  name="entidad_va_oficio_6" id="entidad_va_oficio_6" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_7;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_6" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #7 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_6" id="referencia_oficios_tipo_lev_6" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_7;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	             <div id="div_datos_cantidad_oficios_res_8" style="display: none; margin-top: 20px;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #8:</p>
			  	<input type="text"  name="entidad_va_oficio_7" id="entidad_va_oficio_7" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_8;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_7" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #8 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_7" id="referencia_oficios_tipo_lev_7" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_8;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	             
	            <div id="div_datos_agregar_disposicion" style="display: none;">
	            
	            
	            <div id="div_impulsor_activar" style="display: none;">
	            
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
	            <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 15px;'>
			  	<p class="formulario-subtitulo" >Nombre Impulsor Anterior:</p>
			  	<input type="text"  name="impulsor_saliente_cambio_liquidador" id="impulsor_saliente_cambio_liquidador" value="" class="form-control" placeholder="Ejem1.  de la Abg. xxx xxxx   Ejem2.  del Abg. xxx xxxx"/> 
	           <FONT FACE="arial" SIZE=1.9 COLOR=red>(Ingrese preposición dependiendo el sexo del abogado(a).)</FONT>
                
	            <div id="mensaje_impulsor_saliente_cambio_liquidador" class="errores"></div>
	            	 
	            </div>
	            </div>
	            </div>
	            
	            <br>
	            
	            <div class="col-lg-10 col-md-10 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Agregar Nueva Disposición (Opcional 1):</p>
			  	<textarea type="text"  name="res_agregar_disposicion" id="res_agregar_disposicion" value="" class="form-control" placeholder="Ingrese solo el texto sin el numeral"><?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_levantamiento_providencias;}}else{} ?></textarea>
	            <div id="mensaje_res_agregar_disposicion" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-10 col-md-10 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Agregar Nueva Disposición (Opcional 2):</p>
			  	<textarea type="text"  name="res_agregar_disposicion_1" id="res_agregar_disposicion_1" value="" class="form-control" placeholder="Ingrese solo el texto sin el numeral"><?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dispone_1;}}else{} ?></textarea>
	            <div id="mensaje_res_agregar_disposicion_1" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-10 col-md-10 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Agregar Nueva Disposición (Opcional 3):</p>
			  	<textarea type="text"  name="res_agregar_disposicion_2" id="res_agregar_disposicion_2" value="" class="form-control" placeholder="Ingrese solo el texto sin el numeral"><?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dispone_2;}}else{} ?></textarea>
	            <div id="mensaje_res_agregar_disposicion_2" class="errores"></div>
	            </div>
	            </div>
	            
	            
	            
	            <div class="col-xs-12 col-md-10 col-lg-10" style="margin-top: 17px;">
		                          <p class="formulario-subtitulo" >Referencia de Entidades (Opcional: Si desea nombrar a alguna entidad Ingresela):</p>
                                  <textarea type="text"  class="form-control" id="referencia" name="referencia" value=""  placeholder="Sin Levantamiento empieze con el numeral 1.1.-          Con Levantamiento empieze con el numeral 2.1.-"><?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_entidades_restructuracion;}}else{} ?></textarea>
                                   <div id="mensaje_referencia" class="errores"></div>
	            </div>
	            
			    <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 20px;'>
			  	<p class="formulario-subtitulo">Nombre y Número de Documento 1 (Opcional):</p>
			  	<input type="text"  name="res_nombre_numero_documento_1" id="res_nombre_numero_documento_1" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->nombre_numero_documento_opcional_1_restructuracion;}}else{} ?>" class="form-control" placeholder="Ejemplo: oficio No. BNF-01-001"/> 
	            <div id="mensaje_res_nombre_numero_documento_1" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 20px;'>
         		<p class="formulario-subtitulo" >Fecha del Documento 1 (Opcional):</p>
			  	<input type="date"  name="res_fecha_documento_1" id="res_fecha_documento_1" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_documento_opcional_1_restructuracion;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_res_fecha_documento_1" class="errores"></div>
			    </div>
			    
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo">Nombre y Número de Documento 2 (Opcional):</p>
			  	<input type="text"  name="res_nombre_numero_documento_2" id="res_nombre_numero_documento_2" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->nombre_numero_documento_opcional_2_restructuracion;}}else{} ?>" class="form-control" placeholder="Ejemplo: memorando No. BNF-01-001"/> 
	            <div id="mensaje_res_nombre_numero_documento_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 10px;'>
         		<p class="formulario-subtitulo" >Fecha del Documento 2 (Opcional):</p>
			  	<input type="date"  name="res_fecha_documento_2" id="res_fecha_documento_2" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_documento_opcional_2_restructuracion;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_res_fecha_documento_2" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo">Nombre y Número de Documento 3 (Opcional):</p>
			  	<input type="text"  name="res_nombre_numero_documento_3" id="res_nombre_numero_documento_3" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->nombre_numero_documento_opcional_3_restructuracion;}}else{} ?>" class="form-control" placeholder="Ejemplo: solicitud No. BNF-01-001"/> 
	            <div id="mensaje_res_nombre_numero_documento_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-4 col-md-4 col-xs-12" style='margin-top: 10px;'>
         		<p class="formulario-subtitulo" >Fecha del Documento 3 (Opcional):</p>
			  	<input type="date"  name="res_fecha_documento_3" id="res_fecha_documento_3" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_documento_opcional_3_restructuracion;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_res_fecha_documento_3" class="errores"></div>
			    </div>
			      
	            
	          </div> 
	          
	          
	          
	          
	          <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <br><p align="justify"><font face="arial" size=2><b>NOTA:</b> Estimados usuarios el sistema automáticamente llena en la razón el siguiente texto.<br><b>RAZÓN.- </b> Siento por tal, que no se notifica con esta providencia a los coactivados, por no haber señalado domicilio judicial o correo electrónico para el efecto, en la ciudad de xxxx, "Fecha" xx xx xxxx xx xxx.- <b>LO CERTIFICO.-</b></font></p>
				 <FONT FACE="arial" SIZE=2 COLOR=red>(Si necesita cambiar el texto de la razón ingreselo en el siguiente campo, sin incluir las palabras <b>RAZÓN.- </b> y <b> LO CERTIFICO.-</b>)</FONT>
			  </div>
				   
             <div class="col-xs-12 col-md-12 col-lg-12" >
		                          <p class="formulario-subtitulo" >Razón Proceso:</p>
                                  <textarea type="text"  class="form-control" id="razon_avoco" name="razon_avoco" value=""  placeholder="Ingrese Razón"><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->razon_providencias;}}else{if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->razon_providencias;}}else{}}?></textarea>
                                  
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
    
  

    
