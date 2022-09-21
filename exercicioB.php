<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio B</title>
</head>
<body>
    <h1>Exercicio B</h1>
    <p></p>
    <h2>Coloque 3 números para serem ordenados em ordem decrescente</h2>
    <p></p>
    <form action="exercicioB.php" method="post">
        <label for="valor1">Número 1: </label>
        <input type="number" name="valor1" id="valor1">
        <label for="valor2">Número 2: </label>
        <input type="number" name="valor2" id="valor2">
        <label for="valor3">Número 3: </label>
        <input type="number" name="valor3" id="valor3">
        <input type="submit" value="Enviar">
        <p></p>
    </form>
    <div>
        <?php 
            $num1 = $_POST ["valor1"];
            $num2 = $_POST ["valor2"];
            $num3 = $_POST ["valor3"];
            $array = [$num1, $num2, $num3];
            
            rsort($array);

            echo "A ordem decrescente é: " . "[ ". $array[0] . " - " . $array[1] . " - " . $array[2] . " ]"
        ?>
    </div>   
</body>
</html>