<?php
	function post($url, $data)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);
		return $server_output;
	}
	$nome = input('nome');
	$email = input('email');
	$telefone = input('telefone');
	$mensagem = input('mensagem');

	$token = input('ff7bc4c287c73b96465fd7baa209a868');
	post('https://app.conectamanager.com.br/api', array(
		'token' => 'ff7bc4c287c73b96465fd7baa209a868',
		'identifier' => 'LANDING',
		'nome' => $nome,
		'email' => $email,
		'telefone' => $telefone,
		'campo_431708' => $mensagem
	));
	?>