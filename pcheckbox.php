<?php
if(isset($_POST['name'])){
    $gender=$_POST['gender'];
    $hobby=$_POST['hobby'];

   echo "$gender";
   echo "$hobby";


}
?>
<html>
    <body>
        <form action='
        <?php htmlspecialchars($_SERVER['PHP_SELF'])
        ?>' method="POST">
        <label>Gender</label>
        <input type="radio" name="gender" value="male" >Male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="others">others
        <br>
        <br>
        <label>Hobby</label>
        <input type="checkbox" name="hobby" value="reading">Reading
        <input type="checkbox" name="hobby" value="writing">writing
        <input type="checkbox" name="hobby" value="spaking">speaking
        <button>submit</button>
        <form>
            <body>
                <html>