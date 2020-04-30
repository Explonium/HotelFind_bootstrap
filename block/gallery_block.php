<link rel="stylesheet" type="text/css" href="css/gallery.css">
<script src="js/gallery.js"></script>
<?php
function echo_gallery_block($directory){
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    $i = 1;

    echo "<!-- Images used to open the lightbox -->
    <div class='d-flex bg-dark flex-wrap'>";

    foreach ($scanned_directory as $name){
        echo "  <div class='column' style='height: 25vh; max-width: 80vh'>
                    <img src='".$directory.'/'.$name."' onclick='openModal(\"$directory\");currentSlide($i)' class='hover-shadow' style='cursor: pointer'>
                </div>";
        $i += 1;
    }

    echo "
    </div>

    <!-- The Modal/Lightbox -->
    <div id='myModal $directory' class='modal'>
        <span class='close cursor' onclick='closeModal()'>&times;</span>
        <div class='modal-content'>

            <!-- Caption text -->
    
            <div class='caption-container'>
                <h2 id='caption $directory' style='float: none'></h2>
            </div>";
    $i = 1;
    foreach ($scanned_directory as $name){
        echo "  <div class='mySlides $directory'>
                <div class='numbertext'>$i / ".count($scanned_directory)."</div>
                <img src='".$directory.'/'.$name."' style='width:100%; float: none; border-radius: 3px'>
                
</img>
            </div>";
        $i += 1;
    }

     echo "<!-- Next/previous controls -->
            <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
            <a class='next' onclick='plusSlides(1)'>&#10095;</a>

            <!-- Thumbnail image controls -->
            <div class='flex' style='background-color: #252525; margin-top: 4px; border-radius: 3px; float: none'>";

    $i = 1;
    foreach ($scanned_directory as $name){
        echo "  <div class='column' style='width: 25vh; max-height: 25vh'>
                    <img class='demo $directory' src='".$directory.'/'.$name."' onclick='currentSlide($i)' alt='$name' style='cursor: pointer'>
                </div>";
        $i += 1;
    }

    echo "</div>
        </div>
        <div class='row' style='height: 5em; background-color: #252525; float: bottom'></div>
    </div>";

    unset ($name);
}
