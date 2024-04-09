<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'petstore');
if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
}
/* else {
    echo "Connected successfully";
} */
