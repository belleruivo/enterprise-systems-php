<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/">
		<link rel="stylesheet" href="./estilo.php">
        <title>Sistema de número par ou ímpar | Entreprise Systems</title>
	</head>
    <body>
        <section id="form">
            <form name="formulario" action="#" method="POST" autocomplete="off">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de número par ou ímpar</legend>
                    <label>Par ou ímpar?</label><br><br>
                    <label>Digite um número qualquer: </label><br><br>
                    <input type="number" name="num" min="1" required><br><br>
                    <input id="Enviar" type="submit" name="Enviar" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php
            if (isset($_POST['Enviar'])){
            $num = $_POST['num'];

                if($num % 2 == 0) {
                    echo ('<section class="echo">O número '.$num.' é par!</section>');
                } else {
                    echo ('<section class="echo">O número '.$num.' é ímpar!</section>');
                }
            }
		?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>