<html>

<head>
    <title>Exercicio 4b</title>
    <!-- Escreva uma função php que recebe um conjunto de caracteres e imprime os
caracteres em ordem contrária.
Ex: ABCDEFGH => HGFEDCBA -->
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
        Nome: <br>
        <input type="text" name="nome">
        <input type="text" name="apelido">
        <input type="submit" value="Inverter">
        <br>
    </form>

    <?php

    echo $_POST['apelido'] . " " . $_POST['nome'];

    ?>
</body>

</html>