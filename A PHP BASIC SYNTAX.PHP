
<?php
    $txt='php';
    echo 'I love'. $txt ; //Cara print di php
    
    $x=5; $y=5;
    print $x+$y; //var_dump untuk tipe data angka

    echo strlen("Hello world!"); // outputs 12

    echo str_word_count("Hello world!"); // outputs 2

    echo strrev("Hello world!"); // outputs !dlrow olleH

    define("cars", [ //array
        "Alfa Romeo",
        "BMW",
        "Toyota"
      ]);
      echo cars[0];
    
    $z = 0;

    while($z <= 100) {   //while loop
    echo "The number is: $z <br>";
    $z+=10;
    }

    for ($x = 0; $x <= 10; $x++) { //for loop
        echo "The number is: $x <br>";
      }
    
?>