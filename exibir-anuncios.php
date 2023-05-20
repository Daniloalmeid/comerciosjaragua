<?php
include_once("config.php");

$sql = "SELECT * FROM anuncios";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $nome = $row['nome'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $datas = $row['datas'];
        $comentario = $row['comentario'];
        $imagem = $row['imagem'];

        // Exiba os dados do anúncio
        echo "<div>";
        echo "<h3>$nome</h3>";
        echo "<p>Telefone: $telefone</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Data: $datas</p>";
        echo "<p>Comentário: $comentario</p>";
        echo "<img src='$imagem' alt='Imagem do anúncio'>";
        echo "</div>";
    }
} else {
    echo "Nenhum anúncio encontrado.";
}

mysqli_close($conexao);
?>
