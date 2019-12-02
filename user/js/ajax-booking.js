$(document).ready(function(){
	$("#booking-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: "http://localhost/index.php/BOOKING_CONTROLLER/getView",
			data: $("#booking-form").serializeArray() ,
			method: "post" ,
			dataType: "json" ,
			success: {				
				$("#notif").html("<div class='alert alert-success' role='alert'>Booking layanan sukses!! Silahkan cek email anda </div>");
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
				$("#notif").html("<div class='alert alert-danger' role='alert'>Login gagal!! Galat tidak diketahui</div>");
            	console.log(xhr.status);
            	console.log(thrownError);
        	}
		});
	});
})