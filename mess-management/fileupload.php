<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
        $targetDirectory = "uploads/"; // Directory to store the uploaded files
        $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
        $uploadOk = true;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "File already exists.";
            $uploadOk = false;
        }

        // Check file size (limit it if necessary)
        if ($_FILES["file"]["size"] > 500000) {
            echo "File is too large.";
            $uploadOk = false;
        }

        // Limit the allowed file types (you can add more if needed)
        $allowedTypes = array("jpg", "png", "jpeg", "gif");
        if (!in_array($fileType, $allowedTypes)) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = false;
        }

        // If $uploadOk is true, move the file to the desired location
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
            } else {
                echo "Error uploading the file.";
            }
        }
    }
    ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
