window.onload = function() {
    setTimeout(function() {
        var elements = document.getElementsByClassName("loader");
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.display = "none";
        }
    }, 1000);
}