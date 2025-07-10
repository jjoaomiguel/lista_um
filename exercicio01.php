<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se o número é par ou ímpar.</title>
</head>
<body>
    </head>
<body>

   <form method="POST" action="">
        <label for="numero">Verificar se o número é par ou ímpar.</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar'])){
        $numero = $_POST['numero'];
        if($numero %2 === 0){
            $par_impar = true;
        }else{
            $par_impar = false;
        }
        echo "O número $numero é ". ($par_impar ? 'par':'ímpar');
    };

   };

   ?>
 
</body>
</body>
</html>