$(document).ready(function(){
	$("#cek-kode").submit(function(e){
		e.preventDefault();
		var isi;
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/INPUTKODEBOOKING_C/cekkode",
			data: $("#cek-kode").serializeArray() ,
			method: "post" ,
			dataType: "json" ,
			success: function(response){	
				if(response==="1"){
					alert("Pelanggan sudah membayar");
				}else if(response==="0"){
					alert("Data booking tidak ditemukan!!")
				}else{
					isi="<td>"+response.kode_booking+"</td><td>"+response.Username+"</td><td>"+response.id_layanan+"</td><td>"+response.status_bayar+"</td><td>"+response.jam_pelayanan+"</td><td>"+response.tanggal_pelayanan+"</td><td>";
					$("#isi-tabel").html(isi);
				}
			} ,
			error: function (xhr, ajaxOptions, thrownError) {
            	console.log(xhr.status);
            	console.log(thrownError);
        	}
		});
	});
})