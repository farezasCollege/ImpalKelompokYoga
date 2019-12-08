$(document).ready(function () {
	$("#signup-form").submit(function (e) {
		e.preventDefault();
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/REGISTER_USER/Register", //jgn lupa diisi function di controller
			data: $("#signup-form").serializeArray(),
			method: "post",
			// dataType: "json",
			success: function () {
				// $("#notif").html('<div class="alert alert-success" role="alert">Signup sukses!!</div>');
				Swal.fire({
					icon: 'success',
					title: 'Signup berhasil!!',
					text: 'Silahkan pindah ke halaman login'
				});

			},
			error: function (xhr, ajaxOptions, thrownError) {
				Swal.fire({
					icon: 'error',
					title: 'Oops..',
					text: 'Sistem galat!!'
				});
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});
})