<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard - CRUD Operations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #FFFACD; /* Soft pastel yellow */
      font-family: 'Arial', sans-serif;
      color: #333;
    }
    .sidebar {
      height: 100vh;
      background-color: #87CEFA; /* Pastel blue */
      color: #fff;
      padding-top: 20px;
      padding-left: 15px;
      border-radius: 15px;
    }
    .sidebar h3 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 1.5em;
    }
    .sidebar .nav-link {
      color: #fff;
      font-weight: bold;
      border-radius: 8px;
      margin-bottom: 10px;
    }
    .sidebar .nav-link:hover {
      background-color: #98FF98; /* Light green for hover effect */
    }
    .content {
      background-color: #C6FAD7; /* Soft mint green */
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .card {
      border-radius: 15px;
      margin-bottom: 20px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #87CEFA; /* Pastel blue */
      color: #fff;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }
    .card-body {
      background-color: #fff;
      border-bottom-left-radius: 15px;
      border-bottom-right-radius: 15px;
    }
    .card-body ul {
      list-style-type: none;
      padding-left: 0;
    }
    .card-body ul li {
      margin-bottom: 10px;
      font-size: 1.1em;
    }
    .card-title {
      font-size: 1.3em;
    }
    .form-label {
      font-weight: bold;
    }
    /* User profile styles */
    .profile-card {
      border-radius: 15px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .profile-card-header {
      background-color: #87CEFA;
      color: #fff;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      text-align: center;
    }
    .profile-card-body {
      text-align: center;
      padding: 20px;
    }
    .profile-card-body img {
      border-radius: 50%;
      width: 120px;
      height: 120px;
      margin-bottom: 15px;
    }
    .profile-card-body h5 {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 sidebar">
        <h3>Welcome</h3>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>

      <!-- Main Content -->
      <div class="col-md-9 content">
        <div class="row">
          <!-- User Profile Card -->
          <div class="col-md-4">
            <div class="card profile-card">
              <div class="card-header profile-card-header">
                <h4>User Profile</h4>
              </div>
              <div class="card-body profile-card-body">
                <img src="https://via.placeholder.com/150" alt="User Profile Picture">
                <h5>John Doe</h5>
                <p>Email: john@example.com</p>
                <p>Role: Admin</p>
                <button class="btn btn-primary">Edit Profile</button>
              </div>
            </div>
          </div>

          <!-- Manage Data Card -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                Manage Records
              </div>
              <div class="card-body">
                <h5 class="card-title">CRUD Operations</h5>

                <!-- Create New Record Button -->
                <button class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#createModal">Create New Record</button>

                <!-- Table for Displaying Records -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Example rows, replace with dynamic data -->
                    <tr>
                      <th scope="row">1</th>
                      <td>John Doe</td>
                      <td>john@example.com</td>
                      <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jane Smith</td>
                      <td>jane@example.com</td>
                      <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Create Modal -->
  <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">Create New Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Update Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Update Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="updateName" class="form-label">Name</label>
              <input type="text" class="form-control" id="updateName" value="John Doe">
            </div>
            <div class="mb-3">
              <label for="updateEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="updateEmail" value="john@example.com">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this record?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
