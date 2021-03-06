<?php

include 'databaseOperations.php';

// Are values given?
if (isset($_POST['gender'])){
    $gender = $_POST['gender'];
} else die("Gender required!");

if (isset($_POST{'user'})) {
    $username = $_POST['user'];
} else die("Username required!");

if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else die("Password required!");

if (isset($_POST['address'])) {
    $address = $_POST['address'];
}

// Is username taken?
if (doesUserExist($username)) {
    die("Username is taken");
}

// save User
saveUser($username, $password, $gender, $address);
echo ("Registration successful!");