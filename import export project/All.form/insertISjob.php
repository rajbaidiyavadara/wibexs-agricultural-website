<?php
include 'config.php';

if (isset($_POST['submit'])) {
    // Security ke liye data ko sanitize kiya
    $fn = mysqli_real_escape_string($conn, $_POST['first_name']);
    $ln = mysqli_real_escape_string($conn, $_POST['last_name']);
    $em = mysqli_real_escape_string($conn, $_POST['email']);
    $num = mysqli_real_escape_string($conn, $_POST['number']);
    $add = mysqli_real_escape_string($conn, $_POST['address']);
    $ci = mysqli_real_escape_string($conn, $_POST['city']);
    $pin = mysqli_real_escape_string($conn, $_POST['pincode']);
    $da = mysqli_real_escape_string($conn, $_POST['date']);
    $up = mysqli_real_escape_string($conn, $_POST['upload']);

    // Query: Table name wahi rakha hai jo aapne code mein diya tha
    $sql = "INSERT INTO ISjob(Firstname, Lastname, Email, Number, Address, City, Pincode, Date, CV) 
            VALUES ('$fn', '$ln', '$em', '$num', '$add', '$ci', '$pin', '$da', '$up')";

    $result = mysqli_query($conn, $sql);

    if ($result == TRUE) {
        echo "<script>alert('International Service Registration Successful');</script>";
        echo "<script>window.location.href='../index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>