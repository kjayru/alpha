<? ///seleccion de nivel por edad
	/*$dia = $_POST['select-v-4a'];
	$mes = $_POST['select-v-4b'];
	$anio = $_POST['select-v-4c'];^*/
	$fecha = $_POST['datem'];
	
	//$fechanac = $anio."-".$mes."-".$dia;
	$f = explode("-",$fecha);
	$actual = date("Y");
	$ant =intval($f[0]);
	$edad = $actual - $ant;
	
	if($edad<13):
		echo json_encode(array("level"=>"scool"));
	endif;
	if($edad>13):
		echo json_encode(array("level"=>"teens"));
	endif;
 ?>