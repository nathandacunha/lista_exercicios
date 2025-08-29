<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio09 - Exibir a soma</title>
</head>
<body>
    <form method = "POST">
        <label for="numeroInicial">Digite um numero inicial</label>
        <input type="number" name="numeroInicial" id="numInicial" required>
        <label for="numeroFinal">Digite um numero final: </label>
        <input type="number" name = "numeroFinal"  id = "numFinal" required>
        <button type="submit">Exibir soma</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if($_POST['numeroInicial'] && $_POST['numeroFinal']){
                $numInicial = filter_var($_POST['numeroInicial'], FILTER_VALIDATE_INT);
                $numFinal = filter_var($_POST['numeroFinal'], FILTER_VALIDATE_INT);
                $soma = 0;
                for($i = 1; $i < $numFinal; $i++){
                    
                }
            }
        }
    ?>
</body>
</html>