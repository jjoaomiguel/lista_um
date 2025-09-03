<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber uma data (dia, mês, ano) e validar se é uma data válida.</title>
</head>
<body>
    <form action="" method="POST">
        <label for="dia">Digite o Dia: </label>
        <input type="number" name="dia" id="dia" required>
        <label for="mes">Digite o Mes: </label>
        <input type="number" name="mes" id="mes" required>
        <label for="ano">Digite o Ano: </label>
        <input type="number" name="ano" id="ano" required>
        <button type="submit" name="verificar_data">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_data'])){
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $ano = $_POST['ano'];
                $ano_bissexto = ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0));

                $data_valida = true;

                if($ano <= 0){
                    $data_valida = false;
                }
                if($mes <= 0 || $mes > 12){
                    $data_valida = false;
                }
                if($dia > 31 || $dia <= 0){
                    $data_valida = false;
                }
                if($dia > 30 && ($mes == 4 || $mes == 6 ||$mes == 9 ||$mes == 11)){
                    $data_valida = false;
                }
                if($dia > 29 && $mes == 2 && $ano_bissexto){
                    $data_valida = false;
                }
                if($dia > 28 && $mes == 2 && !$ano_bissexto){
                    $data_valida = false;
                }

                echo "A data $dia/$mes/$ano é uma data ".($data_valida?'válida':'inválida');
                

            }
        }
    
    ?>
</body>
</html>
