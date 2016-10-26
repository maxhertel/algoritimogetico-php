<?php

class Populacao{
    private $tamanho;
    private $genes;

    function __construct($tamanho,$genes){
        $this->tamanho = $tamanho; 
        $this->genes = $genes; 
    }
    public function inicio(){
        	$populacao = array();
            for ($i=0; $i < $this->tamanho; $i++) {
                $populacao[$i] = array();
                for ($x=1; $x < $this->genes+1; $x++) { 
                    $populacao[$i][$x] = rand(0,9);
                }
            }
            return $this->avaliacao($populacao);
        }   
    public function avaliacao($populacao){
        foreach ($populacao as $pkey => $individuo) {
            $soma = 0;
            foreach ($individuo as $ikey => $gene) {
                $soma += $gene;
            }
            $populacao[$pkey]["aptidao"] = $soma;
        }
	    return $populacao;
    }
    public function ordenacao($populacao){
        for ($i=0; $i < $this->tamanho; $i++) {
            $pkey = 0; 
            for($pkey = 0; $pkey < $this->tamanho-1; $pkey++) {
                    if($populacao[$pkey]["aptidao"] < $populacao[$i]["aptidao"]){
                        $troca = $populacao[$i];
                        $populacao[$i] = $populacao[$pkey];
                        $populacao[$pkey] = $troca;
                    }
            }
        }
	return $populacao;
    }   
}