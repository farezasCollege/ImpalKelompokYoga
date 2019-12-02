$(document).ready(function(){
	$("#login-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: "http://localhost/index.php/LoginUser_controller/login_action",
			data: $("#login-form").serializeArray() ,
			method: "post" ,
			dataType: "json" ,
			success: function(response){	
				if(response==="0"){
					$("#notif").html("<div class='alert alert-danger' role='alert'>Login gagal!! </div>");
				}
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
            	$("#notif").html("<div class='alert alert-danger' role='alert'>Login gagal!! Galat tidak diketahui</div>");
            	console.log(xhr.status);
            	console.log(thrownError);
        	}
		});
	});
})