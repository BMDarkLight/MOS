<html>
	<head>
		<title>Cross-Platform BIOS</title>
	</head>
	<body style='background-color:#C1C1C1;margin: 0px;'>
		<center id='row' style='background-color: blue;width: 100%;height: 20px;color: white;'>Cross-Platform BIOS<div style='background-color: white;width: 10px;opacity: 0.8;border-right: 3px solid white;border-left: 3px solid ghostwhite;height: 20px;top: 0px;position: fixed;' id='rower'></div></center><br />
		<marquee>Your Device News : <?php include 'news.php';echo $news; ?></marquee><br />
		Remounting mtp:device ... done.<br />
		Importing (ecl15,wos,bios-frameworks) ... (done,done,done).<br />
		Building wos-tree ... done.<br />
		Redirecting to wos-manager ... <script>setInterval(function () {window.location.assign('wos')},2000)</script>
		<script>
			var count = 0;
			setInterval(function () {
				count++;
				document.getElementById('rower').style.left = (count - 200) * 0.1 + "%";
				if (count >= 1200) {
					count = 0;
				}
			},5);
		</script>
	</body>
</html>