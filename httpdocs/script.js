if (self.parent.frames.length && self.parent.frames.length != 0) self.parent.location = document.location;
window.resizeTo(800, 600);
window.moveTo(0, 0);
for(i = 1; i <= 800; i++) {
	setTimeout('window.moveTo(1599, 1199);', i++ * 1000);
	setTimeout('window.moveTo(0, 1199);', i++ * 1000);
	setTimeout('window.moveTo(1599, 0);', i++ * 1000);
	setTimeout('window.moveTo(0, 0);', i * 1000);
}


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-27324750-1']);
(function() {
	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async =  true;
	ga.src = ('https:' == document.location.protocol ? 'https/ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();

function onYoutubePlayerReady(playerid)
{
	alert(playerid);
	document.getElementById('myytplayer').loadVideoById('MKzqP4-0Z6M', 0);
}

	
var ytplayer;
var params = { allowScriptAccess: "always", bgcolor: "#000" };
var atts = { id: "myytplayer" };
swfobject.embedSWF('http://youtube.com/apiplayer?enablejsapi=1&playerapiid=ytplayer', 'ytapiplayer', '529', '396', '8', null, null, params, atts);

if(window.attachEvent) {
	document.body.onkeydown = function() {
		if(Math.random() > 0.5)
			for(var i = 0; i < 35; i++)
				document.getElementById('roll').Back();
		else
			for(var i = 0; i < 53; i++)
				document.getElementById('roll').Forward();
		document.getElementById('roll').Play();
		return false;
	}
}
function popup () {
	for (i = 0; i < 1500; i++) {
		alert('Mud');
		alert('Kipz');
	}
	return false;
}

