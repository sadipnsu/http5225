<?php

$connect = mysqli_connect( 
    "localhost",// "sql311.infinityfree.com", // Host
    "root", // "if0_35758259", // Username
    "root",// "BliNLXZCqnE", // Password
    "petstore"// "if0_35758259_http5225" // Database
);

mysqli_set_charset( $connect, 'UTF8' );