<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
</head>
<?php
$perg = $_GET["Pergunta"];
$resp = $_GET["respostaCerta"];

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

$sql = "SELECT * FROM questoes";
echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<head>
	<meta charset="UTF-8">
	<title>Estude para o Enade</title>
	
		<style>
		body{
			background-image: scr="\Users\Bruna\Desktop\BRUNA\sistemas.png";

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
	<img src="C:\Users\Bruna\Desktop\BRUNA\sistemas.png" height="200" width="200">

	Qual o nome do fulano:<br/>
	<br/>
	<input type="radio" name="Branco"></br>
	<input type="radio" name="Amarelo"></br>
	<input type="radio" name="Verde"></br>
</br>
	<input type="button" value="eniar">
</br>	
</body>

	



</html>



