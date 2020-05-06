//Add javascript code here
// Get the header
var header = document.getElementById("header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

window.onscroll = function() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
};
setInterval(function() {
    console.log('slider change');
    $('.carousel-control.right').trigger('click');
}, 4000);
