$(function () {
    $("#checkout").datepicker();
    $("#checkin").datepicker();
  });

   function booking(namaObjek, harga) {
    $("#modalForm").modal("show");
    $("#judulModal").text(namaObjek);
    $("#harga").val(harga);
  }

  function sweet() {
    Swal.fire("Booked", "Wait for next information", "success");
  }

  $("#qty").on("input", function (e) {
    var qty = $("#qty").val();
    var harga = $("#harga").val().replace(/\./g, "");
    var total = parseInt(harga) * parseInt(qty);
    $("#total").val(total.toLocaleString());
    // alert (harga);
  });

   $("#cari").click(function () {
    var jenis = $("#jenis").val();
    if (jenis == "Hotel") {
      $("#divHotel").fadeIn("1000");
      $("#divKendaraan").fadeOut()    ;
    } else if (jenis == "Kendaraan") {
      $("#divHotel").fadeOut();
      $("#divKendaraan").fadeIn("15000");
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
        footer: '<a href="">Why do I have this issue?</a>',
      });
    }
  });

  $(document).ready(function(){
    window.setInterval(function () {
        var sisawaktu = $("#waktu").html();
        sisawaktu = eval(sisawaktu);
        if (sisawaktu == 0) {
            location.href = "http://achmatim.net/";
        } else {
            $("#waktu").html(sisawaktu - 1);
        }
    }, 1000);
});

function delayFunction() {
    // tambahkan delay sebelum submit form
    setTimeout(function() {
      document.querySelector('form').submit();
      return location.href = "index.html"
    }, 2000) ; // 3000 milidetik atau 3 detik delay
  }