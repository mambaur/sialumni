//Flash data menggunakan sweetalert
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
  Swal.fire({
    title : 'Selamat',
    text : flashData,
    icon : 'success',
    timer : 4000
  });
}
//Flashdata hapus pada tableModel menggunakan sweetalert
$('.tombol-hapus').on('click', function(e){
  e.preventDefault(); //menjadikan tombol tidak memiliki atribut | mematikan link
  const href = $(this).attr('href');

  Swal.fire({
    title : 'Apakah anda yakin',
    text : 'Ingin menghapus data?',
    icon : 'warning',
    showCancelButton :true,
    confirmButtonColor : '#3085d6',
    cancelButtonColor : '#d33',
    confirmButtontext : 'Ya, Hapus'
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});