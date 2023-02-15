<?php
if(isset ($_POST['tambah'])){
    
    include ('koneksidata.php');
    
    $nama           =$_POST['nama'];
    $email          =$_POST['email'];
    $judul          =$_POST['judul'];
    $isi            =$_POST['isi'];
    
    $input = mysqli_query($koneksi,"insert into pesan_customer VALUES('$nama', '$email', '$judul', '$isi')");
    
    if($input){
        
        echo "<script> alert ('Pesanan Berhasil Ditambahkan'); location = 'index.php';</script>";
    }
    else{
        echo "<script> alert ('Pesanan Gagal Dikirim'); location = 'index.php';</script>";
    }
}else{
    echo '<script>window.history.back()</script>';
}

?>