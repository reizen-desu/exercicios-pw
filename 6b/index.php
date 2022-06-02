<?php
include "controller/conexao.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Eventos</title>
    <link href="assets/css/estilo.css" rel="stylesheet">
    <style>
        button {
            background: #06f;
            margin: 5px;
        }
        
        label {
			font-weight: bold;
		}
    </style>
</head>

<body>
<div style="filter: blur(50px); position: absolute; left: 0; top: 0; width: 100vw; height: 100vh; background: url('Afrotraction.jpg'); z-index: -1; background-size: 10%;"></div>
<div class="main" style="background: #ffffff77; padding: 20px; padding-right: 50px; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
    <h1>Eventos</h1>

    <div style="width: 100%; background: #06f; padding: 20px; color: white; margin-bottom: 10px; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
        <?php if (isset($_SESSION["nome"]) and isset($_SESSION["tipo"])) { ?>
            <b>Logado como:</b> <?php echo $_SESSION["nome"] ?> <br>
            <b>Categoria:</b> <?php echo $_SESSION["tipo"] ?> <br>
            <b><a href="controller/login_controller.php?sair=1" style="font-size:1.4em; float: right;">Sair</a></b><br>

        <?php } else{ ?>
        <a href="login.php" style="font-size:25px;">Fazer login</a>
        <?php } ?>
    </div>

    <?php if (isset($_SESSION["login"]) and $_SESSION["login"] and isset($_SESSION["tipo"]) and $_SESSION["tipo"] == "Admin") { ?>
        <form class="form-data" style="width: 700px; " action="controller/evento_controller.php" method="post">
            <h1 style="text-align:center;"><i>Registar evento</i></h1>
            <label>Titulo</label>
            <input type="text" id="titulo" class="form-control" placeholder="Titulo do evento" required autofocus name="titulo"><br>
            <label>Categoria</label>
            <select name="categoria" id="categoria" style="width: 100%; height: 30px">
				<option value="Show">Show</option>
				<option value="Teatro">Teatro</option>
				<option value="Palestra">Palestra</option>
			</select><br><br>
			
			<label for="data_evento">Data do evento:</label>
			<input class="form-control" type="datetime-local" name="data_evento" id="data_evento" required><br>
			
			<label for="bilhetes">Número de bilhetes:</label>
			<input type="number" name="bilhetes"  min="1" id="bilhetes" required><br><br>
			
            <button class="btn" type="submit" name="salvar" style="margin-bottom: 30px">Adicionar evento</button>
        </form>
        <hr>
    <?php } ?>



    <table style="width: 100%; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.6);">
        <tr style="background: #fff; padding: 10px !important;">
            <td><b>Titulo</b></td>
            <td><b>Categoria</b></td>
            <td><b>Realização</b></td>
            <td><b>Bilhetes disponíveis</b></td>
            <?php if (isset($_SESSION["tipo"]) and $_SESSION["tipo"] != "Admin") { ?>
                <td><b> Acção</b></td>
            <?php } ?>

        </tr>
        <?php 
        $evento = $pdo->prepare("SELECT * FROM evento ORDER BY data_evento desc");
		$evento->execute();
		?>
        <?php while ($linha  = $evento->fetch(PDO::FETCH_ASSOC)) {
            ?>

            <tr>
                <td><?php echo $linha['titulo']; ?></td>
                <td><?php echo $linha['categoria']; ?></td>
                <td><?php echo $linha['data_evento']; ?></td>
                <?php if ($linha['bilhetes'] == 0) { ?>
                
                <td style="color:red; background-color: #ddd; text-align:center;" colspan="1">ESGOTADO</td>
                <?php } else { ?>
                <td><?php echo $linha['bilhetes'];  } ?></td>

                <?php if (isset($_SESSION["tipo"]) and $_SESSION["tipo"] != "Admin"): ?>
                <?php if ($linha['bilhetes'] == 0) { ?>
                <?php } else { ?>
                    <td>
                        <a href="controller/evento_controller.php?reservar=<?php echo $linha['id']; ?>">Reservar</a>
                    </td>
                <?php  }?>
                <?php endif ?>
            </tr>
        <?php } ?>

    </table>
</div>
</body>
</html>



