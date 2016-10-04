<?php 

function Content($data){

	while ($result = $data->fetch_assoc()) {
		$array[] = $result;

	}
	return $array;
}




 ?>