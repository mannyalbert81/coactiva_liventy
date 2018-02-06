  	 

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
			
          if(tipo_avoco == 7)
          {
       	   $("#div_reemplazar").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_reemplazar").fadeOut("slow");
       	  $("#div_datos_impulsor").fadeOut("slow");
    	  $("#div_datos_secretario").fadeOut("slow");
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 7)
              {
           	   $("#div_reemplazar").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_reemplazar").fadeOut("slow");
           	  $("#div_datos_impulsor").fadeOut("slow");
        	  $("#div_datos_secretario").fadeOut("slow");
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
       <script type="text/javascript">
      $(document).ready(function(){
          
      $("#tipo_avoco").click(function() {
			
          var tipo_avoco = $(this).val();
			
          if(tipo_avoco == 12)
          {
       	   $("#div_datos_cambio_liquidador").fadeIn("slow");
          }
       	
          else
          {
        	  $("#div_datos_cambio_liquidador").fadeOut("slow");
       	
          }
         
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 12)
              {
           	   $("#div_datos_cambio_liquidador").fadeIn("slow");
              }
           	
              else
              {
            	  $("#div_datos_cambio_liquidador").fadeOut("slow");
           	 
              }
              
              
		    });
	}); 	
	   
      </script>
      
      
      
      
      
        <script type="text/javascript">
      $(document).ready(function(){
          
      $("#generar_oficio_avoco_nuevos_procesos").click(function() {
			
          var generar_oficio_avoco_nuevos_procesos = $(this).val();
			
          if(generar_oficio_avoco_nuevos_procesos == "Si")
          {
       	   $("#div_datos_generar_oficio_avoco_nuevos_procesos").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_datos_generar_oficio_avoco_nuevos_procesos").fadeOut("slow");
         
         
     	
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
	    
	    $("#generar_oficio_avoco_nuevos_procesos").change(function() {
			
              
              var generar_oficio_avoco_nuevos_procesos = $(this).val();
				
              
              if(generar_oficio_avoco_nuevos_procesos == "Si")
              {
           	   $("#div_datos_generar_oficio_avoco_nuevos_procesos").fadeIn("slow");
              }
           	
              else
              {
              $("#div_datos_generar_oficio_avoco_nuevos_procesos").fadeOut("slow");
            
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
        	  $("#div_datos_secretario").fadeOut("slow");
          	
       	  
          }
          else if (reemplazar == 1)
          {
        	  $("#div_datos_secretario").fadeIn("slow");
        	  $("#div_datos_impulsor").fadeOut("slow");
          	
       	  
          }
          else{
        	  $("#div_datos_impulsor").fadeOut("slow");
        	  $("#div_datos_secretario").fadeOut("slow");
        	  
              }
         
	    });
	    
	    $("#reemplazar").change(function() {
			
              
              var reemplazar = $(this).val();
				
              
              if(reemplazar == 3)
              {
           	   $("#div_datos_impulsor").fadeIn("slow");
           	   $("#div_datos_secretario").fadeIn("slow");
              }
           	
              else if (reemplazar == 2)
              {
            	  $("#div_datos_impulsor").fadeIn("slow");
            	  $("#div_datos_secretario").fadeOut("slow");
             	 
           	  
              }
              else if (reemplazar == 1)
              {
            	  $("#div_datos_secretario").fadeIn("slow");
            	  
            	  $("#div_datos_impulsor").fadeOut("slow");
             	 
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
			    var numero_liquidacion = $("#numero_liquidacion").val();
			    var fecha_auto_pago = $("#fecha_auto_pago").val();

			    var numero_oficio = $("#numero_oficio").val();
			    var fecha_oficio = $("#fecha_oficio").val();

                var tipo_acto= $("#tipo_acto").val();
			   

			    var reemplazar = $("#reemplazar").val();
			    var generar_oficio_avoco_nuevos_procesos= $("#generar_oficio_avoco_nuevos_procesos").val();
                var entidad_va_oficio_avoco_nuevos_procesos= $("#entidad_va_oficio_avoco_nuevos_procesos").val();
                var asunto_avoco_nuevos_procesos= $("#asunto_avoco_nuevos_procesos").val();
                
			   
		        var cantidad_oficios_generar= $("#cantidad_oficios_generar").val();
		        var entidad_va_oficio_avoco_nuevos_procesos_1= $("#entidad_va_oficio_avoco_nuevos_procesos_1").val();
                var entidad_va_oficio_avoco_nuevos_procesos_2= $("#entidad_va_oficio_avoco_nuevos_procesos_2").val();
                var entidad_va_oficio_avoco_nuevos_procesos_3= $("#entidad_va_oficio_avoco_nuevos_procesos_3").val();


                var entidad_va_oficio_avoco_nuevos_procesos_4= $("#entidad_va_oficio_avoco_nuevos_procesos_4").val();
                var entidad_va_oficio_avoco_nuevos_procesos_5= $("#entidad_va_oficio_avoco_nuevos_procesos_5").val();
                var entidad_va_oficio_avoco_nuevos_procesos_6= $("#entidad_va_oficio_avoco_nuevos_procesos_6").val();
                var entidad_va_oficio_avoco_nuevos_procesos_7= $("#entidad_va_oficio_avoco_nuevos_procesos_7").val();



				var remplaza_impulsor= $("#remplaza_impulsor").val();
				var dispone_1= $("#dispone_1").val();
				//var dispone_2= $("#dispone_2").val();

                

	   				
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
			    	
		    		$("#mensaje_tipo_avoco").text("Seleccione Tipo Avoco");
		    		$("#mensaje_tipo_avoco").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_tipo_avoco").fadeOut("slow"); //Muestra mensaje de error
		            
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



		    	if(tipo_avoco == 7  && generar_oficio_avoco_nuevos_procesos == 0){
					$("#mensaje_generar_oficio_avoco_nuevos_procesos").text("Seleccione");
		    		$("#mensaje_generar_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 7  && cantidad_oficios_generar == 0 && generar_oficio_avoco_nuevos_procesos=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 7  && cantidad_oficios_generar == 1 && generar_oficio_avoco_nuevos_procesos == "Si" && asunto_avoco_nuevos_procesos == "" ){
					$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				if(tipo_avoco == 7  && cantidad_oficios_generar == 1 && generar_oficio_avoco_nuevos_procesos == "Si" && entidad_va_oficio_avoco_nuevos_procesos == "" ){
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		       




		   	if(tipo_avoco == 7  && cantidad_oficios_generar == 2 && generar_oficio_avoco_nuevos_procesos == "Si"){

		   	 if(asunto_avoco_nuevos_procesos == ""){

		       		$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
	                }else{

	                	$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
			             
	                    }
             
		       	 if(entidad_va_oficio_avoco_nuevos_procesos == ""){

	                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
			            return false;
	                }else{

	                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
			            
	                    }


		       	
		       		
                if(entidad_va_oficio_avoco_nuevos_procesos_1 == ""){

                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;

	                }else{

                	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
		            
                    }


					
				}
				else 
		    	{
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
			        $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				      
				}







		   	//desde aqui para el 3
		   	
		  	if(tipo_avoco == 7  && cantidad_oficios_generar == 3 && generar_oficio_avoco_nuevos_procesos == "Si"){

		  		 if(asunto_avoco_nuevos_procesos == ""){

			       		$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
			            return false;
		                }else{

		                	$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				             
		                    }
                 
		       	 if(entidad_va_oficio_avoco_nuevos_procesos == ""){

	                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
			            return false;
	                }else{

	                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
			            
	                    }


		       	
		       		
               if(entidad_va_oficio_avoco_nuevos_procesos_1 == ""){

               	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;

	                }else{

               	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
		            
                   }


              
		       		


               if(entidad_va_oficio_avoco_nuevos_procesos_2 == ""){

                  	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").text("Ingrese a quien va Dirigido");
   		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeIn("slow"); //Muestra mensaje de error
   		            return false;

   	                }else{

                  	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
   		            
                      }



					
				}
				else 
		    	{
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
			        $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
				      
				}
		   	
		      


		       	
  	//desde aqui para el 4
		   	
		  	if(tipo_avoco == 7  && cantidad_oficios_generar == 4 && generar_oficio_avoco_nuevos_procesos == "Si"){

		  		 if(asunto_avoco_nuevos_procesos == ""){

			       		$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
			            return false;
		                }else{

		                	$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				             
		                    }
                 
		       	 if(entidad_va_oficio_avoco_nuevos_procesos == ""){

	                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
			            return false;
	                }else{

	                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
			            
	                    }


		       	
		       		
               if(entidad_va_oficio_avoco_nuevos_procesos_1 == ""){

               	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;

	                }else{

               	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
		            
                   }


              

               if(entidad_va_oficio_avoco_nuevos_procesos_2 == ""){

                  	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").text("Ingrese a quien va Dirigido");
   		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeIn("slow"); //Muestra mensaje de error
   		            return false;

   	                }else{

                  	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
   		            
                      }


                 
                  if(entidad_va_oficio_avoco_nuevos_procesos_3 == ""){

                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").text("Ingrese a quien va Dirigido");
     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeIn("slow"); //Muestra mensaje de error
     		            return false;

     	                }else{

                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
     		            
                        }

					
				}
				else 
		    	{
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
			        $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
				    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
				      
				}






	       	
		  	//desde aqui para el 5
				   	
				  	if(tipo_avoco == 7  && cantidad_oficios_generar == 5 && generar_oficio_avoco_nuevos_procesos == "Si"){

				  		 if(asunto_avoco_nuevos_procesos == ""){

					       		$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
					    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
					            return false;
				                }else{

				                	$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
						             
				                    }
		                 
				       	 if(entidad_va_oficio_avoco_nuevos_procesos == ""){

			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
					            return false;
			                }else{

			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
					            
			                    }


				       	
				       		
		               if(entidad_va_oficio_avoco_nuevos_procesos_1 == ""){

		               	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeIn("slow"); //Muestra mensaje de error
				            return false;

			                }else{

		               	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				            
		                   }


		              

		               if(entidad_va_oficio_avoco_nuevos_procesos_2 == ""){

		                  	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").text("Ingrese a quien va Dirigido");
		   		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeIn("slow"); //Muestra mensaje de error
		   		            return false;

		   	                }else{

		                  	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
		   		            
		                      }


		                 
		                  if(entidad_va_oficio_avoco_nuevos_procesos_3 == ""){

		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").text("Ingrese a quien va Dirigido");
		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeIn("slow"); //Muestra mensaje de error
		     		            return false;

		     	                }else{

		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
		     		            
		                        }


		                  if(entidad_va_oficio_avoco_nuevos_procesos_4 == ""){

		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").text("Ingrese a quien va Dirigido");
		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeIn("slow"); //Muestra mensaje de error
		     		            return false;

		     	                }else{

		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
		     		            
		                        }

							
						}
						else 
				    	{
							$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
							$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
					        $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
						    
						}





//desde aqui para el 6
				   	
				  	if(tipo_avoco == 7  && cantidad_oficios_generar == 6 && generar_oficio_avoco_nuevos_procesos == "Si"){

				  		 if(asunto_avoco_nuevos_procesos == ""){

					       		$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
					    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
					            return false;
				                }else{

				                	$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
						             
				                    }
		                 
				       	 if(entidad_va_oficio_avoco_nuevos_procesos == ""){

			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
					    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
					            return false;
			                }else{

			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
					            
			                    }


				       	
				       		
		               if(entidad_va_oficio_avoco_nuevos_procesos_1 == ""){

		               	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").text("Ingrese a quien va Dirigido");
				    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeIn("slow"); //Muestra mensaje de error
				            return false;

			                }else{

		               	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				            
		                   }


		              

		               if(entidad_va_oficio_avoco_nuevos_procesos_2 == ""){

		                  	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").text("Ingrese a quien va Dirigido");
		   		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeIn("slow"); //Muestra mensaje de error
		   		            return false;

		   	                }else{

		                  	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
		   		            
		                      }


		                 
		                  if(entidad_va_oficio_avoco_nuevos_procesos_3 == ""){

		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").text("Ingrese a quien va Dirigido");
		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeIn("slow"); //Muestra mensaje de error
		     		            return false;

		     	                }else{

		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
		     		            
		                        }


		                  if(entidad_va_oficio_avoco_nuevos_procesos_4 == ""){

		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").text("Ingrese a quien va Dirigido");
		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeIn("slow"); //Muestra mensaje de error
		     		            return false;

		     	                }else{

		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
		     		            
		                        }


		                  if(entidad_va_oficio_avoco_nuevos_procesos_5 == ""){

		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").text("Ingrese a quien va Dirigido");
		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeIn("slow"); //Muestra mensaje de error
		     		            return false;

		     	                }else{

		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeOut("slow"); //Muestra mensaje de error
		     		            
		                        }

							
						}
						else 
				    	{
							$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
							$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
					        $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeOut("slow"); //Muestra mensaje de error
						    
						}
		     	






				  //desde aqui para el 7
				  				   	
				  				  	if(tipo_avoco == 7  && cantidad_oficios_generar == 7 && generar_oficio_avoco_nuevos_procesos == "Si"){

				  				  		 if(asunto_avoco_nuevos_procesos == ""){

				  					       		$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
				  					    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
				  					            return false;
				  				                }else{

				  				                	$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  						             
				  				                    }
				  		                 
				  				       	 if(entidad_va_oficio_avoco_nuevos_procesos == ""){

				  			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
				  					    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
				  					            return false;
				  			                }else{

				  			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  					            
				  			                    }


				  				       	
				  				       		
				  		               if(entidad_va_oficio_avoco_nuevos_procesos_1 == ""){

				  		               	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").text("Ingrese a quien va Dirigido");
				  				    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeIn("slow"); //Muestra mensaje de error
				  				            return false;

				  			                }else{

				  		               	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				  				            
				  		                   }


				  		              

				  		               if(entidad_va_oficio_avoco_nuevos_procesos_2 == ""){

				  		                  	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").text("Ingrese a quien va Dirigido");
				  		   		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeIn("slow"); //Muestra mensaje de error
				  		   		            return false;

				  		   	                }else{

				  		                  	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
				  		   		            
				  		                      }


				  		                 
				  		                  if(entidad_va_oficio_avoco_nuevos_procesos_3 == ""){

				  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").text("Ingrese a quien va Dirigido");
				  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeIn("slow"); //Muestra mensaje de error
				  		     		            return false;

				  		     	                }else{

				  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
				  		     		            
				  		                        }


				  		                  if(entidad_va_oficio_avoco_nuevos_procesos_4 == ""){

				  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").text("Ingrese a quien va Dirigido");
				  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeIn("slow"); //Muestra mensaje de error
				  		     		            return false;

				  		     	                }else{

				  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
				  		     		            
				  		                        }


				  		                  if(entidad_va_oficio_avoco_nuevos_procesos_5 == ""){

				  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").text("Ingrese a quien va Dirigido");
				  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeIn("slow"); //Muestra mensaje de error
				  		     		            return false;

				  		     	                }else{

				  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeOut("slow"); //Muestra mensaje de error
				  		     		            
				  		                        }

				  		                if(entidad_va_oficio_avoco_nuevos_procesos_6 == ""){

			  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").text("Ingrese a quien va Dirigido");
			  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").fadeIn("slow"); //Muestra mensaje de error
			  		     		            return false;

			  		     	                }else{

			  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").fadeOut("slow"); //Muestra mensaje de error
			  		     		            
			  		                        }
				  							
				  						}
				  						else 
				  				    	{
				  							$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  							$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  					        $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeOut("slow"); //Muestra mensaje de error
				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").fadeOut("slow"); //Muestra mensaje de error
				  						    
				  						}







				  				  //desde aqui para el 8
				  				  				   	
				  				  				  	if(tipo_avoco == 7  && cantidad_oficios_generar == 8 && generar_oficio_avoco_nuevos_procesos == "Si"){

				  				  				  		 if(asunto_avoco_nuevos_procesos == ""){

				  				  					       		$("#mensaje_asunto_avoco_nuevos_procesos").text("Ingrese el Asunto");
				  				  					    		$("#mensaje_asunto_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
				  				  					            return false;
				  				  				                }else{

				  				  				                	$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  				  						             
				  				  				                    }
				  				  		                 
				  				  				       	 if(entidad_va_oficio_avoco_nuevos_procesos == ""){

				  				  			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").text("Ingrese a quien va Dirigido");
				  				  					    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeIn("slow"); //Muestra mensaje de error
				  				  					            return false;
				  				  			                }else{

				  				  			                	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  				  					            
				  				  			                    }


				  				  				       	
				  				  				       		
				  				  		               if(entidad_va_oficio_avoco_nuevos_procesos_1 == ""){

				  				  		               	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").text("Ingrese a quien va Dirigido");
				  				  				    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeIn("slow"); //Muestra mensaje de error
				  				  				            return false;

				  				  			                }else{

				  				  		               	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				  				  				            
				  				  		                   }


				  				  		              

				  				  		               if(entidad_va_oficio_avoco_nuevos_procesos_2 == ""){

				  				  		                  	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").text("Ingrese a quien va Dirigido");
				  				  		   		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeIn("slow"); //Muestra mensaje de error
				  				  		   		            return false;

				  				  		   	                }else{

				  				  		                  	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
				  				  		   		            
				  				  		                      }


				  				  		                 
				  				  		                  if(entidad_va_oficio_avoco_nuevos_procesos_3 == ""){

				  				  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").text("Ingrese a quien va Dirigido");
				  				  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeIn("slow"); //Muestra mensaje de error
				  				  		     		            return false;

				  				  		     	                }else{

				  				  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
				  				  		     		            
				  				  		                        }


				  				  		                  if(entidad_va_oficio_avoco_nuevos_procesos_4 == ""){

				  				  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").text("Ingrese a quien va Dirigido");
				  				  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeIn("slow"); //Muestra mensaje de error
				  				  		     		            return false;

				  				  		     	                }else{

				  				  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
				  				  		     		            
				  				  		                        }


				  				  		                  if(entidad_va_oficio_avoco_nuevos_procesos_5 == ""){

				  				  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").text("Ingrese a quien va Dirigido");
				  				  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeIn("slow"); //Muestra mensaje de error
				  				  		     		            return false;

				  				  		     	                }else{

				  				  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeOut("slow"); //Muestra mensaje de error
				  				  		     		            
				  				  		                        }

				  				  		                if(entidad_va_oficio_avoco_nuevos_procesos_6 == ""){

				  			  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").text("Ingrese a quien va Dirigido");
				  			  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").fadeIn("slow"); //Muestra mensaje de error
				  			  		     		            return false;

				  			  		     	                }else{

				  			  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").fadeOut("slow"); //Muestra mensaje de error
				  			  		     		            
				  			  		                        }


				  				  		            if(entidad_va_oficio_avoco_nuevos_procesos_7 == ""){

			  			  		                    	$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_7").text("Ingrese a quien va Dirigido");
			  			  		     		    		$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_7").fadeIn("slow"); //Muestra mensaje de error
			  			  		     		            return false;

			  			  		     	                }else{

			  			  		                    	 $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_7").fadeOut("slow"); //Muestra mensaje de error
			  			  		     		            
			  			  		                        }
				  				  							
				  				  						}
				  				  						else 
				  				  				    	{
				  				  							$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  				  							$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow"); //Muestra mensaje de error
				  				  					        $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow"); //Muestra mensaje de error
				  				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow"); //Muestra mensaje de error
				  				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow"); //Muestra mensaje de error
				  				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow"); //Muestra mensaje de error
				  				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeOut("slow"); //Muestra mensaje de error
				  				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").fadeOut("slow"); //Muestra mensaje de error
				  				  						    $("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_7").fadeOut("slow"); //Muestra mensaje de error
			  				  						    
				  				  						}
			       	
		    	
				
				if (tipo_avoco == 7 && reemplazar == 0)
		    	{
			    	
		    		$("#mensaje_reemplazar").text("Seleccione a quien va reemplazar");
		    		$("#mensaje_reemplazar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_reemplazar").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if(tipo_avoco == 7 && reemplazar == 3){

		    		if (nombre_impulsor_anterior == "")
			    	{
				    	
			    		$("#mensaje_nombre_impulsor_anterior").text("Introduzca Impulsor Saliente");
			    		$("#mensaje_nombre_impulsor_anterior").fadeIn("slow"); //Muestra mensaje de error
			            return false;
				    }
			    	else 
			    	{
			    		$("#mensaje_nombre_impulsor_anterior").fadeOut("slow"); //Muestra mensaje de error
			            
					}

			    	if (nombre_secretario_anterior == "")
			    	{
				    	
			    		$("#mensaje_nombre_secretario_anterior").text("Introduzca Secretario Saliente");
			    		$("#mensaje_nombre_secretario_anterior").fadeIn("slow"); //Muestra mensaje de error
			            return false;
				    }
			    	else 
			    	{
			    		$("#mensaje_nombre_secretario_anterior").fadeOut("slow"); //Muestra mensaje de error
			            
					}
				}
		    	else if (tipo_avoco == 7 && reemplazar == 2){
			    	
		    		if (nombre_impulsor_anterior == "")
			    	{
				    	
			    		$("#mensaje_nombre_impulsor_anterior").text("Introduzca Impulsor Saliente");
			    		$("#mensaje_nombre_impulsor_anterior").fadeIn("slow"); //Muestra mensaje de error
			            return false;
				    }
			    	else 
			    	{
			    		$("#mensaje_nombre_impulsor_anterior").fadeOut("slow"); //Muestra mensaje de error
			            
					}
			    }
                  else if (tipo_avoco == 7 && reemplazar == 1){
			    	
                	  if (nombre_secretario_anterior == "")
  			    	{
  				    	
  			    		$("#mensaje_nombre_secretario_anterior").text("Introduzca Secretario Saliente");
  			    		$("#mensaje_nombre_secretario_anterior").fadeIn("slow"); //Muestra mensaje de error
  			            return false;
  				    }
  			    	else 
  			    	{
  			    		$("#mensaje_nombre_secretario_anterior").fadeOut("slow"); //Muestra mensaje de error
  			            
  					}
			    }



				
				if (tipo_avoco == 12 && remplaza_impulsor == "")
		    	{
			    	
		    		$("#mensaje_remplaza_impulsor").text("Seleccione");
		    		$("#mensaje_remplaza_impulsor").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_remplaza_impulsor").fadeOut("slow"); //Muestra mensaje de error
		            
				}



				if (tipo_avoco == 12 && remplaza_impulsor == "Si")
		    	{


					if(dispone_1==""){
						$("#mensaje_dispone_1").text("Ingrese Disposición");
			    		$("#mensaje_dispone_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;

					}else{

						$("#mensaje_dispone_1").fadeOut("slow"); //Muestra mensaje de error
						}
			    	
		    		
			    }
		    	else 
		    	{
		    		$("#mensaje_dispone_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}


				/*

				if (tipo_avoco == 12 && dispone_1 == "")
		    	{
			    	
		    		$("#mensaje_dispone_1").text("Ingrese Dispone 1");
		    		$("#mensaje_dispone_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_dispone_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				if (tipo_avoco == 12 && dispone_2 == "")
		    	{
			    	
		    		$("#mensaje_dispone_2").text("Ingrese Dispone 2");
		    		$("#mensaje_dispone_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_dispone_2").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				*/
				
		    	
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
				

				$( "#numero_oficio" ).focus(function() {
					$("#mensaje_numero_oficio").fadeOut("slow");
    			});
				$( "#fecha_oficio" ).focus(function() {
					$("#mensaje_fecha_oficio").fadeOut("slow");
    			});
    			
				$( "#numero_liquidacion" ).focus(function() {
					$("#mensaje_numero_liquidacion").fadeOut("slow");
    			});
				$( "#fecha_auto_pago" ).focus(function() {
					$("#mensaje_fecha_auto_pago").fadeOut("slow");
    			});
    			
				$( "#reemplazar" ).focus(function() {
					$("#mensaje_reemplazar").fadeOut("slow");
    			});


				$( "#generar_oficio_avoco_nuevos_procesos" ).focus(function() {
					$("#mensaje_generar_oficio_avoco_nuevos_procesos").fadeOut("slow");
    			});

				$( "#cantidad_oficios_generar" ).focus(function() {
					$("#mensaje_cantidad_oficios_generar").fadeOut("slow");
    			});
				$( "#asunto_avoco_nuevos_procesos" ).focus(function() {
					$("#mensaje_asunto_avoco_nuevos_procesos").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_avoco_nuevos_procesos" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_avoco_nuevos_procesos_1" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_1").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_avoco_nuevos_procesos_2" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_2").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_avoco_nuevos_procesos_3" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_3").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_avoco_nuevos_procesos_4" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_4").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_avoco_nuevos_procesos_5" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_5").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_avoco_nuevos_procesos_6" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_6").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_avoco_nuevos_procesos_7" ).focus(function() {
					$("#mensaje_entidad_va_oficio_avoco_nuevos_procesos_7").fadeOut("slow");
    			});
    			
				$( "#nombre_impulsor_anterior" ).focus(function() {
					$("#mensaje_nombre_impulsor_anterior").fadeOut("slow");
    			});
				$( "#nombre_secretario_anterior" ).focus(function() {
					$("#mensaje_nombre_secretario_anterior").fadeOut("slow");
    			});
				

				

				
				$( "#remplaza_impulsor" ).focus(function() {
					$("#mensaje_remplaza_impulsor").fadeOut("slow");
    			});
				
				$( "#dispone_1" ).focus(function() {
					$("#mensaje_dispone_1").fadeOut("slow");
    			});
				/*
				$( "#dispone_2" ).focus(function() {
					$("#mensaje_dispone_2").fadeOut("slow");
    			});
				*/
								
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
       
      <form action="<?php echo $helper->url("MatrizJuicios","Imprimir_AvocoConocimiento"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
         
                 <br> 
                 <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <p align="justify"><b><font face="univers" size=3>***Estimados usuarios al generar un documento en el sistema se actualizara la fecha de última providencia y el estado procesal del juicio cuando su abogado SECRETARIO lo apruebe.***</font></b></p>
				
            	  </div>
                 <br> 
                        
         <div class="col-lg-12 col-md-12 col-xs-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos Avoco Conocimiento</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  							
  		<div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha Avoco:</p>
			  	<input type="date"  name="fecha_avoco" id="fecha_avoco" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_avoco_conocimiento;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha" class="errores"></div>
			    <input type="hidden"  name="id_juicios" id="id_juicios" value="<?php echo $datos['id_juicios']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_clientes" id="id_clientes" value="<?php echo $datos['id_clientes']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_titulo_credito" id="id_titulo_credito" value="<?php echo $datos['id_titulo_credito']; ?>" class="form-control"/ readonly>
			  
		 </div>
		 
		  <div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Hora Avoco:</p>
			  	<input type="time"  name="hora_avoco" id="hora_avoco" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->hora_avoco;}}else{} ?>" class="form-control "/> 
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
	         		<h4><i class='glyphicon glyphicon-edit'></i> Tipo de Avoco Conocimiento<br><FONT FACE="arial" SIZE=2 COLOR=red>(Seleccionar el tipo de avoco obligatoriamente.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		         <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Avoco:</p>
			  	<select name="tipo_avoco" id="tipo_avoco"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<!-- <option value="6">AVOCO CONOCIMIENTO</option>   -->
			  		<option value="7">AVOCO CONOCIMIENTO (NUEVOS PROCESOS)</option> 
			  		<option value="12">AVOCO CONOCIMIENTO (CAMBIO LIQUIDADOR)</option> 
			  		<!-- <option value="3">AVOCO CONOCIMIENTO Y SUSPENSIÓN</option> -->
					<!--<option value="1">AVOCO CONOCIMIENTO (PAGO TOTAL)</option>-->
					<!-- <option value="2">AVOCO CONOCIMIENTO (EXTENSO)</option> -->
					<!-- <option value="5">AVOCO CONOCIMIENTO CON NOMBRAMIENTO DE JUEZA</option> -->
					<!-- <option value="4">AVOCO CONOCIMIENTO (SIMPLE)</option>    -->
				</select>
				<div id="mensaje_tipo_avoco" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-3 col-md-3 col-xs-12" >
			  	<p  class="formulario-subtitulo">Seleccione:</p>
			  	<select name="tipo_acto" id="tipo_acto"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="CÚMPLASE Y NOTIFÍQUESE" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_notificacion_avoco == 'CÚMPLASE Y NOTIFÍQUESE'){echo ' selected="selected" ' ;}else{}}}else{} ?>>CÚMPLASE Y NOTIFÍQUESE</option> 
			  		<option value="CÚMPLASE Y CÍTESE" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_notificacion_avoco == 'CÚMPLASE Y CÍTESE'){echo ' selected="selected" ' ;}else{}}}else{} ?>>CÚMPLASE Y CÍTESE</option> 
			  	
				</select>
				<div id="mensaje_tipo_acto" class="errores"></div>
	            </div>
	            
	              <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p  class="formulario-subtitulo">Actualizar Estado Procesal:</p>
			  	<select name="id_estados_procesales_juicios_actualizar" id="id_estados_procesales_juicios_actualizar"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>" ><?php echo $res->nombre_estados_procesales_juicios;  ?> </option>
			            <?php } ?>
				</select>
                 <FONT FACE="arial" SIZE=1.9 COLOR=red>(Seleccionar solo si desea actualizar el estado procesal del juicio.)</FONT>
                 </div>
	            
	            <div class="col-lg-2 col-md-2 col-xs-12">
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio_avoco_nuevos_procesos" id="generar_oficio_avoco_nuevos_procesos"  class="form-control" >
			  			<option value="No">No</option>
						
			    </select>
				<div id="mensaje_generar_oficio_avoco_nuevos_procesos" class="errores"></div>
			    </div>
	            
	            <br>
	           
	           
	           
	           
	           
	           
	            <div id="div_datos_generar_oficio_avoco_nuevos_procesos" style="display: none;">
	            <div class="col-lg-4 col-md-4 col-xs-12">
			  	<p  class="formulario-subtitulo"># Oficios a Generar:</p>
			  	<select name="cantidad_oficios_generar" id="cantidad_oficios_generar"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						
			    </select>
				<div id="mensaje_cantidad_oficios_generar" class="errores"></div>
			    </div>
	            </div>
	            
	            <br>
	            <div id="div_datos_cantidad_oficios" style="display: none; margin-top: 20px;">
	            
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Asunto Oficios:</p>
			  	 <textarea type="text"  class="form-control" id="asunto_avoco_nuevos_procesos" name="asunto_avoco_nuevos_procesos" value=""  placeholder="Ejem.  Dentro del juicio coactivo No. xxx, seguido en contra de xxx xxx xxx, con CC. xxxxxxxxxx, en calidad de deudor principal y otros de la operación No. xxxxxxx, en su parte pertinente dispone: "></textarea>
                 <div id="mensaje_asunto_avoco_nuevos_procesos" class="errores"></div>
	            </div>
	            </div>
	            </div>
	            
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #1:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos" id="entidad_va_oficio_avoco_nuevos_procesos" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos" class="errores"></div>
	            </div>
	            
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #1 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev" id="referencia_oficios_tipo_lev" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	           
	            </div>
	            </div>
	            </div>
	            
	             <div id="div_datos_cantidad_oficios_1" style="display: none;">
	              <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #2:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos_1" id="entidad_va_oficio_avoco_nuevos_procesos_1" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos_1" class="errores"></div>
	            </div>
	            
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #2 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_1" id="referencia_oficios_tipo_lev_1" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	             <div id="div_datos_cantidad_oficios_2" style="display: none;">
	             <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #3:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos_2" id="entidad_va_oficio_avoco_nuevos_procesos_2" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos_2" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #3 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_2" id="referencia_oficios_tipo_lev_2" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	             <div id="div_datos_cantidad_oficios_3" style="display: none;">
	              <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #4:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos_3" id="entidad_va_oficio_avoco_nuevos_procesos_3" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos_3" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #4 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_3" id="referencia_oficios_tipo_lev_3" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            
	            
	             <div id="div_datos_cantidad_oficios_4" style="display: none;">
	              <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #5:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos_4" id="entidad_va_oficio_avoco_nuevos_procesos_4" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos_4" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #5 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_4" id="referencia_oficios_tipo_lev_4" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	             <div id="div_datos_cantidad_oficios_5" style="display: none;">
	              <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #6:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos_5" id="entidad_va_oficio_avoco_nuevos_procesos_5" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos_5" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #6 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_5" id="referencia_oficios_tipo_lev_5" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	             <div id="div_datos_cantidad_oficios_6" style="display: none;">
	              <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #7:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos_6" id="entidad_va_oficio_avoco_nuevos_procesos_6" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos_6" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #7 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_6" id="referencia_oficios_tipo_lev_6" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            <div id="div_datos_cantidad_oficios_7" style="display: none;">
	              <div class="panel panel-default">
	             <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #8:</p>
			  	<input type="text"  name="entidad_va_oficio_avoco_nuevos_procesos_7" id="entidad_va_oficio_avoco_nuevos_procesos_7" value="" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_avoco_nuevos_procesos_7" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #8 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_7" id="referencia_oficios_tipo_lev_7" value="" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
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
	         		<h4><i class='glyphicon glyphicon-edit'></i> Datos Para el Avoco<br><FONT FACE="arial" SIZE=2 COLOR=red>(Seleccionar el tipo de avoco obligatoriamente.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		        <div class="row" id="div_reemplazar" style="display: none;">
  		       <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p  class="formulario-subtitulo">Reemplazar A:</p>
			  	<select name="reemplazar" id="reemplazar"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="1" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_reemplazo_avoco == '1'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Solo Secretario</option>
						<option value="2" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_reemplazo_avoco == '2'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Solo Impulsor</option>
						<option value="3" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->tipo_reemplazo_avoco == '3'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Secretario y Impulsor</option>
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
			  	<input type="text"  name="nombre_impulsor_anterior" id="nombre_impulsor_anterior" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->impulsor_reemplazo;}}else{} ?>" class="form-control" placeholder="Ejm. Abg. xxxx xxxx xxxx xxxx"/> 
	            <div id="mensaje_nombre_impulsor_anterior" class="errores"></div>
	            </div>
	        	
	        	<div class="col-lg-12 col-md-12 col-xs-12">
			  	<p class="formulario-subtitulo">Impulsor Entrante:</p>
			  	<select name="id_abogado" id="id_abogado"  class="form-control" readonly>
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
			  	<input type="text"  name="nombre_secretario_anterior" id="nombre_secretario_anterior" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->secretario_reemplazo;}}else{} ?>" class="form-control" placeholder="Ejm. Abg. xxxx xxxx xxxx xxxx"/> 
	            <div id="mensaje_nombre_secretario_anterior" class="errores"></div>
	            </div>
	        	
	        	<div class="col-lg-12 col-md-12 col-xs-12">
			  	<p  class="formulario-subtitulo">Secretario Entrante:</p>
			  	<select name="id_secretario" id="id_secretario"  class="form-control" readonly>
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
			  	<input type="text"  name="numero_oficio" id="numero_oficio" value="<?php echo $sel_numero_oficio; ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio" id="fecha_oficio" value="<?php echo $sel_fecha_oficio; ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Solicitud:</p>
			  	<input type="text"  name="numero_solicitud" id="numero_solicitud" value="<?php echo $sel_numero_solicitud; ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_solicitud" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Solicitud::</p>
			  	<input type="date"  name="fecha_solicitud" id="fecha_solicitud" value="<?php echo $sel_fecha_solicitud; ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_solicitud" class="errores"></div>
			    </div>
			    
	            <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Liquidación:</p>
			  	<input type="text"  name="numero_liquidacion" id="numero_liquidacion" value="<?php echo $sel_numero_liquidacion; ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_liquidacion" class="errores"></div>
	            </div>
	            
	           <div class="col-lg-4 col-md-4 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Liquidación:</p>
			  	<input type="date"  name="fecha_auto_pago" id="fecha_auto_pago" value="<?php echo $sel_fecha_auto_pago; ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_auto_pago" class="errores"></div>
			    </div>
	          </div> 
	          
	          
	          <div id="div_datos_cambio_liquidador" style="display: none;">
	          
	          <div class="col-lg-4 col-md-4 col-xs-12" >
			  	<p  class="formulario-subtitulo">Reemplazar Impulsor:</p>
			  	<select name="remplaza_impulsor" id="remplaza_impulsor"  class="form-control" >
			  	<option value="">--Seleccione--</option> 
			  		<option value="No">No</option> 
			  		<option value="Si">Si</option> 
			  	
				</select>
				<div id="mensaje_remplaza_impulsor" class="errores"></div>
	            </div>
	          
	          
	          <div class="col-lg-8 col-md-8 col-xs-12">
			  	<p class="formulario-subtitulo" >Escrito presentado por:</p>
			  	<input type="text"  name="escrito_presentado_por" id="escrito_presentado_por" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->escrito_presentado_por;}}else{} ?>" class="form-control" placeholder="Nombre"/> 
	            <div id="mensaje_escrito_presentado_por" class="errores"></div>
	            </div>
	            
	            <br>
	            
	            <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 16px;">
		                          <p class="formulario-subtitulo" >Dispone 1.-:</p>	 
                                  <textarea type="text"  class="form-control" id="dispone_1" name="dispone_1" value=""  placeholder="Ejem.  Déjese sin efecto el nombramiento."><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dispone_1;}}else{} ?></textarea>
                                  <FONT FACE="arial" SIZE=2 COLOR=red>(Ingrese el texto en el siguiente campo, sin incluir el numeral <b>1.- </b> no olvide poner punto al final del texto.)</FONT>
			
                <div id="mensaje_dispone_1" class="errores"></div>               
                </div>
	            
	             <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 16px;">
		                          <p class="formulario-subtitulo" >Dispone 2.-:</p>	
                                  <textarea type="text"  class="form-control" id="dispone_2" name="dispone_2" value=""  placeholder="Ejem.  Agréguese al proceso."><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dispone_2;}}else{} ?></textarea>
                  <FONT FACE="arial" SIZE=2 COLOR=red>(Ingrese el texto en el siguiente campo, sin incluir el numeral <b>2.- </b> no olvide poner punto al final del texto.)</FONT>
			
                 <div id="mensaje_dispone_2" class="errores"></div>
                 </div>
	            
	          </div>
	          
	          
	          
	          <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <br><p align="justify"><font face="arial" size=2><b>NOTA:</b> Estimados usuarios el sistema automáticamente llena en la razón el siguiente texto.<br><b>RAZÓN.- </b> Siento por tal, que no se notifica con esta providencia a los coactivados, por no haber señalado domicilio judicial o correo electrónico para el efecto, en la ciudad de xxxx, "Fecha" xx xx xxxx xx xxx.- <b>LO CERTIFICO.-</b></font></p>
				 <FONT FACE="arial" SIZE=2 COLOR=red>(Si necesita cambiar el texto de la razón ingreselo en el siguiente campo, sin incluir las palabras <b>RAZÓN.- </b> y <b> LO CERTIFICO.-</b>)</FONT>
			  </div>
				   
             <div class="col-xs-12 col-md-12 col-lg-12" >
		                          <p class="formulario-subtitulo" >Razón Avoco:</p>
                                  <textarea type="text"  class="form-control" id="razon_avoco" name="razon_avoco" value=""  placeholder="Ingrese Razón"><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->razon_avoco_conocimiento;}}else{} ?></textarea>
                                  
             </div>
  		
  		
	  		<div class="col-lg-12 col-md-12 col-xs-12 " style="text-align: center; margin-top: 10px">
	  		 <button type="submit" id="generar" name="generar" value=""   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Generar Avoco</button>         
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
    
  

    
