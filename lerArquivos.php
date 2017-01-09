<?php

$arquivosParaLer = ['clientes1.txt', 'clientes2.txt'];

$arquivo = fopen($arquivosParaLer[0], 'r');

foreach ($arquivosParaLer as $key => $value) {
	 
$arquivo = fopen($arquivosParaLer[$key], 'r');

	 while(!feof($arquivo)){
		$email = fgets($arquivo, 1024);
		echo $email; /* Aqui você chama a sua função para enviar o email, ou guarda em um array e usa como quiser*/
	}

	fclose($arquivo); 
}
