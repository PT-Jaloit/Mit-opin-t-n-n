<?php

require_once("mysqlConnection.php");

$sql = "INSERT INTO Oivallus (paiva, oivallus) VALUES ('" . date("d.m.Y") . "', '" . mysqli_real_escape_string($conn, $_GET['lisaa_uusi_oivallus']) . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
