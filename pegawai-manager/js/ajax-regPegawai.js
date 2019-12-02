$(document).ready(function(){
	$("#reg-pegawai-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/REGISTERPEG/Register",
			data: $("#reg-pegawai-form").serializeArray() ,
			method: "post" ,
			//dataType: "json" ,
			success:{ $("#notif").html("<div class='alert alert-success' role='alert'>Register pegawai sukses!! </div>");} 
			// function(response){	
			// 	if(response==="0"){
			// 		$("#notif").html("<div class='alert alert-danger' role='alert'>Login gagal!! </div>");
			// 	}else{
			// 		$("#notif").html("<div class='alert alert-success' role='alert'>Register pegawai sukses!! </div>");
			// 	}
			// }
			,
			error: function (xhr, ajaxOptions, thrownError) {
				$("#notif").html("<div class='alert alert-danger' role='alert'>Registrasi gagal!! Sistem galat </div>");
            	console.log(xhr.status);
            	console.log(thrownError);
        	}
		});
	});
})