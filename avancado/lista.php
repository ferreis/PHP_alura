<?php
/*
uma lista de dados, também conhecida como array, é uma estrutura que armazena múltiplos valores
 em uma única variável. Pode conter diversos tipos de dados, como números, strings e
até mesmo outras arrays.
*/
$lista= [21,32,25,16,10,18];
/*
ao acessar uma informação em uma lista (ou array) no PHP, você precisa especificar o índice associado
ao elemento que deseja recuperar. O índice pode ser numérico ou uma chave associativa, dependendo do
tipo de array que está sendo usado. Aqui estão alguns exemplos:
*/

//Índice Numérico:
$lista = array("item1", "item2", "item3");
echo $lista[1]; // Saída: item2

//Chave Associativa:
$lista = array("chave1" => "valor1", "chave2" => "valor2");
echo $lista["chave1"]; // Saída: valor1

/*
 os índices numéricos começam em 0 no PHP, enquanto as chaves associativas são strings que você atribui manualmente.
 O método de acesso depende do tipo de array que você está utilizando.
 */