// JS script for register pop up animation. 
$(document).ready(function() {
    $('.pop-up').hide();
    $('.pop-up').fadeIn(1000);
  
    //close button click functionality.
    $('.close-button').click(function (e) { 
        $('.pop-up').fadeOut(700);
        $('#overlay').removeClass('blur-in');
        $('#overlay').addClass('blur-out');
        e.stopPropagation();
    });
});