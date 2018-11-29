<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
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
var_dump($_SESSION["perguntas"]);

if (is_null($_SESSION["perguntas"])){
	$_SESSION["perguntas"]=["1", "2", "3","4", "5", "6","7", "8", "9"];
} else if (count($_SESSION["perguntas"]) == 0) {
	echo '<script type="text/javascript">alert("PROVA CONCLUIDA");</script>';
	$_SESSION["perguntas"]=["1", "2", "3","4", "5", "6","7", "8", "9"];

}

$numero=rand(1,9) ;

if (($key = array_search($numero, $_SESSION["perguntas"])) !== false) {
    unset($_SESSION["perguntas"][$key]);
} else if ( count($_SESSION["perguntas"]) !== 0 ) {
	$variable = $_SESSION["perguntas"];
	$numero = array_pop(array_reverse($variable));
	$remove = array_search($numero, $_SESSION["perguntas"]);
	unset($_SESSION["perguntas"][$remove]);
}


$sql = "SELECT pergunta,respostacerta,erradaa,erradab,erradac,erradad FROM questoes where id=" . $numero;


$result = $conn->query($sql);
$conn->close();
?>

<head>
	<meta charset="utf-8">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 

 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>	
  
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
		
 <div class="alert alert-warning" style="display:none;">
 <strong>Warning!</strong> Selecione uma das repostas para continuar
 </div>
 
 
		<div class="alert alert-success" style="display:none;">
			<strong>Resposta Certa!</strong>
		</div>
		
		
		<div class="alert alert-danger" style="display:none;">
		<strong>Errou!</strong> </br>
			<img src="images/fausto.png" width=300 length=300 />
		</div>
		
<form>
	<?php 

		
	
			if ($result->num_rows > 0) {
				$numero=rand(1,5);
					while ($row = $result->fetch_assoc()) {
						echo nl2br(utf8_encode($row["pergunta"]));	
						echo "";
						$numero = 1;
						 if($numero==1){
							echo '<br/>';
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradab'])).'">'.nl2br(utf8_encode($row['erradab']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradaa'])).'">'.nl2br(utf8_encode($row['erradaa']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradac'])).'">'.nl2br(utf8_encode($row['erradac']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradad'])).'">'.nl2br(utf8_encode($row['erradad']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['respostacerta'])).'">'.nl2br(utf8_encode($row['respostacerta']));
							echo'</br>';
						 }
						 if($numero==2){
							echo '<br/>';
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradab'])).'">'.nl2br(utf8_encode($row['erradab']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradaa'])).'">'.nl2br(utf8_encode($row['erradaa']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradac'])).'">'.nl2br(utf8_encode($row['erradac']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['respostacerta'])).'">'.nl2br(utf8_encode($row['respostacerta']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradad'])).'">'.nl2br(utf8_encode($row['erradad']));
							echo'</br>';
						 }
						 if($numero==3){
							echo '<br/>';
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradab'])).'">'.nl2br(utf8_encode($row['erradab']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradaa'])).'">'.nl2br(utf8_encode($row['erradaa']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['respostacerta'])).'">'.nl2br(utf8_encode($row['respostacerta']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradad'])).'">'.nl2br(utf8_encode($row['erradad']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradac'])).'">'.nl2br(utf8_encode($row['erradac']));
							echo'</br>';

							
						 }
						  if($numero==4){
							echo '<br/>';
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradab'])).'">'.nl2br(utf8_encode($row['erradab']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['respostacerta'])).'">'.nl2br(utf8_encode($row['respostacerta']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradac'])).'">'.nl2br(utf8_encode($row['erradac']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradad'])).'">'.nl2br(utf8_encode($row['erradad']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradaa'])).'">'.nl2br(utf8_encode($row['erradaa']));
							echo'</br>';

						 }
						 if($numero==5){
							echo '<br/>';
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['respostacerta'])).'">'.nl2br(utf8_encode($row['respostacerta']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradaa'])).'">'.nl2br(utf8_encode($row['erradaa']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradac'])).'">'.nl2br(utf8_encode($row['erradac']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradad'])).'">'.nl2br(utf8_encode($row['erradad']));
							echo '</br><input type="radio" name="RESPOSTA" value="'.nl2br(utf8_encode($row['erradab'])).'">'.nl2br(utf8_encode($row['erradab']));
							echo'</br>';
						 }
					
			
			echo '<input type="Button" id="Confirmar" value="Confirmar" >'.'</br>';
			echo '<input type="submit" value="Proxima " >'.'</br>';
			$resposta = "";
			if (isset($_POST['RESPOSTA'])){
				$resposta = $_POST['RESPOSTA'];
			}
			$respCerta = $row['respostacerta'];
			echo '<input type="hidden" id="respCerta" value="'. (string)$respCerta .'" >'.'</br>';
			
			}
									# code...
			}
			
 ?>
	</body>
	<script>
	jQuery("#Confirmar").click(function(){
		
		$(".alert-warning").css("display", "none");
		$(".alert-success").css("display", "none");
		$(".alert-danger").css("display", "none");
		
		var escolha = $('input[name=RESPOSTA]:checked').val();
		var respCerta = jQuery("#respCerta").val();
		
	if (escolha==undefined){
		$(".alert-warning").css("display", "block");
	}
	else if (escolha == $("#respCerta").val() ){
		$(".alert-success").css("display", "block");
		jQuery("input:radio").attr('disabled',true);
	}
	else{
		$(".alert-danger").css("display", "block");
		jQuery("input:radio").attr('disabled',true);
	}
	
	});
	</script>
	
</html>


