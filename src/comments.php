<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $service_id = $_POST['service_id'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (user_id, service_id, comment) VALUES ('$user_id', '$service_id', '$comment')";
    if ($conn->query($sql)) {
        echo "Comment posted!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>