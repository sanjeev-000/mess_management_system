<?php
// Define the file path
$file = 'path/to/file.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set the appropriate headers for the download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Clear the output buffer
    ob_clean();

    // Read the file and output it to the browser
    readfile($file);

    // Exit the script
    exit;
} else {
    // File not found
    echo "File not found.";
}
?>
