<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/">
		<link rel="stylesheet" href="./estilo.php">
        <title>Sistema de nome, gênero e estado civil | Entreprise Systems</title>
	</head>
    <body>
        <section id="form">
            <form name="formulario" action="#" method="POST" autocomplete="off">
                <fieldset>
                    <legend style="font-family: Glacial; color: #36d698;">Nome, gênero e estado civil</legend>
                    <label>Digite o que é solicitado:</label><br><br>
                    <label>Digite seu nome: </label><input type="text" name="name" min="1" required><br><br>

                    <label for="gender">Selecione o seu gênero:</label>
                    <section>
                        <input type="radio" id="feminino" name="genero" value="feminino" required>
                        <label for="feminino">Feminino</label>
                    </section>
                    <section>
                        <input type="radio" id="masculino" name="genero" value="masculino">
                        <label for="masculino">Masculino</label>
                    </section>
                    <section>
                        <input type="radio" id="outro" name="genero" value="outro">
                        <label for="outro">Outro</label>
                    </section><br>

                    <label for="estadoCivil">Estado Civil:</label>
                    <select id="estadoCivil" name="estadoCivil" required>
                        <option value="">Selecione uma opção</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                    </select><br><br>
                    <input id="Enviar" type="submit" name="Enviar" value="Enviar">
                </fieldset>
            </form>
        </section>

        <?php
            if (isset($_POST['Enviar'])){
            $nome = $_POST['name'];
            $genero = $_POST['genero'];
            $estadoCivil = $_POST['estadoCivil'];

                if($genero == 'feminino' && $estadoCivil == 'casado') {
                    echo ('<section class="echo">Nome digitado: '.$nome.'</section>');
                    echo ('<section class="echo">Gênero selecionado: "Feminino"</section>');
                    echo ('<section class="echo">Estado civil selecionado: "Casado(a)"</section>');
                } else {
                    echo ('<section class="echo">Você não se encaixa no que foi requerido.</section>');
                }
            }
		?>
        <nav>
	        <a id="voltar" href="./systems.php">Voltar</a>
        </nav>
    </body>
</html>