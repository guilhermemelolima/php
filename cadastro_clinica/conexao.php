<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'clinica';
$con = mysqli_connect($servidor, $usuario, $senha, $db);

if(!$con){
    print("Erro na conexao com MySQL");
    print("Erro: ".mysqli_connect_error());
    exit;
}

?>