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



$today = date("F j, Y, g:i a");
$url = bin2hex(random_bytes(16));

if(isset($_POST['useremail'])){
    $useremail = clear($_POST['useremail']);

    if(filter_var($useremail,FILTER_VALIDATE_EMAIL)){
        $select = mysqli_query($conn,"SELECT * FROM `visitor` WHERE email='$useremail'");
        if(mysqli_num_rows($select)) {
            exit();
        }else{
            $sql = mysqli_query($conn,"INSERT INTO `visitor`(`email`, `time`, `url`) VALUES ('$useremail','$today','$url')");
        }



        

        
    }

}