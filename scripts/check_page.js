window.onload=function()
{
    check_page();
    
}


function check_page()
{

    main_page();
}
function main_page()
{
    
 var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);

    var page_name;
    if (sPage=="adm_log_action.php")
        page_name="Home";
    var H1= document.getElementById("page_name");
    H1.innerHTML=page_name;
}