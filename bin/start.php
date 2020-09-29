<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition /root/bin</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body os="style:body1" style="background-color: black;color: whitesmoke;cursor: none;">
    <b>F2</b> Run BIOS<br />
	<b>F4</b> Boot another Mount<br />
	<b>F7</b> Boot From First Mount<br /><br />
	<b>F8</b> LAN<br />
	<b>F9</b> Operating System Ultra<br />
	<b>F10</b> Network Status<br /><br />
	<b>ESC</b> Continue Normally Boot<br />
	<div style="background-color: black;color: whitesmoke;width: 100%;" id='log'></div>
	<script>
                var wage = document.body;
                wage.addEventListener("keydown", function (e) {
                    if (e.keyCode === 113) {
                        // Enter Setup On Press F2 Key
                        window.location.assign('bios');
                    }

		    if (e.keyCode === 115) {
                        // Boot Another Mount On Press F4 Key
                        window.location.assign('bmount.php');
                    }

		    if (e.keyCode === 118) {
                        // Boot First Mount On Press F7 Key
                        window.location.assign('../boot.php?b=f');
                    }

                    if (e.keyCode === 121) {
                        // Enter Status Network On Press F10 Key
                        if (navigator.onLine) {
                            document.getElementById('log').innerHTML = '<br />System Is Online';
                        } else {
                            document.getElementById('log').innerHTML = '<br />System Is Offline';
                        }
                    }

                    if (e.keyCode === 119) {
                        // Enter Terminal On Press F8 Key
                        document.getElementById('log').innerHTML = 'Please Wait ...';
                        setInterval(function () {window.location.assign('lan.php');},2000);
                    }

		    if (e.keyCode === 120) {
			// Operating Systems Ultra On Press F9 Key
			document.getElementById('log').innerHTML = 'Please Wait ...';
			setInterval(function () {window.location.assign('sys.php');},2000);
		    }

                    if (e.keyCode === 27) {
                        // Reboot On Press ESC Key
                        window.location.assign('../');
                    }
                });
            </script>
    </body>
</html>
