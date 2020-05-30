<br>
<br>
<br>
<h5>Visualizar Funcionários</h5>
<br>
<br>
<br>
<?php
	$sql = "SELECT u.*, b.* FROM funcionario AS u
			INNER JOIN cargo AS b
			ON u.cargo_id_cargo = b.id_cargo";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th># Registro</th>";
		print "<th>Nome do Funcionário</th>";
		print "<th>Cargo</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_funcionario."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->nome_cargo."</td>";

			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=edit_funcionario&id_funcionario=".$row->id_funcionario."';\">Editar</button>
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save_funcionario&acao=excluir&id_funcionario=".$row->id_funcionario."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>









