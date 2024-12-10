<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoyPlay Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Define color variables */
        :root {
            --bg-color-light: #cdecd7; /* Lemon Chiffon */
            --bg-color-dark: #87CEFA; /* Light Sky Blue for Sidebar */
            --bg-color-card: #98FF98; /* Pale Green for cards */
            --bg-color-hover: #87CEFA; /* Light Sky Blue for hover effects */
            --text-color-light: #ffffff; /* White text color */
            --text-color-dark: #333333; /* Dark text color */
            --btn-bg: #87CEFA; /* Light Sky Blue button background */
            --btn-bg-hover: #98FF98; /* Pale Green button hover */
            --modal-bg: #87CEFA; /* Light Sky Blue for modal header */
            --table-stripe-odd: #E6E6FA; /* Lavender */
            --table-stripe-even: #98FF98; /* Pale Green */
        }

        /* General Styles */
        body {
            background-color: var(--bg-color-light); /* Apply Lemon Chiffon background */
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--bg-color-hover); /* Light Sky Blue for title */
            margin-bottom: 30px;
            text-align: center;
            font-family: 'Baloo Bhaijaan', cursive;
            text-shadow: 
              4px 4px 0 #98FF98,
              2px 6px 8px rgba(0, 0, 0, 0.2); 
              padding-bottom: 50px;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: var(--bg-color-dark); /* Hot Pink for sidebar */
            color: var(--text-color-light); /* White text for sidebar */
            padding-top: 30px;
            padding-left: 20px;
        }

        .sidebar a {
            color: var(--text-color-light); /* White text for links */
            text-decoration: none;
            font-size: 1.1rem;
            display: block;
            padding: 10px 15px;
            margin: 5px 0;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: var(--bg-color-hover); /* Light Sky Blue on hover */
            color: var(--text-color-light);
        }

        /* Main Content Area */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: var(--bg-color-card); /* Peach Puff for cards */
        }

        .card-title {
            font-size: 1.5rem;
            color: var(--text-color-dark); /* Dark text for card title */
            font-weight: 600;
        }

        .card-body {
            padding: 30px;
        }

        .btn-primary {
            background-color: var(--btn-bg); /* Hot Pink button background */
            border-color: var(--btn-bg);
        }

        .btn-primary:hover {
            background-color: var(--btn-bg-hover); /* Light Pink on hover */
            border-color: var(--btn-bg-hover);
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .modal-content {
            border-radius: 10px;
        }

        .modal-header {
            background-color: var(--modal-bg); /* Light Sky Blue for modal header */
            color: var(--text-color-light); /* White text in modal header */
        }

        .modal-footer .btn {
            border-radius: 5px;
        }

        .modal-body input {
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .modal-body input:focus {
            border-color: var(--bg-color-hover);
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .activity-list {
            list-style-type: none;
            padding: 0;
        }

        .activity-list li {
            background-color: #f1f1f1;
            padding: 8px;
            margin-bottom: 8px;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .card-text {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--text-color-dark); /* Dark text color */
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: var(--table-stripe-odd); /* Lavender for odd rows */
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: var(--table-stripe-even); /* Pale Green for even rows */
        }

        /* Button Styles */
        .btn-sm {
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        /* Edit Button */
        .btn-warning {
            background-color: #ffc107; /* Amber background */
            border-color: #ffc107;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #e0a800; /* Darker amber on hover */
            border-color: #d39e00;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Delete Button */
        .btn-danger {
            background-color: #dc3545; /* Red background */
            border-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
            border-color: #bd2130;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Adjust the modal content */
        .modal-dialog {
            max-width: 500px;
        }
    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h3>Admin Dashboard</h3>
        <a href="#">Dashboard</a>
        <a href="#">Manage Users</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>JoyPlay Admin Dashboard</h2>

        <!-- Dashboard Overview -->
        <div class="row">
            <!-- User Statistics Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text" id="userCount">150</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Users Section -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addItemModal">Add New User</button>

        <!-- User Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="dataTable">
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editItemModal" onclick="editItem(1)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteItem(1)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Add User Modal -->
        <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addItemModalLabel">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addItemForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit User Modal -->
        <div class="modal fade" id="editItemModal" tabindex="-1" aria-labelledby="editItemModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editItemModalLabel">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editItemForm">
                            <div class="mb-3">
                                <label for="editName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="editName" required>
                            </div>
                            <div class="mb-3">
                                <label for="editEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="editEmail" required>
                            </div>
                            <button type="submit" class="btn btn-warning">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function editItem(id) {
            console.log("Editing item with ID: " + id);
        }

        function deleteItem(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                console.log("Deleting item with ID: " + id);
            }
        }
    </script>
</body>
</html>
