<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio06 - Exibir divisores de um numero</title>
</head>
<body>
    <form method = "POST">
        <label for="exibirDivisor">Digite um numero: </label>
        <input type="number" name="enviar_numero" id="num" required>
        <button type="submit" name = "exibir_divisor">Enviar numero</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['enviar_numero'])){
                $num = filter_var($_POST['enviar_numero'], FILTER_VALIDATE_INT);
                if($num === false && $num < 0){
                    echo "numero invalido";
                } else {
                    echo "Os divisores do $num são: ";
                    for($i = 1; $i < $num; $i++){
                        if($num % 1 === 0){
                            echo "<br> $i";
                        }
                    }
                }
            }
        }
    ?>
</body>
</html>