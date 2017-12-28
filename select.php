<?php
	$connect = mysqli_connect("localhost","root","123456", "FPF_Produtos");

	$output = array();

	$query = "SELECT id_produto, nome_produto, data_produto, preco_produto FROM produto";

	$result = mysqli_query($connect,$query);

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_array($result)){
			$output[] = $row;
		}

		echo json_encode($output);
	}
?>

