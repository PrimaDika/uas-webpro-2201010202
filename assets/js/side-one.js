function DeleteBuku(id_buku) {
    Swal.fire({
      title: 'Yakin Ingin Menghapus?',
      text: "Anda Tidak Akan Bisa Mengembalikan Data Ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Hapus!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
            'Data Terhapus!',
            'buku sudah dihapus!',
            'success'
          ).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `proces/hapus-buku.php?id_buku=${id_buku}`;
            }
          })
       
      }
    });
}