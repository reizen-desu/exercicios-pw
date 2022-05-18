<html>

<head>
    <title>Exercicio 2</title>
</head>

<body>

    <!-- Escreva um script em Php que recebe de um formulário um número inteiro entre 1 e 12 e
escreva o mês correspondente. Caso o número esteja fora deste intervalo, informar que o
mês correspondente não existe. -->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Introduza um nr de 1 a 12: <input type="number" name="campo">
        <input type="submit" value="OK">
        <br>
        <br>
    </form>

    <p>

        <?php
        // declaração das variaveis
        $meses = array(
            "Janeiro", "Fevereiro", "Marco", "Abril", "Maio",
            "Julho", "Agosto", "Setembro", "Outubro",
            "Novembro", "Dezembro"
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mes = $_POST["campo"];

            if ($mes >= 1 && $mes <= 12) {
                echo $meses[$mes - 1];
            } else {
                echo "O mes nao existe";
            }
        }

        ?>
    </p>
</body>

</html>