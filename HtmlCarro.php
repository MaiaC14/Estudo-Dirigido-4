<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seletor de carros</title>
</head>

<body>


    <form action="Carro.php" method="post">
        <h1>Selecione Seu Carro</h1>
        <br>
        <label for="car">Tipo</label>
        <br>
        <select name="car" id="car">
            <option value="porsche" selected>Porsche 911</option>
            <option value="volkswagen">Volkswagen Beetle</option>
            <option value="ford">Ford Taurus</option>
        </select>
        <br>
        <br>
        <label for="color">Cor do carro:</label>
        <br>
        <input type="text" name="color" id="color">
        <input type="submit" value="enviar">
    </form>
    
</body>

</html>