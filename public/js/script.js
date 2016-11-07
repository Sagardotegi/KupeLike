$(document).ready(function($) {

    $('.searchBox').on('focus', function(){
        $(this).removeClass('form-control').addClass('form-control-widen');
    });
    
    $('.searchBox').on('blur', function(){
        $(this).removeClass('form-control-widen').addClass('form-control');
    });
            
});

jQuery(document).ready(function($) {
        $('.toggle-button').click(function() {
            $('#sidebar').toggleClass('visible');
        });
    });