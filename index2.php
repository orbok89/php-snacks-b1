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
        
        foreach($post as $contenuto){
            echo $contenuto. "<br/>";
        }
    }
}
?>
</body>
</html>
<?php

