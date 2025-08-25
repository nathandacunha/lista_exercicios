<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <form method="POST">
        <label for="frase">Digite uma frase: </label>
        <input type="text" name="frase" id="frase" required>
        <button type="submit" id = "contaPalavra" name = "contaPalavra">Enviar</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['contaPalavra'])){
                $frase = trim($_POST['frase']);
                $quantidade = str_word_count($frase);
                
                echo "<p>A frase digitada foi: <em>\"$frase\"</em></p>";
                echo "<p> Essa frase possui: <strong>$quantidade</strong> palavras </p>";
            }
        }
    ?>
</body>
</html>