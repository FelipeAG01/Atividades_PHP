<?php

//Exemplos do In_array (13/09/2024)

$pesquisa = 'banana';

$frutas =['maça','banana','laranja'];
//cria uma lista chamada "Frutas", com os itens a cima

//Verifique se existe o item "banana" na lista fruta
if (in_array($pesquisa, $frutas)) { //-> Verifique se existe o item banana na lista fruta
    echo "O item $pesquisa existe nesta lista"; //Se existir, print esta mensagem
} 
else {
    echo " O item $pesqusia não existe nesta lista "; //Se não existir, print essa mensagem
}






?>