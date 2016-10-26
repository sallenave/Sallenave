
 <?php
include("inc/conexao.php");

 class Operacao {
	
	
	
	function Inserir($matricula, $nome, $endereco, $cidade, $curso) {


		$mysql = new conexao();
		
		$insere = $mysql->sql_query("INSERT into alunos(n_matricula, nome, endereco, cidade, curso, $mysql->link) values ($matricula, $nome, $endereco, $cidade, $curso)",$mysql->link);
		


	}
	
	


			function Atualiza($matricula, $nome, $endereco, $cidade, $curso)  {

				$mysql = new conexao();

				$atualizaCasos = $mysql->sql_query("UPDATE alunos SET n_matricula = $matricula, nome = $nome, endereco = $endereco, cidade = $cidade, curso = $curso where matricula = $matricula", $mysql->link);

			
			}
			
			function Excluir($matricula) {

				$mysql = new conexao();
				$excluiCaso = $mysql->sql_query("DELETE FROM `alunos` WHERE `n_matricula` ='$matricula'",$mysql->link);


			}

	        function Pesquisa($matricula)  {
		
				$mysql = new conexao();
		
				$listaMatricula = $mysql->sql_query("SELECT * FROM `alunos` WHERE `n_matricula`='$matricula'",$mysql->link);
		
				return $listaMatricula;
	}
			

			function Pesquisa_All()  {

				
		
				$mysql = new conexao();
		
				$lista_All = $mysql->sql_query("SELECT * FROM `alunos`",$mysql->link);

				return $lista_All;
	}



}
?>