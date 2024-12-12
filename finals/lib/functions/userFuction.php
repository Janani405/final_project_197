<?php
// Start output buffering to handle headers
ob_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include_once("db_conn.php");

/**
 * User registration function
 */
function userRegistration($userName, $userEmail, $userPass, $userPhone) {
    $db_conn = Connection();

    // Use prepared statements to prevent SQL injection
    $insertUserQuery = $db_conn->prepare(
        "INSERT INTO user_table (user_name, user_email, user_phone, user_status) 
        VALUES (?, ?, ?, 1)"
    );

    if (!$insertUserQuery->bind_param("sss", $userName, $userEmail, $userPhone)) {
        return "Error binding parameters: " . $insertUserQuery->error;
    }

    if (!$insertUserQuery->execute()) {
        return "Error inserting user: " . $insertUserQuery->error;
    }

    // Hash the password securely
    $hashedPassword = md5($userPass);

    // Insert login details
    $insertLoginQuery = $db_conn->prepare(
        "INSERT INTO login_tbl (login_email, login_pwd, login_role, login_status) 
        VALUES (?, ?, 'user', 1)"
    );

    if (!$insertLoginQuery->bind_param("ss", $userEmail, $hashedPassword)) {
        return "Error binding parameters for login: " . $insertLoginQuery->error;
    }

    if (!$insertLoginQuery->execute()) {
        return "Error inserting login details: " . $insertLoginQuery->error;
    }

    return "Your registration was successful!";
}

/**
 * User authentication function
 */
/**
 * User authentication function
 * 
 * @param string $email The user's email.
 * @param string $password The user's password.
 * @return string|null A success message, error message, or null if redirected.
 */
function authenticateUser($userName, $userPass) {
    // Call database connection 
    $db_conn = Connection();

    // Fetch user record from the login table
    $sqlFetchUser = "SELECT * FROM login_tbl WHERE login_email = '$userName';";
    $sqlResult = mysqli_query($db_conn, $sqlFetchUser);

    // Check if the query failed
    if (!$sqlResult) {
        echo mysqli_error($db_conn); // Proper error handling
        return;
    }

    // Convert user password into hashed value using MD5
    $newpass = md5($userPass);

    // Check the number of rows
    $norows = mysqli_num_rows($sqlResult);

    // If record exists
    if ($norows > 0) {
        // Fetch user record
        $rec = mysqli_fetch_assoc($sqlResult);

        // Validate the password
        if ($rec['login_pwd'] === $newpass) {
            // Check if the user account is active
            if ($rec['login_status'] == 1) {
                if ($rec['login_role'] == "admin") {
                    // Redirect to the admin dashboard
                    header('Location: ../views/dashboards/admin.php');
                    exit(); // Stop further script execution after redirect
                } else {
                    // Redirect to the user dashboard
                    header('Location: ../../final_project_197/finals/index.php');
                    exit(); // Stop further script execution after redirect
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
