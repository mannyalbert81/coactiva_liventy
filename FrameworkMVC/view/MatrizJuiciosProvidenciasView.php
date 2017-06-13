  	   <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
       <?php include("view/MATRIZJUICIOS/modal/modal_matriz_juicios.php");?>

<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Matriz Juicios - coactiva 2017</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
          <script type="text/javascript" src="view/MATRIZJUICIOS/js/VentanaCentrada.js"></script>
          <script type="text/javascript" src="view/MATRIZJUICIOS/js/procesos_matriz_juicios.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
		
       <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
         
  
    <style type="text/css">
			 .img{border-radius: 25px;}
			 .img:hover{			 
			 	border-radius: 25px;
			 	-moz-box-shadow: 0 0 10px #ccc;
			 	 -webkit-box-shadow: 0 0 10px #ccc;
			 	 box-shadow: 0 0 10px #ccc;
			    -webkit-transform: scale(1.25);
			    -moz-transform: scale(1.25);
			    -o-transform: scale(1.25);
			    -ms-transform: scale(1.25);
			    transform: scale(1.25);
			    cursor:pointer;
			    cursor:hand;
			}
			.textfail.form-control
			{
			border: 1px solid red;
			-moz-box-shadow: 0 0 10px red;
			-webkit-box-shadow: 0 0 10px red;
			box-shadow: 0 0 10px red;
			}
			.errores{
		    -webkit-boxshadow: 0 0 10px rgba(0, 0, 0, 0.3);
		    -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		    -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		    border-radius:10px;
		    -webkit-border-radius: 10px;
		    background: red;
		    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		    color: #fff;
		    display: none;
		    font-size: 12px;
		    margin-top: -40px;
		    margin-left: 150px;
		    padding: 10px;
		    position: absolute;
		     z-index: 1;
		}
		.errores:before{ /* Este es un truco para crear una flechita */
		    content: '';
		    border-top: 8px solid transparent;
		    border-bottom: 8px solid transparent;
		    border-right: 8px solid #BC1010;
		    border-left: 8px solid transparent;
		    left: -16px;
		    position: absolute;
		    top: 5px;
		    
		}
		 </style>
  
 <script type="text/javascript">
function validar(obj) {
  patron = /^\d{4}\/\d{2}\/\d{2}$/
  alert("Formato Incorrecto, Ingrese yyyy-mm-dd");
}
</script>
 
  	<!-- script editar cuenta -->
		<script type="text/javascript">
		
		//sin definir el click
				
function editar_matriz(rowTabla){

			var global_id=0;
		        	var  valCuentas = 1;		        	
		        	var id_juicios = '';
		        	var orden = '';
		        	var regional  = '';
		        	var juicio_referido_titulo_credito  = '';
		        	var year_juicios  = '';
		        	var identificacion_clientes  = '';
		        	var nombres_clientes  = '';
		        	var nombre_garantes  = '';
		        	var identificacion_garantes  = '';
		        	var nombre_provincias  = '';
		        	var numero_titulo_credito  = '';
		        	var fecha_emision_juicios  = '';
		        	var cuantia_inicial  = '';
		        	var riesgo_actual  = '';
		        	var nombre_estados_procesales_juicios  = '';
		        	var descripcion_estado_procesal  = '';
		        	var fecha_ultima_providencia  = '';
		        	var estrategia_seguir  = '';
		        	var observaciones  = '';
		        	var impulsores  = '';
		        	var secretarios  = '';
		        	var id_provincias  = '';
		        	var id_estados_procesales_juicios  = '';
		        	var id_clientes  = '';
		        	var id_titulo_credito  = '';


		        	var identificacion_clientes_1  = '';
		        	var nombre_clientes_1  = '';
		        	var identificacion_clientes_2  = '';
		        	var nombre_clientes_2  = '';
		        	var identificacion_clientes_3  = '';
		        	var nombre_clientes_3  = '';
		        	var identificacion_garantes_1  = '';
		        	var nombre_garantes_1  = '';
		        	var identificacion_garantes_2  = '';
		        	var nombre_garantes_2  = '';
		        	var identificacion_garantes_3  = '';
		        	var nombre_garantes_3  = '';


		        	var correo_clientes = '';
		        	var correo_clientes_1  = '';
		        	var correo_clientes_2  = '';
		        	var correo_clientes_3  = '';
		        	var direccion_clientes  = '';
		        	var direccion_clientes_1  = '';
		        	var direccion_clientes_2  = '';
		        	var direccion_clientes_3  = '';


		        	
		        	
		        	var datoscuenta = rowTabla.id;
		        	var array_datos;

		        	array_datos = datoscuenta.split('?/&');
		        	id_juicios = array_datos[0];
		        	orden = array_datos[1];
		        	regional = array_datos[2];
		        	juicio_referido_titulo_credito = array_datos[3];
		        	year_juicios = array_datos[4];
		        	identificacion_clientes = array_datos[5];
		        	nombres_clientes = array_datos[6];
		        	nombre_garantes = array_datos[7];
		        	identificacion_garantes = array_datos[8];
		        	nombre_provincias = array_datos[9];
		        	numero_titulo_credito = array_datos[10];
		        	fecha_emision_juicios = array_datos[11];
		        	cuantia_inicial = array_datos[12];
		        	riesgo_actual = array_datos[13];
		        	nombre_estados_procesales_juicios = array_datos[14];
		        	descripcion_estado_procesal = array_datos[15];
		        	fecha_ultima_providencia = array_datos[16];
		        	estrategia_seguir = array_datos[17];
		        	observaciones = array_datos[18];
		        	impulsores = array_datos[19];
		        	secretarios = array_datos[20];
		        	id_provincias = array_datos[21]; //
		        	id_estados_procesales_juicios = array_datos[22];
		        	id_clientes  = array_datos[23];
		        	id_titulo_credito  = array_datos[24];
		        	
				     identificacion_clientes_1  = array_datos[25];
		             nombre_clientes_1  = array_datos[26];
		        	 identificacion_clientes_2  = array_datos[27];
		        	 nombre_clientes_2  = array_datos[28];
		        	 identificacion_clientes_3  = array_datos[29];
		        	 nombre_clientes_3  = array_datos[30];
		        	 
		        	 identificacion_garantes_1  = array_datos[31];
		        	 nombre_garantes_1  = array_datos[32];
		        	 identificacion_garantes_2  = array_datos[33];
		        	 nombre_garantes_2  = array_datos[34];
		        	 identificacion_garantes_3  = array_datos[35];
		        	 nombre_garantes_3 = array_datos[36];


		        	 correo_clientes = array_datos[37];
			        correo_clientes_1 = array_datos[38];
			        correo_clientes_2  = array_datos[39];
			        correo_clientes_3 = array_datos[40];
			        direccion_clientes = array_datos[41];
			        direccion_clientes_1 = array_datos[42];
			        direccion_clientes_2  = array_datos[43];
			        direccion_clientes_3  = array_datos[44];

			      
		        	   
		        	if(datoscuenta!='')
				    {

		        		
					      $('#modal_edit_cuenta').dialog({
				                            autoOpen: false,
				                            modal: true,
				                            height: 700,
				                            width: 1350,
				                            buttons: {
				                "Actualizar": function() {

					                var datos = { 

					                		id_juicios:$('#modal_edit_id_juicios').val(),
					    		        	orden:$('#modal_edit_orden').val(),
					    		        	regional:$('#modal_edit_regional').val(),
					    		        	juicio_referido_titulo_credito:$('#modal_edit_juicio').val(),
					    		        	year_juicios:$('#modal_edit_año_juicio').val(),
					    		        	identificacion_clientes:$('#modal_edit_cedula').val(),
					    		        	nombres_clientes:$('#modal_edit_nombres_cliente').val(),
					    		        	nombre_garantes:$('#modal_edit_nombres_garante').val(),
					    		        	identificacion_garantes:$('#modal_edit_cedula_garante').val(),
					    		        	nombre_provincias:$('#modal_edit_provincia').val(),
					    		        	numero_titulo_credito:$('#modal_edit_numero_titulo_credito').val(),
					    		        	fecha_emision_juicios:$('#modal_edit_fecha_emision_juicios').val(),
					    		        	cuantia_inicial:$('#modal_edit_cuantia_inicial').val(),
					    		        	riesgo_actual:$('#modal_edit_riesgo_actual').val(),
					    		        	nombre_estados_procesales_juicios:$('#modal_edit_estado_procesal').val(),
					    		        	descripcion_estado_procesal:$('#modal_edit_descripcion_etapa_procesal').val(),
					    		        	fecha_ultima_providencia:$('#modal_edit_fecha_ultima_providencia').val(),
					    		        	estrategia_seguir:$('#modal_edit_estrategia_seguir').val(),
					    		        	observaciones:$('#modal_edit_observaciones').val(),
					    		        	impulsores:$('#modal_edit_impulsor').val(),
					    		        	secretarios:$('#modal_edit_secretario').val(),
					    		        	id_provincias:$('#modal_edit_provincia').val(),
					    		        	id_estados_procesales_juicios:$('#modal_edit_estado_procesal').val(),
					    		        	id_clientes:$('#modal_edit_id_clientes').val(),
					    		        	id_titulo_credito:$('#modal_edit_id_titulo_credito').val(),


					    		     identificacion_clientes_1:$('#modal_edit_identificacion_clientes_1').val(),
						             nombre_clientes_1:$('#modal_edit_nombre_clientes_1').val(),
						        	 identificacion_clientes_2:$('#modal_edit_identificacion_clientes_2').val(),
						        	 nombre_clientes_2:$('#modal_edit_nombre_clientes_2').val(),
						        	 identificacion_clientes_3:$('#modal_edit_identificacion_clientes_3').val(),
						        	 nombre_clientes_3:$('#modal_edit_nombre_clientes_3').val(),

						        	 identificacion_garantes_1:$('#modal_edit_identificacion_garantes_1').val(),
						        	 nombre_garantes_1:$('#modal_edit_nombre_garantes_1').val(),
						        	 identificacion_garantes_2:$('#modal_edit_identificacion_garantes_2').val(),
						        	 nombre_garantes_2:$('#modal_edit_nombre_garantes_2').val(),
						        	 identificacion_garantes_3:$('#modal_edit_identificacion_garantes_3').val(),
						        	 nombre_garantes_3:$('#modal_edit_nombre_garantes_3').val(),


						        	correo_clientes:$('#modal_edit_correo_clientes').val(),
							        correo_clientes_1:$('#modal_edit_correo_clientes_1').val(),
							        correo_clientes_2:$('#modal_edit_correo_clientes_2').val(),
							        correo_clientes_3:$('#modal_edit_correo_clientes_3').val(),
							        direccion_clientes:$('#modal_edit_direccion_clientes').val(),
							        direccion_clientes_1:$('#modal_edit_direccion_clientes_1').val(),
							        direccion_clientes_2:$('#modal_edit_direccion_clientes_2').val(),
							        direccion_clientes_3:$('#modal_edit_direccion_clientes_3').val()

						        	 

			                    	 	 };
		                    	 	 
				                    
				                     
				                 var id_juicios_verificar= $('#modal_edit_id_juicios').val();
				                 var orden_verificar= $('#modal_edit_orden').val();
				                 var regional_verificar= $('#modal_edit_regional').val();
				                 var id_provincias_verificar= $('#modal_edit_provincia').val();
				                 var id_estados_procesales_juicios_verificar= $('#modal_edit_estado_procesal').val();
				                 var juicio_referido_titulo_credito_verificar= $('#modal_edit_juicio').val();
				                 var year_juicios_verificar= $('#modal_edit_año_juicio').val();
				                 var numero_titulo_credito_verificar= $('#modal_edit_numero_titulo_credito').val();
				                 var identificacion_garantes_verificar= $('#modal_edit_cedula_garante').val();
				                 var nombre_garantes_verificar= $('#modal_edit_nombres_garante').val();
				                 var fecha_ultima_providencia_verificar= $('#modal_edit_fecha_ultima_providencia').val();
				                 var fecha_emision_juicios_verificar= $('#modal_edit_fecha_emision_juicios').val();
				                
				                
			                    
			                     if( id_juicios_verificar!='' && orden_verificar!='' && numero_titulo_credito_verificar!='' && juicio_referido_titulo_credito_verificar!='' && id_provincias_verificar!='' && id_estados_procesales_juicios_verificar!='')
			                     {
					                $.ajax({
				                           url:"<?php echo $helper->url("MatrizJuicios","ActualizarMatriz");?>"
				                           ,type : "POST"
				                           ,async: true
				                           ,data : datos
				                           ,beforeSend: function(objeto){
				                   			$("#modal_espera_edit").html('<img src="view/images/ajax-loader.gif"> Cargando...');
				                   			}
				                           ,success: function(msg){

												var res = msg.split('"');
				                        	   
					                           if(res[1]=='1' || res[1]==1)
					                           {
				                                $('#modal_edit_cuenta').dialog('close');
				                                load_matriz(1);
				                                //loading();
					                           }else
					                           {
					                        	   $('#modal_respuesta_edit').html ("<span style='color:red'>!datos no han sido actualizados..</span>"); 
							                     
					                           }
				                           }
				                   });
				                     
			                     }else
			                     {

			                    	 
			                    	
					                 
				                     if(orden_verificar==''){
					                 textFail("modal_edit_orden");
					                
				                     }
				                     if(numero_titulo_credito_verificar==''){
						                 textFail("modal_edit_numero_titulo_credito");
						                
					                 }
				                     if(juicio_referido_titulo_credito_verificar==''){
						                 textFail("modal_edit_juicio");
						                
					                 }
				                     
				                     if(id_provincias_verificar<1){
				                    	 textFail("modal_edit_provincia");
				                    	 
					                 }
				                     if(id_estados_procesales_juicios_verificar<1){
				                    	 textFail("modal_edit_estado_procesal");
				                    	 
					                 }
					                 
				                     $('#modal_respuesta_edit').html ("<span style='color:red'><b>Error:</b> Existen Campos Vacios.</span>"); 
				                        
			                           
			                     }                      
				   
				                },
				                "Cancelar": function(){
				                    $('#modal_edit_cuenta').dialog('close');
				                }
				            }    

				        }); 

					     // global_id = id_provincias;
					      //document.cookie = 'variable='+global_id+'; expires=Thu, 2 Aug 2021 20:47:11 UTC; path=/';;
 //console.log(global_id);
					 
						////aqui 
						var  html = "";
				        html+="<h4 style='color:#ec971f;'>Actualizar Datos Matriz Juicios</h4><hr/>";
				        html+="<div class='col-xs-6 col-md-12' id='modal_espera_edit' style='text-align:center'></div><br>";
				        html+="<div class='panel panel-info'>";
				        html+="<div class='panel-heading'>";
				        html+="<h4><i class='glyphicon glyphicon-edit'></i> Datos Juicio</h4>";
				        html+="</div>";
				        html+="<div class='panel-body'>";
					    html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_orden' class='control-label'>Orden</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_orden' name='modal_edit_orden' value='"+orden+"' readonly >";
				        html+="</div>";
					    html+="</div>";
					    html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_regional' class='control-label'>Regional</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_regional' name='modal_edit_regional' value='"+regional+"' onfocus='textSucces(this)' >";
				        html+="<input type='hidden' class='form-control'  id='modal_edit_id_juicios' name='modal_edit_id_juicios' value='"+id_juicios+"'  >";
				        html+="<input type='hidden' class='form-control'  id='modal_edit_id_clientes' name='modal_edit_id_clientes' value='"+id_clientes+"'  >";
				        html+="<input type='hidden' class='form-control'  id='modal_edit_id_titulo_credito' name='modal_edit_id_titulo_credito' value='"+id_titulo_credito+"'  >";
						html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_juicio' class='control-label'># Juicio</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_juicio' name='modal_edit_juicio' value='"+juicio_referido_titulo_credito+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_año_juicio' class='control-label'>Año Juicio</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_año_juicio' name='modal_edit_año_juicio' value='"+year_juicios+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="</div>";
				        html+="</div>";	
				       
				         
				        
				        html+="<div class='panel panel-info'>";
				        html+="<div class='panel-heading'>";
				        html+="<h4><i class='glyphicon glyphicon-edit'></i> Datos Clientes</h4>";
				        html+="</div>";
				        html+="<div class='panel-body'>";
				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_cedula' class='control-label'>Cedula Cliente 1</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_cedula' name='modal_edit_cedula' value='"+identificacion_clientes+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombres_cliente' class='control-label'>Nombres Cliente 1</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombres_cliente' name='modal_edit_nombres_cliente' value='"+nombres_clientes+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	

				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_correo_clientes' class='control-label'>Correo Cliente 1</label><br>";
				        html+="<input type='email' class='form-control' id='modal_edit_correo_clientes' name='modal_edit_correo_clientes' value='"+correo_clientes+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_direccion_clientes' class='control-label'>Dirección Cliente 1</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_direccion_clientes' name='modal_edit_direccion_clientes' value='"+direccion_clientes+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	


				        
				        


				        
				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_identificacion_clientes_1' class='control-label'>Cedula Cliente 2</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_identificacion_clientes_1' name='modal_edit_identificacion_clientes_1' value='"+identificacion_clientes_1+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombre_clientes_1' class='control-label'>Nombres Cliente 2</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombre_clientes_1' name='modal_edit_nombre_clientes_1' value='"+nombre_clientes_1+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";

				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_correo_clientes_1' class='control-label'>Correo Cliente 2</label><br>";
				        html+="<input type='email' class='form-control' id='modal_edit_correo_clientes_1' name='modal_edit_correo_clientes_1' value='"+correo_clientes_1+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_direccion_clientes_1' class='control-label'>Dirección Cliente 2</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_direccion_clientes_1' name='modal_edit_direccion_clientes_1' value='"+direccion_clientes_1+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";

				       
				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_identificacion_clientes_2' class='control-label'>Cedula Cliente 3</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_identificacion_clientes_2' name='modal_edit_identificacion_clientes_2' value='"+identificacion_clientes_2+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombre_clientes_2' class='control-label'>Nombres Cliente 3</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombre_clientes_2' name='modal_edit_nombre_clientes_2' value='"+nombre_clientes_2+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";

				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_correo_clientes_2' class='control-label'>Correo Cliente 3</label><br>";
				        html+="<input type='email' class='form-control' id='modal_edit_correo_clientes_2' name='modal_edit_correo_clientes_2' value='"+correo_clientes_2+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_direccion_clientes_2' class='control-label'>Dirección Cliente 3</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_direccion_clientes_2' name='modal_edit_direccion_clientes_2' value='"+direccion_clientes_2+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";
				        
				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_identificacion_clientes_3' class='control-label'>Cedula Cliente 4</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_identificacion_clientes_3' name='modal_edit_identificacion_clientes_3' value='"+identificacion_clientes_3+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombre_clientes_3' class='control-label'>Nombres Cliente 4</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombre_clientes_3' name='modal_edit_nombre_clientes_3' value='"+nombre_clientes_3+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";

				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_correo_clientes_3' class='control-label'>Correo Cliente 4</label><br>";
				        html+="<input type='email' class='form-control' id='modal_edit_correo_clientes_3' name='modal_edit_correo_clientes_3' value='"+correo_clientes_3+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_direccion_clientes_3' class='control-label'>Dirección Cliente 4</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_direccion_clientes_3' name='modal_edit_direccion_clientes_3' value='"+direccion_clientes_3+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";
				       
				        html+="</div>";
				        html+="</div>";	


				        html+="<div class='panel panel-info'>";
				        html+="<div class='panel-heading'>";
				        html+="<h4><i class='glyphicon glyphicon-edit'></i> Datos Garantes</h4>";
				        html+="</div>";
				        html+="<div class='panel-body'>";
				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_cedula_garante' class='control-label'>Cedula Garante 1</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_cedula_garante' name='modal_edit_cedula_garante' value='"+identificacion_garantes+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombres_garante' class='control-label'>Nombres Garante 1</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombres_garante' name='modal_edit_nombres_garante' value='"+nombre_garantes+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	

				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_identificacion_garantes_1' class='control-label'>Cedula Garante 2</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_identificacion_garantes_1' name='modal_edit_identificacion_garantes_1' value='"+identificacion_garantes_1+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombre_garantes_1' class='control-label'>Nombres Garante 2</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombre_garantes_1' name='modal_edit_nombre_garantes_1' value='"+nombre_garantes_1+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	

				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_identificacion_garantes_2' class='control-label'>Cedula Garante 3</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_identificacion_garantes_2' name='modal_edit_identificacion_garantes_2' value='"+identificacion_garantes_2+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombre_garantes_2' class='control-label'>Nombres Garante 3</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombre_garantes_2' name='modal_edit_nombre_garantes_2' value='"+nombre_garantes_2+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	

				        html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_identificacion_garantes_3' class='control-label'>Cedula Garante 4</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_identificacion_garantes_3' name='modal_edit_identificacion_garantes_3' value='"+identificacion_garantes_3+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-4'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_nombre_garantes_3' class='control-label'>Nombres Garante 4</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_nombre_garantes_3' name='modal_edit_nombre_garantes_3' value='"+nombre_garantes_3+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="</div>";
				        html+="</div>";	


					    


				        html+="<div class='panel panel-info'>";
				        html+="<div class='panel-heading'>";
				        html+="<h4><i class='glyphicon glyphicon-edit'></i> Datos Operación</h4>";
				        html+="</div>";
				        html+="<div class='panel-body'>";
					    html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_numero_titulo_credito' class='control-label'># Operación</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_numero_titulo_credito' name='modal_edit_numero_titulo_credito' value='"+numero_titulo_credito+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_fecha_emision_juicios' class='control-label'>Fecha Auto Pagos</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_fecha_emision_juicios' name='modal_edit_fecha_emision_juicios' value='"+fecha_emision_juicios+"' onfocus='textSucces(this)'  >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_cuantia_inicial' class='control-label'>Cuantia Inicial</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_cuantia_inicial' name='modal_edit_cuantia_inicial' value='"+cuantia_inicial+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_riesgo_actual' class='control-label'>Riesgo Actual</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_riesgo_actual' name='modal_edit_riesgo_actual' value='"+riesgo_actual+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	


				        html+="<div class='col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_provincia' class='control-label'>Provincia</label>";
				        html+="<select name='modal_edit_provincia' id='modal_edit_provincia'  class='form-control' >";
				        html+="<?php if(!empty($resultProv)){ foreach($resultProv as $res) {?>";
				        html+="<option value='<?php echo $res->id_provincias; ?>' ><?php echo $res->nombre_provincias; ?> </option>";
				        html+="<?php } }else{?>";
						html+="<option value='-1'>Sin-Especificar</option>";
						html+="<?php }?>";
					    html+="</select>"; 
					    html+="<span class='help-block'></span>"; 
					    html+="</div>";
					    html+="</div>";
				        
				        html+="<div class='col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_estado_procesal' class='control-label'>Estado Procesal</label>";
				        html+="<select name='modal_edit_estado_procesal' id='modal_edit_estado_procesal'  class='form-control' >";
				        html+="<?php if(!empty($resultEstadoProcesal)){ foreach($resultEstadoProcesal as $res) {?>";
				        html+="<option value='<?php echo $res->id_estados_procesales_juicios; ?>' ><?php echo $res->nombre_estados_procesales_juicios; ?> </option>";
						html+="<?php } }else{?>";
						html+="<option value='-1'>Sin-Especificar</option>";
						html+="<?php }?>";
					    html+="</select>"; 
					    html+="<span class='help-block'></span>"; 
					    html+="</div>";
					    html+="</div>";
					    html+="<div class = 'col-xs-6 col-md-2'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_fecha_ultima_providencia' class='control-label'>Fecha Ultima Providencia</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_fecha_ultima_providencia' name='modal_edit_fecha_ultima_providencia' value='"+fecha_ultima_providencia+"' onfocus='textSucces(this)'  >";
				        html+="</div>";
				        html+="</div>";
				        html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_impulsor' class='control-label'>Impulsor</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_impulsor' name='modal_edit_impulsor' value='"+impulsores+"' readonly onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";
				        html+="<div class = 'col-xs-6 col-md-3'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_secretario' class='control-label'>Secretario</label><br>";
				        html+="<input type='text' class='form-control' id='modal_edit_secretario' name='modal_edit_secretario' value='"+secretarios+"' readonly onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";
					    html+="<div class = 'col-xs-6 col-md-6'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_descripcion_etapa_procesal' class='control-label'>Descripción Etapa Procesal</label><br>";
				        html+="<textarea type='text' class='form-control' id='modal_edit_descripcion_etapa_procesal' name='modal_edit_descripcion_etapa_procesal'  placeholder='Descripción'>"+descripcion_estado_procesal+"</textarea>";
                        //html+="<input type='text' class='form-control' id='modal_edit_descripcion_etapa_procesal' name='modal_edit_descripcion_etapa_procesal' value='"+descripcion_estado_procesal+"' onfocus='textSucces(this)' >";
				        html+="</div>";
				        html+="</div>";	
				        html+="<div class = 'col-xs-6 col-md-6'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_estrategia_seguir' class='control-label'>Estrategia Seguir</label><br>";
				        html+="<textarea type='text' class='form-control' id='modal_edit_estrategia_seguir' name='modal_edit_estrategia_seguir'  placeholder='Estrategia a Seguir'>"+estrategia_seguir+"</textarea>";
	                    html+="</div>";///no carga mijin
				        html+="</div>";
				        html+="<div class = 'col-xs-6 col-md-12'>";
				        html+="<div class='form-group'>";
				        html+="<label for='modal_edit_observaciones' class='control-label'>Observaciones</label><br>";
				        html+="<textarea type='text' class='form-control' id='modal_edit_observaciones' name='modal_edit_observaciones'  placeholder='Observaciones'>"+observaciones+"</textarea>";
		                html+="</div>";
				        html+="</div>";
				        html+="</div>";
				        html+="</div>";
					    html+="<div class='col-xs-6 col-md-12' id='modal_respuesta_edit'></div><br>";
						

							

				       
					    				       
				        $('#modal_edit_cuenta').html (html);  
				       

				        $('#modal_edit_cuenta').dialog('open');
						
				    }
				    else{

					    alert('no exiten datos');
					    
				    }


		        }

		
		</script>
	
  
  	<script type="text/javascript">
		function textFail(field)
		{
			$("#"+field).removeClass("form-control");
			$("#"+field).addClass("textfail form-control");
		}

		function textSucces(field)
		{
			var id_campo = field.id
			$("#"+id_campo).removeClass("textfail form-control");
			$("#"+id_campo).addClass("form-control");
			$('#modal_respuesta_edit').html ("");
			//$('#modal_respuesta_grupo').html ("");
		}

		
		</script>
  
 
 

        
    <script type="text/javascript">
	$(document).ready(function(){
		//load_juicios(1);

		$("#buscar").click(function(){

			load_matriz(1);
			
			});
	});

	
	function load_matriz(pagina){
		
		//iniciar variables
		 var con_juicio_referido_titulo_credito=$("#juicio_referido_titulo_credito").val();
		 var con_numero_titulo_credito=$("#numero_titulo_credito").val();
		 var con_identificacion_clientes=$("#identificacion_clientes").val();
		 var con_id_provincias=$("#id_provincias").val();
		 var con_id_estados_procesales_juicios=$("#id_estados_procesales_juicios").val();
		 
		 

		  var con_datos={
				  juicio_referido_titulo_credito:con_juicio_referido_titulo_credito,
				  numero_titulo_credito:con_numero_titulo_credito,
				  identificacion_clientes:con_identificacion_clientes,
				  id_provincias:con_id_provincias,
				  id_estados_procesales_juicios:con_id_estados_procesales_juicios,
				  action:'ajax',
				  page:pagina
				  };


		$("#matriz").fadeIn('slow');
		$.ajax({
			url:"<?php echo $helper->url("MatrizJuicios","index");?>",
            type : "POST",
            async: true,			
			data: con_datos,
			 beforeSend: function(objeto){
			$("#matriz").html('<img src="view/images/ajax-loader.gif"> Cargando...');
			},
			success:function(data){
				$(".div_matriz").html(data).fadeIn('slow');
				$("#matriz").html("");
			}
		})
	}
	
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
        
       if($_SERVER['REQUEST_METHOD']=='POST' )
       {
       	
       	$sel_juicio_referido_titulo_credito = $_POST['juicio_referido_titulo_credito'];
       	$sel_numero_titulo_credito=$_POST['numero_titulo_credito'];
       	$sel_identificacion_clientes=$_POST['identificacion_clientes'];
       	$sel_id_provincias=$_POST['id_provincias'];
       	$sel_id_estados_procesales_juicios=$_POST['id_estados_procesales_juicios'];
       	$sel_id_abogado = $_POST['id_abogado'];
       
       }
       
    
       
       
       ?>
 
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("MatrizJuicios","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
         
                 <!-- comienxza busqueda  -->
                 
                 <br>         
         <div class="col-lg-12">
	         <div class="panel panel-info">
	         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-edit'></i> Matriz Juicios</h4>
	         </div>
	         <div class="panel-body">
			 <div class="panel panel-default">
  			<div class="panel-body">
  			
  			<div id="modal_edit_cuenta"></div>
  			
  		 <div class="col-lg-2 col-md-2 col-xs-6">
			  	<p  class="formulario-subtitulo" style="" >Impulsor:</p>
			  	<select name="id_abogado" id="id_abogado"  class="form-control" readonly>
			   <option value="<?php echo $_SESSION['id_usuarios'];  ?>" <?php if($sel_id_abogado==$_SESSION['id_usuarios']){echo "selected";}?>  ><?php echo $_SESSION['nombre_usuarios'];  ?></option>  
			     
			    </select>
		 </div>
  							
  		<div class="col-lg-2 col-md-2 xs-6">
         		<p class="formulario-subtitulo" ># Juicio:</p>
			  	<input type="text"  name="juicio_referido_titulo_credito" id="juicio_referido_titulo_credito" value="<?php echo $sel_juicio_referido_titulo_credito;?>" class="form-control "/> 
			   
		 </div>
		 
		  <div class="col-lg-2 col-md-2 xs-6">
         		<p class="formulario-subtitulo" ># Opreación:</p>
			  	<input type="text"  name="numero_titulo_credito" id="numero_titulo_credito" value="<?php echo $sel_numero_titulo_credito;?>" class="form-control "/> 
			    
		 </div>
		 
		  <div class="col-lg-2 col-md-2 xs-6">
         		<p class="formulario-subtitulo" >Identificación:</p>
			  	<input type="text"  name="identificacion_clientes" id="identificacion_clientes" value="<?php echo $sel_identificacion_clientes;?>" class="form-control "/> 
			    
		 </div>
		 
		 <div class="col-lg-2 col-md-2 xs-6">
			  	<p  class="formulario-subtitulo">Estado Procesal:</p>
			  	<select name="id_estados_procesales_juicios" id="id_estados_procesales_juicios"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultEstadoProcesal as $res) {?>
						<option value="<?php echo $res->id_estados_procesales_juicios; ?>"<?php if($sel_id_estados_procesales_juicios==$res->id_estados_procesales_juicios){echo "selected";}?> ><?php echo $res->nombre_estados_procesales_juicios;  ?> </option>
			            <?php } ?>
				</select>

         </div>
         <div class="col-lg-2 col-md-2 xs-6">
			  	<p  class="formulario-subtitulo">Provincia:</p>
			  	<select name="id_provincias" id="id_provincias"  class="form-control" >
			  		<option value="0"><?php echo "--TODOS--";  ?> </option>
					<?php foreach($resultProv as $res) {?>
						<option value="<?php echo $res->id_provincias; ?>"<?php if($sel_id_provincias==$res->id_provincias){echo "selected";}?> ><?php echo $res->nombre_provincias;  ?> </option>
			            <?php } ?>
				</select>

         </div>
         
          
        
         
          
           </div>
  		
  		
  		<div class="col-lg-12 col-md-12 xs-12 " style="text-align: center; margin-top: 10px">
  		    
		 <button type="button" id="buscar" name="buscar" value="Buscar"   class="btn btn-info" style="margin-top: 10px;"><i class="glyphicon glyphicon-search"></i></button>
		 <button type="submit" id="reporte_rpt_matriz" name="reporte_rpt_matriz" value="Reporte Matriz Juicios"   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Matriz Juicios</button>         
	  
	 
	     </div>
		 
		 <div class="col-lg-12 col-md-12 xs-12" style="text-align: center; margin-top: 10px">
  		 		<div class="col-lg-4 col-md-4 xs-4" style="text-align: center; margin-top: 10px">
  		 			
		 		</div>
		 		<div class="col-lg-4 col-md-4 xs-4" style="text-align: center; margin-top: 10px">
		 			<input type="date"  name="fecha_providencias" id="fecha_providencias" value="<?php echo $sel_numero_titulo_credito;?>" class="form-control" placeholder="dd/MM/aaaa"/>
		 			<input type="time"  name="hora_providencias" id="hora_providencias" value="<?php echo $sel_numero_titulo_credito;?>" class="form-control" placeholder="HH:mm"/>
		 			<button type="submit" id="reporte_rpt" name="reporte_rpt" value="Reporte Providencia"   class="btn btn-success" style="margin-top: 10px;"><i class="glyphicon glyphicon-print"></i> Providencias</button>
		 		</div>
		 		<div class="col-lg-4 col-md-4 xs-4" style="text-align: center; margin-top: 10px">
		 		</div>	         
	     </div>
	     
		</div>
		    
		    </div>
	        </div>
	        </div>
         
         
        		 
		 
		 <div class="col-lg-12">
		 
	     <div class="col-lg-12">
	     
	     <div style="height: 200px; display: block;">
		
		 <h4 style="color:#ec971f;"></h4>
			  <div>					
					<div id="matriz" style="position: absolute;	text-align: center;	top: 10px;	width: 100%;display:none;"></div><!-- Carga gif animado -->
					<div class="div_matriz" ></div><!-- Datos ajax Final -->
		      </div>
		       <br>
				  
		 </div>
		 
		 </div>
		 
		
		 
		 </div>
		 
	
      
       </form>
     
      </div>
     
  </div>
      <!-- termina
       busqueda  -->
       
 
   </body>  

    </html>   
    
  

    
