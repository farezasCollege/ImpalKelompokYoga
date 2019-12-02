$(document).ready(function () {
	$("#reg-pegawai-form").submit(function (e) {
		e.preventDefault();
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/REGISTERPEG/Register",
			data: $("#reg-pegawai-form").serializeArray(),
			method: "post",
			//dataType: "json" ,
			success: function () {
				$("#notif").html('<div class="alert alert-success" role="alert">Register pegawai sukses!! </div>');
			},
			error: function (xhr, thrownError) {
				$("#notif").html("<div class='alert alert-danger' role='alert'>Registrasi gagal!! Galat tidak diketahui </div>");
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});
})