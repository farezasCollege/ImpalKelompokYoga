$(document).ready(function () {
	$("#editProfile-form").submit(function (e) {
		e.preventDefault();
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/EDITPROFILE_C/ubah", //jgn lupa diisi function di controller
			data: $("#editProfile-form").serializeArray(),
			method: "post",
			// dataType: "json" ,
			success: function () {
				$('#notif').html('<div class="alert alert-success" role="alert">Edit profil sukses!!</div>');
			},
			error: function (xhr, ajaxOptions, thrownError) {
				$('#notif').html('<div class="alert alert-danger" role="alert">Edit profil gagal!! Silahkan coba lagi</div>');
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});
})