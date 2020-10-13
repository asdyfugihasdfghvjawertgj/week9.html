$(document).ready(function(){

$("#show").click(function(){
	if ($("#input1").val()=="") {
		$("#span1").text("please enter citizan");
	}
	else{
		$("#span1").text("");
	}
	if ($("#input2").val()=="") {
		$("#span2").text("please enter Title(EN)");
	}
	else{
		$("#span2").text("");
	}
	if ($("#input3").val()=="") {
		$("#span3").text("please enter Name(EN)");
	}
	else{
		$("#span3").text("");
	}
	
	if ($("#input4").val()=="") {
		$("#span4").text("please enter Nationality");
	}
	else{
		$("#span4").text("");
	}
	if ($("#input5").val()=="") {
		$("#span5").text("please enter Country");
	}
	else{
		$("#span5").text("");
	}
	if ($("#input6").val()=="") {
		$("#span6").text("please enter School");
	}
	else{
		$("#span6").text("");
	}
	if ($("#input7").val()=="") {
		$("#span7").text("please enter Email");
	}
	else{
		$("#span7").text("");
	}
	if ($("#input8").val()=="") {
		$("#span8").text("please enter Code");
	}
	else{
		$("#span8").text("");
	}
	if ($("#input9").val()=="") {
		$("#span9").text("please enter Phone number");
	}
	else{
		$("#span9").text("");
	}
	//console.log("hello");
	var select1=$("#input2").val();
	var select2=$("#input4").val();
	var select3=$("#input5").val();
	var select4=$("#input6").val();
	var select5=$("#input8").val();
	//console.log(select2);
	if($("#input1").val()!="" && select1!="" && $("#input3").val()!="" && select2!="" && select3!=""  && select4!="" &&  $("#input7").val()!="" && select5!="" && $("#input9").val()!="" )
	{
    return true;
	}
	else{

    return false;
	}
	})

})