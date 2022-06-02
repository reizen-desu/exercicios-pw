<?php
include "conexao.php";


// Ao clicar em "Reservar", ele vai decrementar um bilhete.
if (isset($_GET['reservar'])) {
    $id = $_GET['reservar'];    
    
    $sql = 'UPDATE evento SET bilhetes = bilhetes-1 WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    header('location: ../');
}


if (isset($_POST['salvar'])) {
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $data_evento = $_POST['data_evento'];
    $bilhetes = $_POST['bilhetes'];

    $result = $pdo->prepare("INSERT INTO evento (titulo, categoria, data_evento, bilhetes) VALUES (:titulo, :categoria, :data_evento, :bilhetes)");
    $result->bindValue(":categoria", $categoria);
    $result->bindValue(":titulo", $titulo);
    $result->bindValue(":categoria", $categoria);
    $result->bindValue(":data_evento", $data_evento);
    $result->bindValue(":bilhetes", $bilhetes);

    if ($result->execute()) {
        $_SESSION['sucesso'] = "Salvo com sucesso";
        header("location: ../");
    } else {
        $_SESSION['erro'] = "Erro";
        header("location: ../");
    }
}

?>