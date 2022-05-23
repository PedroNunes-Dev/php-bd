<?php
### CONEXAO via PDO ###
$servername = "127.0.0.1";
$username = "root";
$password = "Pedro@2022";
$dbname = "db_sabon";

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // habilitar a geração erro
} catch(PDOException $e) {
  echo "A conexão com o banco de dados falhou " . $e->getMessage();
}

?>