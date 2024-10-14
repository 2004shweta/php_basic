<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $institution = htmlspecialchars($_POST['institution']);
    $email = htmlspecialchars($_POST['email']);
    $note = htmlspecialchars($_POST['note']);

    echo "<h2>Form Submission Details</h2>";
    echo "Title: " . $title . "<br>";
    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name . "<br>";
    echo "Institution: " . $institution . "<br>";
    echo "Email Address: " . $email . "<br>";
    echo "Note to the Organizer: " . $note . "<br>";
}
?>