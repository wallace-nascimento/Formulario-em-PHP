<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Central de Atendimento</title>
	<link rel="stylesheet" href="css/estilo.css">
	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="logo">
				<span>LOGO</span>
			</div>
			<div class="icon-menu">
				<img src="img/menu.png" alt="">
			</div>
			<div class="menu">
				<ul>
					<li><a href="somos.php">Quem somos</a></li>
					<li><a href="#">Assessor de Investimento</a></li>
					<li id="li"><a href="#">Renda Fixa</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div class="clear"></div>

	<main class="main">
		<div class="bg">
			<div class="bg_texto">
				<h3>
					Assessoria de Investimento,<br> especializada em reda fixa.
				</h3>
			</div>
		</div>
	</main>


	<div class="section-form">

		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<div class="section-text">
			<h1>Central de Atendimento</h1>
			<p>Preencha os campos abaixo, para que um de nossos assessores entre em contato. <br>
				<strong>Atendimento Gratuito.</strong>
			</p>
		</div>

		<form method="POST" action="processa.php" class="form">


			<p>Nome:</p>
			<input type="text" name="nome" placeholder="Digite o nome completo" required="required" class="input"><br><br>


			<p>E-mail:</p>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" required="required" class="input"><br><br>

			<p>Telefone:</p>
			<input type="tel" name="tel" placeholder="Digite o seu telefone" required="required" class="input">
		
			<div class="option-estado">
				<p>Estado</p>
				<select name="estado" id="estado" required="required">
					<option selected disabled value="" id="selecione">Selecione</option>
					<option value="">Acre - AC</option>
					<option value="">Alagoas - AL</option>
					<option value="">Amapá - AP</option>
					<option value="">Amazonas - AM</option>
					<option value="">Bahia - BA</option>
					<option value="">Ceará - CE</option>
					<option value="">Distrito Federal - DF</option>
					<option value="">Espírito Santo - ES</option>
					<option value="">Goiás - GO</option>
					<option value=""> Maranhão - MA</option>
					<option value="">Mato Grosso - MT</option>
					<option value="">Mato Grosso do Sul - MS</option>
					<option value="">Minas Gerais - MG</option>
					<option value="">Pará - PA</option>
					<option value="">Paraíba - PB</option>
					<option value="">Paraná - PR</option>
					<option value="">Pernambuco - PE</option>
					<option value="">Piauí - PI</option>
					<option value="">Roraima - RR</option>
					<option value="">Rondônia - RO</option>
					<option value="">Rio de Janeiro - RJ</option>
					<option value="">Rio Grande do Norte - RN</option>
					<option value="">Rio Grande do Sul - RS</option>
					<option value="">Santa Catarina - SC</option>
					<option value="">São Paulo - SP</option>
					<option value="">Sergipe - SE</option>
					<option value="">Tocantins - TO</option>
				</select>
			</div>

			<p>Município</p>
			<input type="text" name="municipio" placeholder="Digite seu Município" required="required" class="input">

			<input type="submit" value="Cadastrar">

		</form>

	</div>

	<footer>
		<div class="footer-text">
			<p>Av. Lorem ipsum, 0, 000, Centro, Rio de Janeiro - RJ • CNPJ: 00.000.000.0000-00</p>
		</div>
	</footer>
	<script src="js/script.js"></script>
</body>
</html>