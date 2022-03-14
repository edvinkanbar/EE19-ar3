<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$number = filter_input(INPUT_GET, 'num', FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Flash Cards</title>
    <link rel="stylesheet" href="css/main.min.css">
</head>
<body>
    <?php include("header.php"); ?>
    <?php
    if ($number) {
        include("results.php");
    } else {
        include("form.php");
    }
    ?>
    <?php include("footer.php"); ?>
</body>
</html>