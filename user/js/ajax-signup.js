$(document).ready(function(){
	$("#signup-form").submit(function(e){
		e.preventDefault();
		var isi;
		$.ajax({
			url: "", //jgn lupa diisi function di controller
			data: $("#signup-form").serializeArray() ,
			method: "post" ,
			dataType: "json" ,
			success: {
				$('#notif').html('<div class="alert alert-success" role="alert">Signup sukses!!</div>')
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
	        	console.log(xhr.status);
	        	console.log(thrownError);
	    	}
		});
	});
})