$(function () {

    $('.tombolTambahData').on('click', function () {
        // Ubah judul form
        $('#judulModal').html('Tambah Bantuan Baru');
        // Ubah teks button
        $('.modal-footer button[type=submit]').html('Tambah Data');

        // Ubah action form
        $('.modal form').attr('action', 'http://localhost/easpi/public/Bantuan/add');

        // Kosongkan isi teks
        $('#nama').val("");
        $('#nama_bantuan').val("");
        $('#jumlah_bantuan').val("");
    });
});