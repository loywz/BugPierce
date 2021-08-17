<?php include('montagem/header.php') ?>


    <link href="css/adicionar-programa.css" rel="stylesheet">

	<div class="container">
		<div class="row">
				<h1>Adicionar Programa</h1>
		</div>
		<div class="row input-container">
		<form method='POST' action='acao/adicionar-programa-acao.php'>
				<div>
					<div>
						<input type="text" name="nome_empresa" required placeholder="Nome da empresa"/>
					</div>
				</div>
				<div>
					<div class="styled-input">
						<input type="text" name="rec_max" required placeholder="Recompensa Maxima"/>
					</div>
				</div>
				<div>
					<div class="styled-input" style="float:right;">
						<input type="text" name="rec_min" required placeholder="Recompensa Minima"/>
					</div>
				</div>
				<div>
					<div class="styled-input wide">
						<textarea name="mensagem" required placeholder="Descrição sobre o programa, regras, sistema a ser testado, ETC"></textarea>
					</div>
				</div>
				<div >
					<button class="enviar-btn">Criar Programa</button>
				</div>
		</div>
	</div>
</form>

