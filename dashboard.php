<?php

include_once "inc/conn.php";
session_start();

if($_SESSION['email'] == "admin@gmail.com"){

    $select = mysqli_query($conn,"SELECT * FROM visitor");

    $num =  mysqli_num_rows($select);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/php.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <a href="logout.php" id="logout">LogOut</a>
        <div>
            <h1>Dashboard</h1><br>
        </div>

        <div>
       
            <h3>Emails Total : <span><?= $num; ?></span></h3><br>
            <hr>

            <table>
                <tr>
                    <th>Email</th>
                    <th>time</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <?php
                    
                    while($data = mysqli_fetch_array($select)){
                    
                        echo '<td><a href="mailto:'.$data['email'].'">'.$data['email'].'</a></td>';
                        echo '<td>'.$data['time'].'</td>';
                        echo '<td><a href="delete.php?url='.$data['url'].'">Delete</a></td></tr>';
                    
                    }
                    ?>  
            </table>
        </div>
        
  




        </div>
</body>
</html>
<?php

}else{
    header('loaction:login.php');
    exit;
}