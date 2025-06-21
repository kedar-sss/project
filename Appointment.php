<?php
// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session for success/error messages
session_start();

// Database connection settings (XAMPP MySQL)
$host = "localhost";  // Default XAMPP host
$user = "root";       // Default XAMPP username (no password)
$password = "";       // Default XAMPP password (empty)
$dbname = "dental5"; // Database name

// Create a database connection
$con = new mysqli($host, $user, $password, $dbname);

// Check if the connection is successful
if ($con->connect_error) {
    die("Database Connection Failed: " . $con->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["appointment"])) {
    // Collect and sanitize input data
    $Name = htmlspecialchars(trim($_POST['full-name'] ?? ''));
    $Email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $Phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $Date = trim($_POST['appointment-date'] ?? '');
    $Time = trim($_POST['appointment-time'] ?? '');
    $Notes = htmlspecialchars(trim($_POST['notes'] ?? ''));

    // Validate required fields
    if (empty($Name) || empty($Email) || empty($Phone) || empty($Date) || empty($Time)) {
        $_SESSION['error'] = "All fields are required!";
        header("Location: appointment.php");
        exit();
    }

    // Validate email format
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format!";
        header("Location: appointment.php");
        exit();
    }

    // Convert date and time format
    $formattedDate = date("Y-m-d", strtotime($Date));
    $formattedTime = date("H:i:s", strtotime($Time));

    // Insert appointment into the database
    $sql = "INSERT INTO appointment5 (Name, Email, Phone, Date, Time, Notes) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssss", $Name, $Email, $Phone, $formattedDate, $formattedTime, $Notes);

        if ($stmt->execute()) {
            $_SESSION['success'] = "Appointment booked successfully!";
            header("Location: appointment.php");
            exit();
        } else {
            $_SESSION['error'] = "Error booking appointment!";
            header("Location: appointment.php");
            exit();
        }
        $stmt->close();
    } else {
        $_SESSION['error'] = "Database error!";
        header("Location: appointment.php");
        exit();
    }
}

$con->close();
?>
    
	
	<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book an Appointment - SmileCare Dental Clinic</title>
  <style>
    body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background: linear-gradient(135deg, #a18cd1, #fbc2eb); }
    .appointment-form { width: 100%; max-width: 500px; background: #ffffff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); }
    h2 { text-align: center; color: #6c63ff; }
    .form-group { margin-bottom: 15px; }
    .form-group label { font-weight: bold; color: #6c63ff; }
    .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; }
    .form-submit { text-align: center; }
    .form-submit button { background: #6c63ff; color: #fff; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; }
    .form-submit button:hover { background: #4a4ae8; }
    .message { text-align: center; font-size: 14px; margin-bottom: 15px; }
    .error { color: red; }
    .success { color: green; }
  </style>
</head>
<body>

  <form class="appointment-form" action="appointment.php" method="POST">
    <h2>Book Your Appointment</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="message error"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
      <div class="message success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
    <?php endif; ?>

    <div class="form-group">
      <label for="full-name">Full Name</label>
      <input type="text" id="full-name" name="full-name" required>
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" required>
    </div>

    <div class="form-group">
      <label for="appointment-date">Preferred Date</label>
      <input type="date" id="appointment-date" name="appointment-date" required>
    </div>

    <div class="form-group">
      <label for="appointment-time">Preferred Time</label>
      <select id="appointment-time" name="appointment-time" required>
        <option value="" disabled selected>Select a time</option>
        <option value="09:00:00">9:00 AM - 10:00 AM</option>
        <option value="10:00:00">10:00 AM - 11:00 AM</option>
        <option value="11:00:00">11:00 AM - 12:00 PM</option>
        <option value="12:00:00">12:00 PM - 1:00 PM</option>
        <option value="14:00:00">2:00 PM - 3:00 PM</option>
        <option value="16:00:00">4:00 PM - 5:00 PM</option>
      </select>
    </div>
	
	

    <div class="form-group">
      <label for="notes">Additional Notes</label>
      <textarea id="notes" name="notes"></textarea>
    </div>

    <div class="form-submit">
      <button type="submit" name="appointment">Book Appointment</button>
    </div>
  </form>

	
	   <div>
	 <style>
            body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background: linear-gradient(135deg, #a18cd1, #fbc2eb); }
            .appointment-form { width: 100%; max-width: 500px; background: #ffffff; padding: 30px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); }
            h2 { text-align: center; color: #6c63ff; }
            .form-group { margin-bottom: 15px; }
            .form-group label { font-weight: bold; color: #6c63ff; }
            .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; }
            .form-submit { text-align: center; }
            .form-submit button { background: #6c63ff; color: #fff; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; }
            .form-submit button:hover { background: #4a4ae8; }
        </style>
    
    
     
    
	</div>
       
       
    
    </body>
    </html>
