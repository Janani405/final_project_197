<?php
// Start output buffering to avoid issues with header redirection
ob_start();

// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include_once("db_conn.php");

// User registration function
function userRegistration($userName, $userEmail, $userPhone, $userAge, $userPass) {
    // Database connection
    $db_conn = Connection();
    if (!$db_conn) {
        die("Database connection failed!");
    }

    // Data insert query for user_table
    $insertSql = "INSERT INTO user_table(user_name, user_email, user_phone, user_age, login_pass) 
                  VALUES('$userName', '$userEmail', '$userPhone', '$userAge', '$userPass')";

    $sqlResult = mysqli_query($db_conn, $insertSql);

    // Check for query errors
    if (!$sqlResult) {
        return "Error in user_table insertion: " . mysqli_error($db_conn);
    }

    // Use secure password hashing
    $newPassword = password_hash($userPass, PASSWORD_DEFAULT);

    // Insert into login table
    $insertLogin = "INSERT INTO login_tbl(login_email, login_pass, login_role, login_status) 
                    VALUES('$userEmail', '$newPassword', 'user', 1)";

    $loginResult = mysqli_query($db_conn, $insertLogin);

    if (!$loginResult) {
        return "Error in login_tbl insertion: " . mysqli_error($db_conn);
    }

    return "Your Registration was Successful!";
}

// Login function
function Authentication($userName, $userPass) {
    // Call database connection
    $db_conn = Connection();
    if (!$db_conn) {
        die("Database connection failed!");
    }

    // Fetch user record from the login table
    $sqlFetchUser = "SELECT * FROM login_tbl WHERE login_email = '$userName';";
    $sqlResult = mysqli_query($db_conn, $sqlFetchUser);

    // Check for query errors
    if (!$sqlResult) {
        return "Error fetching login data: " . mysqli_error($db_conn);
    }

    // Check if user exists
    $norows = mysqli_num_rows($sqlResult);

    if ($norows > 0) {
        // Fetch user record
        $rec = mysqli_fetch_assoc($sqlResult);

        // Validate the password
        if (password_verify($userPass, $rec['login_pass'])) {
            // Check if the user account is active
            if ($rec['login_status'] == 1) {
                if ($rec['login_role'] == "admin") {
                    // Redirect to the admin dashboard
                    header('Location: lib/views/dashboards/admin.php');
                    exit();
                } else {
                    // Redirect to the user dashboard
                    header('Location: lib/views/dashboards/user.php');
                    exit();
                }
            } else {
                return "Your Account Has Been Deactivated!";
            }
        } else {
            return "Your Password Is Incorrect! Please Try Again.";
        }
    } else {
        return "No Records Found!";
    }
}

// End output buffering and flush output
ob_end_flush();
?>
