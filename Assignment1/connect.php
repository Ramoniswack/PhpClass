<?php
$conn = mysqli_connect("localhost", "root", "", "assignment1");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
