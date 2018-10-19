<!DOCTYPE html>
<html lang="pt-br">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetoenad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT pergunta,respostacerta,erradaa,erradab,erradac,erradad FROM questoes";


$result = $conn->query($sql);
$conn->close();
?>

<head>
	<meta charset="utf-8">
	<title>Estude para o Enade</title>
	
		<style>
		body{  
		
		}
		h1{
			font-family: arial;
			font-size: 20pt;
			color: blue;
			text-shadow: 2px 2px 2px black;

		}
		h2{
			font-family: cursive;
			font-size: 15pt;
			color: black;
			text-shadow: 1px 1px 1px blue;

		}
	</style>
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


