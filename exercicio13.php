<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter graus Celsius para Fahrenheit.</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_celsius">Digite um número em graus Celsius: </label>
        <input type="number" name="numero_celsius" id="numero_celsius" required>
        <button type="submit" name="calcular_fahrenheit">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['calcular_fahrenheit'])){
                $celsius = $_POST['numero_celsius'];
                
                $fahrenheit = ($celsius * (9/5)) + 32;

                echo "$celsius ºC é igual a $fahrenheit ºF";
            }
        }
    
    ?>
</body>
</html>
