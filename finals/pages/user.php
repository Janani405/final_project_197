<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
      font-family: 'Fredoka One', cursive;
      
    }
    body{
        background: url('../img/background.jpg');
        background-size: cover;
        background-color: #f8f9fa;
        padding: 50px 0;
        text-align: center;
        box-sizing: border-box;
    }
        .user-icon {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
        }
        .card-body{
            line-height: 50px;
        }
        button {
      color: #fff;
      border-radius: 50px;
      border-color: #98FF98;
      width: 200px;
      height: 50px;
      font-size: 25px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin: 10px;
    }
    .edit-btn {
      background-color: #66CDAA;
      border: none;
    }
    .logout-btn {
      background-color: #FFB6C1;
      border: none;
    }
    .back-btn {
      background-color: #87CEFA;
      border: none;
    }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <!-- User Profile Card -->
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-center">
                    <h3>User Profile</h3>
                </div>
                <div class="card-body">
                    <!-- User Icon -->
                    <div class="text-center">
                        <img src="https://via.placeholder.com/150" alt="User Icon" id="userIcon" class="user-icon" onclick="document.getElementById('fileInput').click()">
                        <!-- Hidden file input to change profile picture -->
                        <input type="file" id="fileInput" style="display: none;" onchange="changeProfilePicture(event)">
                    </div>
                    <h5 class="card-title text-center">Janani</h5>
                    <p class="card-text"><strong>Email:</strong> janani@example.com</p>
                    <p class="card-text"><strong>Address:</strong> 1234 Main Street, Colombo, Sri Lanka</p>
                    <p class="card-text"><strong>Phone:</strong> +94 123 456 789</p>
                    <button href="#" type="button" class="edit-btn">Edit Profile</button>
                    <button href="#" type="button" class="logout-btn">Log Out</button>
                    <button onclick="window.location.href='../index.php';" type="button" class="back-btn">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>

<script>
    // Function to change the profile picture
    function changeProfilePicture(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('userIcon').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>

</body>
</html>
