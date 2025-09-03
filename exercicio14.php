<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se um ano é bissexto.</title>
</head>
<body>
    <form action="" method="POST">
        <label for="ano">Digite um ano para ver se ele é bissexto: </label>
        <input type="number" name="ano" id="ano" required>
        <button type="submit" name="verificar_bissexto">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_bissexto'])){
                $ano = $_POST['ano'];
                
                $ano_bissexto = ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0));

                echo "O ano $ano ".($ano_bissexto? 'é bissexto':'não é bissexto');

            }
        }
    
    ?>
</body>
</html>
