<?php 

if(isset($_POST['name'])) {

    // echo "GET DATA:<br>";
    // var_dump($_GET);

    // echo "<br><br>REQUEST DATA:<br>";
    // var_dump($_REQUEST);

    // echo "<br><br>POST DATA:<br>";
    // var_dump($_POST);

   
    $name=$_POST['name'];
    $email=$_POST['email'];
    echo "your name is $name <br>";
    echo "your email is $email";
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

<form action='<?php htmlspecialchars(string:$_SERVER['PHP_SELF'])?>'
   method="POST">

    <label>Name:</label><br>
    <input class="myclass" type="text" name="name" required value='<?php if(isset($name)) echo $name; ?>'><br><br>
    
    <label>Email:</label><br>
    <input class="myclass" type="email" name="email" value='<?php if(isset($email)) echo $email; ?>'><br><br>
    
    <button class="mybtn" type="submit">Submit</button>

</form>
</div>
</body>
</html>
