<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
header {
    background-color: #00008B ;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
nav ul li {
    display: inline;
    margin-left: 20px;
}
nav ul li a {
    text-decoration: none;
    color: #fff;
}
main {
    padding: 20px;
}
.signup-form {
    max-width: 400px;
    margin: 0 auto;
}
.signup-form h2 {
    margin-bottom: 20px;
}
.signup-form input[type="text"],
.signup-form input[type="email"],
.signup-form input[type="password"],
.signup-form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.signup-form button {
    background-color: #00008B ;
    color: #fff;
    cursor: pointer;
}

.signup-form button:hover {
    background-color: #555;
}

.signup-form p {
    margin-top: 10px;
}

footer {
    background-color: #00008B ;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
}

.footer-links a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}</style>
</head>

<body>
    
<header>
        <div class="logo">
            <img src="logo.jpg" width="150" 
     height="150" alt="Company Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form action="includes/formhandler.inc.php" method="post">
                <input type="text" name="username" placeholder="User Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </main>

    <footer>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
    </footer>


</body>
</html>