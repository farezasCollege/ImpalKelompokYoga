$(document).ready(function () {
    $("#LoginPegawai-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "http://localhost/ImpalKelompokYoga/index.php/Login_Peg_Control/login",
            data: $("#LoginPegawai-form").serializeArray(),
            method: "post",
            dataType: "json",
            success: function (response) {
                if (response === "pegawai") {
                    location.href = "http://localhost/ImpalKelompokYoga/index.php/INPUTKODEBOOKING_C";
                } else if (response === "manager") {
                    location.href = "http://localhost/ImpalKelompokYoga/index.php/REGISTERPEG";
                } else {
                    $("#notif").html("<div class='alert alert-danger'>Maaf login gagal</div>");
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $("#notif").html("<div class='alert alert-danger' role='alert'>Login gagal!! Galat tidak diketahui</div>");
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });
})