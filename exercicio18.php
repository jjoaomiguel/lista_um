<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber 3 números e informar qual é o maior.</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero1">Número 1: </label>
        <input type="number" name="numero1" id="numero1" required>
        <label for="numero2">Número 2: </label>
        <input type="number" name="numero2" id="numero2" required>
        <label for="numero3">Número 3: </label>
        <input type="number" name="numero3" id="numero3" required>
        <button type="submit" name="verificar_maior">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_maior'])){
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];
                
                if($numero1 > $numero2 && $numero1 > $numero3){
                    echo "O número $numero1 é o maior"; 
                }else if($numero2 > $numero1 && $numero2 > $numero3){
                    echo "O número $numero2 é o maior"; 
                }else{
                    echo "O número $numero3 é o maior"; 
                }

            }
        }
    
    ?>
</body>
</html>
