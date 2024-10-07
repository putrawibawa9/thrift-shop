<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #BF2EF0, #48CFCB);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            transition: opacity 0.3s ease;
        }
        h2 {
            margin: 0 0 20px 0;
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .btn {
            background-color: #5cb85c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #4cae4c;
        }
        .switch {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }
        .switch a {
            color: #5cb85c;
            text-decoration: none;
            font-weight: bold;
        }
        .switch a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if(isset($_GET)): ?>
            <p style="color: red; text-align: center;">Username / Password salah</p>
        <?php endif; ?>
        <form id="loginForm" action="<?= BASEURL?>/auth/signin"method="post">
     
            <h2>Login</h2>
            <div class="form-group">
                <label for="loginEmail">Username:</label>
                <input name="username" type="text" id="loginEmail" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input name="password" type="password" id="loginPassword" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="switch">
                <p>Don't have an account? <a href="#" onclick="toggleForm()">Register</a></p>
            </div>
        </form>

        <form action="<?= BASEURL?>/auth/register" method="post" id="registerForm" style="display: none;">
            <h2>Register</h2>
            <div class="form-group">
                <label for="registerName">Username:</label>
                <input name="username" type="text" id="registerName" required>
            </div>
            <div class="form-group">
                <label for="registerPassword">Password:</label>
                <input name="password" type="password" id="registerPassword" required>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="switch">
                <p>Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>
            </div>
        </form>
    </div>

    <script>
        function toggleForm() {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
            registerForm.style.display = registerForm.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
