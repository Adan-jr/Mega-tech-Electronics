<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    form {
        width: 100%;
        padding: 30px;
        box-sizing: border-box;
    }
    .input-group {
        margin-bottom: 15px;
    }
    .input-group label {
        display: block;
        margin-bottom: 5px;
    }
    .input-group input,
    .input-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        box-sizing: border-box;
    }
    .input-group input[type="submit"] {
        background-color: #5cb85c;
        color: white;
        border: none;
        cursor: pointer;
    }
    .input-group input[type="submit"]:hover {
        background-color: #4cae4c;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Registration Form</h2>
    <form action="process.php" method="post">
        <div class="input-group">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="input-group">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        <div class="input-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <div class="input-group">
            <button type="submit" name="submit" value="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    // Here you would typically add code to process the data, such as inserting it into a database
    // For example:
    // $conn = new mysqli('localhost', 'username', 'password', 'database');
    // $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone, email, gender, password) VALUES (?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("ssssss", $firstName, $lastName, $phone, $email, $gender, $password);
    // $stmt->execute();
    // $stmt->close();
    // $conn->close();

    // For now, we'll just display the data
    echo "Form data received:";
    echo "<br>First Name: " . $firstName;
    echo "<br>Last Name: " . $lastName;
    echo "<br>Phone: " . $phone;
    echo "<br>Email: " . $email;
    echo "<br>Gender: " . $gender;
    echo "<br>Password: " . $password;
}
?>