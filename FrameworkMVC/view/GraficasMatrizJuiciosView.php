  	   <?php include("view/modulos/head.php"); ?>
       <?php include("view/modulos/modal.php"); ?>
       <?php include("view/modulos/menu.php"); ?>
     

<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Matriz Juicios - coactiva 2017</title>
        
         
     
		<script src="https://code.jquery.com/jquery.js"></script>
		    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
		<script src="http://code.highcharts.com/stock/highstock.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>
		
         
       
   
         
    </head>
    <body style="background-color: #d9e3e4;">
    
    
     <script>

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor'
        //defaultSeriesType: 'spline'

    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Gráfica'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Valores',
            margin: 10
        }
    },
    series: [{
        name: 'valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($resultSet);$i++){
                ?>
                data.push([<?php echo $resultSet[$i];?>,<?php echo $resultSet[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

</script>    
      
   <?php


//Creamos un objeto de la clase randomTable
$rand = new RandomTable();
//insertamos un valor aleatorio

//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valoresArray;
$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($resultSet);$i++){
    $valoresArray[$i]= $resultSet[$i][1];
    //OBTENEMOS EL TIMESTAMP
    $time= $resultSet[$i][2];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $timeArray[$i] = $date->getTimestamp()*1000;
}

?>
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
       <!-- empieza el form --> 
       
      <form action="<?php echo $helper->url("GraficasMatrizJuicios","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12" target="_blank">
      <br>    
           
         <div class="col-lg-12">
         <div id="contenedor"></div> 
         
	     </div>
         
         
        		 
		
		 
	
      
       </form>
      </div>
     
  </div>
  </body>  
  </html>   
    
  

    
