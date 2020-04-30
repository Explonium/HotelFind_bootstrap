<?php
function getLines($file)
{
    $f = fopen($file, 'rb');
    $lines = 0;

    while (!feof($f)) {
        $lines += substr_count(fread($f, 8192), "\n");
    }

    fclose($f);

    return $lines;
}

function carousel($directory){

    $handle = fopen($directory, "r");
    $lines = getLines($directory);
    $line = fgets($handle);
    $words = explode(';', $line);
    $id = $words[0];
    $class = $words[1];
    $indicators = $words[2];
    $arrows = $words[3];

    echo '<div id="'.$id.'" class="carousel'.$class.'" data-ride="carousel">';
    if ($indicators == 'true'){
        echo '<ul class="carousel-indicators">';
        for ($i = 0; $i < $lines; $i++){
            if ($i == 0) {
                $active = 'class="active"';
            } else {
                $active = '';
            }
            echo '<li data-target="#'.$id.'" data-slide-to="'.$i.'" '.$active.'></li>';
        }
    echo '</ul>';
    }

    $active = ' active';
    echo '<div class="carousel-inner h-100 w-100">';
    while (($line = fgets($handle)) !== false) {
        $words=explode(';', $line);
        echo '<div class="carousel-item h-100 w-100'.$active.'">
            <img src="'.$words[0].'" class="w-100 h-100" style="object-fit: cover" alt="'.$words[1].'">
            <div class="carousel-caption">
                <h1>'.$words[2].'</h1>
                <p>'.$words[3].'</p>
            </div>
        </div>';
        $active = '';
    }
    echo '</div>';

    if ($indicators == 'true'){
        echo '<a class="carousel-control-prev" href="#'.$id.'" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#'.$id.'" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>';
    }
    echo '</div>';

    fclose($handle);
}