<?php

$user = $_POST['username'];
$pass = $_POST['password'];

$koneksi = mysqli_connect("localhost", "root", "", "form_login");
$query = "INSERT INTO form (username, password ) VALUES ('$user','$pass')";
mysqli_query($koneksi, $query);

header("Location: form.php");