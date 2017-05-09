window.onload=function()
{
    //check_page();
     main_page();
}


function check_page()
{

    main_page();
}
function main_page()
{
    
 var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);

var page_name="Page";
    if (sPage=="admin.php")
        page_name="Home";
    if(sPage=="news_new.php")
        page_name="News";
    if(sPage=="user_all-users.php")
        page_name="Users";
    
    var H1= document.getElementById("page_name");
    H1.innerHTML=page_name;
    
    
}