<?php
session_start();
include __DIR__ . "/db_connection.php"; // FIX: Ensure correct file path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = trim($_POST["role"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Prepare SQL query to fetch user details
    $sql = "SELECT id, name, role, password FROM users WHERE email = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        die("Error in SQL query: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Verify hashed password
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["role"] = $row["role"];

            // Redirect based on user role
            if ($row["role"] == "admin") {
                header("Location: admin_dashboard.html");
            } else {
                header("Location: user_dashboard.html");
            }
            exit();
        } else {
            echo "<script>alert('Invalid Credentials'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.location.href='login.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
