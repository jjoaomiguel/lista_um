<html lang="pt-BR">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcular o fatorial de um número.</title>
</head>
<body>
    <form method="POST" action="">
            <label for="numero">Calcular o fatorial de um número.</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit" name="fatorial">Fatorial</button>
    </form>

    <?php
        function fatorial($n) {
            $fatorial = 1;

            for($i = 1; $i <= $n; $i++){
                $fatorial *= $i;
                echo "$fatorial * = $i";
                echo "<br>";
            };
        
            return($fatorial);    
        };

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['fatorial'])){
                $numero = $_POST['numero'];
                
                $resultado = fatorial($numero);  
                echo "O fatorial é = $resultado";
            };
        };
        
    ?>
</body>
</html>