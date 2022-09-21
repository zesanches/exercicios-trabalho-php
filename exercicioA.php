<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio A</title>
</head>
<body>
    <div>
        <form method="post" action="exercicioA.php" noValidate>
            <h1>Exercicio A</h1>
            <p></p>
            <h2>Coloque 2 números para serem somados e retornados com subtração de -5 caso o resultado seja menor ou igual a 10 e com adição +10 para caso seja maior que 10</h2>
            <p></p>
            <label for="valor1">Número 1: </label>
            <input type="number" name="valor1" id="valor1">
            <label for="valor2">Número 2: </label>
            <input type="number" name="valor2" id="valor2">
            <input type="submit" value="Enviar">
            <p></p>
        </form>
        <div>
            <?php
                $num1 = $_POST["valor1"];
                $num2 = $_POST["valor2"];
                $result = $num1 + $num2;
        
                if($result > 10){
                    echo "o resultado é ". ($result + 8);
                } else {
                    echo "o resultado é ". ($result - 5);
                }  
            ?>
        </div>
    </div>
</body>
</html>