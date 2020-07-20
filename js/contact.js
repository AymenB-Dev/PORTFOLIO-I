function nameValidation()
{
    var letters =  /^[a-zA-Z\s]*$/; //only alphabet and white spaces
    if($("#fname").val().match(letters) )
    {
        $("#nameError").css("display","none");
        return true;
    }
    else
    {
        $("#nameError").css("display","inline");
        return false;
    }
}

function emailValidation()
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if($("#femail").val().match(mailformat))
    {
        $("#emailError").css("display","none");
        return true;
    }
    else
    {
        $("#emailError").css("display","inline");
        return false;
    }
}


function formValidation()
{
    return (nameValidation() && emailValidation());
}

$("#fclean").on("click",function()
{
    $(".errorMsg").css("display","none");
});