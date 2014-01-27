$(document).ready(function(){
  $('.menuIcon').click(function(){
    if($('html').hasClass('menu-active ovf-hidden')){
      $('html').removeClass('menu-active ovf-hidden');
    }
    else{
      $('html').addClass('menu-active ovf-hidden');
    }
  })
})