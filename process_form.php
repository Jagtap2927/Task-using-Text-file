<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $data = array($name, $email, $message);
    $file = 'contact_data.csv';
    $fp = fopen($file, 'a');
    fputcsv($fp, $data);
    fclose($fp);

    echo "Data saved successfully!";
} else {
    
    header("Location: contact_form.html");
    exit();
}
?>
