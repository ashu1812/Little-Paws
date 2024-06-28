<?php 
session_start();    
$email = $_SESSION['email'];
//Connect DB
//Create query based on the ID passed from you table

// on success delete : redirect the page to original page using header() method
$conn = mysqli_connect('localhost:3307', 'root', '','littlepaws');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM credentials WHERE email = '$email'"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    echo "Record deleted";
    // header('Location: index.html'); 
    exit;
} else {
    echo "Error deleting record";
}

?>