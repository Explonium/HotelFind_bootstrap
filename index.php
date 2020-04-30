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
<div class="mx-auto mt-2" style="width: 97%">
    <h2 class="text-dark">Atpūties vislabākajās viesnīcās pasaulē</h2>
    <p>Mēs pedāvājam vislielāko izvēli pasaulē starp viesnīcām un vietām, kur jūs varat ceļot!</p>
    <div class="my-2" style="height: 600px; width: 100%">
        <?php require_once ("block/carousel.php");
        carousel("galleries/main-gallery");?>
    </div>
    <h2 class="text-dark">Reģistrējies tagad un saņem balvu</h2>
    <p>Jebkurš lietotājs, kurš reģistrēsies līdz šitās nedēļas beigām saņems kuponu ar 5% atlaidi! Tā kupona termiņš beigsies
    pēc trīsdesmit dienām pēc lietotāja reģistrācijai. Kuponu var izmantot tikai vienu reizi uz jebkuru ceļojumu!</p>
</div>
</body>
</html>