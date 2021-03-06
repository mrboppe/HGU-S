<?php
$accpage = "home";
$pages = array('home','team','shop','community');
foreach ($pages as $page) {
	if("/?pages=".$page === $_SERVER['REQUEST_URI']){
		$accpage = $page;
	}
}
?>
<!DOCTYPE html>
<html lang="sv" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./css/main.css">
		<link href='https://fonts.googleapis.com/css?family=Work Sans' rel='stylesheet'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<script src="./script/jq.js" charset="utf-8"></script>
	<script src="./script/live.js" charset="utf-8"></script>
	<body>
		<header>
			<div class="inner h m">
				<div class="l h f">
					<div class="h" id="logo">
						<img onclick="window.location.href='/'" src="./img/logo.png" alt="">
					</div>
					<nav class="h">
						<button type="button" class="ho"name="team" onclick="window.location.href='/?pages=team'"><b>TEAM</b></button>
						<button type="button" class="ho"name="shop" onclick="window.location.href='/?pages=shop'"><b>SHOP</b></button>
						<button type="button" class="ho"name="media" onclick="window.location.href='/?pages=media'"><b>MEDIA</b></button>
						<button type="button" class="ho"name="community" onclick="window.location.href='/?pages=community'"><b>COMMUNITY</b></button>
						<button type="button" name="live" id="live"><b>LIVE</b></button>
						<img src="./img/live.png" id="liveimg">
						<iframe id="prev" src="http://player.twitch.tv/?channel=mrboppee" height="30%" width="30%" frameborder="0" scrolling="no" allowfullscreen="true" ></iframe>
					</nav>

				</div>
				<div class="h r f">
					<div class="h" id="sok">
						<input type="text" name="sok" placeholder="Sök" class="h">
					</div>
					<div class="h f" id="rlb">
						<button type="button" class="ho"name="login" onclick="window.location.href='/login.php'"><b>LOGGA IN</b></button>
						<button type="button" class="ho"name="register" onclick="window.location.href='/register.php'"><b>REGISTRERA DIG</b></button>
					</div>
				</div>
			</div>
		</header>
		<main>
			<?php include './pages/'.$accpage.".php"; ?>
		</main>
		<footer>
			<div class="inner h m">
				<div id="lower">
					© 2018 HGU XD. All rights reserved.
					<a href="#" class="r">Terms of use</a>
				</div>
			</div>
		</footer>
	</body>
</html>
<title>HGU Home</title>
