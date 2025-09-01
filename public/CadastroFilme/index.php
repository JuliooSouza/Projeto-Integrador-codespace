<?php

$imagem = "filme.jpg";


$filme = "";
$genero = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filme = trim($_POST['filme']);
    $genero = strtolower(trim($_POST['genero'])); 
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Filmes</title>
</head>
<body>


    <?php include 'cabecalho.php'; ?>
<img src="<?php echo $imagem; ?>" alt="Imagem do filme" style="width: 200px;">
    <form action="index.php" method="POST">
        <label for="filme">Nome do filme:</label><br>
        <input type="text" id="filme" name="filme" required value="<?php echo htmlspecialchars($filme); ?>"><br><br>

        <label for="genero">Gênero:</label><br>
        <input type="text" id="genero" name="genero" required value="<?php echo htmlspecialchars($genero); ?>"><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <hr>

    <?php if (!empty($filme) && !empty($genero)) : ?>
        <p>Filme cadastrado: <?php echo htmlspecialchars($filme); ?> (<?php echo ucfirst($genero); ?>)</p>

        <?php if ($genero === "terror") : ?>
            <p style="color: red;">Atenção! Filme de Terror cadastrado.</p>
        <?php elseif ($genero === "comédia" || $genero === "comedia") : ?>
            <p style="color: green;">Esse filme promete boas risadas!</p>
        <?php endif; ?>
    <?php endif; ?>

    <?php include 'rodape.php'; ?>

</body>
</html>

</body>
</html>

