function getScreenDimensions() {
    var width = window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;

    var height = window.innerHeight ||
        document.documentElement.clientHeight ||
        document.body.clientHeight;

    return {width: width, height: height};
}

window.onload = function() {

    var screenDimensions = getScreenDimensions();

    if (screenDimensions.width <= 480) {
        document.getElementById('current-quote').classList.add('small-screen');
    }
};
