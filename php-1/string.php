<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php
    echo "<h3> Soal No 1</h3>";
    /* 
        SOAL NO 1
        Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

        Contoh: 
        $string = "PHP is never old";
        Output:
        Panjang string: 16, 
        Jumlah kata: 4 
    */

    $first_sentence = "Hello PHP!"; // Panjang string 10, jumlah kata: 2
    $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
    

    // Output untuk $first_sentence
    echo "Kalimat pertama: \"$first_sentence\"<br>";
    echo "Panjang string: " . strlen($first_sentence) . "<br>";
    echo "Jumlah kata: " . str_word_count($first_sentence) . "<br><br>";

    // Output untuk $second_sentence
    echo "Kalimat kedua: \"$second_sentence\"<br>";
    echo "Panjang string: " . strlen($second_sentence) . "<br>";
    echo "Jumlah kata: " . str_word_count($second_sentence) . "<br>";

    echo "<h3> Soal No 2</h3>";
    /* 
        SOAL NO 2
        Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
    */
    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";

    // Pecah string menjadi array kata
    $words = explode(" ", $string2);

    // Ambil kata-kata berdasarkan indeks array
    echo "Kata pertama: " . $words[0] . "<br>";
    echo "Kata kedua: " . $words[1] . "<br>";
    echo "Kata ketiga: " . $words[2] . "<br>";

    echo "<h3> Soal No 3 </h3>";
    /*
        SOAL NO 3
        Mengubah karakter atau kata yang ada di dalam sebuah string.
    */
    $string3 = "PHP is old but sexy!";
    echo "String sebelum diubah: \"$string3\"<br>";

    // Mengganti kata 'sexy' dengan 'awesome'
    $string3 = str_replace("sexy", "awesome", $string3);

    // Tampilkan hasil setelah diubah
    echo "String setelah diubah: \"$string3\"";

    ?>
</body>

</html>