$(document).ready(function(){
	$("#signup-form").submit(function(e){
		e.preventDefault();
		var isi;
		$.ajax({
			url: "http://localhost/index.php/EDITPROFILE_C/ubah", //jgn lupa diisi function di controller
			data: $("#signup-form").serializeArray() ,
			method: "post" ,
			// dataType: "json" ,
			success: {
				$('#notif').html('<div class="alert alert-success" role="alert">Edit profil sukses!!</div>')
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
				$('#notif').html('<div class="alert alert-danger" role="alert">Edit profil gagal!! Silahkan coba lagi</div>')
	        	console.log(xhr.status);
	        	console.log(thrownError);
	    	}
		});
	});
})