<?php 
 require "inc/config.php";
 $db->query("SELECT s_categoria.nombre as nivel,s_desafio.id,s_desafio.nombre
	FROM s_categoria INNER JOIN s_desafio ON s_categoria.id = s_desafio.id_cat where s_desafio.id_cat='2'");
	$db->MoveFirst();

while (! $db->EndOfSeek()) {
    $row = $db->Row();
    $arreglo[]=$row->nombre;
}

echo json_encode(array("dato"=>"nidao"));
?>