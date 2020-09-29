<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition /root/bin</title>
        <link rel="stylesheet" href="style.css" />
    </head>
<body os="style:body1" style="background-color: black;color: whitesmoke;cursor: none;">
		<b>F7</b> All Detected Opeating Systems<br />
		<b>F8</b> All Detected Partitions<br />
		<b>ESC</b> Back<br />
		<div style="background-color: black;color: whitesmoke;width: 100%;" id='log'></div>
		<div style='display: none;' id='osdetcontent'>
			Remounting mtp:device ...<br />Scanning for OS.CFG files ...<br /><b>Detected Operating Systems</b><br /><ol><li>/bin : VMOS Based On E And Formatted As PHP</li><?php
				$dir = '../mnt/';
				if (is_dir($dir)) {
					if ($dh = opendir($dir)) {
						while (($file = readdir($dh)) !== false) {
							error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
							if (is_dir($dir . $file) && file_exists($dir . $file . "/OS.CFG")) {
								if ($file == '..' || $file == '.') {continue;}
								$jsonString = file_get_contents($dir . $file . "/OS.CFG");
								$json = json_decode($jsonString, true);
								if ($json["ACCEPT"] == "TRUE") {
									echo '<li>/mnt/'.$file.' : '.$json["OSNM"].' Based On '.$json["OSBS"].' And Formatted As '.$json["OSTP"].'</li>';
								} else {
									echo '<li>/mnt/'.$file.' : Destoryed Operating System</li>';
								}
							}

						}
						closedir($dh);
					}
				}

				?>
		</ol></div>
<div style='display: none;' id='ptdetcontent'>
			Remounting mtp:device ...<br />Scanning for Partitions ...<br /><b>Detected Partitions</b><br /><ol><?php
				$dir = '../mnt/';
				$count = 1;
				if (is_dir($dir)) {
					if ($dh = opendir($dir)) {
						while (($file = readdir($dh)) !== false) {
							error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
							if (is_dir($dir . $file)) {
								if ($file == '..' || $file == '.') {continue;}
								echo "<li>/mnt/$file (~ /dev/sda$count) wntfs</li>";
							}
							$count++;
						}
						closedir($dh);
					}
				}

				?>
		</ol></div>
<script>
			var wage = document.body;
			wage.addEventListener("keydown", function (e) {
				if (e.keyCode === 118) {
					// Boot First Mount On Press F7 Key
					document.getElementById('log').innerHTML = document.getElementById('osdetcontent').innerHTML;
				}

				if (e.keyCode === 119) {
					// Enter Terminal On Press F8 Key
					document.getElementById('log').innerHTML = document.getElementById('ptdetcontent').innerHTML;
				}

				if (e.keyCode === 27) {
					// Back to ~ /bin On Press ESC Key
					window.location.assign('start.php');
				}
			});
		</script>
</body>
</html>
