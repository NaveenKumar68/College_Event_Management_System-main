<?php
// Connect to the database
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "project"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch event data from database
$sql = "SELECT name,title,image FROM symbols";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Event Management System - Home</title>
<style>
/* Reset some default styles */
body, h1, h2, h3, p, ul, li {
	margin: 0;
	padding: 0;
	list-style: none;
}

body {
	font-family: Arial, sans-serif;
}

/* Header */
header {
	background-color: #2f2f2f;
	color: white;
	padding: 20px;
}

h1 {
	font-size: 30px;
    padding: 13px;
}

nav ul {

	display: flex;
    padding: 20px;
	
 border-radius: 20px;

 background-color: black
 border-radius:;

}

nav li {
	margin-right: 20px;
}

nav a {
	color: black;
	text-decoration: #00ff75;
	
}

nav a:hover {
	color: black;
	background-color: gray;
}

/* Hero Section */
.hero-image {
	background-image: url("");
	background-size: cover;
	background-position: center;
	height: 400px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding: 20px;
	color: #fff;
}

h2 {
	font-size: 36px;
	margin-bottom: 20px;
	text-align: center;
}

p {
	font-size: 18px;
	margin-bottom: 40px;
	text-align: center;
}

a {
	background-color: #fff;
	color: #2f2f2f;
	padding: 10px 20px;
	font-size: 18px;
	border-radius: 4px;
	text-decoration: none;
	transition: background-color 0.3s;
    
}

a:hover {
	background-color: #ccc;
}

/* Featured Events Section */
.featured-events {
	padding: 40px;
	background-color: #f7f7f7;
}

.featured-events h2 {
	font-size: 24px;
	margin-bottom: 20px;
	text-align: center;
}

.event-card {
	width: 100%;
	max-width: 300px;
	margin:20px;
	background-color: cadetblue;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
	margin-bottom: 20px;
	flex: 1;
	height: 350px;

}

.event-card img {
	width: 100%;
	height: 200px;
	object-fit: cover;
	border-radius: 4px;
	margin-bottom: 10px;
}

.event-card h3 {
	font-size: 18px;
	margin-bottom: 10px;
}

.event-card p {
	font-size: 14px;
	margin-bottom: 20px;
}

.event-card a {
	background-color: white;
	color: black;
	font-weight: bold;
	padding: 10px 20px;
	font-size: 14px;
	border-radius: 4px;
	text-align: center;
	text-decoration: none;
	transition: background-color 0.3s;
	display: block;
}

.event-card a:hover {
	background-color: #3f3f3f;
}

/* Upcoming Events Section */
.upcoming-events {
	padding: 40px;
	background-color: #fff;
}

.upcoming-events h2 {
	font-size: 24px;
	margin-bottom: 20px;
	text-align: center;
}

/* Footer */
footer {
	background-color: #2f2f2f;
	color: #fff;
	padding: 20px;
	text-align: center;
}
/* img1{
	float: right;
	padding: 30px;
	margin-right: 300px;
} */
.event-container{
	display:flex;
    padding: 10px;
	background-color: black
	flex-wrap: wrap;
	text-align: center;
	justify-content: center;
	align-items: center;
}
.hero-section{
	background-color: gray;
}


</style>
</head>
<body>
  <header>
   
    
    <nav>
	<h1>Welcome to College Event Management System </h1>
      <ul>
        <li><a href="index.php" class="active">Register</a></li>
        <li><a href="search.php">Search</a></li>
        <li><a href="edit.php">Edit</a></li>
        <li><a href="report.php">Report</a></li>
		

      </ul>
	  
    </nav>
	
  </header>
  <section id="hero-section">
    <h2>Discover Exciting Events in REC</h2>
    <p>Find your favorite events with REC</p>
  </section>
  <section class="featured-events">
    <h2>Featured Events</h2>
    <div class="event-container">
        <?php
        // Loop through fetched event data and display event cards
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="event-card">';
                echo '<img src="' . $row["image"] . '" alt="' . $row["name"] . '">';
                echo '<h3>' . $row["title"] . '</h3>';
                echo '<p>'. $row["name"] . '</p>';
                echo '<a href="report.php">view details</a>';
                echo '</div>';
            }
        } else {
            echo "No events found.";
        }
        ?>
    </div>
</section>
  <footer>
    <p>Email: RajalakshmiEngineeringCollege@gmail.com</p>
	<p>contact us: 14000 55522</p>
	<p>Instagram: Events_at_REC</p>
  </footer>
</body>
</html>