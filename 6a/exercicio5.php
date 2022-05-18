<html>

<head>
    <title>Exercicio 5</title>
    <!-- Escreva um script em php que recebe de um formulário um número e verifica se está numa
lista (array) de 10 números predefinidos. -->
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=POST>
        Introduza um numero para verificar: <br>
        <input type="number" name="numero">
        <input type="submit" value="verificar">
    </form>

    <?php

    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        foreach ($numeros as $i) {
            if ($_POST['numero'] == $numeros[$i - 1]) {
                echo "O numero introduzido " . $_POST['numero'] . " ESTÁ na lista";
                return;
            }
        }

        echo "O numero introduzido não está dentro da lista predefinida.";
    }


    ?>
</body>

</html>