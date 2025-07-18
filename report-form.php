<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report Form</title>
<style>
    /* CSS for styling the form */
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
    }
    .popup {
        width: 300px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    .form-group {
        margin-bottom: 10px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
    }
    .form-group input[type="text"],
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group textarea {
        resize: vertical;
        min-height: 100px;
    }
    .form-group .btn {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
</head>
<body>
    <div class="popup" id="reportPopup">
        <h2>Report Post</h2>
        <form action="submit-report.php" method="POST">
            <div class="form-group">
                <label for="reason">Reason for Reporting:</label>
                <textarea id="reason" name="reason" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit Report" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
