<!DOCTYPE html>
<html>
<head>
	<title>Random github profile pics</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang&display=swap" rel="stylesheet">
    <meta name="apple-mobile-web-app-capable" content="yes" />
</body>
</head>
<body>
<center>
    <div id="header">
        <h1>Random github profile pic</h1>
    </div>
    <br><br><br><br><br>
    <?php
	$site = "https://avatars.githubusercontent.com/u/" . rand(1, 50000000);
	echo "<a href='$site'><img src='$site'></a>";
    ?>

<div id="bottom"><br>
    <a href="javascript:history.back()"><button id="back" type="submit" aria-label="back">
        <img src="img/back.png"  style="max-widht:32px; max-height:32px;">
    </button></a>

    <a target="_blank" href="https://github.com/diego-tella/Random-Github-pfp"><button id="git" type="submit" aria-label="back">
        <img src="img/github.png"  style="max-widht:32px; max-height:32px;">
    </button></a>

    <form method="POST">
        <button type="submit" aria-label="refresh">
            <img src="img/refresh.png"  style="max-widht:32px; max-height:32px;">
        </button>
    </form>
    
</div>
</center>
</body>
</html>