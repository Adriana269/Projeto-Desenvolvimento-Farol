<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "";

$conexao = new mysqli ($host, $usuario, $senha, $banco);
if (!$conexao){
    die ("Erro na conexão com o banco de dados: " .mysqli_connect_errno());
}
else {
    echo "conexão bem sucedida";
}

?><?php
require 'conexao.php';

try {
    // Dados do cliente
    $nome = " ";
    $telefone = " ";
    $email = " ";
    $data_nascimento = " ";
    $genero = '';
}