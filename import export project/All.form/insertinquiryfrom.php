<?php
include 'config.php'; // Connecting to database

if(isset($_POST['submit'])) {
    // Fetching data from form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL query to insert into inquiries table
    $query = "INSERT INTO inquiries (name, email, subject, message) 
              VALUES ('$name', '$email', '$subject', '$message')";

    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Inquiry Sent Successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>