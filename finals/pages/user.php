<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoyPlay Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #333;
            font-weight: 600;
        }

        .card-body {
            background-color: #ffffff;
            padding: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .modal-content {
            border-radius: 10px;
        }

        .modal-header {
            background-color: #007bff;
            color: #fff;
        }

        .modal-footer .btn {
            border-radius: 5px;
        }

        .modal-body input {
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .modal-body input:focus {
            border-color: #007bff;
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
            color: #555;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
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

            <!-- Game Statistics Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Games Played</h5>
                        <p class="card-text" id="gamesPlayed">1200</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activity</h5>
                        <ul class="activity-list" id="activityList">
                            <li>User John Doe completed a puzzle.</li>
                            <li>User Jane Smith unlocked a toy.</li>
                        </ul>
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
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add Item Functionality
        document.getElementById('addItemForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;

            const table = document.getElementById('dataTable');
            const newRow = table.insertRow();
            newRow.innerHTML = `
                <td>2</td>
                <td>${name}</td>
                <td>${email}</td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editItemModal" onclick="editItem(2)">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteItem(2)">Delete</button>
                </td>
            `;
            document.getElementById('addItemModal').modal('hide');
        });

        // Edit Item Functionality
        function editItem(id) {
            const row = document.getElementById('dataTable').rows[id - 1];
            const name = row.cells[1].innerText;
            const email = row.cells[2].innerText;

            document.getElementById('editName').value = name;
            document.getElementById('editEmail').value = email;

            document.getElementById('editItemForm').onsubmit = function(e) {
                e.preventDefault();
                row.cells[1].innerText = document.getElementById('editName').value;
                row.cells[2].innerText = document.getElementById('editEmail').value;
                document.getElementById('editItemModal').modal('hide');
            };
        }

        // Delete Item Functionality
        function deleteItem(id) {
            if (confirm('Are you sure you want to delete this item?')) {
                document.getElementById('dataTable').deleteRow(id - 1);
            }
        }
    </script>
</body>
</html>
