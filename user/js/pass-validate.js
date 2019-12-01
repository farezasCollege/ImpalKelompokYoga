$(document).ready(function(){
	$("#daftar-tbl").prop("disabled",true);
	$("#daftar-tbl").css("background-color","grey !important");
	$("#re-key").keyup(function(){
		if($("#re-key").val() === "" ){
			$("#pass-match").html("");
			$("#daftar-tbl").prop("disabled",true);
		}else if($("#re-key").val() === $("#key").val() ){
			$("#pass-match").html("Password cocok!!").css("color","green");
			$("#daftar-tbl").prop("disabled",false);
			$("#daftar-tbl").css("background-color"," #3EC1D5 !important;");
		}else{
			$("#pass-match").html("Password tidak cocok!!").css("color","red");
		}
	});
	
});