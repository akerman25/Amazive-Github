<?php
$servername = "localhost";
$username = "root";
$password = "flipper3931";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<?php

//Create Variables
$image=$_FILES['fileToUpload']["name"];
$magazine_header=$_POST['magazine_header'];
$content=$_POST['content'];
$magazine=$_POST['magazine'];
$author=$_POST['author'];


$sql = "INSERT INTO articles (magazine_header, image, content, author, magazine)
VALUES ('$magazine_header', '$image', '$content', '$author', '$magazine')";

if ($conn->query($sql) === TRUE) {
    echo '<div id="message"><h1>Your article was published succesfully.</h1></br>
    <a style="text-decoration: none;" href="index.php"><div class="buttom">Back</div></a>
    </div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
