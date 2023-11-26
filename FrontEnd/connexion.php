 <?php

$servername = "localhost";
$database = "dataware1";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





// Close connection
// mysqli_close($conn);


// $servername = "localhost";
// $database = "dataware1";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }



?>