comandos:
echo “teste <br>”;
- Variável Referenciável
$a = 1; (a recebe o atributo 1)
$b = &$a
$b++ ou ++$b (incremento)
echo $a -> 2

- Variável Variante
$site = “curso”;
$$site = “video”;
echo $site $curso -> curso video

- Operador Unário (se/senão)
$maior = $a > $b ? $a : $b; 	(Se a > b, maior recebe a.)
echo “O maior número é o $maior”;
$situação = $media < 5 ? “Reprovado” : “Aprovado”;
echo “O aluno tirou $media, ele está $situação”;

- Switch
switch (%x) {
case 1:
case 2:
	echo “A”; 
	break;
case 3:
	echo “B”; 
	break;
default:
	echo “C”;
}

- Rotina (function)
function soma ($a,$b) {
	$s = $a + $b
	echo “A soma é $s”;		(ou)
	return $s
}
soma (2,3) -> 5	ou	$resultado = soma(2,3)
function soma() {
	$p = func_get_args();
	$t = func_num_args();
	$s = 0;
	for ($i=0; $i<$t; $i++) {
		$s += $p[$i];
	}
	return $s;
}
function x($a) {
	$a += 1;
}
$b = 1
 x($b)
Nesse caso a = 2 mas b = 1. 
Mas se “function x(&$a) {“
a = b = 2

- Include/Required
(no html)
<?php include “arquivo.php”;
soma(2,3,4)
?>	 (ele vai puxar o arquivo funções)

- printf
usa se for fazer um texto grande onde a mesma variável vai ser usada várias vezes.
é o echo formatado




mode php em vez de fast cgi (mais memória, mais segurança) 

xampp = 127.0.0.1 - no navegador, é um ip de retorno

Livros:

- https://www.php.net/manual/pt_BR/
- Aprendendo PHP - Ed O'Reilly
- Programming PHP - Ed O'Reilly
- Learn PHP 8 - Ed Apress
- PHP Quick Scripting Reference - Ed Apress
- PHP&MYSQL - Ed Wiley

Rasmus Lerdofy - criador 1994
PHP foi escrito em C e pearl, por isso os comandos são parecidos
Zeev e Andi -> desenvolveram php3 e Zend cuida até hoje