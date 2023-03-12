<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="./src/images/">
        <link rel="stylesheet" href="./estilo.php">
        <title>Sistema de cálculo de juros ao mês | Entreprise Systems</title>
    </head>
    <body>
        <section id="form">
            <form name="formulario" action="#" method="POST">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de juros</legend>
                    <label>Digite a porcentagem de juros ao mês:</label>
                    <input type="number" name="juros" required><br><br>
                    Digite o número de anos que deseja poupar:
                    <input type="number" name="anos" required><br><br>
                    Digite o valor do depósito mensal:<br>
                    <input type="number" name="dep" required><br><br>

                    <input id="Enviar" type="submit" name="Enviar" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php 
            if (isset($_POST['Enviar'])) {
                $juros = $_POST['juros'];
                $anos = $_POST['anos'];
                $dep = $_POST['dep'];
                    
                $totalPoupado = ($dep * 12) * $anos + ($dep * 12) * ($juros / 100) * $anos;
    
                echo ('<section class="echo">Porcentagem de Juros ao mês: '.$juros.'%<br></section>');
                echo ('<section class="echo">Número de anos que você deseja poupar: '.$anos.'<br></section>');
                echo ('<section class="echo">Depósito Mensal: R$'.number_format($dep, 2, ",", ".").'<br></section>');
                echo ('<section class="echo">Total que será poupado: R$'.number_format($totalPoupado, 2, ",", ".").'</section>');
            }
        ?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>