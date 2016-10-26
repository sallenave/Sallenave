
<?php
// Abaixo chamaremos através do include a classe que conecta ao banco de dados MySQL.
include("inc/conexao.php");
require_once("config.php");


?>
	
<?php include(HEADER_TEMPLATE); ?>
<?php $db = new conexao(); ?>

<h1>Exercício SEMI-PRESENCIAL</h1>
<hr />

<?php if ($db) : ?>

<div class="row">

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="alunos" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Mostrar Alunos</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>