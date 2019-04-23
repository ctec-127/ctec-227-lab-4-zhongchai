<?php
// filename: form.php
?>
<div id="formarea" class="p-4 mx-auto">
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
        <div class="upload-btn-wrapper">
            <button class="btn">choose a file</button>
            <input type="file" id="file" name="file_upload" accept="image/*">
        </div>
        <input type="submit" name="submit" value="upload">
    </form> <!-- END DIV form -->

</div> <!-- END DIV form area -->