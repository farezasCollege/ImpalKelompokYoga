$(document).ready(function(){
	$("#reg-pegawai-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/REGISTERPEG/Register",
			data: $("#reg-pegawai-form").serializeArray() ,
			method: "post" ,
			//dataType: "json" ,
			success: {				
				$("#notif").html("<div class='alert alert-success' role='alert'>Register pegawai sukses!! </div>");
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
				$("#notif").html("<div class='alert alert-danger' role='alert'>Gagal!! Silahkan coba lagi </div>");
            	console.log(xhr.status);
            	console.log(thrownError);
        	}
		});
	});
})