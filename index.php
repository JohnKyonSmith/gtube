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
		<header><a href="http://gtube.bbf.lt/">gTube</a>	
			<form id="search">
				<input id="searchbar" type="text" name="Keyword" autofocus/>
				<input id="searchb" type="submit" value="Search" />
			</form>
		</header>
		<div id="wrapper">
			<div id="pageTitle">Newest Videos</div>
			<ul id="videos">
				<?php for ($i=0; $i < 12 ; $i++) { ?>
					<li>
						<a href="video.php">
							<div class="videoThumb"></div>
							<div class="videoTitle">Title</div>
						</a>
					</li>
				<?php }?>
			</ul>
		</div>
		<footer>Created for your freedoms.</footer>
	</body>
</html>



