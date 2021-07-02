<?php
$conecta = mysqli_connect('localhost', 'root', '', 'posts');
$query = /** @lang text */
    "SELECT * from cadastro";
$result = mysqli_query($conecta, $query);
while ($fetch = mysqli_fetch_row($result)) {
    echo '<br>';
    echo '<b>INFORMAÇÕES DO FUNCIONÁRIO</b>';
    echo '<br>Id: ' . $fetch[0];
    echo '<br>Nome: ' . $fetch[1];
    echo '<br>Idade: ' . $fetch[2];
    echo '<br>Profissão: ' . $fetch[3];
    echo '<br>Salário: ' . $fetch[4];
    echo '<br>';
}
