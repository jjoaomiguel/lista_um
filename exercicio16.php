<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber nome e idade e informar se a pessoa pode votar.</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Digite seu nome: </label>
        <input type="text" name="nome" id="nome" required>
        <label for="idade">Digite sua idade: </label>
        <input type="number" name="idade" id="idade" required>
        <button type="submit" name="verificar_pode_votar">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_pode_votar'])){
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];

                echo "$nome, você ".(($idade >= 16)? 'pode votar':'não pode votar');

            }
        }
    
    ?>
</body>
</html>
