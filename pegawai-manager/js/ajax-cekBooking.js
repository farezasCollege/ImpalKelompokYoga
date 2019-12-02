$(document).ready(function () {
	$("#cek-kode").submit(function (e) {
		e.preventDefault();
		var isi;
		var tbl;
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/INPUTKODEBOOKING_C/cekkode",
			data: $("#cek-kode").serializeArray(),
			method: "post",
			dataType: "json",
			success: function (response) {
				if (response.status === "1") {
					$("#notif").html('<div class="alert alert-danger" role="alert">Pelanggan sudah membayar </div>');
					isi = "<td>" + response.data.kode_booking + "</td><td>" + response.data.Username + "</td><td>" + response.data.id_layanan + "</td><td>" + response.data.status_bayar + "</td><td>" + response.data.jam_pelayanan + "</td><td>" + response.data.tanggal_pelayanan + "</td>";
					$("#isi-tabel").html(isi);
				} else if (response === "0") {
					alert("Data booking tidak ditemukan!!");
					isi = "<td colspan='6' style='text-align: center;'>Data tidak ditemukan</td>";
					$("#isi-tabel").html(isi);
				} else {
					isi = "<td>" + response.kode_booking + "</td><td>" + response.Username + "</td><td>" + response.id_layanan + "</td><td>" + response.status_bayar + "</td><td>" + response.jam_pelayanan + "</td><td>" + response.tanggal_pelayanan + "</td><td>" + response.tbl + "</td>";
					$("#isi-tabel").html(isi);
					$("#notif").html('<div class="alert alert-success" role="alert">Pesanan berhasil di-acc!! </div>');
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});
})