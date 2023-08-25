<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
</head>
<body>
    <h2>Resultado do IMC</h2>
    <?php
    if(isset($_POST['peso']) && isset($_POST['altura'])){
        $peso = str_replace(',', '.', $_POST['peso']);
        $altura = str_replace(',', '.', $_POST['altura']);
        
        $imc = $peso / ($altura * $altura);
        echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
        
        if ($imc < 17) {
            echo "Situação: Muito abaixo do peso";
        } elseif ($imc < 18.5) {
            echo "Situação: Abaixo do peso";
        } elseif ($imc < 25) {
            echo "Situação: Peso normal";
        } elseif ($imc < 30) {
            echo "Situação: Acima do peso";
        } elseif ($imc < 35) {
            echo "Situação: Obesidade I";
        } elseif ($imc < 40) {
            echo "Situação: Obesidade II (severa)";
        } else {
            echo "Situação: Obesidade III (mórbida)";
        }
    }
    ?>
</body>
</html>
