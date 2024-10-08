<?php
$servername = "localhost";
$username = "root";  
$password = "";   
$dbname = "feedback_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO feedback (nombre, email, comentario) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $email, $comentario);


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

if ($stmt->execute()) {
    echo "Feedback enviado correctamente.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
