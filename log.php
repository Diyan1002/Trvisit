<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "fddesign");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Define variables
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

// Check if the user exists
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  // Check the password
  if (password_verify($password, $row['password'])) {
    $_SESSION['email'] = $email;
    echo "Login successful!";
  } else {
    echo "Invalid password!";
  }
} else {
  echo "Invalid email";
}

// Close the connection
mysqli_close($conn);
?>