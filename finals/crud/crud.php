<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - JoyPlay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #e1f5fe; /* Light blue background */
            font-family: 'Comic Sans MS', cursive, sans-serif; /* Fun, kid-friendly font */
        }

        /* Sidebar styles */
        #sidebar {
            background-color: #81c784; /* Light Green */
            color: #fff;
            height: 100vh;
            padding-top: 50px;
            width: 250px; /* Fixed sidebar width */
            box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.1);
        }

        #sidebar h3 {
            color: #388e3c; /* Darker Green */
        }

        .nav-link {
            color: #fff !important;
            font-weight: bold;
        }

        .nav-link:hover {
            background-color: #388e3c; /* Darker Green */
            color: white !important;
        }

        /* Page content styles */
        #page-content-wrapper {
            padding-left: 15px;
            padding-top: 50px;
            width: calc(100% - 250px); /* Adjust content width based on sidebar width */
        }

        /* Card styles */
        .card {
            background-color: #81d4fa; /* Light blue */
            border-radius: 12px;
        }

        .card-header {
            background-color: #29b6f6; /* Bright blue */
            color: white;
        }

        .card-body {
            background-color: #4fc3f7; /* Light blue */
            color: white;
            border-radius: 12px;
        }

        /* Button style */
        .btn-primary {
            background-color: #4caf50; /* Green */
            border-color: #4caf50;
        }

        .btn-primary:hover {
            background-color: #388e3c; /* Dark Green */
            border-color: #388e3c;
        }

        .btn-sm {
            border-radius: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #sidebar {
                width: 100%;
                height: auto;
                padding: 10px;
            }

            #page-content-wrapper {
                width: 100%;
                padding-left: 0;
                margin-top: 20px;
            }

            /* Mobile-friendly layout for table */
            table {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar" class="p-3">
            <h3>JoyPlay Admin</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="../crud/create.php" class="nav-link">New Client</a>
                </li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="container-fluid">
            <div class="container my-5">
                <h2 class="mb-4">List of Clients</h2>
                <a class="btn btn-primary mb-3" href="../crud/create.php" role="button">New Client</a>

                <!-- Statistics Cards -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">Total Users</div>
                            <div class="card-body">
                                <h4>
                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "joyplay";

                                    // Create connection
                                    $connection = new mysqli($servername, $username, $password, $dbname);

                                    // Check connection
                                    if ($connection->connect_error) {
                                        die("Connection failed: " . $connection->connect_error);
                                    }

                                    // Get the total number of users
                                    $sql = "SELECT COUNT(*) as total_users FROM users";
                                    $result = $connection->query($sql);

                                    if ($result) {
                                        $row = $result->fetch_assoc();
                                        echo $row['total_users'];
                                    } else {
                                        echo "Error fetching data";
                                    }

                                    // Close the connection
                                    $connection->close();
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Client Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "joyplay";

                        // Create connection
                        $connection = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                        }

                        // Read all rows from database
                        $sql = "SELECT * FROM users";
                        $result = $connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                        }

                        // Display data
                        while ($row = $result->fetch_assoc()) {
                            echo "
                            <tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['address']}</td>
                                <td>{$row['phone_number']}</td>
                                <td>{$row['created_at']}</td>
                                <td>
                                    <a href='../crud/edit.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>
                                    <a href='../crud/delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }

                        // Close the connection
                        $connection->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
