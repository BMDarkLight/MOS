<?php

$news = null;
$newsnum = rand(0,15);
switch($newsnum) {
	case 0:
		$news = 'Your <b>LAN</b> Device Detected a Router.';
		break;
	case 1:
		$dir = '../../mnt/';
		$news = 'You Haven\'t an OS. Let`s Install';
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
					if (is_dir($dir . $file) && file_exists($dir . $file . "/OS.CFG")) {
						if ($file == '..' || $file == '.') {continue;}
						$jsonString = file_get_contents($dir . $file . "/OS.CFG");
						$json = json_decode($jsonString, true);
						if ($json["ACCEPT"] == "TRUE") {
							$news = 'BIOS Detected an OS In /mnt/'.$file.' : '.$json["OSNM"].' Based On '.$json["OSBS"].' And Formatted As '.$json["OSTP"];
							break;
						}
					}

				}
				closedir($dh);
			}
		}
		break;
	case 2:
		$dir = '../../mnt/';
		$news = 'Your Partitions :';
		$count = 1;
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
					if (is_dir($dir . $file)) {
						if ($file == '..' || $file == '.') {continue;}
						$news = $news . " [/mnt/$file (~ /dev/sda$count) wntfs]";
					}
					$count++;
				}
				closedir($dh);
			}
		}
		break;
	case 3:
		$news = 'Your <b>LAN</b> Device Cannot Find Any Devices But Detected a Router';
		break;
	case 4:
		$news = 'Now ' . date('h:m:s',time());
		break;
	case 5:
		$news = 'Network Connection Status : <span id="network"></span><script>document.getElementById("network").innerHTML = navigator.onLine</script>';
		break;
	case 6:
		$news = 'User agent status : <span id="agent"></span><script>document.getElementById("agent").innerHTML = navigator.userAgent</script>';
		break;
	case 7:
		$news = 'You Are Running Cross-Platform Programs On <span id="app"></span><script>document.getElementById("app").innerHTML = navigator.appName + " " + navigator.platform</script>';
		break;
	case 8:
		$news = 'What is Your Language? I Know It :) It\'s <span id="lang"></span><script>document.getElementById("lang").innerHTML = navigator.language</script>';
		break;
	case 9:
		$news = 'We\'re Running On <span id="proto"></span> Protocol<script>document.getElementById("proto").innerHTML = window.location.protocol</script>';
		break;
	case 10:
		$news = 'You are looking me in a <span id="w"></span>x<span id="h"></span> Screen with <span id="d"></span> Color depth.<script>document.getElementById("h").innerHTML = screen.height;document.getElementById("w").innerHTML = screen.width;document.getElementById("d").innerHTML = screen.colorDepth</script>';
		break;
	default:
		$news = 'Nothing For today';
}