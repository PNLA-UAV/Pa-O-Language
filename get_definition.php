<?php
// Replace this with your database connection logic
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$word_to_lookup = "hello"; // Replace with the word you want to look up

$sql = "SELECT definition FROM dictionary WHERE word = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $word_to_lookup);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $definition = $row["definition"];
    echo $definition;
} else {
    echo "Word not found in the dictionary.";
}

$stmt->close();
$conn->close();
?>
