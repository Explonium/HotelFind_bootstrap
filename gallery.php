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
<?php require_once("block/gallery_block.php")?>
<body>
<h2 class="text-dark mt2">Galerija</h2>
<p>Šeit ir skaistas fotogrāfijas no ārzemes, lai ieraudzītu to skaistumu, neizejot no mājas! Tās arī var jums palīdzēt ar izvēli,
uz kurieni braukt atpūsties!</p>

<div id="ķīna" class="mt-5">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="navbar-text">
                    Ķīna
                </span>
            </li>
        </ul>
    </nav>

    <p class="mt-1">Tourism in China is a growing industry that is becoming a significant part of the Chinese economy. The rate of tourism
        has greatly expanded over the last few decades since the beginning of reform and opening-up. The emergence of a newly rich
        middle class and an easing of restrictions on movement by the Chinese authorities are both fueling this travel boom. China has
        become one of the world's most-watched and hottest inbound and outbound tourist markets. According to Xinhuanet, the world is
        on the cusp of a sustained Chinese tourism boom.</p>

    <?php echo_gallery_block("image/china"); ?>
</div>

<div id="japāna" class="mt-5">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="navbar-text">
                    Japāna
                </span>
            </li>
        </ul>
    </nav>

    <p class="mt-1">Japan attracted 31.19 million international tourists in 2018. Japan has 21 World Heritage Sites, including Himeji Castle,
        Historic Monuments of Ancient Kyoto and Nara. Popular foreigner attractions include Tokyo and Hiroshima, Mount Fuji,
        ski resorts such as Niseko in Hokkaido, Okinawa, riding the shinkansen and taking advantage of Japan's hotel and hotspring
        network.</p>

    <p class="mt-1">The 2017 Travel and Tourism Competitiveness Report ranked Japan 4th out of 141 countries overall, which was the highest
        in Asia. Japan gained relatively high scores in almost all of the featured aspects, such as health and hygiene, safety
        and security, and cultural resources and business travel. According to Google’s Year in Search 2019, Japan was the
        second highest search term of the travel category, behind the Maldives.</p>

    <?php echo_gallery_block("image/japan"); ?>
</div>

<div id="krievija" class="mt-5">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <span class="navbar-text">
                    Krievija
                </span>
            </li>
        </ul>
    </nav>

    <p class="mt-1">Tourism in Russia has seen rapid growth since the late Soviet times, first domestic tourism and then international tourism as well.
        Rich cultural heritage and great natural variety place Russia among the most popular tourist destinations in the world.
        Not including Crimea, the country contains 23 UNESCO World Heritage Sites, while many more are on UNESCO's tentative lists.</p>
    <p class="mt-1">Major tourist routes in Russia include a travel around the Golden Ring of ancient cities, cruises on the big rivers
        including the Volga, and long journeys on the famous Trans-Siberian Railway. Diverse regions and ethnic cultures of Russia
        offer many different foods and souvenirs, and show a great variety of traditions, including Russian Maslenitsa, Tatar Sabantuy,
        or Siberian shamanist rituals. In 2013, Russia was visited by 33 million tourists, making it the ninth-most visited country in
        the world and the seventh-most visited in Europe.</p>

    <?php echo_gallery_block("image/russia"); ?>
</div>

</body>
</html>