  	 

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
			
          if(tipo_avoco == 10 )
          {
       	   $("#div_datos_medida_cautelar_discapacidad").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_medida_cautelar_discapacidad").fadeOut("slow");
          }


          if(tipo_avoco == 11 )
          {
       	   $("#div_datos_medida_cautelar_fallecimiento").fadeIn("slow");
          }
       	
          else
          {
       	   $("#div_datos_medida_cautelar_fallecimiento").fadeOut("slow");
          }
          
	    });
	    
	    $("#tipo_avoco").change(function() {
			
              
              var tipo_avoco = $(this).val();
				
              
              if(tipo_avoco == 10)
              {
           	   $("#div_datos_medida_cautelar_discapacidad").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_medida_cautelar_discapacidad").fadeOut("slow");
              }

              if(tipo_avoco == 11 )
              {
           	   $("#div_datos_medida_cautelar_fallecimiento").fadeIn("slow");
              }
           	
              else
              {
           	   $("#div_datos_medida_cautelar_fallecimiento").fadeOut("slow");
              }
              
		    });
	}); 	
	   
      </script>
      
      
      
      
         <script type="text/javascript">
      $(document).ready(function(){
          
      $("#generar_oficio_discapacidad").click(function() {
			
          var generar_oficio_discapacidad = $(this).val();
			
          if(generar_oficio_discapacidad == "Si")
          {
       	   $("#div_datos_generar_oficio_discapacidad").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_datos_generar_oficio_discapacidad").fadeOut("slow");
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
	    
	    $("#generar_oficio_discapacidad").change(function() {
			
              
              var generar_oficio_discapacidad = $(this).val();
				
              
              if(generar_oficio_discapacidad == "Si")
              {
           	   $("#div_datos_generar_oficio_discapacidad").fadeIn("slow");
              }
           	
              else
              {
              $("#div_datos_generar_oficio_discapacidad").fadeOut("slow");
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
          
      $("#generar_oficio_fallecimiento").click(function() {
			
          var generar_oficio_fallecimiento = $(this).val();
			
          if(generar_oficio_fallecimiento == "Si")
          {
       	   $("#div_datos_generar_oficio_fallecimiento").fadeIn("slow");
       	 
          }
       	
          else
          {
           $("#div_datos_generar_oficio_fallecimiento").fadeOut("slow");
         
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
	    
	    $("#generar_oficio_fallecimiento").change(function() {
			
              
              var generar_oficio_fallecimiento = $(this).val();
				
              
              if(generar_oficio_fallecimiento == "Si")
              {
           	   $("#div_datos_generar_oficio_fallecimiento").fadeIn("slow");
              }
           	
              else
              {
              $("#div_datos_generar_oficio_fallecimiento").fadeOut("slow");
            
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
      
      
      
      
      
      
           <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#generar").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	
		    	var fecha_avoco = $("#fecha_avoco").val();
		     	var hora_avoco = $("#hora_avoco").val();
		        var tipo_avoco = $("#tipo_avoco").val();
			   
			    var numero_oficio_embargo_cuenta = $("#numero_oficio_embargo_cuenta").val();
			    var fecha_oficio_embargo_cuenta = $("#fecha_oficio_embargo_cuenta").val();
			    var tipo_cuenta = $("#tipo_cuenta").val();



			    var numero_oficio_medida_cuatelar_discapacidad = $("#numero_oficio_medida_cuatelar_discapacidad").val();
			    var fecha_oficio_medida_cuatelar_discapacidad = $("#fecha_oficio_medida_cuatelar_discapacidad").val();
			    var numero_liquidacion_medida_cuatelar_discapacidad = $("#numero_liquidacion_medida_cuatelar_discapacidad").val();
			    var fecha_liquidacion_medida_cuatelar_discapacidad = $("#fecha_liquidacion_medida_cuatelar_discapacidad").val();
			    var numero_solicitud_discapacidad = $("#numero_solicitud_discapacidad").val();
			    var fecha_solicitud_discapacidad = $("#fecha_solicitud_discapacidad").val();
			    var nombre_discapacitado = $("#nombre_discapacitado").val();




			    var numero_oficio_medida_cuatelar_fallecimiento = $("#numero_oficio_medida_cuatelar_fallecimiento").val();
			    var fecha_oficio_medida_cuatelar_fallecimiento = $("#fecha_oficio_medida_cuatelar_fallecimiento").val();
			    var numero_liquidacion_medida_cuatelar_fallecimiento = $("#numero_liquidacion_medida_cuatelar_fallecimiento").val();
			    var fecha_liquidacion_medida_cuatelar_fallecimiento = $("#fecha_liquidacion_medida_cuatelar_fallecimiento").val();
			    var numero_solicitud_fallecimiento = $("#numero_solicitud_fallecimiento").val();
			    var fecha_solicitud_fallecimiento = $("#fecha_solicitud_fallecimiento").val();
			    var nombre_conyuge_sobreviviente = $("#nombre_conyuge_sobreviviente").val();
			    var correo_conyuge_sobreviviente = $("#correo_conyuge_sobreviviente").val();




			    var generar_oficio_discapacidad= $("#generar_oficio_discapacidad").val();
                var entidad_va_oficio_discapacidad= $("#entidad_va_oficio_discapacidad").val();
                var asunto_discapacidad= $("#asunto_discapacidad").val();

			   

			    var generar_oficio_fallecimiento= $("#generar_oficio_fallecimiento").val();
                var entidad_va_oficio_fallecimiento= $("#entidad_va_oficio_fallecimiento").val();
                var asunto_fallecimiento= $("#asunto_fallecimiento").val();



                // DISCAPACIDAD
                var cantidad_oficios_generar= $("#cantidad_oficios_generar").val();
                var entidad_va_oficio_discapacidad_1= $("#entidad_va_oficio_discapacidad_1").val();
                var entidad_va_oficio_discapacidad_2= $("#entidad_va_oficio_discapacidad_2").val();
                var entidad_va_oficio_discapacidad_3= $("#entidad_va_oficio_discapacidad_3").val();
                var entidad_va_oficio_discapacidad_4= $("#entidad_va_oficio_discapacidad_4").val();
                var entidad_va_oficio_discapacidad_5= $("#entidad_va_oficio_discapacidad_5").val();
                var entidad_va_oficio_discapacidad_6= $("#entidad_va_oficio_discapacidad_6").val();
                var entidad_va_oficio_discapacidad_7= $("#entidad_va_oficio_discapacidad_7").val();
                

                
                
                 //  FALLECIMIENTO
                 
                 var cantidad_oficios_generar_1= $("#cantidad_oficios_generar_1").val();
                 var entidad_va_oficio_fallecimiento_1= $("#entidad_va_oficio_fallecimiento_1").val();
                 var entidad_va_oficio_fallecimiento_2= $("#entidad_va_oficio_fallecimiento_2").val();
                 var entidad_va_oficio_fallecimiento_3= $("#entidad_va_oficio_fallecimiento_3").val();
                 var entidad_va_oficio_fallecimiento_4= $("#entidad_va_oficio_fallecimiento_4").val();
                 var entidad_va_oficio_fallecimiento_5= $("#entidad_va_oficio_fallecimiento_5").val();
                 var entidad_va_oficio_fallecimiento_6= $("#entidad_va_oficio_fallecimiento_6").val();
                 var entidad_va_oficio_fallecimiento_7= $("#entidad_va_oficio_fallecimiento_7").val();
                 





                
			    			    	   				
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

		    	



		    	if(tipo_avoco == 10  && numero_oficio_medida_cuatelar_discapacidad == ""){
					$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 10  && fecha_oficio_medida_cuatelar_discapacidad == ""){
					$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").text("Seleccione Fecha");
		    		$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && numero_liquidacion_medida_cuatelar_discapacidad == ""){
					$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").text("Ingrese # Liquidación");
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && fecha_liquidacion_medida_cuatelar_discapacidad == ""){
					$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").text("Seleccione Fecha");
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 10  && numero_solicitud_discapacidad == ""){
					$("#mensaje_numero_solicitud_discapacidad").text("Ingrese # Solicitud");
		    		$("#mensaje_numero_solicitud_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_solicitud_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && fecha_solicitud_discapacidad == ""){
					$("#mensaje_fecha_solicitud_discapacidad").text("Seleccione Fecha");
		    		$("#mensaje_fecha_solicitud_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_solicitud_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 10  && nombre_discapacitado == ""){
					$("#mensaje_nombre_discapacitado").text("Ingrese Nombre");
		    		$("#mensaje_nombre_discapacitado").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_nombre_discapacitado").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 10  && generar_oficio_discapacidad == 0){
					$("#mensaje_generar_oficio_discapacidad").text("Seleccione");
		    		$("#mensaje_generar_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}



		    	if(tipo_avoco == 10  && cantidad_oficios_generar == 0 && generar_oficio_discapacidad=="Si"){
					$("#mensaje_cantidad_oficios_generar").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
		    	if(tipo_avoco == 10  && cantidad_oficios_generar == 1 && generar_oficio_discapacidad == "Si" && asunto_discapacidad == "" ){
					$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
				if(tipo_avoco == 10  && cantidad_oficios_generar == 1 && generar_oficio_discapacidad == "Si" && entidad_va_oficio_discapacidad == "" ){
					$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

				
				



				if(tipo_avoco == 10  && cantidad_oficios_generar == 2 && generar_oficio_discapacidad == "Si"){

					if(asunto_discapacidad == ""){
						$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_discapacidad == ""){
						$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					


					if(entidad_va_oficio_discapacidad_1 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					
				}else{
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
					     
				}
		    	




				//aqui 3
				if(tipo_avoco == 10  && cantidad_oficios_generar == 3 && generar_oficio_discapacidad == "Si"){

					if(asunto_discapacidad == ""){
						$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_discapacidad == ""){
						$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					


					if(entidad_va_oficio_discapacidad_1 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_2 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					

					
					
				}else{
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
					    
				}




                 /// AQUI 4
				
				
				
				if(tipo_avoco == 10  && cantidad_oficios_generar == 4 && generar_oficio_discapacidad == "Si"){

					if(asunto_discapacidad == ""){
						$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_discapacidad == ""){
						$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_discapacidad_1 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_2 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}




					if(entidad_va_oficio_discapacidad_3 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}

	
					
				}else{
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
					
				}
				
				
				
				

                /// AQUI 5
				
				
				
				if(tipo_avoco == 10  && cantidad_oficios_generar == 5 && generar_oficio_discapacidad == "Si"){

					if(asunto_discapacidad == ""){
						$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_discapacidad == ""){
						$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_discapacidad_1 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_2 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}




					if(entidad_va_oficio_discapacidad_3 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_4 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}

	
					
				}else{
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
					
				}
				
				


 				/// AQUI 6
				
				
				
				if(tipo_avoco == 10  && cantidad_oficios_generar == 6 && generar_oficio_discapacidad == "Si"){

					if(asunto_discapacidad == ""){
						$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_discapacidad == ""){
						$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_discapacidad_1 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_2 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}




					if(entidad_va_oficio_discapacidad_3 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_4 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_5 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}

	
					
				}else{
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_5").fadeOut("slow"); //Muestra mensaje de error
					
				}





	/// AQUI 7
				
				
				
				if(tipo_avoco == 10  && cantidad_oficios_generar == 7 && generar_oficio_discapacidad == "Si"){

					if(asunto_discapacidad == ""){
						$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_discapacidad == ""){
						$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_discapacidad_1 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_2 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}




					if(entidad_va_oficio_discapacidad_3 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_4 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_5 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_6 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}
	
					
				}else{
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_6").fadeOut("slow"); //Muestra mensaje de error
					
				}




			/// AQUI 8
				
				
				
				if(tipo_avoco == 10  && cantidad_oficios_generar == 8 && generar_oficio_discapacidad == "Si"){

					if(asunto_discapacidad == ""){
						$("#mensaje_asunto_discapacidad").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}
					
					if(entidad_va_oficio_discapacidad == ""){
						$("#mensaje_entidad_va_oficio_discapacidad").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
			            
					}



					if(entidad_va_oficio_discapacidad_1 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_2 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
			            
					}




					if(entidad_va_oficio_discapacidad_3 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_4 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_4").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_4").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_5 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_5").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_5").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_5").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_6 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_6").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_6").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_6").fadeOut("slow"); //Muestra mensaje de error
			            
					}


					if(entidad_va_oficio_discapacidad_7 == ""){
						$("#mensaje_entidad_va_oficio_discapacidad_7").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_discapacidad_7").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}
					else{
						$("#mensaje_entidad_va_oficio_discapacidad_7").fadeOut("slow"); //Muestra mensaje de error
			            
					}
	
					
				}else{
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_discapacidad").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_6").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_discapacidad_7").fadeOut("slow"); //Muestra mensaje de error
					
				}


				
		    	

		    	if(tipo_avoco == 11  && numero_oficio_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").text("Ingrese # Oficio");
		    		$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}


		    	if(tipo_avoco == 11  && fecha_oficio_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").text("Seleccione Fecha");
		    		$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 11  && numero_liquidacion_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").text("Ingrese # Liquidación");
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if(tipo_avoco == 11  && fecha_liquidacion_medida_cuatelar_fallecimiento == ""){
					$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").text("Seleccione Fecha");
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 11  && numero_solicitud_fallecimiento == ""){
					$("#mensaje_numero_solicitud_fallecimiento").text("Ingrese # Solicitud");
		    		$("#mensaje_numero_solicitud_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_numero_solicitud_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if(tipo_avoco == 11  && fecha_solicitud_fallecimiento == ""){
					$("#mensaje_fecha_solicitud_fallecimiento").text("Seleccione Fecha");
		    		$("#mensaje_fecha_solicitud_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_fecha_solicitud_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if(tipo_avoco == 11  && nombre_conyuge_sobreviviente == ""){
					$("#mensaje_nombre_conyuge_sobreviviente").text("Ingrese Nombre Cónyuge");
		    		$("#mensaje_nombre_conyuge_sobreviviente").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_nombre_conyuge_sobreviviente").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if (tipo_avoco == 11  && correo_conyuge_sobreviviente == "")
		    	{
			    	
		    		$("#mensaje_correo_conyuge_sobreviviente").text("Introduzca un correo");
		    		$("#mensaje_correo_conyuge_sobreviviente").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else if (tipo_avoco == 11  && regex.test($('#correo_conyuge_sobreviviente').val().trim()))
		    	{
		    		$("#mensaje_correo_conyuge_sobreviviente").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else if (tipo_avoco == 11)
		    	{
		    		$("#mensaje_correo_conyuge_sobreviviente").text("Introduzca un correo Valido");
		    		$("#mensaje_correo_conyuge_sobreviviente").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }
		    	if(tipo_avoco == 11  && generar_oficio_fallecimiento == 0){
					$("#mensaje_generar_oficio_fallecimiento").text("Seleccione");
		    		$("#mensaje_generar_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_generar_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}



		    	if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 0 && generar_oficio_fallecimiento=="Si"){
					$("#mensaje_cantidad_oficios_generar_1").text("Seleccione");
		    		$("#mensaje_cantidad_oficios_generar_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_cantidad_oficios_generar_1").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
		    	if(tipo_avoco == 11 && cantidad_oficios_generar_1 == 1 && generar_oficio_fallecimiento == "Si" && asunto_fallecimiento == "" ){
					$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}	
				
				if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 1 && generar_oficio_fallecimiento == "Si" && entidad_va_oficio_fallecimiento == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}
				else 
		    	{
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
				}

					



				if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 2 && generar_oficio_fallecimiento == "Si"  ){
					if(asunto_fallecimiento == "" ){
						$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
			            
			        }

				if(entidad_va_oficio_fallecimiento == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		        }

				



				if(entidad_va_oficio_fallecimiento_1 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
		        }

				}else{

					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
					   
				}
				


			// aqui 3






				if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 3 && generar_oficio_fallecimiento == "Si"  ){

					if(asunto_fallecimiento == "" ){
						$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
			            
			        }

					if(entidad_va_oficio_fallecimiento == "" ){
						$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
			        }

					



					if(entidad_va_oficio_fallecimiento_1 == "" ){
						$("#mensaje_entidad_va_oficio_fallecimiento_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
			        }

					

					if(entidad_va_oficio_fallecimiento_2 == "" ){
						$("#mensaje_entidad_va_oficio_fallecimiento_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
			        }

					

						
					}else{

						$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
						   
					}



				    // aqui 4






				if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 4 && generar_oficio_fallecimiento == "Si"  ){

					if(asunto_fallecimiento == "" ){
						$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
			    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
			            
			        }

					if(entidad_va_oficio_fallecimiento == "" ){
						$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
			        }

					



					if(entidad_va_oficio_fallecimiento_1 == "" ){
						$("#mensaje_entidad_va_oficio_fallecimiento_1").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
			        }

					




					if(entidad_va_oficio_fallecimiento_2 == "" ){
						$("#mensaje_entidad_va_oficio_fallecimiento_2").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
			        }

					


					if(entidad_va_oficio_fallecimiento_3 == "" ){
						$("#mensaje_entidad_va_oficio_fallecimiento_3").text("Ingrese a quien va Dirigido");
			    		$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeIn("slow"); //Muestra mensaje de error
			            return false;
					}else{
						$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
			        }

				

						
					}else{

						$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
						$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
					}







			    // aqui 5






			if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 5 && generar_oficio_fallecimiento == "Si"  ){

				if(asunto_fallecimiento == "" ){
					$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
		        }

				if(entidad_va_oficio_fallecimiento == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		        }

				



				if(entidad_va_oficio_fallecimiento_1 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
		        }

				




				if(entidad_va_oficio_fallecimiento_2 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_2").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
		        }

				


				if(entidad_va_oficio_fallecimiento_3 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_3").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
		        }

				if(entidad_va_oficio_fallecimiento_4 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_4").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
		        }

					
				}else{

					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
				}



		    // aqui 6






			if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 6 && generar_oficio_fallecimiento == "Si"  ){

				if(asunto_fallecimiento == "" ){
					$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
		        }

				if(entidad_va_oficio_fallecimiento == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		        }

				



				if(entidad_va_oficio_fallecimiento_1 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
		        }

				




				if(entidad_va_oficio_fallecimiento_2 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_2").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
		        }

				


				if(entidad_va_oficio_fallecimiento_3 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_3").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
		        }

				if(entidad_va_oficio_fallecimiento_4 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_4").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
		        }


				if(entidad_va_oficio_fallecimiento_5 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_5").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeOut("slow"); //Muestra mensaje de error
		        }
				
					
				}else{

					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeOut("slow"); //Muestra mensaje de error
				}
			    	






		    // aqui 7






			if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 7 && generar_oficio_fallecimiento == "Si"  ){

				if(asunto_fallecimiento == "" ){
					$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
		        }

				if(entidad_va_oficio_fallecimiento == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		        }

				



				if(entidad_va_oficio_fallecimiento_1 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
		        }

				




				if(entidad_va_oficio_fallecimiento_2 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_2").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
		        }

				


				if(entidad_va_oficio_fallecimiento_3 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_3").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
		        }

				if(entidad_va_oficio_fallecimiento_4 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_4").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
		        }


				if(entidad_va_oficio_fallecimiento_5 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_5").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeOut("slow"); //Muestra mensaje de error
		        }

				if(entidad_va_oficio_fallecimiento_6 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_6").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_6").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_6").fadeOut("slow"); //Muestra mensaje de error
		        }
					
				}else{

					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_6").fadeOut("slow"); //Muestra mensaje de error
				}
			    	
		    




		    // aqui 8






			if(tipo_avoco == 11  && cantidad_oficios_generar_1 == 8 && generar_oficio_fallecimiento == "Si"  ){

				if(asunto_fallecimiento == "" ){
					$("#mensaje_asunto_fallecimiento").text("Ingrese el Asunto");
		    		$("#mensaje_asunto_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		            
		        }

				if(entidad_va_oficio_fallecimiento == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
		        }

				



				if(entidad_va_oficio_fallecimiento_1 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_1").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
		        }

				




				if(entidad_va_oficio_fallecimiento_2 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_2").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
		        }

				


				if(entidad_va_oficio_fallecimiento_3 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_3").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
		        }

				if(entidad_va_oficio_fallecimiento_4 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_4").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
		        }


				if(entidad_va_oficio_fallecimiento_5 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_5").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeOut("slow"); //Muestra mensaje de error
		        }

				if(entidad_va_oficio_fallecimiento_6 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_6").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_6").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_6").fadeOut("slow"); //Muestra mensaje de error
		        }


				if(entidad_va_oficio_fallecimiento_7 == "" ){
					$("#mensaje_entidad_va_oficio_fallecimiento_7").text("Ingrese a quien va Dirigido");
		    		$("#mensaje_entidad_va_oficio_fallecimiento_7").fadeIn("slow"); //Muestra mensaje de error
		            return false;
				}else{
					$("#mensaje_entidad_va_oficio_fallecimiento_7").fadeOut("slow"); //Muestra mensaje de error
		        }
					
				}else{

					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_asunto_fallecimiento").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_6").fadeOut("slow"); //Muestra mensaje de error
					$("#mensaje_entidad_va_oficio_fallecimiento_7").fadeOut("slow"); //Muestra mensaje de error
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

				$( "#generar_oficio_discapacidad" ).focus(function() {
					$("#mensaje_generar_oficio_discapacidad").fadeOut("slow");
    			});
				$( "#cantidad_oficios_generar" ).focus(function() {
					$("#mensaje_cantidad_oficios_generar").fadeOut("slow");
    			});
				$( "#asunto_discapacidad" ).focus(function() {
					$("#mensaje_asunto_discapacidad").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_discapacidad" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_discapacidad_1" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad_1").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_discapacidad_2" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad_2").fadeOut("slow");
    			});
				

				$( "#entidad_va_oficio_discapacidad_3" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad_3").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_discapacidad_4" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad_4").fadeOut("slow");
    			});

				$( "#entidad_va_oficio_discapacidad_5" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad_5").fadeOut("slow");
    			});

				$( "#entidad_va_oficio_discapacidad_6" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad_6").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_discapacidad_7" ).focus(function() {
					$("#mensaje_entidad_va_oficio_discapacidad_7").fadeOut("slow");
    			});
				
				$( "#generar_oficio_fallecimiento" ).focus(function() {
					$("#mensaje_generar_oficio_fallecimiento").fadeOut("slow");
    			});
				$( "#cantidad_oficios_generar_1" ).focus(function() {
					$("#mensaje_cantidad_oficios_generar_1").fadeOut("slow");
    			});
				$( "#asunto_fallecimiento" ).focus(function() {
					$("#mensaje_asunto_fallecimiento").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_fallecimiento" ).focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento").fadeOut("slow");
    			});
				
				$( "#entidad_va_oficio_fallecimiento_1" ).focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento_1").fadeOut("slow");
    			});
				

				$( "#entidad_va_oficio_fallecimiento_2").focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento_2").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_fallecimiento_3").focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento_3").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_fallecimiento_4").focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento_4").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_fallecimiento_5").focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento_5").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_fallecimiento_6").focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento_6").fadeOut("slow");
    			});
				$( "#entidad_va_oficio_fallecimiento_7").focus(function() {
					$("#mensaje_entidad_va_oficio_fallecimiento_7").fadeOut("slow");
    			});
    			
				$( "#numero_oficio_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_numero_oficio_medida_cuatelar_discapacidad").fadeOut("slow");
    			});

				$( "#fecha_oficio_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_fecha_oficio_medida_cuatelar_discapacidad").fadeOut("slow");
    			});


				$( "#numero_liquidacion_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_numero_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow");
    			});

				$( "#fecha_liquidacion_medida_cuatelar_discapacidad" ).focus(function() {
					$("#mensaje_fecha_liquidacion_medida_cuatelar_discapacidad").fadeOut("slow");
    			});
				


				$( "#numero_solicitud_discapacidad" ).focus(function() {
					$("#mensaje_numero_solicitud_discapacidad").fadeOut("slow");
    			});

				$( "#fecha_solicitud_discapacidad" ).focus(function() {
					$("#mensaje_fecha_solicitud_discapacidad").fadeOut("slow");
    			});
				$( "#nombre_discapacitado" ).focus(function() {
					$("#mensaje_nombre_discapacitado").fadeOut("slow");
    			});




				$( "#numero_oficio_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_numero_oficio_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#fecha_oficio_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_fecha_oficio_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#numero_liquidacion_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_numero_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#fecha_liquidacion_medida_cuatelar_fallecimiento" ).focus(function() {
					$("#mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento").fadeOut("slow");
    			});
				$( "#numero_solicitud_fallecimiento" ).focus(function() {
					$("#mensaje_numero_solicitud_fallecimiento").fadeOut("slow");
    			});
				$( "#fecha_solicitud_fallecimiento" ).focus(function() {
					$("#mensaje_fecha_solicitud_fallecimiento").fadeOut("slow");
    			});
				$( "#nombre_conyuge_sobreviviente" ).focus(function() {
					$("#mensaje_nombre_conyuge_sobreviviente").fadeOut("slow");
    			});
				$( "#correo_conyuge_sobreviviente" ).focus(function() {
					$("#mensaje_correo_conyuge_sobreviviente").fadeOut("slow");
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
       
      <form action="<?php echo $helper->url("MatrizJuicios","Imprimir_Providencia_Levantamiento_Medidas_Cautelares"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12 col-md-12 col-xs-12" target="_blank">
         
                 <br> 
                 <div class="col-lg-12 col-md-12 col-xs-12" style=" text-aling: justify;">
            	 <p align="justify"><b><font face="univers" size=3>***Estimados usuarios al generar un documento en el sistema se actualizara la fecha de última providencia y el estado procesal del juicio cuando su abogado SECRETARIO lo apruebe.***</font></b></p>
				
            	 </div>
                 <br> 
                        
         <div class="col-lg-12 col-md-12 col-xs-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Datos Levantamiento Medidas Cautelares</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  							
  		<div class="col-lg-2 col-md-2 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha:</p>
			  	<input type="date"  name="fecha_avoco" id="fecha_avoco" min="1800-01-01" max="2018-12-30" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_providencias;}}else{if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_providencias;}}else{}} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha" class="errores"></div>
			    <input type="hidden"  name="id_juicios" id="id_juicios" value="<?php echo $datos['id_juicios']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_clientes" id="id_clientes" value="<?php echo $datos['id_clientes']; ?>" class="form-control"/ readonly>
			    <input type="hidden"  name="id_titulo_credito" id="id_titulo_credito" value="<?php echo $datos['id_titulo_credito']; ?>" class="form-control"/ readonly>
			  
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
	         		<h4><i class='glyphicon glyphicon-edit'></i> Tipo de Levantamiento Medida Cautelar<br><FONT FACE="arial" SIZE=2 COLOR=red>(Seleccionar el tipo de embargo obligatoriamente.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		         <div class="col-lg-6 col-md-6 col-xs-12" >
			  	<p  class="formulario-subtitulo">Tipo Levantamiento:</p>
			  	<select name="tipo_avoco" id="tipo_avoco"  class="form-control" >
			  		<option value="0"><?php echo "--Seleccione--";  ?> </option>
			  		<option value="10">PROVIDENCIA LEVANTAMIENTO MEDIDA CAUTELAR (DISCAPACIDAD)</option>
					<option value="11">PROVIDENCIA LEVANTAMIENTO MEDIDA CAUTELAR (FALLECIMIENTO)</option>
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
	            
	            
	            </div>
	            </div>
	            </div>
  		
  		
  		
  			
  		        <div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 20px;">
	            <div class="panel panel-info">
	         	<div class="panel-heading">
	         		<h4><i class='glyphicon glyphicon-edit'></i> Datos Para la Providencia de Levantamiento de Medidas Cautelares<br><FONT FACE="arial" SIZE=2 COLOR=red>(Ingresar los datos requeridos.)</FONT></h4>
	         	</div>
	        	<div class="panel-body">
	        	
  		       
	            <div id="div_datos_medida_cautelar_discapacidad" style="display: none;">
                <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio:</p>
			  	<input type="text"  name="numero_oficio_medida_cuatelar_discapacidad" id="numero_oficio_medida_cuatelar_discapacidad" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_medida_cuatelar_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio_medida_cuatelar_discapacidad" id="fecha_oficio_medida_cuatelar_discapacidad" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_oficio_discapacidad;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_medida_cuatelar_discapacidad" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Liquidación:</p>
			  	<input type="text"  name="numero_liquidacion_medida_cuatelar_discapacidad" id="numero_liquidacion_medida_cuatelar_discapacidad" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_1_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_liquidacion_medida_cuatelar_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Liquidación:</p>
			  	<input type="date"  name="fecha_liquidacion_medida_cuatelar_discapacidad" id="fecha_liquidacion_medida_cuatelar_discapacidad" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_liquidacion_discapacidad;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_liquidacion_medida_cuatelar_discapacidad" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número Solicitud de Discapacidad:</p>
			  	<input type="text"  name="numero_solicitud_discapacidad" id="numero_solicitud_discapacidad" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_2_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_solicitud_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha Solicitud de Discapacidad:</p>
			  	<input type="date"  name="fecha_solicitud_discapacidad" id="fecha_solicitud_discapacidad" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->fecha_solicitud_discapacidad;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_solicitud_discapacidad" class="errores"></div>
			    </div>
			    
			  
	          
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombre del Discapacitado:</p>
			  	<input type="text"  name="nombre_discapacitado" id="nombre_discapacitado" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->numero_oficio_3_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="Name"/> 
	            <div id="mensaje_nombre_discapacitado" class="errores"></div>
	            </div>
	            
	            
	             <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio_discapacidad" id="generar_oficio_discapacidad"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->genero_oficio == 't'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Si</option>
						<option value="No" <?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){ if($res_edit->genero_oficio == 'f'){echo ' selected="selected" ' ;}else{}}}else{} ?>>No</option>
						
						
			    </select>
				<div id="mensaje_generar_oficio_discapacidad" class="errores"></div>
			    </div>
	            
	            
	            
	             <div id="div_datos_generar_oficio_discapacidad" style="display: none;">
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
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Asunto Oficios:</p>
			  		 <textarea type="text"  class="form-control" id="asunto_discapacidad" name="asunto_discapacidad" value=""  placeholder="Ejem.  Dentro del juicio coactivo No. xxx, seguido en contra de xxx xxx xxx, con CC. xxxxxxxxxx, en calidad de deudor principal y otros de la operación No. xxxxxxx, en su parte pertinente dispone: "><?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->asunto_oficio;}}else{} ?></textarea>
                <div id="mensaje_asunto_discapacidad" class="errores"></div>
	            </div>
	            </div>
	            </div>
	            
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #1:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad" id="entidad_va_oficio_discapacidad" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #1 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad" id="referencia_oficios_tipo_lev_discapacidad" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	          
	            </div>
	            </div>
	            </div>
	            
	            
	            <div id="div_datos_cantidad_oficios_1" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #2:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad_1" id="entidad_va_oficio_discapacidad_1" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_2;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad_1" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #2 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad_1" id="referencia_oficios_tipo_lev_discapacidad_1" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_2;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            
	            
	            <div id="div_datos_cantidad_oficios_2" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #3:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad_2" id="entidad_va_oficio_discapacidad_2" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_3;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad_2" class="errores"></div>
	            </div>
	            
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #3 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad_2" id="referencia_oficios_tipo_lev_discapacidad_2" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_3;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            
	            <div id="div_datos_cantidad_oficios_3" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #4:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad_3" id="entidad_va_oficio_discapacidad_3" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_4;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad_3" class="errores"></div>
	            </div>
	            
	            
	             <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #4 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad_3" id="referencia_oficios_tipo_lev_discapacidad_3" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_4;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            
	            <div id="div_datos_cantidad_oficios_4" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #5:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad_4" id="entidad_va_oficio_discapacidad_4" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_5;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad_4" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #5 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad_4" id="referencia_oficios_tipo_lev_discapacidad_4" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_5;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	             <div id="div_datos_cantidad_oficios_5" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #6:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad_5" id="entidad_va_oficio_discapacidad_5" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_6;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad_5" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #6 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad_5" id="referencia_oficios_tipo_lev_discapacidad_5" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_6;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            <div id="div_datos_cantidad_oficios_6" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #7:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad_6" id="entidad_va_oficio_discapacidad_6" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_7;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad_6" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #7 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad_6" id="referencia_oficios_tipo_lev_discapacidad_6" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_7;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	              <div id="div_datos_cantidad_oficios_7" style="display: none; margin-top: 20px;">
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #8:</p>
			  	<input type="text"  name="entidad_va_oficio_discapacidad_7" id="entidad_va_oficio_discapacidad_7" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->dirigido_a_entidad_8;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_discapacidad_7" class="errores"></div>
	            </div>
	            
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #8 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_discapacidad_7" id="referencia_oficios_tipo_lev_discapacidad_7" value="<?php if(!empty($resultSet_edit)){ foreach ($resultSet_edit as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_8;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
	            </div>
	            </div>
	            </div>
	            
	            
	            
	            
	            
	            
	            </div>
	            
	            
	          
	          
	          
	          
	          
	          
	            <div id="div_datos_medida_cautelar_fallecimiento" style="display: none;">
                <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Oficio:</p>
			  	<input type="text"  name="numero_oficio_medida_cuatelar_fallecimiento" id="numero_oficio_medida_cuatelar_fallecimiento" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->numero_oficio_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_oficio_medida_cuatelar_fallecimiento" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Oficio:</p>
			  	<input type="date"  name="fecha_oficio_medida_cuatelar_fallecimiento" id="fecha_oficio_medida_cuatelar_fallecimiento" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_oficio_fallecimiento;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_oficio_medida_cuatelar_fallecimiento" class="errores"></div>
			    </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número de Liquidación:</p>
			  	<input type="text"  name="numero_liquidacion_medida_cuatelar_fallecimiento" id="numero_liquidacion_medida_cuatelar_fallecimiento" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->numero_oficio_1_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_liquidacion_medida_cuatelar_fallecimiento" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha de Liquidación:</p>
			  	<input type="date"  name="fecha_liquidacion_medida_cuatelar_fallecimiento" id="fecha_liquidacion_medida_cuatelar_fallecimiento" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_liquidacion_fallecimiento;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_liquidacion_medida_cuatelar_fallecimiento" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Número Solicitud de Fallecimiento:</p>
			  	<input type="text"  name="numero_solicitud_fallecimiento" id="numero_solicitud_fallecimiento" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->numero_oficio_2_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="#"/> 
	            <div id="mensaje_numero_solicitud_fallecimiento" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-6 col-md-6 col-xs-12">
         		<p class="formulario-subtitulo" >Fecha Solicitud de Fallecimiento:</p>
			  	<input type="date"  name="fecha_solicitud_fallecimiento" id="fecha_solicitud_fallecimiento" min="1800-01-01" max="<?php echo date('Y-m-d');?>" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->fecha_solicitud_fallecimiento;}}else{} ?>" class="form-control "/> 
			  	<div id="mensaje_fecha_solicitud_fallecimiento" class="errores"></div>
			    </div>
			    
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Nombre Cónyuge Sobreviviente:</p>
			  	<input type="text"  name="nombre_conyuge_sobreviviente" id="nombre_conyuge_sobreviviente" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->numero_oficio_3_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="Name"/> 
	            <div id="mensaje_nombre_conyuge_sobreviviente" class="errores"></div>
	            </div>
			    
			    <div class="col-lg-6 col-md-6 col-xs-12">
			  	<p class="formulario-subtitulo" >Correo Electrónico Cónyuge:</p>
			  	<input type="email"  name="correo_conyuge_sobreviviente" id="correo_conyuge_sobreviviente" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_levantamiento_providencias;}}else{} ?>" class="form-control" placeholder="example@gmail.com"/> 
	            <div id="mensaje_correo_conyuge_sobreviviente" class="errores"></div>
	            </div>
			  
	            
	            
	             <div class="col-lg-3 col-md-3 col-xs-12">
			  	<p  class="formulario-subtitulo">Generar Oficio:</p>
			  	<select name="generar_oficio_fallecimiento" id="generar_oficio_fallecimiento"  class="form-control" >
			  		<option value="0">--Seleccione--</option>
						<option value="Si" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->genero_oficio == 't'){echo ' selected="selected" ' ;}else{}}}else{} ?>>Si</option>
						<option value="No" <?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){ if($res_edit->genero_oficio == 'f'){echo ' selected="selected" ' ;}else{}}}else{} ?>>No</option>
						
						
			    </select>
				<div id="mensaje_generar_oficio_fallecimiento" class="errores"></div>
			    </div>
	            
	             <div id="div_datos_generar_oficio_fallecimiento" style="display: none;">
	             <div class="col-lg-3 col-md-3 col-xs-12">
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
	           <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Asunto Oficios:</p>
			  	  		 <textarea type="text"  class="form-control" id="asunto_fallecimiento" name="asunto_fallecimiento" value=""  placeholder="Ejem.  Dentro del juicio coactivo No. xxx, seguido en contra de xxx xxx xxx, con CC. xxxxxxxxxx, en calidad de deudor principal y otros de la operación No. xxxxxxx, en su parte pertinente dispone: "><?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->asunto_oficio;}}else{} ?></textarea>
                <div id="mensaje_asunto_fallecimiento" class="errores"></div>
	            </div>
	           </div>
	           </div>
	             
	             
	            <div class="panel panel-default">
	            <div class="panel-body">
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Dirigido A #1:</p>
			  	<input type="text"  name="entidad_va_oficio_fallecimiento" id="entidad_va_oficio_fallecimiento" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento" class="errores"></div>
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
			  	<input type="text"  name="entidad_va_oficio_fallecimiento_1" id="entidad_va_oficio_fallecimiento_1" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_2;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento_1" class="errores"></div>
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
			  	<input type="text"  name="entidad_va_oficio_fallecimiento_2" id="entidad_va_oficio_fallecimiento_2" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_3;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento_2" class="errores"></div>
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
			  	<input type="text"  name="entidad_va_oficio_fallecimiento_3" id="entidad_va_oficio_fallecimiento_3" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_4;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento_3" class="errores"></div>
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
			  	<input type="text"  name="entidad_va_oficio_fallecimiento_4" id="entidad_va_oficio_fallecimiento_4" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_5;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento_4" class="errores"></div>
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
			  	<input type="text"  name="entidad_va_oficio_fallecimiento_5" id="entidad_va_oficio_fallecimiento_5" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_6;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento_5" class="errores"></div>
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
			  	<input type="text"  name="entidad_va_oficio_fallecimiento_6" id="entidad_va_oficio_fallecimiento_6" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_7;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento_6" class="errores"></div>
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
			  	<input type="text"  name="entidad_va_oficio_fallecimiento_7" id="entidad_va_oficio_fallecimiento_7" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->dirigido_a_entidad_8;}}else{} ?>" class="form-control" placeholder="Nombre Entidad"/> 
	            <div id="mensaje_entidad_va_oficio_fallecimiento_7" class="errores"></div>
	            </div>
	            
	            <div class="col-lg-12 col-md-12 col-xs-12" style='margin-top: 10px;'>
			  	<p class="formulario-subtitulo" >Referencia #8 (Opcional):</p>
			 	<input type="text"  name="referencia_oficios_tipo_lev_7" id="referencia_oficios_tipo_lev_7" value="<?php if(!empty($resultSet_edit_2)){ foreach ($resultSet_edit_2 as $res_edit){echo $res_edit->referencia_oficios_tipo_lev_8;}}else{} ?>" class="form-control" placeholder="Ejem: Levantamiento de Retención de Valores en el Sistema Financiero."/> 
	            </div>
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
    
  

    
