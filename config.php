<?php

define('versao', 'prd'); // Alterar para 'prd' quando for colocar em produção.

define('URL', 'http://sistemaskadu.com.br/Cs'); // Sempre alterar quando iniciar novo projeto.

global $config;

	$config = array();

	if (versao == 'dsv') {
		$config['versao'] = 'dsv';
		$config['dbname'] = 'sistem14_cs';
		$config['host']   = 'localhost';
		$config['user']   = 'sistem14_eduardo';
		$config['pass']   = 'Eduard@2017';
	} 

	if (versao == 'prd') {
		$config['versao'] = 'prd';
		$config['dbname'] = 'sistem14_cs';
		$config['host']   = 'localhost';
		$config['user']   = 'sistem14_eduardo';
		$config['pass']   = 'Eduard@2017';
	}

?>