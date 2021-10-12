<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$posts = [

'10/01/2019' => [
    [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
    ],
    [
        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 2'
    ],
],
'10/02/2019' => [
    [
        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 3'
    ]
],
'15/05/2019' => [
    [
        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 4'
    ],
    [
        'title' => 'Post 5',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 5'
    ],
    [
        'title' => 'Post 6',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 6'
    ]
],
];
 
foreach ( $posts as $key => $data){
    echo $key. "<br/>";
    foreach($data as $post){
        
         
            echo $post['title']. "<br/>";
        
    };



};

$vettore=[];
$i=0;
while ($i<15 ){
    $numero=rand(0,20);
    if(!in_array($numero,$vettore)){
        array_push($vettore, $numero);
        $i++;
    }
    
    
};
var_dump($vettore);


$paragrafo= 'All inizio di un luglio straordinariamente caldo, 
verso sera, un giovane scese per strada dallo stanzino che aveva preso in affitto in vicolo S., 
e lentamente, come indeciso, si diresse verso il ponte K. Sulle scale riuscì a evitare l incontro con la padrona di casa.
 Il suo stanzino era situato proprio sotto il tetto di un alta casa a cinque piani, e ricordava più un armadio che un
  alloggio vero e proprio. La padrona dell appartamento, invece, dalla quale egli aveva preso in affitto quello stambugio,
   vitto e servizi compresi, viveva al piano inferiore, in un appartamento separato, e ogni volta che egli scendeva 
   in strada gli toccava immancabilmente di passare accanto alla cucina della padrona, che quasi sempre teneva la porta
    spalancata sulle scale. E ogni volta, passandole accanto, il giovane provava una sensazione dolorosa e vile, della 
    quale si vergognava e che lo portava a storcere il viso in una smorfia. Doveva dei soldi alla padrona, e temeva
     d incontrarla.';
    $divisore = explode('.', $paragrafo);
    foreach ($divisore as $paragrafo){
        echo '<p>'. $paragrafo.'</p>';
    }
?>
</body>
</html>
<?php

