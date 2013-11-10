<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>gTube</title>
	<link rel="stylesheet" type="text/css" href="media/css/darkstyle.css" />
	<script type="text/javascript" src="media/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="media/js/jquery-ui-1.10.2.js"></script>
	<script type="text/javascript" src="media/js/moment.js"></script>
	<script type="text/javascript" src="media/js/video_player.js"></script>
	<script type="text/javascript" src="media/js/main.js"></script>
    </head>



    <body>
	<header>
            <a href="http://gtube.muhprivacy.com/">gTube</a>
	    <form id="search">
	        <input id="searchbar" type="text" name="Keyword" autofocus/>
	        <input id="searchb" type="submit" value="Search" />
	    </form>
	</header>
	<div id="wrapper">
	    <div id="pageTitle">Newest Videos</div>
	    <ul id="videos">
		<?php
                    foreach (glob("video/*.webm") as $file) {
                        $id = preg_replace('/video\//', "", preg_replace('/\.webm/', "", $file));
		        echo "<li>\n";
		        echo "\t<a href=\"video.php?id=$id\">\n";
			echo "\t\t<img src='video/previews/$id.png' class='videoThumb'>\n";
			echo "\t\t<div class=\"videoTitle\">$id</div>\n";
		        echo "\t</a>\n";
		        echo "</li>\n";
		    }
                ?>
	    </ul>
        </div>
        <form enctype="multipart/form-data" action="upload.php" method="post">
            <input name="vidfile" id="vidfile" type="file" />
            <input type="submit" value="Upload" name="submit" id="submit" />
        </form>
        <br>
        <div id="footer">
            Created for your freedoms.
        </div>
    </body>
</html>
