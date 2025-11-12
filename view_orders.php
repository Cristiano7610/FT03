<?php
include('config.php');

session_start();
if (!isset ($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$utilizador_id = $_SESSION['id'];

$sql  = "SELECT compras.id, produtos.nome, produtos.preco, compras.data_compra FROM compras JOIN produtos ON compras.produtos_id = produtos.id WHERE compras.utilizador_id = '$utilizador_id'";

$result = $conn ->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>As suas encomendas</h2>";
    echo "<table border='1'>
        <tr>
            <th>ID da compra</th>
            <th>Nome do produto</th>
            <th>Preço</th>
            <th>Data da compra</th>
        </tr>";
    while($row = $result ->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nome'] . "</td>
                <td>" . $row['preco'] . "</td>
                <td>" . $row['data_compra'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Nao tem encomendas.";
}
?>
