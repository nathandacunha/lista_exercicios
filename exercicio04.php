<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Fatorial</title>
</head>

<body>
    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="realizar_fatorial">Realizar Fatorial</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['realizar_fatorial'])) {
           $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
           if($numero === false || $numero < 0){
                echo "Numero invalido"; 
           } else {
                echo "O fatorial do $numero é: ";
                $fatorial = 1;
                for($i = 1; $i <= $numero; $i++){
                    $fatorial *= $i;
                    echo "<br> $i! = $fatorial ";
                }
           }
        }
    }
    ?>
</body>

</html>