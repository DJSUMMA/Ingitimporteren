<?php
include 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];
$attack = $_POST['attack'];
$defense = $_POST['defense'];
$heal = $_POST['heal'];

$sql = "INSERT INTO cards (name, description, attack, defense, heal) VALUES ('$name', '$description', $attack, $defense, $heal)";

if ($conn->query($sql) === TRUE) {
    echo "New card created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
