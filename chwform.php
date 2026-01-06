<?php
session_start(); // start the session

// Logout logic
if (isset($_POST['logout'])) {
    session_destroy(); // destroy all session data
    header("Location: " . $_SERVER['PHP_SELF']); // refresh page
    exit;
}

// Set username in session
if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
    background: #f0f4f8; 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url("https://www.betterteam.com/images/hris-analyst-job-description-6141x4067-20201124.jpeg?crop=40:21,smart&width=1200&dpr=2");
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
        }
        .container {
            background: rgba(214, 207, 207, 0.5);

            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            width: 100%;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type=password]{
            padding: 10px;
            width: 100%;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            
        }
        button:hover {
            background: #31693dff;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
<?php if (isset($_SESSION['username'])): ?>
    
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <form method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
<?php else: ?>
    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label >Password:</label><br>
        <input type="password" name="password" >
        <button type="submit">Login</button>
    </form>
<?php endif; ?>
</div>

</body>
</html>
