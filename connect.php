<?php
$conn = mysqli_connect("localhost", "root", "Krishna@123", "Student");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully";



$Password=md5('abc@123');
$password2=md5('pass@123')

// var_dump(`SELECT * FROM Student_details`);
$sql="INSERT INTO `Student_details`
        VALUES (1, 'Krishna Gharti Magar', 22, 'Spring', 'BCSIT'),
        (2,'ram gharti magar',25,'fall','bba'),
        (3,'hari ghartimagar',26,'spring','MBA'),
        (1,'sita',12,'bba','bcsit')";
        $sq="INSERT INTO `login details` 
        VALUES(1,'abc@gmail.com',$password)
        $password=
 $help=var_dump(mysqli_query($conn,$sql));
echo("data inserted sucessfyllu".$help);
?>