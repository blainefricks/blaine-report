$(document).ready(function(){
  $('.menuIcon').click(function(){
    if($('html').hasClass('menu-active ovf-hidden')){
      $('html').removeClass('menu-active ovf-hidden');
    }
    else{
      $('html').addClass('menu-active ovf-hidden');
    }
  });
 $(window).scroll(function() {
   var $menu = $(".tablet-nav");
   var $features = $('.main-content');
   var window_offset = $features.offset().top - $(window).scrollTop();
   if (window_offset < $menu.height()) {
     $menu.addClass('show');
   }
   if (window_offset > $menu.height()) {
     $menu.removeClass('show');
   }
 });
})