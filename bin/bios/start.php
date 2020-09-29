<html>
	<head>
		<title>Cross-Platform BIOS</title>
	</head>
	<body style='background-color:#C1C1C1;margin: 0px;'>
		<center id='row' style='background-color: blue;width: 100%;height: 20px;color: white;'>Cross-Platform BIOS<div style='background-color: white;width: 10px;opacity: 0.8;border-right: 3px solid white;border-left: 3px solid ghostwhite;height: 20px;top: 0px;position: fixed;' id='rower'></div></center><br />
		<marquee>Your Device News : <?php include 'news.php';echo $news; ?></marquee><br />
		<h3>Boot Settings</h3>
		System Boot Mount Point : ~ /boot<br />
		<ul>
			<li><a href='../../'>Reboot Device</a></li>
			<li><a href='../bmount.php'>Boot Options</a></li>
			<li><a href='bmountain.php'>Mountain Boot Options (for ecl15,mos2)</a></li>
		</ul>
		<h3>Programs Settings</h3>
		<ul>
			<li><a href='wos.php'>Web Operating System</a></li>
			<li><a href='apt.php'>APT 3.0</a></li>
			<li><a href='../sys.php'>Operating System Ultra</a></li>
		</ul>
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