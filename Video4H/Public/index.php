<?php

echo 'Parte 1: Include e require';

// include './teste.php';
// include_once './teste.php';
// require_once './teste.php';
require './teste.php';


echo "<br>$name";
echo '<br>';

echo '<br>Parte 2: tipos de variáveis<br>';

// string
echo gettype('blá blá blá');
echo '<br><br>';

// numbers
echo gettype(10);
echo '<br>';
echo gettype(10.0);
echo '<br><br>';

// booleans
echo gettype(true);
echo gettype(false);
echo '<br><br>';

// arrays
echo gettype(['blá blá blá', 10, 10.0, true, false]);
echo '<br><br>';

// object
class Person{
    public function teste(){
        # code...
    }
}

echo gettype(new Person);
echo '<br><br>';


// null
echo gettype(null);
echo '<br><br>';

$idade = 19;
$racahumana; // Variável sem um valor atribuido

echo "$idade é do tipo: ";
echo gettype($idade);

/*  Trabalhando com nomes compostos
Existem dois padrões para nomear uma variável com nome composto: camelCase e snake_case */

// camelCase: A primeira letra das outras palavras sempre será maiúscula
$myName;

// snake_case: separa cada palavra diferente com underline(_)
$my_name;

// Atribuindo uma variável como valor para outro variável
$nome1 = "Lorrany"; // Criou-se uma variável
$nome2 = $nome1; // Criou-se outra variável e deu o valor da primeira variável para ela
//$nome2 = &$nome1; // Se colocado o "&" antes a variável usado como valor, signifca que está passando como um referencia, ou seja, as variáveis em questão irão apontar para o mesmo ponto na memória. Quando se altera um, o outro também será alterado, já que "compartilham" o mesmo espaço na memoria.
$nome1 = "Joninhas"; // Mudou SOMENTE o valor da primeira variável

echo "<br><br>Variável 1 = $nome1<br>";
echo "Variável 2 = $nome2";

echo '<br><br>Parte 3: Constantes<br>';

define('NAME', 'Jonathan');
echo NAME, "<br><br>";

if(defined('NAME')){echo 'Essa constante já existe: ', NAME, '<br><br>';} 

function teste(){
    echo __function__;
    echo __METHOD__;
    echo '<br>';
}

teste();
echo '<br>';

echo DIRECTORY_SEPARATOR, "<br>";

// $cons = get_defined_constants(true); // "get_defined_constants(true)" pega todas as constantes do PHP

// var_dump($cons); // Pega o conteúdo de uma variável e imprime

echo '<br>Parte 4: Operadores<br>';
echo '<br>Operadores Aritméticos<br>';

echo '<br>Operadores Atribuição<br>';

echo '<br>Operadores Comparação<br>';

echo '<br>Operadores Lógicos<br>';

echo '<br>Parte 5: <br>';

?>