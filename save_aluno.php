<?php
	switch(@$_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO aluno (
						turma_id_turma, 
						nome_aluno,
						cpf_aluno,
						data_nasc_aluno,
						nome_responsavel,
						cpf_responsavel,
						endereco_aluno,
						telefone_aluno,
						email_aluno) 
					VALUES (
					'".@$_REQUEST["turma_id_turma"]."',
					'".@$_REQUEST["nome_aluno"]."',
					'".@$_REQUEST["cpf_aluno"]."',
					'".@$_REQUEST["data_nasc_aluno"]."',
					'".@$_REQUEST["nome_responsavel"]."',
					'".@$_REQUEST["cpf_responsavel"]."',
					'".@$_REQUEST["endereco_aluno"]."',
					'".@$_REQUEST["telefone_aluno"]."',
					'".@$_REQUEST["email_aluno"]."')";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE aluno SET 
						turma_id_turma=".$_REQUEST["turma_id_turma"].",
						nome_aluno='".@$_REQUEST["nome_aluno"]."',
						cpf_aluno='".@$_REQUEST["cpf_aluno"]."',
						data_nasc_aluno='".@$_REQUEST["data_nasc_aluno"]."',
						nome_responsavel='".@$_REQUEST["nome_responsavel"]."',
						cpf_responsavel='".@$_REQUEST["cpf_responsavel"]."',
						endereco_aluno='".@$_REQUEST["endereco_aluno"]."',
						telefone_aluno='".@$_REQUEST["telefone_aluno"]."',
						email_aluno='".@$_REQUEST["email_aluno"]."'				
					WHERE id_aluno=".@$_REQUEST["id_aluno"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM aluno WHERE id_aluno=".@$_REQUEST["id_aluno"];
			
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
<p><a href="?page=ls_aluno" style="width:100%;" class="btn btn-primary">Listar</a></p>