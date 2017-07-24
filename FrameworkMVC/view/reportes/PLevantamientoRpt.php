<?php
 
include('view/mpdf60/mpdf.php'); 

//echo getcwd().'\n'; //para ver ubicacion de directorio

$diccionario = array(
 'titulopag'=>'Providencia Levantamiento',
 'empresa'=>'Liventy'
);

$template = file_get_contents('view/reportes/template/pLevantamiento.html');

foreach ($diccionario as $clave=>$valor) {
	$template = str_replace('{'.$clave.'}', $valor, $template);
}

//para la numeracion de pagina
$footer = "<table width=\"100%\"><tr>
		<td style='font-size: 10px; padding: 5px;' align=\"right\">{PAGENO}</td>
        </tr></table>";

//$template = str_replace('{detalle}', $detalle, $template);

//para los parametros
$dt_consulta= $dtdatos;

//sin metodos ---> falta
$dicContenido = array(
		'COACTIVADOPRI'=>'Providencia Levantamiento',
		'GARANTEPRI'=>'Liventy',
		'OPERACION'=>$dt_consulta[0]->numero_titulo_credito,
		'NOMBRESEC'=>$dt_consulta[0]->secretarios,
		'CARGOSEC'=>$dt_consulta[0]->cargo_secretarios,
		'NOMBREABG'=>$dt_consulta[0]->impulsores,
		'CARGOABG'=>$dt_consulta[0]->cargo_impulsores,
		'NOMBRECIT'=>'',
		'CARGOCIT'=>'',
		'RAZON2'=>$razon_avoco
		
);

foreach ($dicContenido as $clave=>$valor) {
	$template = str_replace('{'.$clave.'}', $valor, $template);
}

//var_dump($dicContenido);

//die();
ob_end_clean();


//creacion del pdf
$mpdf=new mPDF();
$mpdf->allow_charset_conversion = true;
$mpdf->charset_in = 'UTF-8';
//$mpdf->SetHTMLHeader('<div><img src="bnf_logo.jpg" alt="" width="100px" height="40px"></div>');
$mpdf->SetHTMLFooter($footer);
$mpdf->WriteHTML($template);
$mpdf->debug = true;
 
$mpdf->Output();

exit();

?>