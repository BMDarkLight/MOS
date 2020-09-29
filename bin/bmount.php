<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition /root/bin</title>
		<style>
			body {
				font-family: Laksaman;
			}
			
			button {
				background: azure;
				color: black;
				border: 0px solid black;
				border-radius: 0px;
				cursor: alias;
			}
			
			button:hover {
				
				background: black;
				color: white;
			}
		</style>
    </head>
    <body os="style:body1" style="background-color: black;color: whitesmoke;cursor: none;">
	Mounting mtp:device/access/mouse ... done.<br />
	Showing OSBOX ...<br />
	<div style='width: 100%;background-color: #FF85F6;color: azure;font-family: sans-serif;cursor: alias;'>
	Please Using Mouse And Select a Partition For Booting.<br />
	<?php
	$dir = '../mnt/';
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
				if (is_dir($dir . $file)) {
					if ($file == '..' || $file == '.') {continue;}
					echo "<a href='../cboot.php?b=$file'><button>Boot From /mnt/$file</button></a><br />";
				}
				$count++;
			}
			closedir($dh);
		}
	}

	?><br />
	<b>Note</b> : You Can Close Boot With Click `Home` Key 7 times.
	</div>
	<b>F7</b> Boot First Mount<br />
	<b>ESC</b> Back<br />
	<div style="background-color: black;color: whitesmoke;width: 100%;" id='log'></div>
	<script>
                var wage = document.body;
                wage.addEventListener("keydown", function (e) {
		    		if (e.keyCode === 118) {
                        // Boot First Mount On Press F7 Key
                        window.location.assign('../boot.php?b=f');
                    }

                    if (e.keyCode === 27) {
                        // Back On Press ESC Key
                        window.location.assign('start.php');
                    }
                });
            </script>
    </body>
</html>
