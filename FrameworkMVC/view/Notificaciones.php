<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>InformaticaPC | Notificaciones con Gritter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Agregamos JQuery -->
    <script type="text/javascript" src="../lib/jquery-1.9.1.min.js"></script>
     <!-- Agregamos el plugin y su hoja de estilos -->
    <script type="text/javascript" src="./gritter/js/jquery.gritter.min.js"></script>
    <link type="text/css" rel="stylesheet" href="./gritter/css/jquery.gritter.css" />
    <script type="text/javascript">
        $(document).ready(function()
        {
             // Opciones globales de las notificaciones
            $.extend($.gritter.options, {
                position: 'bottom-right',
                fade_in_speed: 'medium',
                fade_out_speed: 2000,
                time: '3000'
            });
            // --------------------------------
            // Mostrar una notificación
            $('#add-regular').click(function(){
                     $.gritter.add({
                             title: "¿Qué te parece?",
                             text: "Con Gritter es muy fácil añadir <strong>notificaciones</strong> en tu web",
                             image: "foto.jpg",
                             sticky: false
                     });
                    return false;
            });
        });
    </script>
  </head>
  <body>
       <a href="#" id="add-regular">Haz clic aquí</a>
  </body>
</html>