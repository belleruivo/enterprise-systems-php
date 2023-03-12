<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/">
		<link rel="stylesheet" href="./estilo.php">
        <title>Sistema de gasto de combustível numa viagem | Entreprise Systems</title>
	</head>
    <body>
        <section id="form">
            <form name="formulario" action=# method="POST">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de combustível</legend>
                    <label> Digite o tempo que você irá gastar na viagem: </label><br><br>
                    <input type="number" min="1" name="tempo" required><br><br>
                    <label>Digite a velocidade Media: </label><br><br>
                    <input type="number" min="1" name="velocidade" required><br><br>
                    <input id="Enviar" type="submit" name="Enviar">
                </fieldset>
            </form>
        </section>
        <?php
            if (isset($_POST['Enviar'])){

                $tempo = $_POST['tempo'];
                $velocidade = $_POST['velocidade'];

                if ($distancia = $tempo * $velocidade) {
                    echo ('<section class="echo">A distância que você irá percorrer é de '.$distancia.' quilômetros (Km)</section>');				
                }
                if ($litros = $distancia / 12) {
                    echo  ('<section class="echo">A quantidade de combustível 
                    necessária é de '.$litros.' litros (L)</section>');
                }
            }
        ?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>