$(function () {});
document.onreadystatechange = () => {
  if (document.readyState == 'complete') {
    $('.tombolTambahData').on('click', function () {
      $('#formModalLabel').html('Tambah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function () {
      $('#formModalLabel').html('Ubah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

      const id = $(this).data('id');
      console.log(1);

      $.ajax({
        url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
        data: { id: id },
        method: 'post',
        dataType: 'json',
        succsess: (data) => {
          console.log(data);
          // $('#nama').val(data.nama);
          // $('#nrp').val(data.nrp);
          // $('#email').val(data.email);
          // $('#jurusan').val(data.jurusan);
          // $('#id').val(data.id);
        },
        error: () => {
          console.log(0);
        },
      });
    });
  }
};
