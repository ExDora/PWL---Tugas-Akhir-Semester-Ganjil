<?php
    echo "Hello, World";

    echo"\n";
    $name;
    $name = "William Tjandera";
    echo $name;

    echo"\n";

    $addres = "Gang Bumi indah permai";
    echo $addres;


    // Intiger
    $age = "21";

    //Float /Double
    $b=21.4;
    
    //Boolean
    $c = true;
    $d = false;

    //String
    $e = "Ini tipe data string";

    //Array
    $listname = ["Andi", "Nina", "Budi"];
    echo "\n";

    echo $listname[0];
    echo $listname[1];
    echo $listname[2];

    //Array Asosiatif
    $data =[

        "Andi" => [
            "umur" => 21,
            "alamat" => "Alamat Andi",
        ],
        "Budi" => [
            "umur" => 20,
            "alamat" => "Alamat Budi",
        ],
    ];
    // Umur Andi: 21 tahun
    echo $data ["Andi"] ["umur"];

    $data2 = [

        "Nina"=> "Ini deskripsi nina"
    ];

    //  Operator Matematika
    $a = 10;
    $b = 5;


    echo $a + $b; // Penambahan
    echo $a * $b; // Perkalian
    echo $a / $b; // Pembagian
    echo $a % $b; // Modulus / Sisa Bagi
    echo $a **$b; // Perpangkatan

    // Operator Logika
    $a = true;
    $b = false;

    
    echo $a && $b; // AND = False
    echo $a || $b; // OR = True
    echo !$a; // NOT/Negasi = False

    // Operator Pembandingan
    $a = 10;
    $b = 5;

    echo $a == $b; // Membandingkan Apakah Value Sama = False
    echo $a > $b; // Membandingkan apakah value lebih besar = True
    echo $a < $b; // Membandingkan apakah value lebih kecil = False
    echo $a != $b; // Membandingkan apakah value Tidak sama = True

   //IF ELSE
    $nilai = 80;

    if($nilai > 80) {
        echo "Nilai A";
    } elseif($nilai > 70) {
        echo "Nilai B";
    } else {
        echo "Nilai C";
    }

    // Pengulangan
    for ($i = 0; $i <= 10; $i++) {
      echo $i;
    }


    function displayMessage() {
        echo"Hello Something";
    }
    echo"\n";
    displayMessage();

    function penambahan($a, $b) {
        echo$a + $b;
    }
    echo "\n";
    penambahan(2,3);


?>