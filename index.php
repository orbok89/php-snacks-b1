<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks</title>
</head>
<body>
    <?php
     $partite = [
        [
            "squadra1" => "armani",
            "squadra2" => "cantu",
            "punteggio1"=> 50,
            "punteggio2"=> 60,
        ],

        [
            "squadra1" => "monaco",
            "squadra2" => "zenit",
            "punteggio1"=> 65,
            "punteggio2"=> 70,
        ],
        [
            "squadra1" => "cska",
            "squadra2" => "stella rossa",
            "punteggio1"=> 40,
            "punteggio2"=> 100
        ]
    ];

        for ($i=0; $i< count($partite); $i++){
            echo "<div>".$partite[$i][squadra1]." - " .  $partite[$i][squadra2] . " | " .$partite[$i][punteggio1]."-".$partite[$i][punteggio1]."</div>" ;  
        }
        $nome = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];
       
          if ( strlen($nome) >= 3 && strpos( $mail,"." ) !== false && strpos( $mail,"@" ) !== false && is_numeric($age)) {
              echo "accesso riuscito";
          } 
          else {
              echo "accesso negato";
          }
    



    ?>
</body>
</html>