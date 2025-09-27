$(function() {

    $('.modalUbah').on('click', function() {
        $('#judulModal').html('Ubah Data Siswa');
        $('#saveChange').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#email').val(data.email);
                $('#tinggi').val(data.tinggi);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });

});