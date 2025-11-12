<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $utilizador_id = $_POST['utilizador_id'];
    $produto_id = $_POST['produto_id'];

    $sql = "INSERT INTO compras (utilizador_id, produto_id) VALUES ('$utilizador_id', '$produto_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Compra registada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="">
    ID do Utilizador: <input type="text" name="utilizador_id" required><br>
    ID do Produto: <input type="text" name="produto_id" required><br>
    <input type="submit" value="Registar Compra">
</form>
