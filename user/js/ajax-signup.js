$(document).ready(function () {
	$("#signup-form").submit(function (e) {
		e.preventDefault();
		var isi;
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/REGISTER_USER/Register", //jgn lupa diisi function di controller
			data: $("#signup-form").serializeArray(),
			method: "post",
			// dataType: "json",
			success: function () {
				$("#notif").html('<div class="alert alert-success" role="alert">Signup sukses!!</div>');

			},
			error: function (xhr, ajaxOptions, thrownError) {
				$("#notif").html('<div class="alert alert-danger" role="alert">Signup gagal!! Silahkan coba lagi</div>')
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});
})