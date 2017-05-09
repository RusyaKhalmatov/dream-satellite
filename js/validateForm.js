function validate()
{
    var x = document.forms["nameForm"]["login"].value;
    var y = document.forms["nameForm"]["password"].value;
    
    if (x=="" || y=="")
    {
        var warn=document.getElementById("warning");  
        var.innerHTML="Fill all the fields";
        
    }
}