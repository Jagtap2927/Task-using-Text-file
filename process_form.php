<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data from theform data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $formattedData = "Name: $name\nEmail: $email\nMessage: $message\n";
    $file = "contact_data.txt";
    if (file_put_contents($file, $formattedData, FILE_APPEND | LOCK_EX) !== false) {
        echo "Data saved successfully.";
    } else {
        echo "Error occurred. Data not saved.";
    }
} else {
    header("Location: contact_form.html");
    exit();
}
?>
