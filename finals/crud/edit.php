<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joyplay";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

$id = "";
$name = "";
$email = "";
$phone_number = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get method: Show the data of the client
    if (!isset($_GET["id"])) {
        header("Location: ../crud/crud.php");
        exit;
    }

    $id = $_GET["id"];

    // Read the row of the selected client from the database table
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("Location: ../crud/crud.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone_number = $row["phone_number"];
    $address = $row["address"];
} else {
    // Post method: Update the data of the client
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
    } else {
        $errorMessage = "ID is missing from the form submission.";
        exit;
    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];

    do {
        // Validation for empty fields
        if (empty($id) || empty($name) || empty($email) || empty($phone_number) || empty($address)) {
            $errorMessage = "All the fields are required";
            break;
        }

        // Prepare the SQL query
        $sql = "UPDATE users 
                SET name = ?, email = ?, phone_number = ?, address = ?
                WHERE id = ?";

        // Prepare statement to avoid SQL injection
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssssi", $name, $email, $phone_number, $address, $id);

        // Execute the query
        $result = $stmt->execute();

        if (!$result) {
            $errorMessage = "Failed to update client: " . $stmt->error;
            break;
        }

        $successMessage = "Client updated successfully";
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
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
    <div class="container my-5">
        <h2>Edit Client</h2>

        <!-- Display error message -->
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error: </strong> <?php echo $errorMessage; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <!-- Display success message -->
        <?php if (!empty($successMessage)) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success: </strong> <?php echo $successMessage; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

        <form method="post">
            <!-- Hidden input for ID -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <!-- Name field -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
                </div>
            </div>

            <!-- Email field -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                </div>
            </div>

            <!-- Phone field -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_number; ?>" required>
                </div>
            </div>

            <!-- Address field -->
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" required>
                </div>
            </div>

            <!-- Submit and Cancel buttons -->
            <div class="row mb-3">
                <div class="col-sm-3 offset-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="../crud/crud.php" class="btn btn-outline-secondary" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
