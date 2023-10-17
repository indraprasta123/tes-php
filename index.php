<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Php</title>
</head>
<style>
    main {
        padding: 30px;
    }
    h2 {
        text-align: center;
        text-decoration: underline;
    }
    .no-2 {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    .soal {
        margin-top: 50px;
    }
    .no-2 {
        padding-top: 20px;
    }
    .jawaban-2 p {
        margin-top: 0;
    }
</style>
<body>
    <main>
        <div class="title">
            <h2>Tugas Latihan Pertemuan 2</h2>
            <p>Nama : Indraprasta Dwinanda Fahreza</p>
            <p>Nim: 32222001 </p>
            <p>Kelas : TI3B</p>
        </div>
        <div class="soal">
            <p>Buatlah Program kasus :</p>
            <div class="no-1">
                <p>1. Jika a=10, b=13, c=20, d=20, jumlahkan nilai a,b,c,d dan hitung rata-ratanya</p>
                <p><strong>Jawab :</strong></p>
                <div class="jawaban">
                    <?php
                    $a = 10;
                    $b = 13;
                    $c = 20;
                    $d = 20;
                    $jumlah = $a + $b + $c + $d;
                    $rata2 = $jumlah / 4;
                    echo "Hasil dari penjumlahan tersebut adalah : $rata2"
                        ?>
                </div>
            </div>
            <div class="no-2">
                <p>2. Diketahui rumus tentukan nilai</p>
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mi>x</mi>
                    <mo>=</mo>
                    <mrow>
                        <mfrac>
                            <mrow>
                                <mn>a+b+c</mn>
                            </mrow>
                            <mrow>
                                <msup>
                                    <mi>y</mi>
                                    <mn>2</mn>
                                </msup>
                            </mrow>
                        </mfrac>
                    </mrow>
                </math>
                <p>tentukan nilai a,b,c dan y sendiri</p>
            </div>
            <div class="jawaban-2">
                <p><strong>Jawab :</strong></p>
                <p>Jika a= 10 , b= 13 , c = 20 dan y= 2</p>
                <?php
                $a = 10;
                $b = 13;
                $c = 20;
                $y = 2 * 2;
                $jumlah = $a + $b + $c;
                $hasil = $jumlah / $y;
                echo "Hasil dari penjumlahan tersebut adalah : $hasil"
                ?>
            </div>
        </div>
    </main>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
<?php
// echo "<h2>Belajar PHP itu mudah!</h2>";
// echo ("Hello world!<br>");
// echo "Aku sedang belajar PHP!<br>";
// echo "Ini ", "teks ", "yang ", "dibuat ", "terpisah.";
// print "<h2>Belajar PHP dari Nol!</h2>";
// print "Hello world!<br>";
// print "Belajar mecetak teks di PHP!";

// $txt1 = "Tutorial PHP";
// $txt2 = "petanikode.com";
// $x = 5;
// $y = 4;

// echo "<h2>" . $txt1 . "</h2>";
// echo "Aku belajar pemrograman PHP di " . $txt2 . "<br>";
// echo $x + $y;

// // tipe data char (karakter)
// $jenis_kelamin = 'L';

// // tipe data string (teks)
// $nama_lengkap = "Petani Kode";

// // tipe data integer
// $umur = 20;

// // tipe data float
// $berat = 48.3;

// // tipe data float
// $tinggi = 182.2;

// // tipe data boolean
// $menikah = false;

// echo "Nama: $nama_lengkap<br>";
// echo "Jenis Kelamin: $jenis_kelamin<br>";
// echo "Umur: $umur tahun<br>";
// echo "berat badan: $berat kg<br>";
// echo "tinggi badan: $tinggi cm<br>";
// echo "menikah: $menikah";

// $nama = "indraprasta";
// $a = 2;
// $b = 3.5;
// echo "nama saya = $a <br>";
// echo "nama saya = $b <br>";

// $p = 20;
// $l = 10;
// $jk = "L";
// $kurang= $p-$l;
// $tambah= $p+$l;
// $luas = $p*$l;

// echo "luas persegi panjang = $luas <br />";
// echo "luas penguranngan panjang = $kurang <br />";
// echo "luas penambahan panjang = $tambah";

// $a = 10;
// $b = 13;
// $c = 20;
// $d = 20;
// $jumlah = $a+$b+$c+$d;
// $rata = $jumlah/4;
// echo "hasil dari penjumlahan tsb adalah : $rata"

?>
<!-- </body>
</html> -->