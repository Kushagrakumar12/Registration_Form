<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $country = htmlspecialchars($_POST['country']);

    // Display the result
    echo '<div class="result-container">';
    echo '<h3>Registration Successful!</h3>';
    echo '<div class="result-item"><strong>Full Name:</strong> ' . $name . '</div>';
    echo '<div class="result-item"><strong>Email Address:</strong> ' . $email . '</div>';
    echo '<div class="result-item"><strong>Phone Number:</strong> ' . $phone . '</div>';
    echo '<div class="result-item"><strong>Address:</strong> ' . $address . '</div>';
    echo '<div class="result-item"><strong>Gender:</strong> ' . $gender . '</div>';
    echo '<div class="result-item"><strong>Date of Birth:</strong> ' . $dob . '</div>';
    echo '<div class="result-item"><strong>Country:</strong> ' . $country . '</div>';
    echo '</div>';
}
?>
