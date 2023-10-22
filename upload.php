<?php
if (isset($_POST["submit"])) {
    $file = $_FILES["file"];

    // Check if the file was uploaded without errors
    if ($file["error"] === UPLOAD_ERR_OK) {
        $targetDirectory = "uploads/";  // Create a directory to store uploaded files
        $targetPath = $targetDirectory . basename($file["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Error: " . $file["error"];
    }
}
?>
