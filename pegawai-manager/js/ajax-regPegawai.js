$(document).ready(function(){
	$("#reg-pegawai-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: "",
			data: $("#reg-pegawai-form").serializeArray() ,
			method: "post" ,
			dataType: "json" ,
			success: {				
				$("#notif").html("<div class='alert alert-success' role='alert'>Register pegawai sukses!! </div>");
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
            	console.log(xhr.status);
            	console.log(thrownError);
        	}
		});
	});
})