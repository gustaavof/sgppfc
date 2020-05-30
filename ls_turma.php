<br>
<br>
<h5>Listar Turma</h5>
<br>
<br>
<?php
	$sql = "SELECT u.*, b.* FROM turma AS u
			INNER JOIN funcionario AS b
			ON u.funcionario_id_funcionario = b.id_funcionario";
	
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th>#ID</th>";
		print "<th>Professor</th>";
		print "<th>Código</th>";
		print "<th>Dias de Aula</th>";
		print "<th>Horário da Aula</th>";
		print "<th>Categoria</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_turma."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->codigo_turma."</td>";
			print "<td>".$row->dias."</td>";
			print "<td>".$row->horario."</td>";
			print "<td>".$row->categoria."</td>";
			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=edit_turma&id_turma=".$row->id_turma."';\">Editar</button>
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save_turma&acao=excluir&id_turma=".$row->id_turma."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>









