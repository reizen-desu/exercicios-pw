<?php
include '../controller/conexao.php';

$pdo = conectar();


if (isset($_POST['entrar'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $acerto = 0;
    $id = 0;

    $result = $pdo->prepare("SELECT * FROM utilizador WHERE usuario = :usuario AND senha = :senha");
    $result->bindValue(":usuario", $usuario);
    $result->bindValue(":senha", $senha);
    echo $id;
    try {
        $result->execute();
    } catch (Exception $e){
        echo $e;
    }


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $d_usuario= $row['usuario'];
        $d_senha= $row['senha'];
        $d_id = $row['id'];
        if ($usuario == $d_usuario and $senha == $d_senha ) {
            $acerto = 1;
            $id =$d_id;
        }
    }
    
    if ($acerto == 1) {
        $_SESSION['login'] = 'logado';
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $usuario;
        // Administrador (Apenas pode adicionar evento)
        if ($id==1) {  
			$_SESSION['tipo'] = "Admin";
            header("location: ../");
        } 
        
        // Usuario comum (apenas pode reservar)
        else { 
				$_SESSION['tipo'] = "User";
                header("location: ../");
        }
        echo "logado";
        
    } else {
        $message  = $_SESSION['erro'] = "Erro ao efectuar o login";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location: ../login.php");
    }
}


if (isset($_GET['sair'])) {
    unset($_SESSION['login']);
    unset($_SESSION['tipo']);
    unset($_SESSION['nome']);
    session_destroy();
    header("location: ../");
}