<?php
    // include_once 'dbh.inc__Contact.php';
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "contact__us";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $EmailAddress = mysqli_real_escape_string($conn, $_POST['EmailAddress']);
    $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);

    $sql__1 = "INSERT INTO contact__us__informations (user__name, email__address, phone__number) VALUES ('$Name', '$EmailAddress', '$Phone');";

    mysqli_query($conn, $sql__1);
    
    header("Location: ../HOME.php");