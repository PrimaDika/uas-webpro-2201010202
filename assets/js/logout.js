function LogoutAlert() {
    Swal.fire({
      title: 'Yakin Ingin <br> LogOut?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
            'LogOut Berhasil!',
            'dialihkan ke halaman login!',
            'success'
          ).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `proces/proces-logout.php`;
            }
          })
       
      }
    });
}