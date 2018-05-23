<?php

define('versao', 'dsv'); // Alterar para 'prd' quando for colocar em produção.

define('URL', 'http://localhost/Cs'); // Sempre alterar quando iniciar novo projeto.

global $config;

	$config = array();

	if (versao == 'dsv') {
		$config['versao'] = 'dsv';
		$config['dbname'] = 'cs';
		$config['host']   = 'localhost';
		$config['user']   = 'root';
		$config['pass']   = '';
	} 

	if (versao == 'prd') {
		$config['versao'] = 'prd';
		$config['dbname'] = 'sistem14_cs';
		$config['host']   = 'localhost';
		$config['user']   = 'sistem14_eduardo';
		$config['pass']   = 'Eduard@2017';
	}

?>