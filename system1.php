<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/">
		<link rel="stylesheet" href="./estilo.php">
        <title>Sistema de Soma | Entreprise Systems
        </title>
	</head>
    <body>
        <section id="form">
            <form name="formulario" action="#" method="POST" autocomplete="off">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de soma</legend>
                    <label>Digite o que é solicitado:</label><br><br>
                    <label>Primeiro número: </label><input type="number" name="num1" min="1" required><br><br>
                    <label>Segundo número: </label><input type="number" name="num2" min="1" required><br><br>
                    <label>Terceiro número: </label><input type="number" name="num3" min="1" required><br><br>
                    <input id="Enviar" type="submit" name="Enviar" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php
            if (isset($_POST['Enviar'])){
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $n3 = $_POST['num3'];

                $soma = $n1 + $n2;

                if($soma < $n3) {
                    echo ('<section class="echo">O primeiro número digitado é: '.$n1.'</section>');
                    echo ('<section class="echo">O segundo número digitado é: '.$n2.'</section>');
                    echo ('<section class="echo">O terceiro número digitado é: '.$n3.'</section>');
                    echo ('<section class="echo">A soma de '.$n1.' + '.$n2.' é MENOR que '.$n3. '</section>');
                    echo ('<section class="echo">Resultado da soma: '.$soma.'</section>');
                } elseif ($soma > $n3){
                    echo ('<section class="echo">O primeiro número digitado é: '.$n1.'</section>');
                    echo ('<section class="echo">O segundo número digitado é: '.$n2.'</section>');
                    echo ('<section class="echo">O terceiro número digitado é: '.$n3.'</section>');
                    echo ('<section class="echo">A soma de '.$n1.' + '.$n2.' é MAIOR que '.$n3. '</section>');
                    echo ('<section class="echo">Resultado da soma: '.$soma.'</section>'); 
                } 
		    }
		?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>