<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Média</title>
</head>
<body>
    <h2>Resultado da Média</h2>
    <?php
    if(isset($_POST['nome']) && isset($_POST['nota1']) && isset($_POST['nota2'])){
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        
        $media = ($nota1 + $nota2) / 2;
        echo "Aluno: " . $nome . "<br>";
        echo "Média: " . number_format($media, 2) . "<br>";
        
        if ($media < 4) {
            echo "Situação: Reprovado";
        } elseif ($media < 6) {
            echo "Situação: Exame final";
        } else {
            echo "Situação: Aprovado";
        }
    }
    ?>
</body>
</html>
