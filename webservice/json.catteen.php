<?php 
 require "inc/config.php";
 $db->query("SELECT s_categoria.nombre as nivel,s_desafio.id,s_desafio.nombre
	FROM s_categoria INNER JOIN s_desafio ON s_categoria.id = s_desafio.id_cat where s_desafio.id_cat='1'");
	$db->MoveFirst();
	$responses = array();

while(! $db->EndOfSeek()){
	$row = $db->Row();
	$response=array(
	     "nombre"=>utf8_encode($row->nombre)
	);
  $responses[] = $response;
}

echo json_encode($responses);


?>