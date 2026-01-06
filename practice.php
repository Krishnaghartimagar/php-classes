<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

$conn = mysqli_connect("localhost", "Krishna", "Krishna@123", "Student");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully";
?>

    echo "your name is $name <br>";
    echo "your name is $email ";


}
?>

<html>
    <body>
        <form action='
        <?php
        htmlspecialchars($_SERVER['PHP_SELF'])
        ?>'
        method="POST">
        <label>Name</label>
        <input type="text" name="name" value='
        <?php 
        if(isset($name))
            echo $name;
        ?>'>
        <br><br>
        <label>Email</label>
        <input type="email" name = "email" value = '
        <?php
        if(isset($email))
            echo $email;
        ?>'>
        <button type="submit">Submit</button>

</form>
</body>
</html>