<center>
	Select a File From Place Files: <br />
	<ul>
	<?php
	$dir = 'files/';
	if (is_dir($dir)) {$diri = 0;
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
				if (is_dir($dir . $file) && file_exists($dir . $file . "/OS.CFG")) {
					if ($file == '..' || $file == '.' || $file == 'manage.php' || $file == '.info') {continue;}
					if (is_dir($dir.$file)) {continue;} else {
						echo "<a href='wosinstallp.php'><li>Install files/$file</li></a>";
						$diri++;
					}
				}
			}
			closedir($dh);
		}
	}

	if ($diri <= 0) {
		echo 'There is Not Files Here!';
	}

	?>
	</ul><br />
	Files Are Here : <?= $diri ?><br />
	<b>Note</b> : Copy Your WOS Files to `files` Folder in root /bin/bios/wos to Install those.<br />
	<a href='woscontent.php'>Back</a>
</center>