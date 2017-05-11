var edgeOrIE;

$(document).ready(function() {
  instagramFeed();

  var isIE = /*@cc_on!@*/false || !!document.documentMode;
  var isEdge = !isIE && !!window.StyleMedia;

  if(isIE || isEdge){
    //$("#content-wrapper").css("padding-top", "2px");
    //$("#content-wrapper").css("background", "white");
    $("#menu").stick_in_parent();
    edgeOrIE = true;

  }
});

function instagramFeed() {
  var userFeed = new Instafeed({
    get: 'user',
    userId: '278079083',
    resolution: 'standard_resolution',
    accessToken: '278079083.1677ed0.234d080ab776476a8c87cd698caf5adf',
    template: '<div class="pure-u-1 pure-u-md-1-3 pure-u-lg-1-5 insta"><a href="{{link}}" target="_blank"><img class="instaImg pure-img" src="{{image}}"><div class="instaCaption"><p>{{caption}}</p></div></a></div>',
    limit: '19'
  });
  userFeed.run();
}

$(window).scroll(function (event){
  checkScroll();
});

function checkScroll(){
  var scroll = $("#menu").position().top;
  console.log(scroll);
  var pageHeight = $(window).height();

  if(edgeOrIE){
    if(scroll <= 0){
      $('#fadeInLogo').css("opacity", 1);
    }else if(scroll < (pageHeight + 2)){
      $('#fadeInLogo').css("opacity", 0);
    }
  }else{
    if(scroll >= (pageHeight + 2)){
      $('#fadeInLogo').css("opacity", 1);
    }else if(scroll < (pageHeight + 2)){
      $('#fadeInLogo').css("opacity", 0);
    }
  }

}
