<?php
	switch(@$_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO pagamento (
						funcionario_id_funcionario, 
						valor_pagamento,
						data_pagamento,
						referencia_pagamento,
						tipo_pagamento,
						comprovante_pagamento) 
					VALUES (
					'".@$_REQUEST["funcionario_id_funcionario"]."',
					'".@$_REQUEST["valor_pagamento"]."',
					'".@$_REQUEST["data_pagamento"]."',
					'".@$_POST["referencia_pagamento"]."',
					'".@$_POST["tipo_pagamento"]."',
					'".@$_REQUEST["comprovante_pagamento"]."')";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE pagamento SET 
						funcionario_id_funcionario=".$_REQUEST["funcionario_id_funcionario"].",
						valor_pagamento='".@$_REQUEST["valor_pagamento"]."',
						data_pagamento='".@$_REQUEST["data_pagamento"]."',
						referencia_pagamento='".@$_POST["referencia_pagamento"]."',
						tipo_pagamento='".@$_POST["tipo_pagamento"]."',
						comprovante_pagamento='".@$_REQUEST["comprovante_pagamento"]."'				
					WHERE id_pagamento=".@$_REQUEST["id_pagamento"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM pagamento WHERE id_pagamento=".@$_REQUEST["id_pagamento"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
		
	}
?>

<br>
<br>
<p><a href="?page=ls_pagamento" style="width:100%;" class="btn btn-primary">Listar</a></p>