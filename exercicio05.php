<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio05 - Verificar numero</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Digite um numero: </label>
        <input type="number" name="verificar_num1" id="numero1" required>
        <label for="num2">Digite mais um numero: </label>
        <input type="number" name="verificar_num2" id="numero2" required>
        <button type="submit">Enviar numeros</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['verificar_num1']) && isset($_POST['verificar_num2'])){
                $num1 = filter_var($_POST['verificar_num1'], FILTER_VALIDATE_INT);
                $num2 = filter_var($_POST['verificar_num2'], FILTER_VALIDATE_INT);
                if($num1 === false || $num2 === false){
                    echo "numero invalido";
                } else {
                    if($num1 > $num2){
                        echo "o numero $num1 é maior que o numero $num2";
                    } else if($num2 > $num1){
                        echo "o numero $num2 é maior que o numero $num1";
                    } else {
                        echo "os numeros são iguais";
                    }
                }
            }
        }
    ?>
</body>
</html>