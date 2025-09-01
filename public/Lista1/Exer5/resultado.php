<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Resultado do Cadastro</title>
    </head>
    <body>

<h2>Cadastro realizado</h2>
<P>Nome: <?php echo ($nome); ?> </P>
<p>Email: <?php echo ($email); ?></p>
</body>
</html>