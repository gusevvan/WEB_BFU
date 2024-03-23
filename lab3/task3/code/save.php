<?php

function redirectToHome(): void {
    header('Location: /');

    exit();
}


if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$filePath = "./categories/{$category}/{$email}";
if (false === mkdir($filePath)) {
    throw new Exception('Something went wrong.');
}

if (false === file_put_contents("{$filePath}/{$title}.txt", $description)) {
    throw new Exception('Something went wrong.');
}
redirectToHome();


