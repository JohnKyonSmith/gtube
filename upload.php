<?php
    if ($_FILES['vidfile']['type'] == "video/webm" || $_FILES['vidfile']['type'] == "video/mp4") {
        move_uploaded_file($_FILES['vidfile']['tmp_name'], getcwd()."/video/temp/".$_SERVER['REQUEST_TIME']);
        echo "File uploaded. Please wait a few minutes for the encode to complete. You will now be returned to the home page";
        /* This doesn't work, no idea why */
        echo shell_exec("/bin/sh reencode.sh &");

        /* header("Location: index.php"); */
    }
    else {
        echo "Invalid file format";
    }
?>
