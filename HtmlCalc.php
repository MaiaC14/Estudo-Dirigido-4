<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operações básicas</title>
</head>

<body>
    
    <form action="CalcBasico.php" method="POST">
        1º valor: <input type="text" name="valor1"> <br><br>
        2º valor: <input type="text" name="valor2"> <br><br>

        No seu cálculo: <br><br>
        <input type="radio" name="operacao" value="adicionar"><label>Adicionar</label>
        <input type="radio" name="operacao" value="subtrair"><label>Subtrair</label>
        <input type="radio" name="operacao" value="multiplicar"><label>Multiplicar</label>
        <input type="radio" name="operacao" value="dividir"><label>Dividir</label>

        <hr>

        <br> <br>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
        
    </form>
    
</body>
</html>