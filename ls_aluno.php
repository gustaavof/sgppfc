<br>
<br>
<h5>Listar os Alunos Matriculados</h5>
<br>
<br>
<?php
	$sql = "SELECT u.*, b.* FROM aluno AS u
			INNER JOIN turma AS b
			ON u.turma_id_turma = b.id_turma";
	
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th>Matrícula</th>";
		print "<th>Turma</th>";
		print "<th>Nome</th>";
		print "<th>Nome do Responsável</th>";
		print "<th>Telefone</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_aluno."</td>";
			print "<td>".$row->id_turma."</td>";
			print "<td>".$row->nome_aluno."</td>";
			print "<td>".$row->nome_responsavel."</td>";
			print "<td>".$row->telefone_aluno."</td>";
			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=edit_aluno&id_aluno=".$row->id_aluno."';\">Editar</button>
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save_aluno&acao=excluir&id_aluno=".$row->id_aluno."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>
