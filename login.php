<!DOCTYPE html>
<html lang="sv" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>HGU Logga in</title>
		<link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/login.css">
		<link rel="icon" href="./img/logo.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>

	<script src="./script/jq.js" charset="utf-8"></script>
	<script src="./script/live.js" charset="utf-8"></script>
	<body>
    <div id="logo">
      <a href=".."><img src="./img/logo.png" alt=""></a>
    </div>
    <div id="loginform">
      <form class="" action="./inc/login.php" method="post">
        <p>Username/Email</p>
        <input type="text" name="username">
        <p>Lösenord</p>
        <input type="password" name="password">
        <button type="button" name="button">Logga in</button>
      </form>
    </div>
	</body>
</html>
