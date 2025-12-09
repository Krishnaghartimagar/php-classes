<?php
$errormessage_name = "";
$errormessage_email = "";
$name = "";
$email = "";
$age = "";
$hobby = "";

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    if ($name == '') { 
        $errormessage_name .= 'Name cant be empty<br>';
    }
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if ($email == '') {
        $errormessage_email .= 'Email cant be empty<br>';
    }
}

if (isset($_POST['age'])) {
    $age = $_POST['age'];
}

if (isset($_POST['hobby'])) {
    $hobby = $_POST['hobby'];
}
echo '

<!DOCTYPE html>
<head>
    <title>form</title>
</head>
<body>
<h1>Registration Form</h1>

<form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post">

'.(isset($errormessage_name) ? $errormessage_name : '').'

<label for="name">Full Name:</label><br>
<input type="text" id="name" name="name" value="'.$name.'" ><br><br>

'.(isset($errormessage_email) ? $errormessage_email : '').'
<label for="email">Email:</label><br>
<input type="email" id="email" name="email" value="'.$email.'"><br><br>

<label for="age">AGE<br>
    <input type="radio" name="age" value="above 18" required>Above 18
</label>
<label for="age">
    <input type="radio" name="age" value="less">Less than 18
</label><br><br>

<label for="hobby">HOBBY<br>
    <input type="checkbox" name="hobby[]" value="music">Music<br>
    <input type="checkbox" name="hobby[]" value="Sports">Sports<br>
    <input type="checkbox" name="hobby[]" value="sleeping">Sleeping<br>
</label><br><br>

<input type = "file" name = "file"><br>


<button type="submit">Submit</button>
</form>
</body>
</html>

';
?>
<?php
echo $name."<br>";
echo $email."<br>";
echo $age."<br>";
print_r($hobby)."<br>";
?>