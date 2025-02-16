<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $service_id = $_POST['service_id'];
    $appointment_date = $_POST['appointment_date'];

    $sql = "INSERT INTO appointments (user_id, service_id, appointment_date) VALUES ('$user_id', '$service_id', '$appointment_date')";
    if ($conn->query($sql)) {
        echo "Appointment booked!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>