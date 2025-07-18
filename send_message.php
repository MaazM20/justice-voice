<?php
// Include initialization file
include 'core/init.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_id = $_POST['recipient_id'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO messages (recipient_id, message) VALUES (:recipient_id, :message)");
    $stmt->bindParam(':recipient_id', $recipient_id);
    $stmt->bindParam(':message', $message);

    // Execute the statement and check if it was successful
    if ($stmt->execute()) {
        echo "Message sent successfully.";
    } else {
        echo "Error sending message.";
    }
}
?>
