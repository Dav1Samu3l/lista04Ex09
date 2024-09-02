<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produtos = $_POST['produtos'];
    $fidelidade = isset($_POST['fidelidade']) ? true : false;

    $precos = [
        "Arroz" => 5.00,
        "Feijão" => 4.00,
        "Macarrão" => 3.00,
        "Açúcar" => 2.50
    ];

    $total = 0;
    foreach ($produtos as $produto) {
        $total += $precos[$produto];
    }

    if ($fidelidade) {
        $total *= 0.95;
    }

    echo "
    
    <p id: 'total'> O valor final da sua compra é: R$ " . number_format($total, 2, ',', '.')."</p>  <br>";
 
    echo "<p> o valor de desconto foi: R$ " . number_format($total * 0.05, 2, ',', '.') . "</p>";
}
?>

    
</body>
</html>