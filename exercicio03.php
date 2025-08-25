<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 - Informar numero</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Digite um numero: </label>
        <input type="text" name="verificarNumero" id="numero" required>
        <button type="submit" id = "verificacao" name = "verificarNumero">Enviar numero</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['verificacao'])){
                $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
                if($numero === false){
                    echo "<p> Numero invalido </p>";
                } else {
                    echo "<p> Informar numero </p>";
                    if($numero > 0){
                        echo "<p> O numero é positivo </p>";
                    } else if($numero === 0){
                        echo "<p> O numero é zero </p>";
                    } else if($numero < 0){
                        echo "<p> O numero é negativo </p>";
                    }
                }
            }
        }
    ?>
</body>
</html>