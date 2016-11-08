$(document).ready(function($) {

    $('.searchBox').on('focus', function(){
        $(this).removeClass('form-control').addClass('form-control-widen');
    });
    
    $('.searchBox').on('blur', function(){
        $(this).removeClass('form-control-widen').addClass('form-control');
    });
            
});

$(document).ready(function($) {
        $('.toggle-button').click(function() {
            $('.menu').addClass('visible-menu');
        });
        
        $('.close-menu').click(function() {
            $('.menu').removeClass('visible-menu');
        });
    });
    
$(document).ready(function(){
  $('.parallax').parallax();
});