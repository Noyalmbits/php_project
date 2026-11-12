<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "sample_db"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully!";

?>