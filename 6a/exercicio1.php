<html>
<head>
  <title>Exercicio 1</title>
</head>
<body>
    <?php
    // echo date("d/m/Y");

    // Para trocar o nome dos meses para portugues
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

    // Para definir o fuso horario para o mocambicano
    date_default_timezone_set('Africa/Maputo');

    // Imprimir na tela
    echo strftime('%d/%B/%Y', strtotime('today'));

    // %B é o nome do mes em extenso





    // function retornaData ($timestamp) {
    //     $dia = date("d", $timestamp);
    //     $mes = date("m", $timestamp);
    //     $ano = date("Y", $timestamp );


    //     if($mes == 01){
    //         $mesNome = "Janeiro";
    //     }elseif($mes == 02){
    //         $mesNome = "Fevereiro";
    //     }elseif($mes == 03){
    //         $mesNome = "Marco";
    //     }elseif($mes == 04){
    //         $mesNome = "Abril";
    //     }elseif($mes == 05){
    //         $mesNome = "Maio";
    //     }elseif($mes == 06){
    //         $mesNome = "Junho";
    //     }elseif($mes == 07){
    //         $mesNome = "Julho";
    //     }elseif($mes == 08){
    //         $mesNome = "Agosto";
    //     }elseif($mes == 09){
    //         $mesNome = "Setembro";
    //     }elseif($mes == 10){
    //         $mesNome = "Outubro";
    //     }elseif($mes == 11){
    //         $mesNome = "Novembro";
    //     }else{
    //         $mesNome = "Dezembro";
    //     }

    //     return $dia;
    // }


    // echo retornaData(date())



    ?>
</body>
</html>