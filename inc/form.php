<?php
// filename: form.php
?>
<div id="formarea">
    <div id="errorcodes">
        <?php 
        // displays the message with the error codes here if it exists
        if (!empty($message)) {
            echo "<p>" . $message . "</p>";
        } else {
            echo "";
        }
        ?>
    </div> <!-- END DIV error codes -->

<!-- display the form here -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="2750000">
        <input type="file" name="file_upload" accept="image/*" multiple>
        <input type="submit" name="submit" value="Upload">
    </form> <!-- END DIV form -->
</div> <!-- END DIV form area -->