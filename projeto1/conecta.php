<?php
$conecta = mysqli_connect('localhost', 'root', '', 'posts')
or die("Não conectado!");

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$profissao = $_POST['profissao'];
$salario = $_POST['salario'];

$sql = /** @lang text */
    "INSERT INTO cadastro (id, nome, idade, profissao, salario)
 VALUES ('$id', '$nome', '$idade', '$profissao', '$salario')";

if ($conecta->query($sql) === TRUE) {
    echo 'Adicionado com sucesso';
}