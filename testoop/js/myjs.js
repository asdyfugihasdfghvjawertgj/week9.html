$(document).ready(function(){

$("#login1").click(function(){
   
if($("#name").val()=="")
{
    
   // document.getElementById("nameerror").text="Please enter";
    $("#nameerror").text("Please enter username");
}
else
{
    $("#nameerror").text("");  
}
if($("#pwd").val()=="")
{
    
    //document.getElementById("nameerror").text="Please enter";
    $("#pwderror").text("Please enter password");
}
else
{
    $("#pwderror").text(""); 
}
if($("#name").val()!="" && $("#pwd").val()!="")
{
    return true;
}
else
    return false;
})

})