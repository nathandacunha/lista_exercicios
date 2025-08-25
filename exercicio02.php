<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - Tabuada</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Digite um numero: </label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit" id = "calcular" name = "calcular">Calcular</button>
    </form>

    <?php
    // calcular a tabuada de um numero informado
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['calcular'])){
               $numero = filter_var($_POST['numero'], FILTER_VALIDATE_INT);
                if($numero === false){
                    echo "Numero invalido";
                } else {
                    echo "<h2> Tabuada do $numero </h2";
                    echo "<ul>";
                    for($i = 1; $i <= 10; $i++){
                        $resultado = $numero *$i;
                        echo "<li> $numero x $i = $resultado </li>";
                    }
                    echo "</ul>";
                }
            }
        }
    ?>
</body>
</html>