<?php 
if(isset($_POST['name'])) {

    echo "GET DATA:<br>";
    var_dump($_GET);

    echo "<br><br>REQUEST DATA:<br>";
    var_dump($_REQUEST);

    echo "<br><br>POST DATA:<br>";
    var_dump($_POST);

    
    $name=$_POST['name'];
    $email=$_POST['email'];

    echo $name;
}

?>

<?php
echo '
<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
    <style>
        .myclass{
            width:400px;
            height:25px;
            background-color:rgba(219, 223, 223, 1);
            border-radius:10px;
        }
        .mydiv{
            width:800px;
            margin:auto;
            padding:50px 50px 50px 200px;
        }
        input{
            color:blue;
            margin:10px;
        }
        .mybtn{
            height:40px;
            width:150px;
            border-radius:10px;
            margin:10px;
        }
    </style>
</head>
<body>

<div class="mydiv">
<h2>Simple Form</h2>

<form action="'. htmlspecialchars (
 $_SERVER['PHP_SELF']).'
  " method="POST">

    <label>Name:</label><br>
    <input class="myclass" type="text" name="name" required><br><br>
    <label>Phone:</label><br>
    <input class="myclass" type="text" name="phone" required><br><br>
    <label>Email:</label><br>
    <input class="myclass" type="email" name="email" required><br><br>
    <label>Password:</label><br>
    <input class="myclass" type="password" name="password" required><br><br>
    <label>Gender:</label><br>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br><br>
    <label>Hobbies:</label><br>
    <input type="checkbox" name="hobby[]" value="reading"> Reading
    <input type="checkbox" name="hobby[]" value="sports"> Sports
    <input type="checkbox" name="hobby[]" value="music"> Music
    <br><br>
    <label>Subject:</label><br>
    <select name="Subject">
        <option value="">--Select--</option>
        <option value="POM">POM</option>
        <option value="PHP">PHP</option>
        <option value="DBMS">DBMS</option>
        <option value="Linear">Linear Algebra</option>
        <option value="OOA">OOA</option>
    </select><br><br>
    <button class="mybtn" type="submit">Submit</button>

</form>
</div>
</body>
</html>
';
?>
