<?php

$email = $_POST['email'];
$button = $_POST['button'];

if ($button == "true") {
    $button = TRUE;
}else{
    $button = FALSE;
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = TRUE;
}else{
    $email = FALSE;
}

$ary = ['email' => $email, 'button' => $button];
echo json_encode($ary);