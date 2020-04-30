<script src="/HotelFind/js/scroll.js"></script>
<header>
    <nav class="navbar navbar-expand-xl bg-dark border-bottom border-primary">
        <ul class="navbar-nav">
            <li class="nav-item my-1">
                <a href="index.php" class="btn btn-primary">Hotel find</a>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-lg-auto">
                <li class="nav-item my-1">
                    <div class="navbar-text text-secondary mx-2">Noderīgas saites:</div>
                </li>
                <li class="nav-item my-1">
                    <div class="btn-group">
                        <a href="gallery.php" class="btn btn-secondary">Galerija</a>
                        <a href="maps.php" class="btn btn-secondary">Kartes</a>
                        <a href="about_us.php" class="btn btn-secondary">Pār mums</a>
                        <a href="faq.php" class="btn btn-secondary">FAQ</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav">
                <form class="form-inline mr-lg-4">
                    <input id="txtbox_find" class="form-control mr-2" type="text" placeholder="Meklēt">
                    <button type="button" class="btn btn-warning" onclick="scrollToElement();">Meklēt</button>
                </form>
                <li class="nav-item my-1">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Reģistrācija</button>
                        <button type="button" class="btn btn-outline-primary">Ieeja</button>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    // Get the input field
    var input = document.getElementById("txtbox_find");

    // Execute a function when the user releases a key on the keyboard
    input.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            scrollToElement();
        }
    });

    document.addEventListener("keyup", function(event) {
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 27) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            document.getElementById("header").scrollIntoView();
        }
    });
</script>