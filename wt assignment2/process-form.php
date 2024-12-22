<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    // Validate form data (you can add more validation rules here)
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($dob) && !empty($address) && !empty($gender)) {
        // Display the submitted data
        echo "<h1>Application Submitted Successfully!</h1>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
    } else {
        echo "<p>Error: All fields are required.</p>";
    }
}
else {
    // For debugging, if the form submission fails to reach this page.
    echo "This is not a POST request!";
}
?>
