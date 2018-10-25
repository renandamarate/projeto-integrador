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
$numero=rand(1,9) ;
$sql = "SELECT pergunta,respostacerta,erradaa,erradab,erradac,erradad FROM questoes where id=" . $numero;


$result = $conn->query($sql);
$conn->close();
?>

<head>
	<meta charset="utf-8">
	  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 
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
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">ENAD - Simulado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav nav-pills">
	  <li class="nav-item">
		<a class="nav-link" href="index.html">Home</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="quiz.php">Questões</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="faleconosco.html">Contato</a>
	  </li>
</ul>
          </ul>
        </div>
      </div>
		</nav>
		
		<form >
	<?php 
		if ($result->num_rows > 0) {
			$numero=rand(1,5);
				while ($row = $result->fetch_assoc()) {
					echo nl2br(utf8_encode($row["pergunta"]));	
					echo "";
					 if($numero==1){
						echo '<br/>';
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradab']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradaa']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradac']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradad']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['respostacerta']));
						echo'</br>';
						echo	'<input type="button" value="Confirmar">'.'</br>';
						
					 }
					 if($numero==2){
						echo '<br/>';
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['respostacerta']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradaa']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradac']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradad']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradab']));
						echo'</br>';
						echo	'<input type="button" value="Confirmar">'.'</br>';
						
					 }
					 if($numero==3){
						echo '<br/>';
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradac']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['respostacerta']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradaa']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradad']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradab']));
						echo'</br>';
						echo	'<input type="button" value="Confirmar">'.'</br>';
						
					 }
					  if($numero==4){
						echo '<br/>';
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradac']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradaa']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['respostacerta']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradad']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradab']));
						echo'</br>';
						echo	'<input type="button" value="Confirmar">'.'</br>';
						
					 }
					 if($numero==5){
						echo '<br/>';
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradac']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradaa']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradab']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['respostacerta']));
						echo '</br><input type="radio" name="RESPOSTA">'.nl2br(utf8_encode($row['erradad']));
						echo'</br>';
						echo	'<input type="button" value="Confirmar">'.'</br>';
						
					 }
				}			 
				# code...
			}
	
	
	

?>
	</body>
</html>


