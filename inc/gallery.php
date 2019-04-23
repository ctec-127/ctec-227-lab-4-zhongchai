<?php
// filename: gallery.php
?>
<div id="gallery" class="px-4 mx-auto">
    <?php 
    // cycle through files in the uploads folder
    // set variable name to name of the upload folder
    $uploads = "uploads/";
    $uploads_set;

    // checks if the upload directory exists
    // if yes, read its contents into an array and checks validity of file
    if (is_dir($uploads)) {
        $uploads_set = scandir($uploads);
        echo "<div class='row mb-3'>";
        foreach ($uploads_set as $file) {
            if (strpos($file, '.') > 0) {
                echo "<div class='img-container col-md-4 col-sm-6 col-xs-12 py-4'>";
                echo "<img src='uploads/{$file}' class='mx-auto img-thumbnail'>";
                echo "<div class='overlay'>";
                echo "<div class='delete-button'><a href='?del={$file}'>X</a></div>";
                echo "</div></div>";
            }
        }
        echo "</div>";

        // if the array is empty, display a special message
        if (empty($uploads_set[2])) {
            echo "<div class='py-4'><h4 class='text-center'>There are no photos in your gallery ):</h4></div>";
            
        }
    }
    ?>
</div> <!-- END DIV gallery -->