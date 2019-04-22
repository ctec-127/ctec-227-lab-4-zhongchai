<?php
// filename: fileupload.php

require_once 'errorcodes.php';

    // check to see if the form is being used
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // save the uploaded file into a temp
        $tmp_file = $_FILES['file_upload']['tmp_name'];

        // set the name for the target file
        $target_file = $_FILES['file_upload']['name'];

        // tell the program which folder we want to upload to
        $upload_dir = 'uploads';

        // attempt to move the file; otherwise, throws error message
        if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)) {
            $message = "Upload successful!";
        } else {
            // if there's an error with the uploads, save it here
            $error = $_FILES['file_upload']['error'];
            $message = $upload_errors[$error];
        }

        // displays info to see if upload is working as intended
        // echo "<pre>";
        // print_r($_FILES['file_upload']);
        // echo "</pre>";

    // if the server request is GET, we know the user clicked on a link on the page
    // checks if the 'del' is set; if yes, we can take the file name and use the unlink to delete it from the folder
    } else if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['del'])) {
            unlink("uploads/" . $_GET['del']);
        }
    }

?>