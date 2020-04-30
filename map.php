<!DOCTYPE html>
<html lang="lv">
<head>
    <!-- Main settings -->
    <meta charset="UTF-8">
    <title>Hotel Find bootstrap edition</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<?php require_once("block/header.php")?>
<body>
<?php require_once ("block/carousel.php");
carousel("galleries/main-gallery");?>

</body>
</html>