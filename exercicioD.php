<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio D</title>
</head>
<body>
    <h1>Exercicio D</h1>
    <p></p>
    <h2>Coloque um numero e receba a resposta do mês correspondente a esse número</h2>
    <p></p>
    <form method="post" action="exercicioD.php">
        <label for="number">Número: </label>
        <input type="number" name="number" id="number"/>
        <p></p>
        <div>
            <?php 
                $number = $_POST ['number'];
                $mes = [
                    1 => 'JANEIRO',
                    2 => 'FEVEREIRO',
                    3 => 'MARÇO',
                    4 => 'ABRIL',
                    5 => 'MAIO',
                    6 => 'JUNHO',
                    7 => 'JULHO', 
                    8 => 'AGOSTO',
                    9 => 'SETEMBRO',
                    10 => 'OUTUBRO',
                    11 => 'NOVEMBRO',
                    12 => 'DEZEMBRO',
                ];

                if($number >= 1 && $number <= 12) {
                    echo "O mês correspondente é: " . $mes[$number];
                } else {
                    echo "Não existe mês com este número!";
                }
            ?>
        </div>
    </form>
</body>
</html>