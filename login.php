<?php
include_once "inc/conn.php";
session_start();
$_SESSION['error'] = "";
function clear($input)
{
    $input = trim($input);
    $input = htmlspecialchars($input,ENT_QUOTES,'UTF-8');
    $input = strip_tags($input);
    return $input ;
}    


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['email']))
    {
        $email = clear($_POST['email']);

    }
    if(isset($_POST['password']))
    {
        $password = clear($_POST['password']);
        
    }
    
    if(!isset($_POST['email']) || $_POST['email'] == ""){

        $_SESSION['error'] = "PLEASE ENTER EMAIL";
    }
    if(!isset($_POST['password']) || $_POST['password'] == ""){
        $_SESSION['error'] = "PLEASE ENTER PASSWORD";
        
    }
    
    if(!isset($_POST['token']) || $_POST['token'] == ""){
    
        $_SESSION['error'] = "ERROR";
    }
    
    if(isset($_POST['token']))
    {
        $token = clear($_POST['token']);
        
    }
    
    if($_SESSION['error'] == "" || !isset($_SESSION["error"])){
        if($token === $_SESSION['token'] && time() <= $_SESSION['token-expire']){
            $sql = "SELECT email,password FROM `users` WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
    
                if ($row['email'] === $email && $row['password'] === $password) {
                    //$_SESSION['ok'] = "Logged in successfully";
                    $_SESSION['email'] = $email;
                    header('location:dashboard.php');
    
                    exit();
                }

            }

        }
    }

            

        
        
}

$_SESSION['token'] = $token = bin2hex(random_bytes(32));
$_SESSION['token-expire'] = time() + 120 ; // 1 min

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/php.css">
    <meta name="theme-color" content="#4285f4" />

</head>
<body>
<?php if(isset($_SESSION['error']) && $_SESSION['error'] != ""):?>
    <div class="error">
<?php
{
echo $_SESSION['error'];
}
unset($_SESSION['error']);

?>
</div>
<?php endif ;?>


<?php if(isset($_SESSION['ok']) && $_SESSION['ok'] != ""):?>
    <div class="ok">
<?php
{
echo $_SESSION['ok'];
}
unset($_SESSION['ok']);

?>
</div>
<?php endif ;?> 
<div class="container">
<div>
    <h1>Admin Login</h1>
</div>

<form action="" method="post">
    <div>
     <label for="email">Email</label><br>
<input type="text" name="email" id="email" value="">   
    </div>

    <div>
    <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>">
    <label for="password">Password</label><br>
<input type="text" name="password" id="password" value="">    
    </div>

<button type="submit" name="submit">Login</button>

</div>
</form>
</body>
</html>