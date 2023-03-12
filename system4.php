<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/">
		<link rel="stylesheet" href="./estilo.php">
        <title>Sistema de lados de um triângulo| Entreprise Systems</title>
	</head>
    <body>
        <section id="form">
            <form name="formulario" action=# method="POST" autocomplete="off">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de triângulos</legend>
                    <label>Digite as medidas dos lados do triângulo desejado:</label><br><br>
                    <label>1º medida: </label><input name="m1" type="number" min="1" required><br><br>
                    <label>2º medida: </label><input name="m2" type="number" min="1" required><br><br>
                    <label>3º medida: </label><input name="m3" type="number" min="1" required><br><br>
                    <input id="Enviar" name="Enviar" type="submit" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php
            if (isset($_POST['Enviar'])){
            $m1 = $_POST['m1'];
            $m2 = $_POST['m2'];
            $m3 = $_POST['m3'];

                if($m1 == $m2 && $m1 == $m3 ) {
                    echo ('<section class="echo">Esse é um triângulo Equilátero</section>');
                }
                elseif($m1 == $m2 && $m1 != $m3) {
                    echo ('<section class="echo">Esse é um triângulo Isósceles</section>');
                }
                elseif($m2 == $m3 && $m1 != $m2) {
                    echo ('<section class="echo">Esse é um triângulo Isósceles</section>');
                }
                elseif($m1 == $m3 && $m1 != $m2) {
                    echo ('<section class="echo">Esse é um triângulo Isósceles</section>');
                }
                else{
                    echo ('<section class="echo">Esse é um triângulo Escaleno</section>');
                }
		    }
		?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>