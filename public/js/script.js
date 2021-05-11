$(function(){


    $('.tombolTambahData').on('click', function(){
        
        $('#formModalLabel').html('Tambah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });


    $('.tampilModalUbah').on('click', function(){
        
        $('#formModalLabel').html('Ubah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $

        const id = $(this).data('id');
        // console.log(id);
        
        $.ajax({
            url: 'http:://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nama);
                $('#email').val(data.nama);
                $('#jurusan').val(data.nama);
            }
        });

    });

});