<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="form-container">
    <div class="form-content">
        <h1>Login</h1>
        <form method="POST" action="treatment.php">
            <input type="text" id="name" value="Identification" name="name">
            <input type="text"
            value="Password" name="password">
            <button type="submit" name="ok">Login</button>
        </form>
        <input type="checkbox" id="save" name="save">
        <label for="save">Remember me</label>
            <a href="#">Forgot Password?</a>
            <p>Don't have an account? <a href="#">Register</a></p>
    </div>
</div>


</body>
</html>