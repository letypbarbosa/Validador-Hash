<?php
require_once "../model/hash.class.php";

// Receber dados
$dados = isset($_POST["dados"]) ? (object)json_decode($_POST["dados"]) : false;


if($dados){
	$hash       = new hash();
	$hash->ID   = $dados->id;
	$hash->HASH = $dados->hash;
	$resultado = $hash->consultaHash();
	echo json_encode(($resultado) ? $resultado : "[Não Localizado]");
	exit();
}


include_once "../view/consulta.php";