<?php
ini_set('display_errors','0');
include_once "inc/conn.php";
session_start();

function clear($input)
{
    $input = trim($input);
    $input = htmlspecialchars($input,ENT_QUOTES,'UTF-8');
    $input = strip_tags($input);
    return $input ;
}    



if(isset($_GET['url'])){
    $url = clear($_GET['url']);
    $sql =  mysqli_query($conn,"DELETE FROM `visitor` WHERE url = '$url'");
    header('location:dashboard.php');

}

?>