
<?php
require 'header.php';
require_once('funcao.php');
$res = $database->Consulta_Alunos();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>#</th>
				<th>Nome Completo</th>
				<th>RA</th>
				<th>Idade</th>
                <th>Opçao</th>
			</tr>
			<?php 
			while($r = mysqli_fetch_assoc($res)){
			?>
			<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['nome'] . " " . $r['sobrenome']; ?></td>
				<td><?php echo $r['ra']; ?></td>
				<td><?php echo $r['idade']; ?></td>
				<td><a href="atualizar.php?id=<?php echo $r['id']; ?>">Edit</a> <a href="deletar.php?id=<?php echo $r['id']; ?>">Delete</a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
	<?php
		include_once('footer.php');
	?>
</body>
</html>