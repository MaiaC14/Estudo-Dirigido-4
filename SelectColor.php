<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seletor de cores - Interativo</title>
</head>

<body>
    
    <h1>Seletor de cores - Interativo</h1>

    <?php
        $R = $_POST['red'];
        $G = $_POST['green'];
        $B = $_POST['blue'];


        $rgb = $R . "," . $G. "," . $B;
    ?>

    R: <?php print $R?>
    G: <?php print $G?>
    B: <?php print $B?>

    <div style="width:200px; height:200px; background:rgb(<?php print $rgb; ?>);"></div>

</body>
</html>