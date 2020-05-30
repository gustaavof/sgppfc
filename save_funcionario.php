<?php
	switch(@$_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO funcionario (
						nome_funcionario,
						cpf_funcionario,
						data_nasc_funcionario,
						endereco_funcionario,
						telefone_funcionario,
						email_funcionario,
						cargo_id_cargo)
					VALUES (
					'".@$_REQUEST["nome_funcionario"]."',
					'".@$_REQUEST["cpf_funcionario"]."', 
					'".@$_REQUEST["data_nasc_funcionario"]."',
					'".@$_REQUEST["endereco_funcionario"]."',
					'".@$_REQUEST["telefone_funcionario"]."',
					'".@$_REQUEST["email_funcionario"]."',
					'".@$_REQUEST["cargo_id_cargo"]."')";
					
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE funcionario SET
						nome_funcionario='".@$_REQUEST["nome_funcionario"]."',
						cpf_funcionario='".@$_REQUEST["cpf_funcionario"]."',
						data_nasc_funcionario='".@$_REQUEST["data_nasc_funcionario"]."',
						endereco_funcionario='".@$_REQUEST["endereco_funcionario"]."',
						telefone_funcionario='".@$_REQUEST["telefone_funcionario"]."',
						email_funcionario='".@$_REQUEST["email_funcionario"]."',
						cargo_id_cargo='".@$_REQUEST["cargo_id_cargo"]."'
						WHERE id_funcionario=".$_REQUEST["id_funcionario"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM funcionario WHERE id_funcionario=".@$_REQUEST["id_funcionario"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
		
	}
?>
<p><a href="?page=ls_funcionario" style="width:100%;" class="btn btn-primary">Listar</a></p>
