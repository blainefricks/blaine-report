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
   var $features = $('section');
   var window_offset = $features.offset().top - $(window).scrollTop();
   if (window_offset < $menu.height()) {
     $menu.addClass('show');
   }
   if (window_offset > $menu.height()) {
     $menu.removeClass('show');
   }
 });
})

function changeHeight() {
  var windowHeight = $(window).height();
  var footerHeight = $(".footer").height();
  var tabletNav = $(".tablet-nav").height();
  var wrap = $(".wrap");

  wrap.css({
    "min-height" : windowHeight - footerHeight - tabletNav + 'px',
  })
}
window.addEventListener('resize', changeHeight);
changeHeight();

// Delete Post Page and Database Entry
function deletePost(post_id)
{
  var delete_post_id = "span" + "#" + "deletepost-" + post_id

  $(delete_post_id).click(function(){
    alert("This will delete Post ID " + post_id)
  });
}