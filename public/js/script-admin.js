$(document).ready(function () {
  // const baseUrl = 'https://lipmb.umbulukumba.ac.id/';
  const baseUrl = "http://localhost:8080/";

  //Filter select
  //......................................................................

  let valGel = $("#filter-gel");
  let valProdi1 = $("#filter-prodi1");
  let valProdi2 = $("#filter-prodi2");

  valGel.on("change", function () {
    queryFilterAjax(valGel.val(), valProdi1.val(), valProdi2.val());
  });

  valProdi1.on("change", function () {
    queryFilterAjax(valGel.val(), valProdi1.val(), valProdi2.val());
  });

  valProdi2.on("change", function () {
    queryFilterAjax(valGel.val(), valProdi1.val(), valProdi2.val());
  });

  //Ajax query filter GELOMBANG, PRODI 1 , PRODI 2
  function queryFilterAjax(valGel, valProdi1, valProdi2) {
    if (valGel === "" && valProdi1 === "" && valProdi2 === "") {
      window.location = "";
      return false;
    }

    let targetTimpaAjax = $("#getforfilter");
    let idH1 = $("h1").html();

    function funUrlAjax(idH1) {
      if (idH1 === "Album Calon Mahasiswa Baru") {
        return "dataFilterAlbum";
      } else if (idH1 === "Database Pendaftaran Calon Mahasiswa Baru") {
        return "dataFilterPendaftaran";
      } else if (idH1 === "Database Registrasi Calon Mahasiswa Baru") {
        return "dataFilterRegistrasi";
      } else if (idH1 === "Database Daftar Ulang Mahasiswa Baru") {
        return "dataFilterDaftarUlang";
      } else if (idH1 === "Set Pengumuman Mahasiswa Baru") {
        return "dataFilterPengumumanProses";
      }
    }

    urlAjax = funUrlAjax(idH1);

    $.ajax({
      url: baseUrl + "admin/" + urlAjax,
      data: {
        0: valGel,
        1: valProdi1,
        2: valProdi2,
      },
      method: "post",
      beforeSend: function () {
        targetTimpaAjax.html(
          `<div class="text-center" style="min-width:1000px;margin:11% 0">
                        <div class="spinner-border text-success py-outo" role="status" style="width:7rem;height:7rem">
                            <span class="visually-hidden">Loading....</span>
                        </div>
                    </div>`
        );
      },

      success: function (result) {
        targetTimpaAjax.html(result);
      },
    });
  }
  //---------------------------------------------------------------------------

  //Datatable script
  //.........................................................................
  var table = $("#example").DataTable({
    lengthChange: false,
    paging: false, // dimatikan supaya filter Gel, Prodi 1,2 berfungsi
    buttons: ["excel", "pdf", "csv", "print", "copy"],
    scrollX: true,
    scrollCollapse: true,
    scrollY: 460,
  });

  table.buttons().container().appendTo("#example_wrapper .col-md-6:eq(0)");

  //Hapus class btn-group agar tidak masuk dalam btn yang tergerup
  $("div.col-md-6 .dt-buttons").removeClass("btn-group");
  //Hapus class btn-secondary agar button bisa diberi warna
  $("div.dt-buttons button").removeClass("btn-secondary");

  //Beri warna pada Button
  $("div.dt-buttons button.buttons-pdf").addClass("btn-outline-danger mb-2");
  $("div.dt-buttons button.buttons-excel").addClass("btn-outline-success mb-2");
  $("div.dt-buttons button.buttons-csv").addClass("btn-outline-dark mb-2");
  $("div.dt-buttons button.buttons-print").addClass("btn-dark mb-2 ml-5");
  $("div.dt-buttons button.buttons-copy").addClass("btn-dark mb-2");

  //Ganti isi tulisan pada button
  $("div.dt-buttons button.buttons-csv").html(
    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16"><path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/></svg>Unduh Csv'
  );
  $("div.dt-buttons button.buttons-excel").html(
    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16"><path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68L8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z"></path></svg> Unduh Excel'
  );
  $("div.dt-buttons button.buttons-pdf").html(
    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16"><path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/><path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/></svg> Unduh PDF'
  );

  //Atur margin-top pagination
  $("ul.pagination").addClass("mt-3");
  //------------------------------------------------------------------

  //Set Akun Peserta
  //.................................................................
  $(".set-akun-peserta").on("click", function () {
    var idrow = $(this).data("id");

    $.ajax({
      url: baseUrl + "admin/whereOneQuery",
      data: {
        namekey: "id",
        valuekey: idrow,
      },
      method: "get",
      dataType: "json",

      success: function (e) {
        $(".nama-peserta").html(e.nama);
        $(".nik-peserta").html("NIK :" + e.nik);

        //Tentukan username---------------------------------------
        //bakal Username Peserta
        const bakalUsername = [e.nik, e.email, e.nisn, e.nohp];

        //tentukan useername peserta REAL
        function randomInteger() {
          return Math.floor(Math.random() * 4);
        }

        const userNameReal = bakalUsername[randomInteger()];
        $("#floatingUsername").val(userNameReal);

        //Tentukan Password-------------------------------------
        function makeid(length) {
          var result = "";
          var characters = "abcdefghijklmnopqrstuvwxyz0123456789";
          var charactersLength = characters.length;
          for (var i = 0; i < length; i++) {
            result += characters.charAt(
              Math.floor(Math.random() * charactersLength)
            );
          }
          return result + "kmz";
        }

        $("#floatingPassword").val(makeid(7));

        //isi di input hidden id peserta----------------------------------------
        $("#notifEmail").val(e.email);
        $(".form-set-akun").attr(
          "action",
          `/admin/set-akun-peserta/${e.id}/${e.nama}`
        );
      },
    });
  });
});
