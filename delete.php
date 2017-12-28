<?php
//detele.php

	$connect = mysqli_connect("localhost","root","123456", "FPF_Produtos");
	$data = json_decode(file_get_contents("php://input"));

	if(count($data)>0){
		
		$id = $data->id;

		$query = "DELETE FROM produto WHERE id_produto='$id'";

		if(mysqli_query($connect,$query)){
			echo "Data Deleted...";
			
		}
		else{ 
			echo 'Error';
		}
	}
?>
