<?php
include_once('lib/functions/userFuction.php');

if (isset($_POST['submit'])) {
    $result = authenticateUser($_POST['userName'], $_POST['userPass']);
    echo htmlspecialchars($result); // Avoid XSS vulnerabilities
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist (2)/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Baloo Bhaijaan', cursive;
        }
        body {
            background-image: url('img/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: #ffffffc6;
            border-radius: 20px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .card-header {
            text-align: center;
            background-color: transparent;
            border-bottom: none;
        }
        .card-header img {
            height: 60px;
        }
        .card-header h1 {
            font-size: 40px;
            font-weight: bold;
            color: #66CDAA;
            text-shadow: 
                4px 4px 0 #98FF98,
                2px 6px 8px rgba(0, 0, 0, 0.2);
        }
        .form-control {
            border-radius: 20px;
            background-color: #cdecd7;
            color: #333;
            text-align: center;
            font-size: 16px;
            border: 1px solid #ccc;
            padding: 10px;
            transition: box-shadow 0.3s ease;
        }
        .form-control:focus {
            box-shadow: 0px 0px 8px rgba(102, 205, 170, 0.8);
            outline: none;
        }
        .form-label {
            font-size: 15px;
            font-family: cursive;
            color: #555;
            display: block;
            text-align: center;
        }
        
        .btn {
            border-radius: 20px;
            padding: 10px;
            font-size: 20px;
            background-color: #f0e99e;
            color: #6666;
            width: 100%;
            margin-top: 10px;
            border: 1px solid #ccc;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #E6D56B;
            color: #999;
        }
        @media (max-width: 768px) {
            .item {
                padding-left: 30px;
                padding-right: 30px;
            }

            .item h1 {
                font-size: 32px;
            }

            .item img {
                height: 50px;
            }
        }

        @media (max-width: 576px) {
            .item {
                padding-left: 20px;
                padding-right: 20px;
            }

            .item h1 {
                font-size: 28px;
            }

            .item input {
                padding: 10px;
                font-size: 14px;
            }

            .button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <img src="img/logo.png" alt="Logo">
            <h1><strong>Create an Account</strong></h1>
        </div>
        <div class="card-body">
            <form id="registration-form" action="lib/route/user/registration.php" method="post">
                <div class="mb-3">
                    <label for="userName" class="form-label">Name</label>
                    <input type="text" name="userName" id="userName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" name="userEmail" id="userEmail" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="userPhone" class="form-label">Contact Number</label>
                    <input type="number" name="userPhone" id="userPhone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="userPass" class="form-label">Password</label>
                    <input type="password" name="userPass" id="userPass" class="form-control" required>
                </div>
                <button type="submit" name="btnLogin" class="btn">Register</button>
            </form>
            <br><br>
            <p style="align-items: center; margin-top:10px; font-family:cursive">Already Have An Account? <span><a href="login.php"  style="color: #ffaa00; text-decoration:none;"> Log in</a></span> Here</p>
        </div>
    </div>

    <script>
        // Form Validation and Feedback
        document.getElementById('registration-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent form submission

            const name = document.getElementById('userName').value.trim();
            const email = document.getElementById('userEmail').value.trim();
            const phone = document.getElementById('userPhone').value.trim();
            const password = document.getElementById('userPass').value.trim();

            if (name && email && phone && password) {
                alert("Thank you for registering! You can now log in.");
                this.submit(); // If everything is valid, submit the form
            } else {
                alert("Please fill in all fields.");
            }
        });
    </script>
</body>
</html>
