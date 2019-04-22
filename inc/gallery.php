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
        foreach ($uploads_set as $file) {
            if (strpos($file, '.') > 0) {
                echo "<div class='img-tb'><img src='uploads/{$file}' class='img-fluid img-thumbnail'><br><a href='?del={$file}'>del</a></div>";
            }
        }

        // if the array is empty, display a special message
        if (empty($uploads_set[2])) {
            echo '<div class="">';
            echo "There are no photos in your gallery ):</div>";
            
        }
    }
    ?>
    
    <!-- test placeholder images
    <div class="mx-auto">
        <img src="http://lorempixel.com/640/480" class="img-fluid img-thumbnail">
        <img src="http://lorempixel.com/640/480" class="img-fluid img-thumbnail">
        <img src="http://lorempixel.com/640/480" class="img-fluid img-thumbnail">
        <img src="http://lorempixel.com/640/480" class="img-fluid img-thumbnail">
        <img src="http://lorempixel.com/640/480" class="img-fluid img-thumbnail">
        <img src="http://lorempixel.com/640/480" class="img-fluid img-thumbnail">
    </div>
    -->

</div> <!-- END DIV gallery -->