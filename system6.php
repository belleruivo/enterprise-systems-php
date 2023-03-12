<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="./src/images/">
        <link rel="stylesheet" href="./estilo.php">
        <title>Sistema de aumento variável de salário | Entreprise Systems</title>
    </head>
    <body>
        <section id="form">
            <form name="formulario" action="#" method="POST">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Sistema de aumento variável</legend>
                    <label>Informe o seu salário: <br><br></label>
                    <input type="number" min="1" name="sal" required><br><br>
                    <label for="cod">Código do cargo:</label>
                    <input type="number" id="cod" name="cod" min="10" step="10" required><br><br>
                    <input id="Enviar" type="submit" name="Enviar" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php
            if (isset($_POST['Enviar'])) {
                $salario = $_POST['sal'];
                $codigoCargo = $_POST['cod'];
            
                if ($codigoCargo == 10) {
                    $aumento = $salario * 0.3;
                    $novoSalario = $salario + $aumento;
                } elseif ($codigoCargo == 20) {
                    $aumento = $salario * 0.15;
                    $novoSalario = $salario + $aumento;
                } elseif ($codigoCargo == 30) {
                    $aumento = $salario * 0.1;
                    $novoSalario = $salario + $aumento;
                } elseif ($codigoCargo == 40) {
                    $aumento = $salario * 0.5;
                    $novoSalario = $salario + $aumento;
                } elseif ($codigoCargo == 50) {
                    $aumento = $salario * 0.25;
                    $novoSalario = $salario + $aumento;
                } elseif ($codigoCargo == 60) {
                    $aumento = $salario * 0.20;
                    $novoSalario = $salario + $aumento;
                } else {
                    $aumento = $salario * 0.4;
                    $novoSalario = $salario + $aumento;
                }

                echo ('<section class="echo">Salário antigo: R$ '.number_format($salario, 2, ",", ".").'<br></section>');
                echo ('<section class="echo">Novo salário: R$ ' .number_format($novoSalario, 2, ",", ".").'<br></section>');
                echo ('<section class="echo">Aumento: R$ ' .number_format($aumento, 2, ",", ".").'<br></section>');
            }
        ?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>