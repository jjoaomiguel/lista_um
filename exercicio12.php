<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber uma string e exibir a quantidade de vogais.</title>
</head>
<body>
    <form action="" method="POST">
        <label for="texto_vogais">Escreva uma palavra para ver quantas vogais ela tem: </label>
        <input type="text" name="texto_vogais" id="texto_vogais" required>
        <button type="submit" name="contar_vogais">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['contar_vogais'])){
                $texto = $_POST['texto_vogais'];
                $vogais = ['a','e','i','o','u','A','E','I','O','U'];
                $qtd_vogais = 0;

                for($i = 0; $i < strlen($texto); $i++){
                    $caractere = $texto[$i];
                    $ehVogal = false;
                    for($j = 0; $j < count($vogais); $j++){
                        if($vogais[$j] == $caractere){
                            $ehVogal = true;
                            break;
                        }
                    }
                    if($ehVogal){
                        $qtd_vogais++;
                    }

                }
             
                echo "A palavra $texto tem $qtd_vogais vogais.";
            }
        }

    ?>
</body>
</html>
