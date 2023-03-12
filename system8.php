<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="./src/images/">
        <link rel="stylesheet" href="./estilo.php">
        <title>Sistema de cálculo de crédito através do Saldo Médio Percentual| Entreprise Systems</title>
    </head>
    <body>
        <section id="form">
            <form name="formulario" action="#" method="POST">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de Saldo Médio Percentual</legend>
                    
                    <label>Digite o seu nome:</label>
                    <input type="text" name="nome" required><br><br>
                    Digite o seu saldo médio:<br><br>
                    <input type="number" name="saldo" required><br><br>

                    <input id="Enviar" type="submit" name="Enviar" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php 
            if (isset($_POST['Enviar'])){
                $nome = $_POST['nome'];
                $saldo = $_POST['saldo'];

                if ($saldo < '201') {  
                    echo ('<section class="echo">'.$nome.', seu saldo médio é igual a '.$saldo.'. Você não tem nenhum crédito.</section>');
                } elseif ($saldo >= '201' && $saldo <= '400') {
                    $resp = $saldo / 100 * 20;
                    
                    echo ('<section class="echo">'.$nome.', seu saldo médio é igual a: '.$saldo.' e seu crédito é igual a '.$resp.'</section>');

                } elseif ($saldo >= '401' && $saldo <= '600') {
                    $resp = $saldo / 100 * 30;
                    
                    echo ('<section class="echo">'.$nome.', seu saldo médio é igual a: '.$saldo.' e seu crédito é igual a '.$resp.'</section>');
                } elseif ($saldo >= '601') {
                    $resp = $saldo / 100 * 40;
                    
                    echo ('<section class="echo">'.$nome.', seu saldo médio é igual a '.$saldo.' e seu crédito é igual a '.$resp.'</section>');
                }
            }
        ?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>