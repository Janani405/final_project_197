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
    $hashedPassword = password_hash($userPass, PASSWORD_BCRYPT);

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
function authenticateUser($email, $password) {
    // Sanitize inputs to prevent injection attacks
    $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    $password = trim($password);

    // Establish database connection
    $db_conn = Connection();

    // Prepare the SQL statement to fetch user by email
    $loginQuery = $db_conn->prepare("SELECT * FROM login_tbl WHERE login_email = ?");
    if (!$loginQuery) {
        error_log("Prepare failed: " . $db_conn->error);
        return "An error occurred. Please try again later.";
    }

    // Bind parameters and execute the query
    $loginQuery->bind_param("s", $email);
    $loginQuery->execute();
    $result = $loginQuery->get_result();

    // Check if a user was found
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Log for debugging
        error_log("User found: " . print_r($user, true));

        // Verify the password
        if (password_verify($password, $user['login_pwd'])) {
            if ($user['login_status'] == 1) { // Check if the account is active
                // Redirect based on user role
                if ($user['login_role'] == 'admin') {
                    header("Location: lib/views/dashboards/admin.php");
                } else {
                    header("Location: pages");
                }
                exit(); // Ensure no further execution
            } else {
                return "Your account is deactivated! Please contact support.";
            }
        } else {
            return "Incorrect password! Please try again.";
        }
    } else {
        return "No user found with this email!";
    }
}


// End output buffering
ob_end_flush();
?>
