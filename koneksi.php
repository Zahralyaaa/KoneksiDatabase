<?php
$host="localhost";
$user="root";
$password="";
$database="koneksidb";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);

//cek koneksi
if($koneksi){
echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>
