$(document).ready(function() {
  instagramFeed();

});

function instagramFeed() {
  var userFeed = new Instafeed({
    get: 'user',
    userId: '278079083',
    resolution: 'standard_resolution',
    accessToken: '278079083.1677ed0.234d080ab776476a8c87cd698caf5adf',
    template: '<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-5 insta"><a href="{{link}}" target="_blank"><img class="instaImg pure-img" src="{{image}}"><div class="instaCaption"><p>{{caption}}</p></div></a></div>',
    limit: '100'
  });
  userFeed.run();
}

$(window).scroll(function (event){
  checkScroll();
});

function checkScroll(){
  console.log("scroll");
  var scroll = $("#menu").position().top;
  var pageHeight = $(window).height();

  if(scroll >= (pageHeight + 2)){
    $('#fadeInLogo').css("opacity", 1);
  }else if(scroll < (pageHeight + 2)){
    $('#fadeInLogo').css("opacity", 0);
  }
}
