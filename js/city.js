/*--------------HEADER TYPING ANINAMTION-----------------*/

//Initialize the word list that is going to be shown 
let wordList=[];

//Get status class elements
let listDesContent = $(".description-content");


//Add the elements contents to out wordList
for(var i=0;i<listDesContent .length;i++)
  wordList.push(listDesContent .eq(i).html());

//Create a new type obj
let typed = new Typed('#dynamic-description', {
  strings: wordList,
  smartBackspace:true,
  showCursor:false,
  typeSpeed:60,
  backSpeed:60,
  loop:true
});



/*-------------------lightSlider---------------*/

$(document).ready(function() {
    $("#lightSlider").lightSlider({
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
        responsive : [
          {
              breakpoint:600,
              settings: {
                  item:1,
                  
                }
          },]
 
    }); 
  });


/*-------------------lightSlider Monument---------------*/

$(document).ready(function() {
  $("#lightSlider-monument").lightSlider({
      addClass: '',
      mode: "slide",
      useCSS: true,
      cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
      easing: 'linear', //'for jquery animation',////
      responsive : [
        {
            breakpoint:600,
            settings: {
                item:1,
                
              }
        },]

  }); 
});


/*--------------ABOUT THE CITY SHOW UP --------------*/



$(".city-card").on("click",function(e)
{
    //var
    var cityImg=$(this).children().eq(0).children().eq(0).attr("src");
    var cityName=$(this).children().eq(1).text();
    var cityDes=$(this).children().eq(0).children().eq(1).html();
    //code
    
    $("#show-up-details-img").attr("src",cityImg);
    $("#show-up-details-name").html(cityName);
    $("#show-up-details-des").html(cityDes);


    $("#show-up-details").css("display","flex");
    $("#body").css({"overflow":"hidden"});

});

$("#close-btn").on("click",function()
{
    $("#show-up-details").css("display","none");
    $("#body").css({"overflow":"visible"});
});



/*--------------ABOUT THE MONUMENT SHOW UP --------------*/



$(".monument-card").on("click",function(e)
{
    //var
    var moumentImg=$(this).children().eq(0).children().eq(0).attr("src");
    var monumentName=$(this).children().eq(1).text();
    var monumentDes=$(this).children().eq(0).children().eq(1).html();
    //code
    
    $("#show-up-details-img").attr("src", moumentImg);
    $("#show-up-details-name").html(monumentName);
    $("#show-up-details-des").html(monumentDes);


    $("#show-up-details").css("display","flex");
    $("#body").css({"overflow":"hidden"});

});

$("#close-btn").on("click",function()
{
    $("#show-up-details").css("display","none");
    $("#body").css({"overflow":"visible"});
});


