<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="./src/images/">
        <link rel="stylesheet" href="./estilo.php">
        <title>Sistema de custo de fábrica | Entreprise Systems</title>
    </head>
    <body>
        <section id="form">
            <form name="formulario" action="#" method="POST">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de custo de fábrica</legend>
                
                    <label>Digite o nome do seu carro:</label>
                    <input type="text" name="carro" required><br><br>
                    Digite o nome modelo:<br>
                    <input type="texto" name="modelo" required><br><br>
                    Digite o custo de fábrica:
                    <input type="number" name="custo" required><br><br>

                    <input id="Enviar" type="submit" name="Enviar" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php
			if (isset($_POST['Enviar'])){
				$carro = $_POST['carro'];
				$modelo = $_POST['modelo'];
				$custo = $_POST['custo'];

                $percentagem_distribuidor = $custo * 0.28;

                $impostos = $custo * 0.45;

                $custo_consumidor = $custo + $percentagem_distribuidor + $impostos;
                    
                echo ('<section class="echo">O seu carro é '.$carro.', o seu modelo é '. $modelo.'.<br>Querido consumidor, o seu custo é: R$ '.number_format($custo_consumidor, 2, ",", ".").' reais</section>') ;
			} 					
		?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>