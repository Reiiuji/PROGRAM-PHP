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


//2. jelaskan perbedaan antara array asosiatif dan array numerik 
// ### **Perbedaan antara Array Asosiatif dan Array Numerik di PHP**

// #### 1. **Array Numerik**
// - **Definisi**: 
//   Array di mana elemen-elemen disusun berdasarkan indeks berupa angka (integer). Indeks ini secara otomatis dimulai dari 0, kecuali ditentukan secara manual.
  
// - **Ciri-ciri**:
//   - Indeksnya **numerik** (angka).
//   - Elemen diakses berdasarkan **posisi indeks**.
//   - Cocok untuk data yang bersifat terurut.

// - **Contoh**:
//   ```php
//   $arrayNumerik = ["Apel", "Jeruk", "Mangga"];

//   // Akses elemen berdasarkan indeks
//   echo $arrayNumerik[0]; // Output: Apel
//   echo $arrayNumerik[2]; // Output: Mangga
//   ```

// ---

// #### 2. **Array Asosiatif**
// - **Definisi**: 
//   Array di mana indeks (key) adalah string atau nama deskriptif yang dibuat oleh pengguna. Elemen-elemen array disusun sebagai pasangan *key-value*.
  
// - **Ciri-ciri**:
//   - Indeksnya berupa **string** (key).
//   - Elemen diakses menggunakan **key**.
//   - Cocok untuk data yang memerlukan label atau pasangan *key-value*.

// - **Contoh**:
//   ```php
//   $arrayAsosiatif = [
//       "nama" => "Nadia",
//       "umur" => 21,
//       "pekerjaan" => "Mahasiswa"
//   ];

//   // Akses elemen berdasarkan key
//   echo $arrayAsosiatif["nama"]; // Output: Nadia
//   echo $arrayAsosiatif["pekerjaan"]; // Output: Mahasiswa
//   ```

// ---

// ### **Perbandingan Utama**

// | **Aspek**         | **Array Numerik**                           | **Array Asosiatif**                        |
// |--------------------|---------------------------------------------|--------------------------------------------|
// | **Indeks**         | Angka secara otomatis dimulai dari 0.       | String atau key deskriptif yang dibuat oleh pengguna.   |
// | **Akses Elemen**   | Menggunakan indeks numerik (angka).         | Menggunakan key (string).                  |
// | **Penggunaan**     | Untuk data yang terurut atau posisi elemen penting. | Untuk data yang memerlukan identitas melalui key. |
// | **Contoh Deklarasi** | `$arr = [1, 2, 3];`                        | `$arr = ["nama" => "Nadia"];`              |

// ---

// ### Contoh Penggunaan Keduanya:

// ```php
// // Array Numerik
// $buah = ["Apel", "Jeruk", "Mangga"];
// echo "Buah favorit: " . $buah[1]; // Output: Jeruk

// // Array Asosiatif
// $info = [
//     "nama" => "Nadia",
//     "umur" => 21
// ];
// echo "Nama: " . $info["nama"]; // Output: Nadia
// ```

// ### Kesimpulan:
// - **Array Numerik**: Cocok untuk data yang terurut atau bergantung pada posisi elemen.
// - **Array Asosiatif**: Cocok untuk data yang memerlukan pasangan *key-value* agar lebih deskriptif.


//3.BUATLAH SEBUAH ARRAY KOSONG, LALU ISIKAN ARRAY TERSEBUT DENGAN ANGKA GENAP DARI 1-20 MENGGUNAKAN PERULANGAN FOR DAN CETAK KEMBALI ARRAY TERSEBUT DENGAN PERULANGAN FOREACH 


    // Inisialisasi array kosong
    $angkaGenap = [];
    
    // Mengisi array dengan angka genap dari 1 hingga 20 menggunakan perulangan for
    for ($i = 2; $i <= 20; $i += 2) {
        $angkaGenap[] = $i; // Menambahkan angka ke dalam array
    }
    
    // Menampilkan isi array menggunakan perulangan foreach
    foreach ($angkaGenap as $angka) {
        echo $angka . "<br>";
    }
    

//4. BUATKAN SEBUAH ARRAY ASOSIATIF MULTIDIMENSI YANG BERISI INFORMASI BUKU, SEPERTI JUDUL, PEMULIS TAHUN TERBIT DAN HARGA
    


// Array asosiatif multidimensi yang berisi informasi buku
$buku = [
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "tahun_terbit" => 2005,
        "harga" => 80000
    ],
    [
        "judul" => "Bumi",
        "penulis" => "Tere Liye",
        "tahun_terbit" => 2014,
        "harga" => 95000
    ],
    [
        "judul" => "Negeri 5 Menara",
        "penulis" => "Ahmad Fuadi",
        "tahun_terbit" => 2009,
        "harga" => 85000
    ]
];

// Menampilkan informasi setiap buku
foreach ($buku as $infoBuku) {
    echo "Judul: " . $infoBuku["judul"] . "<br>";
    echo "Penulis: " . $infoBuku["penulis"] . "<br>";
    echo "Tahun Terbit: " . $infoBuku["tahun_terbit"] . "<br>";
    echo "Harga: Rp " . number_format($infoBuku["harga"], 0, ',', '.') . "<br><br>";
}










?>