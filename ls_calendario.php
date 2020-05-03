<br>
<br>
<br>
<h5>Visualizar Eventos</h5>
<br>
<br>
<br>
<?php
	$sql = "SELECT * FROM calendario";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th># Registro</th>";
		print "<th>Nome do Evento</th>";
		print "<th>Data do Evento</th>";
		print "<th>Horário do Evento</th>";
		print "<th>Local do Evento</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_evento."</td>";
			print "<td>".$row->nome_evento."</td>";
			print "<td>".$row->data_evento."</td>";
			print "<td>".$row->horario_evento."</td>";
			print "<td>".$row->local_evento."</td>";

			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=edit_calendario&id_evento=".$row->id_evento."';\">Editar</button>
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save_calendario&acao=excluir&id_evento=".$row->id_evento."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>
