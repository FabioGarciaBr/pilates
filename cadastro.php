<?php

if(isset($_POST['nome']) && isset($_POST['modalidade']) && isset($_POST['vencimento'])) {
    $nome = $_POST['nome'];
    $modalidade = $_POST['modalidade'];
    $vencimento = $_POST['vencimento'];
    
    // Conecta ao banco de dados
    $conexao = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");
    
    // Insere o novo cliente na tabela "clientes"
    $sql = "INSERT INTO clientes (nome, modalidade, vencimento) VALUES ('$nome', '$modalidade', '$vencimento')";
    mysqli_query($conexao, $sql);
    
    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
    
    echo "Cliente cadastrado com sucesso!";
}
?>
