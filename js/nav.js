$(window).resize(function()
{

    if($(window).width()<576)
        $("#nav-items").css("display","none");
    else 
        $("#nav-items").css("display","flex");

})


$("#nav").hover(

    //when mouse enter
    function()
    {
        if($(window).width()<576)
        {
            $("#nav-items").slideToggle();
        }
    },

    //when mouse leave
    function()
    {
        if($(window).width()<576) 
        {
            $("#nav-items").slideToggle();
        }
       
    }); 


$(window).ready()
{
    if($(window).width()<576)
    {
        $("#nav-items").css("display","none");
    }
}