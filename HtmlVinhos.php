<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seleção de vinhos</title>
</head>

<body>
    <form action="Vinhos.php" method="post">
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="vinho">Selecione seu tipo de vinho favorito: </label>
        <br><br>
        <input type="radio" name="vinho" id="vinho" value="branco">Branco
        <input type="radio" name="vinho" id="vinho" value="rosé">Rosé
        <input type="radio" name="vinho" id="vinho" value="tinto">Tinto
        <br><br>
        <label for="refeicao">Digite sua refeição favorita: </label>
        <input type="text" name="refeicao" id="refeicao">
        <br><br>
        <input type="submit" value="submeter este formulário">
    </form>

</body>
</html>