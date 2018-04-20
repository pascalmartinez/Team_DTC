$(document).ready(function(){
  $('#game').css({height: $(window).height(), width: $(window).width()});
  $('#start').on("click", function(){
      $('#texte').remove();
     $('#bt1').removeClass("invisible");
  })
  $('#bt1').on("click", function(){
    $('#bt9').removeClass("invisible");
    $('#bt1').addClass("invisible");
  })
  $('#bt9').on("click", function(){
    $('#bt5').removeClass("invisible");
    $('#bt9').addClass("invisible");
  })
  $('#bt5').on("click", function(){
    $('#bt8').removeClass("invisible");
    $('#bt5').addClass("invisible");
  })
  $('#bt8').on("click", function(){
    $('#bt2').removeClass("invisible");
    $('#bt8').addClass("invisible");
  })
  $('#bt2').on("click", function(){
    $('#bt7').removeClass("invisible");
    $('#bt2').addClass("invisible");
  })
  $('#bt7').on("click", function(){
    $('#bt4').removeClass("invisible");
    $('#bt7').addClass("invisible");
  })
  $('#bt4').on("click", function(){
    $('#bt6').removeClass("invisible");
    $('#bt4').addClass("invisible");
  })
  $('#bt6').on("click", function(){
    $('#bt3').removeClass("invisible");
    $('#bt6').addClass("invisible");
  })
  $('#bt3').on("click", function(){
    $('#bt10').removeClass("invisible");
    $('#bt3').addClass("invisible");
  })

//game 2

var correct=false;

$(".gare img").click(function(){
    if ($(this).attr("id")==="lim") {


correct=true;
    if (correct===true) {
        $("#lim").css("border", "solid 5px green");
        }
    }else {
        $(this).css("border" ,"solid 5px red");
    }
});

})
