    <?php
    if(isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    } else {
        $errormessage_name = "Name field cant be empty"; 
    }
    if(isset($_POST['password']) && strlen($_POST['password']) >= 8) {
        $password = $_POST['password'];
    } else {
        $errormessage_pw = "LOGIN FAILED PASSWORD MUST BE ATLEAST 8 CHRACTER LONG";
    }

if (!($errormessage_name) && !($errormessage_pw)) {

    if(!isset($_SESSION)){
    session_start();
    $_SESSION['name'] = $name;
    }
    $_SESSION['loggedin'] = true;
    echo "LOGIN SUCCESSFUL. WELCOME mr/mrs.". $_SESSION['name'].'<br><br><br>';
    echo'
    <form method = GET> <button type = "logout">LOGOUT</button></form>
    ';

    if(isset($_POST['logout'])){
        session_destroy();
        exit();
    }
}
?>
<!DOCTYPE html>
    <head>
        <title>form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <?php 
                    echo (isset($errormessage_name) ? $errormessage_name : '');
                ?>
                <label for="name">User Name:</label><br>
                <input type="text" id="name" name="name"><br><br>
                <?php
                    echo ( !empty($errormessage_pw) ? $errormessage_pw : '' );
                ?>
                <label for="name">Password:</label><br>
                    <input type="password" id="password" name="password"><br><br>
        <button type="submit" name="logout">Login</button>
            </form>
    </body>
</html>