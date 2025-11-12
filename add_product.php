<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="">
    Nome do Produto: <input type="text" name="nome" required><br>
    Preço: <input type="text" name="preco" required><br>
    <input type="submit" value="Adicionar Produto">
</form>
