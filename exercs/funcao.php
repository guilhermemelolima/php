<?php

/*
 Faça um script em php que simule uma
calculadora usando função. Receba 2 números por
parâmetro e opção (1-soma, 2-subtração,3-
multiplicação, 4-divisão e 5- raiz quadrada).
*/

/*
Faça um script em php que, receba um número,
calcule o fatorial usando função e exiba o resultado
dentro da função.
*/

/*
Crie uma função que receba um número inteiro
como parâmetro e verifique se ele é primo ou não, e
retorne uma mensagem no local de chamada da
função.
*/

/*
Crie uma função que receba dois números
inteiros por parâmetro e retorne a soma dos N
números inteiros existentes entre esses dois
números (inclusive). Imprima o resultado no local
que chamou a função.
*/


/*
 Faça um script em php que, receba um número,
calcule o fatorial usando função e recursividade e
exiba o resultado na tela.
*/
function fat_recursiv($num){
    if($num == 1){
        return $num;
    }else{
        return $num * fat_recursiv($num - 1);
    }
}
?>