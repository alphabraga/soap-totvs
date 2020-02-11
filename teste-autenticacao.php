<?php

//composer require laminas/laminas-soap

require 'vendor/autoload.php';


$options = [
			'login'        => 'seu-usuario-rm', 
			'password'     => 'seu-senha-do-rm',
			'soap_version' => SOAP_1_1
		];

// 
$client = new \Laminas\Soap\Client( 'http://seu.servidor:8051/wsProcess/MEX?wsdl', $options);


try {

	$response = $client->AutenticaAcesso();

	//Se retorna '1' as credenciais de acesso estão corretas
	echo $response->AutenticaAcessoResult === '1';

} catch (Exception $e) {

	echo $e->getMessage();
}