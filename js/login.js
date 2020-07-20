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


