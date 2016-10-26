<?php
/**
 * Fazer metodos de seleção
 * 
*/

error_reporting(E_ALL);
include("populacao.php");
define('INDIVIDUOS',50);
define('GENES',5);
define('P_CROSS',100);
define('P_MUTACAO',20);

function ver($array){
	echo "<pre>";
	var_dump($array);
	echo "</pre>";
}

function crossover($populacao){
	$p_coss = rand(0,100);
	$p_muta = rand(0,100);
	for ($i=0; $i < INDIVIDUOS/2; $i++) {
		$p_muta <  
		$pai1 = $populacao[rand(0,INDIVIDUOS)];
		$pai2 = $populacao[rand(0,INDIVIDUOS)];
	}
}
$populacao = new Populacao(50,5);
$pais = $populacao->inicio();
$pais = $populacao->ordenacao($pais);
//ver($populacao);
//ver(ordenacao($populacao));

ver(count($pais));
ver($pais);
?>