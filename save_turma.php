<?php
	switch(@$_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO turma (
						funcionario_id_funcionario, 
						codigo_turma,
						dias,
						horario,
						categoria) 
					VALUES (
					'".@$_REQUEST["funcionario_id_funcionario"]."',
					'".@$_REQUEST["codigo_turma"]."',
					'".@$_REQUEST["dias"]."',
					'".@$_REQUEST["horario"]."',
					'".@$_REQUEST["categoria"]."')";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE turma SET 
						funcionario_id_funcionario=".$_REQUEST["funcionario_id_funcionario"].",
						codigo_turma='".@$_REQUEST["codigo_turma"]."',
						dias='".@$_REQUEST["dias"]."',
						horario='".@$_REQUEST["horario"]."',
						categoria='".@$_REQUEST["categoria"]."'				
					WHERE id_turma=".@$_REQUEST["id_turma"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM turma WHERE id_turma=".@$_REQUEST["id_turma"];
			
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
<p><a href="?page=ls_turma" style="width:100%;" class="btn btn-primary">Listar</a></p>