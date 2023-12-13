<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h2>Signup Form</h2>

    <form id="signupForm" onsubmit="return validateForm()">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <span id="usernameError" class="error"></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <span id="emailError" class="error"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="passwordError" class="error"></span><br>

        <input type="checkbox" id="agree" name="agree">
        <label for="agree">I agree to the terms and conditions</label>
        <span id="agreeError" class="error"></span><br>

        <input type="submit" value="Sign Up">
    </form>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var agree = document.getElementById("agree");

            var usernameError = document.getElementById("usernameError");
            var emailError = document.getElementById("emailError");
            var passwordError = document.getElementById("passwordError");
            var agreeError = document.getElementById("agreeError");

            // Reset error messages
            usernameError.innerHTML = "";
            emailError.innerHTML = "";
            passwordError.innerHTML = "";
            agreeError.innerHTML = "";

            // Validate username
            if (username.length < 3) {
                usernameError.innerHTML = "Username must be at least 3 characters";
                return false;
            }

            // Validate email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailError.innerHTML = "Invalid email address";
                return false;
            }

            // Validate password
            if (password.length < 8) {
                passwordError.innerHTML = "Password must be at least 8 characters";
                return false;
            }

            // Validate checkbox
            if (!agree.checked) {
                agreeError.innerHTML = "Please agree to the terms and conditions";
                return false;
            }

            // If all validations pass, the form is submitted
            return true;
        }
    </script>

</body>
</html>
