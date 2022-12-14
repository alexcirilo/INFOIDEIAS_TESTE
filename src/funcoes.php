<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {
        if($ano < 0){
            echo "Inválido";
        }else{
            $sec = ceil($ano / 100);
            return $sec;
        }
    }

	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int
    {
    	$valor = $numero -1;
    	$i =1;
    	for($valor; $valor > 2; $valor--){
		   $div =0;
	        for($i = 2; $i < $valor ; $i++){
	            if($valor % $i == 0){
	                $div += 1;
	            }
	        }
	
	        if($div == 0 && $valor !=0 && $valor !=1){
	            return $valor;
	        }
	    }
	}



    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int
    {
     $maiorValor =0;
     $segundoMaiorValor = 0;
        foreach($arr as $key=>$item){
        	foreach($item as $key2=> $valor){
        		if($valor > $maiorValor){
        			$segundoMaiorValor = $maiorValor;
        			$maiorValor = $valor;
        		}else if($valor > $segundoMaiorValor){
        			$segundoMaiorValor = $valor;
        		}
        	}
        }
        return $segundoMaiorValor;
    }
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    public static function SequenciaCrescente(array $arr): bool
    {


        for ($i = 0; $i < count($arr); $i++) {
            $arrSemValor = $arr;
            array_splice($arrSemValor, $i, 1);

            $crescente = Funcoes::OrdemCrescente($arrSemValor);
            if ($crescente){
            	return true;
            }
        }

        return  false;
    }
    private static function OrdemCrescente(array $itens)
    {
        for ($i = 1; $i < count($itens); $i++) {
            if ($itens[$i - 1] >= $itens[$i]) return false;
        }
        return true;
    }

}
