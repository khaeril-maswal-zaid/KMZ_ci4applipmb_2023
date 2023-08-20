$(document).ready(function () {
  const baseUrl = "http://localhost:8080/";
  // const baseUrl = 'https://lipmb.umbulukumba.ac.id/';

  //NAVBAR HOME
  //........................
  $(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    if (wScroll > "650") {
      $("#navScroll").addClass("bg-danger");
      $("#navScroll").removeClass("navbar-dark");
      $("#navScroll .nav-link").removeClass("text-white");
      $("#navScroll").addClass("navbar-light");

      $("#navScroll2").addClass("bg-danger");
      $("#navScroll2").removeClass("navbar-dark");
      $("#navScroll .nav-link").removeClass("text-white");
      $("#navScroll2").addClass("navbar-light");
    } else {
      $("#navScroll").removeClass("bg-danger");
      $("#navScroll").addClass("navbar-dark");
      $("#navScroll .nav-link").addClass("text-white");
      $("#navScroll").removeClass("navbar-light");

      $("#navScroll2").removeClass("bg-danger");
      $("#navScroll2").addClass("navbar-dark");
      $("#navScroll .nav-link").addClass("text-white");
      $("#navScroll2").removeClass("navbar-light");
    }
  });

  //Form Validasi Pendaftaran................
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener(
        "submit",
        function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add("was-validated");
        },
        false
      );
    });
  })();

  //Jika Pilihan Kuliah NON REGULER HANYA PILIH PNF
  //....................................
  $("#pilkul").on("change", function () {
    var pilkul = $(this).val();

    if (pilkul === "Non Reguler") {
      $(".prodi-reguler").addClass("d-none");
      $(".prodi-nonreguler").removeClass("d-none");
    } else {
      $(".prodi-reguler").removeClass("d-none");
      $(".prodi-nonreguler").addClass("d-none");
    }
  });

  //Jangan biarkan pilih prodi sama
  //....................................
  $("#selectprdodi2").on("change", function () {
    var prodi1 = $("#selectprdodi1").val();
    var prodi2 = $("#selectprdodi2").val();

    if (prodi1 === prodi2) {
      $(".pringatansamaprodi").html("Jangan Pilih Prodi yang sama");
      $("#selectprdodi2").val("pilih");
    } else {
      $(".pringatansamaprodi").html("");
    }
  });

  //Provinsi Family ajax
  //..................................
  $("#select-provinsi").on("change", function () {
    var prov = $(this).val();
    var kab = $("#select-kabupaten");

    $("#load-kab").show();
    kab.html("");

    $.ajax({
      url: baseUrl + "PendaftaranRegistrasi/TampilkanKabupatendariAjax",
      data: {
        idProv: prov,
      },
      method: "post",
      dataType: "json",
      success: function (e) {
        $("#load-kab").hide();

        $.each(e, function (i, data) {
          kab.append(
            '<option value="' +
              data.city_id +
              '">' +
              data.city_name +
              "</option>"
          );
        });
      },
    });
  });

  $("#select-kabupaten").on("change", function () {
    var kab = $(this).val();
    var kec = $("#select-kecamatan");

    $("#load-kec").show();
    kec.html("");

    $.ajax({
      url: baseUrl + "PendaftaranRegistrasi/TampilkanKecamatandariAjax",
      data: {
        idKab: kab,
      },
      method: "post",
      dataType: "json",
      success: function (e) {
        $("#load-kec").hide();

        $.each(e, function (i, data) {
          kec.append(
            '<option value="' + data.dis_id + '">' + data.dis_name + "</option>"
          );
        });
      },
    });
  });

  $("#select-kecamatan").on("change", function () {
    var kec = $(this).val();
    var desa = $("#select-desa");

    $("#load-desa").show();
    desa.html("");

    $.ajax({
      url: baseUrl + "PendaftaranRegistrasi/TampilkanDesadariAjax",
      data: {
        idKec: kec,
      },
      method: "post",
      dataType: "json",
      success: function (e) {
        $("#load-desa").hide();

        $.each(e, function (i, data) {
          desa.append(
            '<option value="' +
              data.subdis_id +
              '">' +
              data.subdis_name +
              "</option>"
          );
        });
      },
    });
  });

  $(document).on("change", "#photocamaba", function () {
    var name = document.getElementById("photocamaba").files[0].name;
    var form_data = new FormData();
    var ext = name.split(".").pop().toLowerCase();

    var nik = document.getElementById("nik").value;
    var nama = document.getElementById("nama").value;

    if (jQuery.inArray(ext, ["png", "jpg", "jpeg"]) == -1) {
      alert("Format gambar tidak sesusai");
      return false;
    }

    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("photocamaba").files[0]);
    var f = document.getElementById("photocamaba").files[0];
    var fsize = f.size || f.fileSize;

    if (fsize > 510000) {
      alert("Ukuran maksimal file 500 KB");
    } else {
      form_data.append("file", document.getElementById("photocamaba").files[0]);

      $.ajax({
        url: baseUrl + "PostFotoAjax/photocamaba/" + nama + "/" + nik,
        method: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
          $("#uploaded_image1").html(
            "<label class='text-success'>Sedang Mengupload Gambar...</label>"
          );
        },
        success: function (data) {
          $("#uploaded_image1").html(data);
        },
      });
    }
  });
});
