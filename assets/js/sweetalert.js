const flashData = $(".flash-data").data("flashdata");

if (flashData) {
  Swal({
    title: "Data",
    text: "Berhasil " + flashData,
    type: "success",
  });
}

// tombol hapus
$(".tombol-hapus").on("click", function (e) {
  e.preventDefault();
  // console.log("ok");
  const href = $(this).attr("href");
  Swal({
    title: "Apakah yakin",
    text: "Data akan dihapus",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus data!",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});
