
<?php
// include a classe que conecta ao banco de dados MySQL e operações.
include("../operacao.php");
require_once("../config.php");
global $lista;

// Pesquisa todos registros e adiciona na tblea através do while mais abaixo
$mysql = new operacao();
$lista = $mysql->Pesquisa_All();

?>
	
<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Alunos</h2>
		</div>
	</div>
</header>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>Matrícula</th>
		<th width="30%">Nome</th>
		<th width="30%">Endereço</th>
		<th>Cidade</th>
		<th>Curso</th>
	</tr>
</thead>
<tbody>



<?php if ($lista) : ?>
<?php while($dados = mysqli_fetch_object($lista)) : ?>
	<tr>
		<td><?php echo $dados->n_matricula; ?></td>
		<td><?php echo $dados->nome; ?></td>
		<td><?php echo $dados->endereco; ?></td>
		<td><?php echo $dados->cidade; ?></td>
		<td><?php echo $dados->curso; ?></td>	
	</tr>
<?php endwhile; ?> 

<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>

</tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>