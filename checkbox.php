
 <?php 
 
if(isset($_POST['name'])) {

    $gender=$_POST['gender'];
    $hobbies=$_POST['hobby'];

    echo $gender ;
    echo $hobbies;
    // die();

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
    <style>
    .myclass{
    width:400px;
    height:25px;
    background-color:rgba(219, 223, 223, 1);
    border-radius:10px
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

<form action='<?php htmlspecialchars(string:$_SERVER['PHP_SELF'])?>' method="post">


    <label>Gender:</label><br>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br><br>

    <label>Hobbies:</label><br>
    <input type="checkbox" name="hobby" value="reading"> Reading
    <input type="checkbox" name="hobby" value="sports"> Sports
    <input type="checkbox" name="hobby" value="music"> Music
    <br><br>
    <input type="file" name="file" >
    <br><br>

    

    <button class="mybtn" type="submit">Submit</button>

</form>
</div>

</body>
</html>
