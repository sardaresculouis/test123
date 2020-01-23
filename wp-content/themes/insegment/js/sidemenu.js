jQuery(function ($) {
    $("#simple-menu").click(function(){
        // $('#sidr').addClass('right');
        //$('#sidr').css("transition", "right 0.2s ease");
        // $('.sidemenu-bg').hasClass("inactive").removeClass('inactive').addClass('active');
        // $('.sidemenu-bg').hasClass("active").removeClass('active').addClass('inactive');
        $('#sidr').toggleClass('left right');
        $("#sidr").removeAttr("style");
        $('#sidr').css("transition", "right 0.2s ease");
        $(".sidemenu-bg").toggleClass('active inactive');
        $('#sidr').css("right", "0px");
        $("#simple-menu").toggleClass('sidemenu-toggled ');
        $(".fa").removeClass("fa-close");
    });

    $(".back-pre-nav a").text("BACK");

    $('ul li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
  
});
