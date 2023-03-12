<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/">
		<link rel="stylesheet" href="./src/css/style.css">
	</head>
    <body>
		<?php
            include_once ('header.html');
        ?>
		<main class="container">
			<section>
				<p><h1 id="h1-system">Nossos sistemas</h1></p>
				<p id="texto_systems">
                    Bem-vindo à página "Nossos sistemas" da Entreprise Systems! Estamos orgulhosos de apresentar nossos sistemas em PHP desenvolvidos com tecnologia de ponta e com a mais alta segurança. Aqui, você pode testar nossos sistemas e ver como eles podem ajudá-lo a alcançar seus objetivos de negócios. Temos soluções diversificadas para atender a diferentes necessidades e setores. Clique nos links abaixo para experimentar nossos sistemas e descobrir como eles podem ser úteis para o seu negócio. Aproveite e experimente agora!
				</p>
                <nav>
                    <p class="espacamento">
                        1. <a href="./system1.php"> Desenvolva um sistema que receba os valores para A, B, C e exibir na tela se a soma de A + B é menor que C.</a>
                    </p>   
                    <p class="espacamento"> 
                        2. <a href="./system2.php"> Desenvolva um sistema que receba o nome, o sexo e o estado civil de uma pessoa. Caso sexo seja “F” e estado civil seja “CASADA”. Exibir todos os dados, como nome, sexo e estado civil.</a>
                    </p>
                    <p class="espacamento">
                        3. <a href="./system3.php"> Desenvolva um sistema que receba receber um número qualquer e informar na tela se é par ou ímpar.</a>
                    </p>
                    <p class="espacamento">
                        4. <a href="./system4.php"> Desenvolva um sistema onde o usuário digite as medidas dos lados de um triângulo e indique se ele é equilátero, isósceles ou escaleno. Sendo que:
                        Triângulo Equilátero: possui os 3 lados iguais.
                        Triângulo Isósceles: possui 2 lados iguais.
                        Triângulo Escaleno: possui 3 lados diferentes.</a>
                    </p>
                    <p class="espacamento">
                        5. <a href="./system5.php"> Desenvolva um sistema para calcular a quantidade de litros de combustível 
                        necessária para se fazer uma viagem, sabendo-se que o carro faz 12 Km com 
                        um litro. O usuário deverá fornecer o tempo gasto na viagem e a velocidade 
                        média. utilize as seguintes fórmulas:
                        Distância = tempo x velocidade
                        Litros usados = distância / 12</a>
                    </p>
                    <p class="espacamento">
                        6. <a href="./system6.php"> Uma empresa concederá um aumento variável de salário aos seus 
                        funcionários, de acordo com o cargo, conforme a tabela abaixo. Desenvolva 
                        um sistema onde o usuário digite: o salário e o código do cargo de um 
                        funcionário e calcule o novo salário. Se o cargo do funcionário não estiver na tabela, ele deverá, então, receber 40% de aumento. Mostre o salário antigo, o novo salário e a diferença.
                        Tabela de Funcionários
                        Código Cargo Salário 
                        10 Analista Desenvolvimento R$ 60.600,00
                        20 Analista Programador R$ 45.800,00
                        30 Gerente R$ 38.500,00
                        40 Presidente R$ 150.500,00
                        50 Design R$ 6.800,00
                        60 Programador R$ 16.400,00</a>
                    </p>
                    <p class="espacamento">
                        7. <a href="./system7.php"> Desenvolva um sistema onde o usuário digite: a porcentagem de juros ao mês, o número de anos que deseja poupar, e o valor do depósito mensal. Calcular o total poupado e exibir ao usuário as informações inseridas e o valor que será poupado.</a>
                    </p>
                    <p class="espacamento">
                        8. <a href="./system8.php"> Um banco concederá um crédito especial aos seus clientes, variável com o saldo médio no último ano. Desenvolva um sistema onde o usuário digite: o nome, o saldo médio de um cliente e calcule o valor do crédito de acordo com a tabela abaixo. Mostre o resultado informando: o nome, o saldo médio e o valor do crédito.
                        Saldo médio Percentual de 0 a 200 nenhum crédito de 201 a 400 20% do valor do saldo médio de 401 a 600 30% do valor do saldo médio acima de 601 40% do valor do saldo médio</a>
                    </p>
                    <p class="espacamento">
                        9. <a href="./system9.php"> O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos (aplicados ao custo de fábrica). 
                        Supondo que a percentagem do distribuidor seja de 28% e os impostos de 
                        45%, desenvolva um sistema onde o usuário digite: o nome do carro, o modelo 
                        e o custo de fábrica de um carro, exiba o nome, o modelo e o custo ao 
                        consumidor.</a>
                    </p>
                </nav>
			</section>
		</main>
		<?php
            include_once ('footer.html');
        ?>
    </body>
</html>