<html>

<head>
    <title>Exercicio 3</title>
    <!-- Exercicio 4: Escreva uma função contaPalavras($frase) que recebe qualquer conjunto de caracteres e
informa o número de vezes que cada palavra ocorre. A comparação deve ignorar a distinção
entre letras maiúsculas e minúsculas e não precisa se preocupar em lidar com caracteres
que não são letras. -->
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="frase">Introduza os caracteres: </label>
        <input type="text" name="frase" id="frase">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_REQUEST['frase'];

        if (empty($frase)) {
            echo "Nenhuma palavra introduzida.";
        } else {

            // Primeiro colocaremos todas as palavras em um array
            $palavras = explode(" ", $frase);

            // Agora vamos criar um array para guardar as palavras e o número de vezes que aparecem
            $palavras_contadas = array();

            // Agora vamos percorrer o array de palavras
            foreach ($palavras as $palavra) {
                // Vamos verificar se a palavra já existe no array
                if (array_key_exists($palavra, $palavras_contadas)) {
                    // Se existir, vamos incrementar o número de vezes que aparece
                    $palavras_contadas[$palavra]++;
                } else {
                    // Se não existir, vamos adicionar a palavra ao array
                    $palavras_contadas[$palavra] = 1;
                }
            }

            // Agora vamos percorrer o array de palavras contadas
            foreach ($palavras_contadas as $palavra => $contagem) {
                echo $palavra . ": " . $contagem . "<br>";
            }
        }
    }
    ?>
</body>

</html>