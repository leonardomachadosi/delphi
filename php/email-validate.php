<?php
include("connection.php");

$email = $_POST['email'];


$result = pg_query($conn, "SELECT * FROM UF04_EXPERT WHERE UF04_EMAIL = '$email';")
or die(error());

if (@pg_num_rows($result) == 0) {
    echo 0;
} else {
    $res = pg_fetch_assoc($result);
    echo json_encode($res);
}

