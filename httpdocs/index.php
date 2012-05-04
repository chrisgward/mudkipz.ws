<?php 
if($_SERVER['HTTP_HOST'] == "mudkipz.ws" && $_SERVER['REQUEST_URI'] == "/")
        header("HTTP/1.0 200 OK");
else
        header("HTTP/1.0 410 Gone");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>kip rolled</title>
		<link rel="stylesheet" type="text/css" href="/style.css"/>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("swfobject", "2.1");
		</script>
		<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
		<script type="text/javascript" src="http://test.serv1.mudkipz.ws/script.js"></script>		

	</head>
	<body onbeforeunload="return popup();">
		<div id="fb-root"></div>
		<h1>oh, i see you lieks mudkipz</h1>
		<p>
			<a name="fb_share" type="button_count"  target="_blank" share_url="http://mudkipz.ws" href="http://www.facebook.com/sharer.php">Share</a>
		</p>
		<p>
			<!--[if IE>-->
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fofficialmudkipz&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=285319061512609" frameborder="0" allowTransparency="0" scrolling="no"></iframe>
			<!--<![endif]-->
			<!--[if !IE]
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fofficialmudkipz&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=285319061512609"></iframe>
			<![endif]-->
		</p>

		<div id="ytapiplayer">
			You need Flash Player 8+ and JavaScript enabled to view this video.
		</div>


		<p>about mudkypzz!</p>
		<ul>
			<li>Dey swim to catch teh pokefish</li>
			<li>mudkypzz r teh kewlies</li>
			<li>Muddkypz eats poke-caviar - but only teh best >_></li>
		</ul>
	</body>
</html>
