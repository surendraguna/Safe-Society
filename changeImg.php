<?php
session_start();
require_once 'db_connection.php';

if (isset($_POST['submit'])) {
    $id = $_SESSION['user_id'];
    
    // Check if file was uploaded without errors
    if(isset($_FILES['upload']) && $_FILES['upload']['error'] === 0) {
        $file = $_FILES['upload']['tmp_name']; // Get the temporary filename
        $imageContent = file_get_contents($file);
        $imageContent = base64_encode($imageContent);

        $sql = "UPDATE user SET photo = '$imageContent' WHERE id = '$id'";
        mysqli_query($conn, $sql);
    }
    header("Location: user.php");    
    exit();
}   
?>
