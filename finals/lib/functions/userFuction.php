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
function userRegistration($userName, $userEmail, $userPhone, $userPass) {
    $db_conn = Connection();

    // Use prepared statements to prevent SQL injection
    $insertUserQuery = $db_conn->prepare(
        "INSERT INTO user_table (user_name, user_email, user_phone, user_status) 
         VALUES (?, ?, ?, 1)"
    );
    $insertUserQuery->bind_param("sss", $userName, $userEmail, $userPhone);

    if (!$insertUserQuery->execute()) {
        return "Error inserting user: " . $insertUserQuery->error;
    }

    // Securely hash the password
    $hashedPassword = password_hash($userPass, PASSWORD_DEFAULT);

    // Insert login details
    $insertLoginQuery = $db_conn->prepare(
        "INSERT INTO login_tbl (login_email, login_pwd, login_role, login_status) 
         VALUES (?, ?, 'user', 1)"
    );
    $insertLoginQuery->bind_param("ss", $userEmail, $hashedPassword);

    if (!$insertLoginQuery->execute()) {
        return "Error inserting login details: " . $insertLoginQuery->error;
    }

    echo "<script>
        alert('Your registration was successful!');
        window.location.href = '../../../../../final_project_197/finals/login.php';
    </script>";
}

/**
 * User authentication function
 *
 * @param string $userName The user's email.
 * @param string $userPass The user's password.
 * @return string|null A success message, error message, or null if redirected.
 */
function authenticateUser($userName, $userPass) {
    $db_conn = Connection();

    // Use prepared statements
    $stmt = $db_conn->prepare("SELECT * FROM login_tbl WHERE login_email = ?");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $rec = $result->fetch_assoc();

        // Verify password
        if (password_verify($userPass, $rec['login_pwd'])) {
            if ($rec['login_status'] == 1) {
                if ($rec['login_role'] == "admin") {
                    header('Location: ../../../../../../../IT 197 project/final_project_197/finals/crud/crud.php');
                    exit();
                } else {
                    header('Location: ../../final_project_197/finals/index.php');
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
