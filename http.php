<?php

$cep = $_GET['cep'];


$client = curl_init();

curl_setopt($client, CURLOPT_URL, "https://api.postmon.com.br/v1/cep/".$cep);
curl_setopt($client, CURLOPT_HEADER, false);
curl_setopt($client, CURLOPT_RETURNTRANSFER , true);

$cep = json_decode(curl_exec($client));

curl_close($client);



$obj = new stdClass;
$obj->rua = $cep->logradouro;
$obj->cidade = $cep->cidade;
$obj->uf = $cep->estado;
$obj->distrito = $cep->bairro;
$obj->cep = $cep->cep;

echo json_encode($obj);
