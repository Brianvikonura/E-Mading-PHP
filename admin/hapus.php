<?php

    include '../koneksi.php';

    if (isset ($_GET['id_artikel'])) {

        // Untuk menghapus file pada folder uploads dari halaman product
        $artikel = mysqli_query($conn, "SELECT header FROM tb_artikel WHERE id_artikel = '".$_GET['id_artikel']."' ");
        if(mysqli_num_rows($artikel) > 0) {
            $p = mysqli_fetch_object($artikel);
            if(file_exists("../uploads/artikel/".$p->header)) {
                unlink("../uploads/artikel/".$p->header);
            }
        }

        // Untuk menghapus data pada halaman our products dan database
        $delete = mysqli_query($conn, "DELETE FROM tb_artikel WHERE id_artikel = '".$_GET['id_artikel']."' ");
        echo "<script>window.location = 'index.php'</script>";
    }

?>