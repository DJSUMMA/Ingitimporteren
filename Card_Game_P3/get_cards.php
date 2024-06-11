<?php
include 'db.php';

$sql = "SELECT * FROM cards";
$result = $conn->query($sql);

$cards = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $cards[] = $row;
    }
}

echo json_encode($cards);

$conn->close();
?>
