<?php
$server_response = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = trim($_POST["name"]);
    $email    = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm  = $_POST["confirm"];

    if (empty($name) || empty($email) || empty($password) || empty($confirm)) {
        $server_response = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $server_response = "Invalid email format.";
    } elseif ($password !== $confirm) {
        $server_response = "Passwords do not match.";
    } elseif (strlen($password) < 6) {
        $server_response = "Password must be at least 6 characters.";
    } else {
        // Example: Save to database here
        $server_response = "✅ Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background: white;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px #ccc;
      width: 300px;
    }

    form h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #aaa;
      border-radius: 5px;
    }

    input[type="submit"] {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      background: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    #errorMsg {
      margin-top: 10px;
      font-size: 0.9em;
    }
  </style>
</head>
<body>
  <form id="regForm" method="POST" onsubmit="return validateForm()">
    <h2>Register</h2>
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <label for="confirm">Confirm Password:</label>
    <input type="password" id="confirm" name="confirm">

    <input type="submit" value="Register">
    <p id="errorMsg"></p>
    <?php if (!empty($server_response)) echo "<p style='color: red; margin-top: 10px;'>$server_response</p>"; ?>
  </form>

  <script>
    function validateForm() {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      const confirm = document.getElementById('confirm').value;
      const errorMsg = document.getElementById('errorMsg');

      if (!name || !email || !password || !confirm) {
        errorMsg.textContent = "All fields are required.";
        errorMsg.style.color = "red";
        return false;
      }

      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if (!email.match(emailPattern)) {
        errorMsg.textContent = "Invalid email format.";
        errorMsg.style.color = "red";
        return false;
      }

      if (password.length < 6) {
        errorMsg.textContent = "Password must be at least 6 characters.";
        errorMsg.style.color = "red";
        return false;
      }

      if (password !== confirm) {
        errorMsg.textContent = "Passwords do not match.";
        errorMsg.style.color = "red";
        return false;
      }

      errorMsg.textContent = "";
      return true;
    }
  </script>
</body>
</html>
