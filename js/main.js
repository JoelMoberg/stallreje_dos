$(document).ready(function() {

  $("#toggleMenu").click(function(){
    $(".responsiveMenu").toggle();
  });

  $("#close").click(function(){
    $(".responsiveMenu").toggle();
  });

  $("#menu a[href*='" + location.pathname + "']").addClass("currentPage");
});
