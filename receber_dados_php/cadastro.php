<?php

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$enderecoNum = $_POST['enderecoNum'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$dataNasc = $_POST['dataNasc'];
$estCiv = $_POST['estCiv'];

echo "<br>nome $nome";
echo "<br>cep".$cep;
echo "<br>esdereco".$endereco;
echo "<br>número".$enderecoNum;
echo "<br>bairro".$bairro;
echo "<br>cidade".$cidade;
echo "<br>estado".$estado;
echo "<br>telefone".$telefone;
echo "<br>celular".$celular;
echo "<br>email".$email;
echo "<br>data Nascimento".$dataNasc;
echo "<br>estado civil".$estCiv;

?>
