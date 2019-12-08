$(document).ready(function () {
	$("#cek-kode").submit(function (e) {
		e.preventDefault();
		var isi;
		$.ajax({
			url: "http://localhost/ImpalKelompokYoga/index.php/INPUTKODEBOOKING_C/cekkode",
			data: $("#cek-kode").serializeArray(),
			method: "post",
			dataType: "json",
			success: function (response) {
				if (response.status === "sdh_bayar") {
					$("#notif").html('<div id="note-alert" class="alert alert-danger" role="alert">Pelanggan sudah membayar </div>');
					isi = "<td>" + response.data.kode_booking + "</td><td>" + response.data.Username + "</td><td>" + response.data.id_layanan + "</td><td>" + response.data.status_bayar + "</td><td>" + response.data.jam_pelayanan + "</td><td>" + response.data.tanggal_pelayanan + "</td>";
					$("#isi-tabel").html(isi);
				} else if (response.status === "not_found") {
					// alert("Data booking tidak ditemukan!!");
					Swal.fire({
						icon: 'error',
						title: 'Oops..',
						text: 'Data booking tidak ditemukan!!',
						showCloseButton: true
					});
					isi = "<td colspan='6' style='text-align: center;'>Data tidak ditemukan</td>";
					$("#isi-tabel").html(isi);
				} else if (response.status === "blm_bayar") {
					isi = "<td>" + response.data.kode_booking + "</td><td>" + response.data.Username + "</td><td>" + response.data.id_layanan + "</td><td>" + response.data.status_bayar + "</td><td>" + response.data.jam_pelayanan + "</td><td>" + response.data.tanggal_pelayanan + "</td>";
					$("#isi-tabel").html(isi);
					$("#notif").html('<div class="alert alert-success" role="alert">Pesanan berhasil di-acc!! </div>');
				}else if(response.status==="telat_bayar"){
					// alert("Pemesanan ini dihapus!! Karena terlambat melakukan pembayaran (maks. 30 menit setelah pesan)");
					Swal.fire({
						icon: 'error',
						title: 'Pemesanan ini dihapus!!',
						text: 'terlambat melakukan pembayaran (maks. 30 menit setelah pesan)',
						showCloseButton: true
					});
					isi = "<td colspan='6' style='text-align: center;'>Data tidak ditemukan</td>";
					$("#isi-tabel").html(isi);
				}
				// console.log(response);
			},
			error: function (xhr, ajaxOptions, thrownError) {
				$("#notif").html("<div class='alert alert-danger' role='alert'>Cek kode booking gagal!! Galat tidak diketahui</div>");
				console.log(xhr.status);
				console.log(thrownError);
			}
		});
	});
})