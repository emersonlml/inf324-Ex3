
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.login-container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.login-container h2 {
    text-align: center;
}

.login-form {
    margin-top: 20px;
}

.login-form label,
.login-form input {
    display: block;
    width: 100%;
    margin-bottom: 10px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.login-form input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.login-form input[type="submit"]:hover {
    background-color: #0056b3;
}
</style>
    <title>Login</title>
   </head>
<body>
    
    <div class="login-container">
        <h1>Login para el ejercicio 2 </h1>

        <form action="usuario.php" class="login-form" method="post">
        
            <input type="text" name="username"
            placeholder="Usuario" id="username" required>
            <input type="password" name="password"
            placeholder="Contraseña" id="password" required>
            <input type="submit" value="Acceder">
        </form>
    </div>
    
</body>
</html>
