<br>
<br>
<h5>Listar Transações</h5>
<br>
<br>
<?php
	$sql = "SELECT u.*, b.* FROM pagamento AS u
			INNER JOIN funcionario AS b
			ON u.funcionario_id_funcionario = b.id_funcionario";
	
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th>#ID</th>";
		print "<th>Envolvido</th>";
		print "<th>Valor</th>";
		print "<th>Data</th>";
		print "<th>Referencia</th>";
		print "<th>Tipo</th>";
		print "<th>Comprovante</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_pagamento."</td>";
			print "<td>".$row->funcionario_id_funcionario."</td>";
			print "<td>".$row->valor_pagamento."</td>";
			print "<td>".$row->data_pagamento."</td>";
			print "<td>".$row->referencia_pagamento."</td>";
			print "<td>".$row->tipo_pagamento."</td>";
			print "<td>".$row->comprovante_pagamento."</td>";
			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=edit_pagamento&id_pagamento=".$row->id_pagamento."';\">Editar</button>
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save_pagamento&acao=excluir&id_pagamento=".$row->id_pagamento."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>