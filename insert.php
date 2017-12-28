<?php
//insert.php
	$connect = mysqli_connect("localhost","root","123456", "FPF_Produtos");
	$data = json_decode(file_get_contents("php://input"));

	if(count($data)>0){
		$nome_produto = mysqli_real_escape_string($connect, $data->nome_produto);
		$data_produto = mysqli_real_escape_string($connect, $data->data_produto);
		//$nome_produto = mysqli_real_escape_string($connect, $data->preco_produto);

		$query = "INSERT INTO produto(nome_produto,data_produto) VALUES ('$nome_produto', '$data_produto')";

		if(mysqli_query($connect,$query)){
			echo "Data inserted...";
			echo $nome_produto;
		}
		else{ 
			echo 'Error';
		}
	}
?>
