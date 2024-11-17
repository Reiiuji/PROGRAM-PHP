<?php

// 1. Buatlah program php yang menampilkan Biodata Kalian yang berisi variable nama, kelas, npm, jurusan, fakultas dengan ouput :
// Nama : 
// Kelas :
// Npm :
// Jurusan :
// Fakultas :

$Nama = "????";
$Kelas = "????";
$Npm = "????";
$Jurusan = "????";
$Fakultas = "????";

echo "Nama : " . $Nama . "<br>";
echo "Kelas : " . $Kelas . "<br>";
echo "NPM : " . $Npm . "<br>";
echo "Jurusan : " . $Jurusan . "<br>";
echo "Fakultas : " . $Fakultas . "<br>";


echo "<br>" ;

//2.JELASKAN PENGERTIAN DARI CASE SENSITIFE DAN BERIKAN CONTOHNYA (TIDAK PERLU MEMBUAT PROGRAM )
// ### **Pengertian Case Sensitive**
// **Case Sensitive** adalah istilah yang menunjukkan bahwa suatu sistem, bahasa pemrograman, atau lingkungan membedakan huruf besar (kapital) dan huruf kecil (non-kapital). Dalam konteks ini, kata atau istilah yang ditulis dengan huruf besar dan kecil dianggap berbeda.

// ### **Contoh Pengertian Case Sensitive di PHP**
// PHP adalah **case-sensitive** dalam beberapa aspek tertentu, seperti variabel dan fungsi buatan pengguna, namun **case-insensitive** dalam aspek lainnya, seperti nama fungsi bawaan.

// ---

// ### **Contoh Kasus Case Sensitive**
// 1. **Variabel**:
//    - Variabel di PHP bersifat **case-sensitive**, sehingga:
//      ```php
//      $nama = "Lania";
//      echo $Nama; // Akan menghasilkan error karena $Nama berbeda dengan $nama.
//      ```

// 2. **Fungsi Buatan Pengguna**:
//    - Fungsi yang dibuat pengguna juga **case-sensitive**.
//      ```php
//      function cetakPesan() {
//          echo "Halo!";
//      }
//      CetakPesan(); // Error, karena penulisan huruf besar-kecil berbeda.
//      ```

// ---

// ### **Contoh Kasus Case Insensitive**
// 1. **Fungsi Bawaan**:
//    - Nama fungsi bawaan PHP **tidak case-sensitive**, sehingga:
//      ```php
//      echo "Halo!"; // Berfungsi normal.
//      ECHO "Halo!"; // Juga berfungsi normal.
//      ```

// 2. **Nama Kelas (Class Names)**:
//    - Nama kelas juga **case-insensitive** di PHP:
//      ```php
//      class MyClass {}
//      $obj = new MYCLASS(); // Tidak menghasilkan error.
//      ```

// ---

// ### **Kesimpulan**
// - **Case-Sensitive**: Membedakan huruf besar dan kecil, contoh: variabel `$nama` tidak sama dengan `$Nama`.
// - **Case-Insensitive**: Tidak membedakan huruf besar dan kecil, contoh: fungsi `echo` sama dengan `ECHO`.



//3. pada tahun 2020 perusahaan A menjual 6 barang dan perusahaan b menjual 2 barang 
//setiap tahunnya penjualan barang pada perusahaan a akan bertambah 1 dan perusahaan b bertambah 2 buatlah program php menggunkan for while

$tahun_awal = 2020 ;
$tahun_akhir = 2025 ; // Misalnya, sampai tahun 2025
$penjualanA = 6; // Penjualan awal perusahaan A
$penjualanB = 2; // Penjualan awal perusahaan B

echo "Menggunakan perulangan FOR:<br>";
for ($tahun = $tahun_awal; $tahun <= $tahun_akhir; $tahun++) {
    echo "Tahun $tahun: Perusahaan A menjual $penjualanA barang, Perusahaan B menjual $penjualanB barang<br>";
    $penjualanA += 1; // Penjualan perusahaan A bertambah 1 setiap tahun
    $penjualanB += 2; // Penjualan perusahaan B bertambah 2 setiap tahun
}

echo "<br>Menggunakan perulangan WHILE:<br>";
$tahun = $tahun_awal; // Reset tahun
$penjualanA = 6; // Reset penjualan perusahaan A
$penjualanB = 2; // Reset penjualan perusahaan B

while ($tahun <= $tahun_akhir) {
    echo "Tahun $tahun: Perusahaan A menjual $penjualanA barang, Perusahaan B menjual $penjualanB barang<br>";
    $penjualanA += 1; // Penjualan perusahaan A bertambah 1 setiap tahun
    $penjualanB += 2; // Penjualan perusahaan B bertambah 2 setiap tahun
    $tahun++; // Increment tahun
}

//4. ALEX MENEMUKAN PLANET BARU YANG ANEH PLANET ARRAYNUS, ALEX MENEMUKAN ARRAY BERISI 5 ANGKA GENAP YANG MELAMBANGKAN SUHU MALAM DI SANA 
//[6 ,8,12,10,16] BUAT PROGRAM PHP YANG MENGGUNAKAN ARRAY DAN PERULANGAN UNTUK MEMBANTU ALEX MENCARI ANGKA TERKECIL



// Inisialisasi array suhu malam di planet Arraynus
$suhu_malam = [6, 8, 12, 10, 16];

// Anggap angka pertama sebagai angka terkecil sementara
$angka_terkecil = $suhu_malam[0];

// Menggunakan perulangan untuk mencari angka terkecil
foreach ($suhu_malam as $suhu) {
    if ($suhu < $angka_terkecil) {
        $angka_terkecil = $suhu; // Perbarui angka terkecil jika suhu lebih kecil
    }
}

// Menampilkan hasil
echo "Suhu malam di planet Arraynus adalah: ";
echo implode(", ", $suhu_malam) . "<br>";
echo "Angka terkecil dari suhu tersebut adalah: " . $angka_terkecil;




?>



