function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

(function ($) {
    // Instantiate MixItUp:


    // Add smooth scrolling to all links in navbar + footer link
    $(".link").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 900, function(){
            window.location.hash = hash;
        });
    });
    $('#Container2').mixItUp();
    
})(jQuery);

$(function () {

    $('#Container2').mixItUp();
});