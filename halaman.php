<?php

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'user';
            include 'user.php';
            break;

        case 'mahasiswa';
            include 'mahasiswa.php';
            break;
            
        case 'tambahmahasiswa';
            include 'tambahmahasiswa.php';
            break;
    }
}
else
{
    ?>
   <?php include 'home.php';?>
    <?php
}