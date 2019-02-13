$(document).ready(function() {
        var owl = $('.slider_carosel');
          owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            dot: true,
            autoplay: true,
            autoplayTimeout: 500,
            autoplayHoverPause: true
          });
          $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
          })
          $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
})
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("wrapper").style.marginLeft = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("wrapper").style.marginLeft= "0";
}