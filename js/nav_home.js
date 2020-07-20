$(window).on("scroll",function()
{
    if($(window).scrollTop() > 60)
        $("#nav").css("display","grid");
    else
        $("#nav").css("display","none");
})
