<?php 
    include 'database.php';
    var_dump($db);
    foreach ($db as $key => $persona ){
        if ($key == 'teachers'){
            echo '<div class=insegnanti>';
            foreach($persona as $nomi){
                echo $nomi['name'].'</br>';
            }
            echo '</div>';
        }
        else{
            echo '<div class=pm>';
            foreach($persona as $nomi){
                echo $nomi['name'].'</br>';
            }
            echo '</div>';
        }
    }    




?>
<style>
    .insegnanti{
        background-color: red;
        width: 300px;
        height: 200px;
    }
    .pm{
        width: 300px;
        height: 200px;
        background-color: green;
    }
</style>