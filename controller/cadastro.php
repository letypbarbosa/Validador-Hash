<?php
require_once "../model/hash.class.php";

// Receber dados
$dados = isset($_POST["dados"]) ? (object)json_decode($_POST["dados"]) : false;


if($dados){
	$hash       = new hash();
	$hash->HASH = $dados->cadastro_hash;
	$hash->NOME = $dados->cadastro_nome;
	$hash->DT   = date('Y-m-d',strtotime(str_replace("/","-",$dados->cadastro_dt)));
	$resutado   = $hash->getHash();

	if($resutado){
		echo "Cadastro não efetuado com sucess: Hash já existe";
	} else {
		$hash->insertHash();
		echo "Cadastro efetuado com sucesso!";
	}
} else {
	include_once "../view/cadastro.php";	
}