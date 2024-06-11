<!DOCTYPE html>
<html>
<head>
    <title>Live Database View</title>
</head>
<body>
    <h1>Live Database View</h1>
    <?php
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cardgame";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch data from the database
    $sql = "SELECT * FROM cards";
    $result = $conn->query($sql);

    // Display data in a table
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Attack</th><th>Defense</th><th>Heal</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["description"]."</td>";
            echo "<td>".$row["attack"]."</td>";
            echo "<td>".$row["defense"]."</td>";
            echo "<td>".$row["heal"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    // Close connection
    $conn->close();
    ?>
</body>
</html>
