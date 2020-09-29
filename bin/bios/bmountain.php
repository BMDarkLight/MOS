<html>
	<head>
		<title>Cross-Platform BIOS</title>
	</head>
	<body style='background-color:#C1C1C1;margin: 0px;'>
		<center id='row' style='background-color: blue;width: 100%;height: 20px;color: white;'>Cross-Platform BIOS<div style='background-color: white;width: 10px;opacity: 0.8;border-right: 3px solid white;border-left: 3px solid ghostwhite;height: 20px;top: 0px;position: fixed;' id='rower'></div></center><br />
		<marquee>Your Device News : <?php include 'news.php';echo $news; ?></marquee><br />
		Importing (ecl15,mos4,xec,bios-frameworks) ... (done,fail,done,done).<br />
		Scanning For Supported Programs ... fail.<br />
		<span style='color: red;'>ecl15.throws</span> There isn't an Option For Using This Case.<br /><br />
		Output : Operation Failed. You Can Return to Main Menu By Pressing <b>ESC</b> Key.
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
		<script>
			var wage = document.body;
			wage.addEventListener("keydown", function (e) {
				if (e.keyCode === 27) {
					// Back On Press ESC Key
					window.location.assign('start.php');
				}
			});
		</script>
	</body>
</html>