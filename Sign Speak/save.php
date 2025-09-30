<?php
include "db_config.php";
$text = $_POST['text'] ?? '';
$sql = "INSERT INTO history (gesture_text) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $text);
$stmt->execute();
?>
