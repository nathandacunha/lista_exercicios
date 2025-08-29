<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio07 - Verificar numero perfeito</title>
</head>
<body>
    <form method="POST">
        <label for="numero">Digite um numero</label>
        <input type="text" name = "verificar_numero_perfeito" id = "numero" required>
        <button type="submit">Verificar numero</button>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['verificar_numero_perfeito'])){
                $num = filter_var($_POST['verificar_numero_perfeito'], FILTER_VALIDATE_INT);
                $soma = 0;
                for($i = 1; $i< $num; $i++){
                    if($num % i === 0){
                        $soma += $i;
                    }
                }
            }
        }
    ?>
</body>
</html>