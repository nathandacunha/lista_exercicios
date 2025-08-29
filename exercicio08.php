<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio08 - Contar numeros pares</title>
</head>
<body>
    <form method = "POST">
        <label for="numero">Digite um numero: </label>
        <input type="number" name="contarNumerosPares" id="numeros" required>
        <button type="submit">Contar numero</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['contarNumerosPares'])){
                $numero = filter_var($_POST['contarNumerosPares'], FILTER_VALIDATE_INT);
                $numPar = 0;
                for($i = 1; $i < $numero; $i++){
                    if($numero % $i === 0){
                        $numPar += 1;
                    }
                }
                echo "Quantidade de numeros pares: $numPar";
            }
        }
    ?>
</body>
</html>