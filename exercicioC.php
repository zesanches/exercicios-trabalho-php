<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio C</title>
</head>
<body>
    <h1>Exercicio C</h1>
    <p></p>
    <h2>Coloque os dados para cadastro. A pessoa deve ter 25 anos ou mais para se cadastrar!</h2>
    <p></p>
    <form action="exercicioC.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="sex">Sexo: </label>
        <select name="sex" id="sex">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade">
        <input type="submit" value="Enviar">
        <p></p>
    </form>
    <div>
        <?php 
            $nome = $_POST ["nome"];
            $idade = $_POST ["idade"];
            $sex = $_POST ["sex"];
            
            echo "Nome: " . $nome . "<br />";
            echo "Idade: " . $idade . "<br />";
            echo "Sexo: " . $sex . "<br />";

            if ($idade < 25) {
                echo "Você não pode se cadastrar";
            } else {
                echo "Você pode se cadastrar";
            }
        ?>
    </div>   
</body>
</html>