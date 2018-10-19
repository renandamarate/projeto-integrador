<!DOCTYPE html>
<html lang="pt-br">
	<?php
		include_once("conexaoDb.php");
		$sql = "SELECT pergunta,respostacerta,erradaa,erradab,erradac,erradad FROM questoes";
		$result = $conn->query($sql);
		$conn->close();
	?>

	<head>
		<meta charset="utf-8">
		<title>Estude para o Enade</title>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="enade.html">Home</a></li>
				<li><a href="quiz.php">Quiz</a></li>
				<li><a href="faleconosco.html">Fale Conosco</a></li>
			</ul>
		</nav>
		<?php 
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo nl2br(utf8_encode($row["pergunta"]));	
					echo "";
				
					echo '<br/>';
					echo '</br><input type="radio" name="RESPOSTA">'.$row['erradab'];
					echo '</br><input type="radio" name="RESPOSTA">'.$row['erradaa'];
					echo '</br><input type="radio" name="RESPOSTA">'.$row['respostacerta'];
					echo'</br>';
					echo	'<input type="button" value="enviar">';
				}			 
				# code...
			}
	?>
	</body>
</html>


