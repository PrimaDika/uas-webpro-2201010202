function RefreshPage() {
    location.reload();
  }

function DeleteAlert(kd_peminjaman) {
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
            'success'
          ).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `proces/hapus.php?kd_peminjaman=${kd_peminjaman}`;
            }
          })
       
      }
    });
}





function AlertCreate() {
    Swal.fire(
        'Sip Mantap!',
        'Data Berhasil Ditambahkan!',
        'success'
      ).then((result) => {
        if (result.isConfirmed) {
          // Jalankan fungsi untuk mengirimkan formulir
          submitForm();
        }
      });
}

function AlertUpdate() {
    Swal.fire(
        'Wokeh Sip!',
        'Data Berhasil Diupdate!',
        'success'
      ).then((result) => {
        if (result.isConfirmed) {
          // Jalankan fungsi untuk mengirimkan formulir
          submitFormUpdate();
        }
      });
}

function submitForm() {
    // Ambil elemen form menggunakan ID atau selektor lain
    var form = document.getElementById('formPeminjaman');
  
    // Jalankan pengiriman formulir
    form.submit();
  }

function submitFormUpdate() {
    // Ambil elemen form menggunakan ID atau selektor lain
    var form = document.getElementById('formPeminjamanUpdate');
  
    // Jalankan pengiriman formulir
    form.submit();
  }