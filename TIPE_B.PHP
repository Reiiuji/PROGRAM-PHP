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


//2.  SEBUTKAN DAN JELASKAN OPERATOR LOGIKA, OPERATOR STRING DAN OPERATOR PERBANDINGA
// Berikut adalah penjelasan tentang **operator logika**, **operator string**, dan **operator perbandingan** dalam PHP:

// ---

// ### 1. **Operator Logika**
// Operator logika digunakan untuk melakukan operasi logis pada nilai boolean (true/false). Biasanya digunakan dalam kondisi (`if`, `while`, dsb.).

// | Operator | Nama             | Fungsi                                                                          | Contoh                | Hasil           |
// |----------|------------------|---------------------------------------------------------------------------------|-----------------------|-----------------|
// | `&&`     | AND              | Bernilai `true` jika **kedua** operand bernilai `true`.                         | `(true && false)`     | `false`         |
// | `||`     | OR               | Bernilai `true` jika **salah satu** operand bernilai `true`.                    | `(true || false)`     | `true`          |
// | `!`      | NOT              | Membalik nilai boolean (true menjadi false, sebaliknya).                       | `!true`               | `false`         |
// | `and`    | AND (prioritas rendah) | Sama seperti `&&` tetapi memiliki prioritas lebih rendah dalam evaluasi.     | `true and false`      | `false`         |
// | `or`     | OR (prioritas rendah) | Sama seperti `||` tetapi memiliki prioritas lebih rendah dalam evaluasi.     | `true or false`       | `true`          |
// | `xor`    | XOR              | Bernilai `true` jika **hanya satu** operand bernilai `true`.                    | `(true xor false)`    | `true`          |

// **Contoh:**
// ```php
// $a = true;
// $b = false;

// if ($a && !$b) {
//     echo "Kondisi terpenuhi!";
// }
// ```

// ---

// ### 2. **Operator String**
// Operator string digunakan untuk melakukan operasi manipulasi string.

// | Operator | Nama            | Fungsi                                       | Contoh                            | Hasil          |
// |----------|-----------------|----------------------------------------------|-----------------------------------|----------------|
// | `.`      | Concatenation   | Menggabungkan dua string.                   | `"Hello" . " World"`              | `Hello World`  |
// | `.=`     | Concatenation Assignment | Menambahkan string ke variabel (sama seperti `+=` pada angka). | `$str .= " World"`                | `Hello World`  |

// **Contoh:**
// ```php
// $str1 = "Hello";
// $str2 = "World";

// // Menggabungkan string
// echo $str1 . " " . $str2; // Output: Hello World

// // Menambahkan string ke variabel
// $str1 .= " " . $str2;
// echo $str1; // Output: Hello World
// ```

// ---

// ### 3. **Operator Perbandingan**
// Operator perbandingan digunakan untuk membandingkan dua nilai dan mengembalikan hasil boolean (`true` atau `false`).

// | Operator | Nama            | Fungsi                                                  | Contoh            | Hasil    |
// |----------|-----------------|---------------------------------------------------------|-------------------|----------|
// | `==`     | Equal           | Bernilai `true` jika kedua operand memiliki nilai sama. | `5 == '5'`        | `true`   |
// | `===`    | Identical       | Bernilai `true` jika kedua operand memiliki nilai **dan tipe** yang sama. | `5 === '5'` | `false`  |
// | `!=`     | Not Equal       | Bernilai `true` jika kedua operand memiliki nilai berbeda. | `5 != 4`        | `true`   |
// | `<>`     | Not Equal       | Sama seperti `!=`.                                      | `5 <> 4`          | `true`   |
// | `!==`    | Not Identical   | Bernilai `true` jika nilai **atau tipe** berbeda.        | `5 !== '5'`       | `true`   |
// | `<`      | Less Than       | Bernilai `true` jika operand kiri lebih kecil.           | `3 < 5`           | `true`   |
// | `>`      | Greater Than    | Bernilai `true` jika operand kiri lebih besar.           | `5 > 3`           | `true`   |
// | `<=`     | Less or Equal   | Bernilai `true` jika operand kiri lebih kecil atau sama. | `5 <= 5`          | `true`   |
// | `>=`     | Greater or Equal| Bernilai `true` jika operand kiri lebih besar atau sama. | `5 >= 4`          | `true`   |
// | `<=>`    | Spaceship       | Mengembalikan -1, 0, atau 1 (kiri <, =, > kanan).        | `3 <=> 4`         | `-1`     |

// **Contoh:**
// ```php
// $a = 10;
// $b = "10";

// // Perbandingan nilai
// echo ($a == $b) ? "Sama" : "Tidak sama"; // Output: Sama

// // Perbandingan tipe dan nilai
// echo ($a === $b) ? "Identik" : "Tidak identik"; // Output: Tidak identik
// ```

// ---

// ### Ringkasan
// - **Operator Logika**: Mengatur logika boolean (AND, OR, NOT).
// - **Operator String**: Manipulasi string dengan penggabungan.
// - **Operator Perbandingan**: Membandingkan dua nilai untuk menghasilkan boolean (`true` atau `false`).


//3. BUATLAH PROGRAM PHP MENGGUNAKAN PERULANGAN FOR UNTUK MENAMPILKAN DERET BILANGAN GENAP DARI 4 HINGGA 20.


// Perulangan for untuk menampilkan bilangan genap
for ($i = 4; $i <= 20; $i += 2) {
    echo $i . "<br>"; // Tampilkan angka dan pindah ke baris baru
}

//4. BUATLAH PROGRAM PHP YANG MENGGUNAKAN ARRAY UNTUK MENYIMPAN SEKUMPULAN ANGKA. KEMUDIAN GUNAKAN PERULANGAN UNTUK MENEMUKAN DAN MENAMPILKAN ANGKA TERBESAR


// Array yang menyimpan sekumpulan angka
$angka = [15, 42, 7, 89, 23, 54, 99, 12];

// Inisialisasi variabel untuk menyimpan angka terbesar
$terbesar = $angka[0]; // Asumsikan elemen pertama adalah yang terbesar

// Perulangan untuk mencari angka terbesar
foreach ($angka as $nilai) {
    if ($nilai > $terbesar) {
        $terbesar = $nilai; // Update angka terbesar jika ditemukan nilai lebih besar
    }
}

// Tampilkan angka terbesar
echo "Angka terbesar dalam array adalah: $terbesar";










?>