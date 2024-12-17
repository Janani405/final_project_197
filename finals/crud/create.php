<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "joyplay";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    $name = "";
    $email = "";
    $phone_number = "";
    $address = "";

    $errorMessage = "";
    $successMessage = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];

        do {
            if (empty($name) || empty($email) || empty($phone_number) || empty($address)) {
                $errorMessage = "All the fields are required";
                break;
            }

            // Add new client to the database
            $sql = "INSERT INTO users (name, email, phone_number, address) VALUES ('$name', '$email', '$phone_number', '$address')";
            $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query: " . $connection->error;
                break;
            }

            $name = "";
            $email = "";
            $phone_number = "";
            $address = "";

            $successMessage = "Client added successfully";

            header("Location: ../crud/crud.php");
            exit;
        } while (false);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f0f8ff; /* Light Blue background */
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Fun font for kid-friendly appeal */
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #388e3c; /* Green color */
            margin-bottom: 20px;
        }

        .alert {
            font-weight: bold;
        }

        .form-control {
            border-radius: 20px; /* Rounded input fields */
            padding: 15px;
        }

        .btn-primary {
            background-color: #4caf50; /* Green background for submit button */
            border-color: #4caf50;
            border-radius: 20px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #388e3c; /* Darker green on hover */
            border-color: #388e3c;
        }

        .btn-outline-primary {
            border-radius: 20px;
            font-weight: bold;
        }

        .btn-close {
            font-size: 1.2rem;
        }

        /* Additional responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>New Client</h2>

        <?php
            if (!empty($errorMessage)) {
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
            }
        ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label" for="phone_number">Phone</label>
                <input type="text" class="form-control" name="phone_number" id="phone_number" value="<?php echo $phone_number; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label" for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo $address; ?>">
            </div>

            <?php
                if (!empty($successMessage)) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>$successMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }
            ?>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="../crud/crud.php" class="btn btn-outline-primary">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>
