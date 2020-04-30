function scrollToElement(){
    var el_name = document.getElementById("txtbox_find").value.toLowerCase();
    document.getElementById(el_name).scrollIntoView();
}