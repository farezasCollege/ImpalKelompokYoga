$(document).ready(function(){
	$("#booking-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: "",
			data: $("#booking-form").serializeArray() ,
			method: "post" ,
			dataType: "json" ,
			success: {				
				$("#notif").html("<div class='alert alert-success' role='alert'>Booking layanan sukses!! </div>");
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
            	console.log(xhr.status);
            	console.log(thrownError);
        	}
		});
	});
})