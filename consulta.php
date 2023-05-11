<?php

// Conecta ao banco de dados
$conexao = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");

// Executa a consulta SQL SELECT para obter os dados da tabela "clientes"
$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexao, $sql);

// Inicia a tabela HTML
echo "<table>";
echo "<tr><th>Nome</th><th>Modalidade</th><th>Vencimento</th></tr>";

// Loop para exibir os resultados da consulta
while($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$linha['nome']."</td>";
    echo "<td>".$linha['modalidade']."</td>";
    echo "<td>".$linha['vencimento']."</td>";
    echo "</tr>";
}

// Fecha a tabela HTML
echo "</table>";

// Fecha a conexão com o banco de dados
mysqli_close($conexao);

?>
