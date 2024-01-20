<?php
session_start();
?>
<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$pw = $_POST['pw'];


// Prepare and execute an SQL INSERT statement
$sql = "INSERT INTO login (name, email, pw) VALUES ('$name', '$email', '$pw')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Registered Successfully! ');

  window.location = 'userlogin.php';

</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
