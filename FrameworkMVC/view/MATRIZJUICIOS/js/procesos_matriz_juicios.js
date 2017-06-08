	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'paises_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
	

		$( "#Actualizar_Matriz" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "view/MATRIZJUICIOS/modal/actualizar_matriz_juicios.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		
	

		$('#myModal').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) // Botón que activó el modal
			  var id = button.data('id') // Extraer la información de atributos de datos
			  var modal = $(this)
			  modal.find('.modal-body #id').val(id)
			  $('.alert').hide();//Oculto alert
			})
			
		
		