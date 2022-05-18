<html>

<head>
    <title>Exercicio 4b</title>
    <!-- Escreva uma função php que recebe um conjunto de caracteres e imprime os
caracteres em ordem contrária.
Ex: ABCDEFGH => HGFEDCBA -->
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
        Introduza o conteudo: <br>
        <input type="text" name="texto">
        <input type="submit" value="inverter">
        <br><br>
    </form>

    <?php

    echo strrev($_POST['texto']);

    ?>
</body>

</html>