<html>
	<head>
		<title>Cross-Platform BIOS</title>
	</head>
	<body style='background-color:#C1C1C1;margin: 0px;'>
		<center id='row' style='background-color: blue;width: 100%;height: 20px;color: white;'>Cross-Platform BIOS<div style='background-color: white;width: 10px;opacity: 0.8;border-right: 3px solid white;border-left: 3px solid ghostwhite;height: 20px;top: 0px;position: fixed;' id='rower'></div></center><br />
		<marquee>Your Device News : <?php include 'news.php';echo $news; ?></marquee><br />
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
		Note : Using APT Requires M Edition OS 4 to up.<br />
		Note : You Can Return By Pressing <b>ESC</b> Key.<br />
		Remounting mtp:device ... done.<br />
		Scanning for APT.CFG Files ... <?php
			$dir = '../../mnt/';
			$apt = null;
			$i = 0;
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($file = readdir($dh)) !== false) {
						error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
						if (is_dir($dir . $file) && file_exists($dir . $file . "/APT.CFG")) {
							if ($file == '..' || $file == '.') {continue;}
							$i++;
							$jsonString = file_get_contents($dir . $file . "/APT.CFG");
							$json = json_decode($jsonString, true);
							if ($json["ACCEPT"] == "TRUE") {
								echo 'done.';
								$apt = $json["APTCFG"];
								break;
							} else {
								echo 'fail.<br /><span style="color: red;">Error</span> : Detected APT Device is Destoryed.';
								exit();
							}
						}

					}
					closedir($dh);
				}
			}
		
			if ($i == 0) {
				echo 'fail.<br /><span style="color: red;">Error</span> : Not Found any APT Configuration.';
				exit();
			}

			?><br />
		Trying to Connecting to <?= $apt ?>:443 ... done.<br />
		APT Is Connected Now. You Can Using APT With M Edition OS Terminal Or M Store.
	</body>
</html>