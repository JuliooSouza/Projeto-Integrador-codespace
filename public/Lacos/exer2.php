<?php
$produtos = [
    "Arroz" => 20,
    "Feijão" => 10,
    "Macarrão" => 8,
    "Óleo" => 15,
    "Açúcar" => 7
];

$total = 0;

foreach ($produtos as $nome => $preco) {
    echo "Produto: $nome - Preço: $preco<br>";
    $total += $preco;
}

echo "<br>Valor total da compra: $total";
?>