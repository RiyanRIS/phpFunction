<?php
$sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
$targetPath = "local_cdn/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file