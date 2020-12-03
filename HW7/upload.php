<?php

include('../../../creds.php');

$host = '127.0.0.1';
$db = 'zhatris';
$user = 'zhatris';
$pass = MYSQLPASS;
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt =
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

$pdo = new PDO($dsn, $user, $pass, $opt);


//UPLOAD BLOCK//

$td = "./CIS-222/homework7/uploads/";
$tf = $td . basename($_FILES["fileToUpload"]["name"]);
$up = 1;
$ift = strtolower(pathinfo($tf, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $up = 1;
    } else {
        echo "File is not an image.";
        $up = 0;
    }
}

// Check if file exists
if (file_exists($tf)) {
    echo "Sorry, file already exists.";
    $up = 0;
}

// It checks the file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $up = 0;
}

// Check if $up is set to 0 by an error
if ($up == 0) {
    echo "Sorry, your file was not uploaded.";
// If everything is good try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $tf)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


//END UPLOAD BLOCK//

//SAVE IMAGE UPLOADED TO DB//

$qry = "INSERT INTO `Image`
        (ImageURL)
        VALUES (" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . ");";
$r = $pdo->query($qry);