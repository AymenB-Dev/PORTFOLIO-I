
/*--------------TYPING ANIMATION FOR THE HEADER --------------*/
//Initialize the word list that is going to be shown 
let wordList = ["Aymen Ben"] ;

//Get status class elements
let listStatus = $(".status");

//Add the elements contents to out wordList
for(var i=0;i<listStatus.length;i++)
  wordList.push(listStatus.eq(i).html());

//Create a new type obj
let typed = new Typed('#dynamic-description', {
  strings: wordList,
  smartBackspace:true,
  typeSpeed:60,
  backSpeed:60,
  loop:true
});
/*---------------------------------------------------------------*/




/*------------------------SKILLS---------------------------------*/


function drawSkills()
{ 
  //var
  let Percent=[0.95,0.9,0.9,0.8,0.75];
  let skills=["HTML","CSS","JS","PHP","VUE.JS"];
  //code
        for(let i=0;i<skills.length;i++)
        {
                var ctx=$(".myCanvas")[i].getContext('2d');
                ctx.beginPath();
                ctx.arc(100,60,50,0,2*Math.PI*Percent[i]);
                ctx.fillText(skills[i]+' : '+(Percent[i]*100)+"%",(85-skills[i].length*3),60);
                ctx.lineWidth=3;
                ctx.strokeStyle="#000";
                ctx.stroke();

        }
}
      
/*---------------------------------------------------------------*/

$(document).ready(drawSkills());

/*---------------------------------------------------*/
/*--------------ABOUT THE PROJECT SHOW UP --------------*/



$(".img-card").on("click",function(e)
{
    //var
    var cityImg=$(this).children().eq(0).attr("src");
    var cityDes=$(this).children().eq(1).html();
    //code

    $("#project-details-img").attr("src",cityImg);
    $("#project-details-des").html(cityDes);


    $("#project-details").css("display","flex");
    $("#body").css({"overflow":"hidden"});

});

$("#close-btn").on("click",function()
{
    $("#project-details").css("display","none");
    $("#body").css({"overflow":"visible"});
});