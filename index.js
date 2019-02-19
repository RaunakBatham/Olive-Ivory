$(document).ready(function(){

  $('.book').hide(100);

$(window).bind('scroll', function () {
if ($(window).scrollTop() > 50) {
  $('nav').css({'background':'rgba(0,0,0,.9)','position':'fixed','top':'0'});
    $('.list a').css({'font-size':'12px'});
  $('.list li').css({'margin':'0 0px'});
  $('.list .logo img').css({'width':'100px'});
  $('.list .logo').css({'padding':'20px'});
  $('nav').css({'height':'70px'});
    $('nav #inner .list').css({'line-height':'70px'});
    $('nav #inner').css({'width':'67%'});
  $('.book').show(200);

} else  {
   $('nav').css({'background':'rgba(0,0,0,.0)','position':'absolute','top':'20px'});
    $('.list a').css({'font-size':'13px','letter-spacing': '.06em','padding':'5px 8px'});
    $('.list li').css({'margin':'0 10px'});

    $('.list .logo img').css({'width':'150px'});
    $('.list .logo').css({'padding':'10px'});
    $('nav').css({'height':'100px'});
    $('nav #inner .list').css({'line-height':'120px'});
    $('nav #inner').css({'width':'80%'});
    
  $('.book').hide(100);

}
});
});

       
