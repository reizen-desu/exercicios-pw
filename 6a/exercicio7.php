<html>

<head>
    <title>Exercicio 7</title>
    <!-- Nome, Apelido, Idade 
        Valida os dados usando Php. Caso os campos estejam correctamente preenchidos mostre a
seguinte mensagem numa outra página: Dados submetidos com sucesso. Caso contrário mostre
a seguinte mensagem numa outra página: os campos não estão correctamente preenchidos. -->
</head>

<body>
    <form action='exercicio7submissao.php' method="POST">
        <label for="nome">Nome: </label> <input type="text" name="nome" required><br>
        <label for="apelido">Apelido: </label><input type="text" name="apelido" required><br>
        <label for="idade">Idade: </label><input type="number" name="idade" required><br>
        <input type="submit">
    </form>

    <?php

    ?>
</body>

</html>