<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition /root/bin/lan</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body os="style:body1" style="background-color: black;color: whitesmoke;cursor: none;">
	<b>F7</b> LAN Information<br />
	<b>F8</b> LAN Connection Status<br />
	<b>F9</b> LAN Detected Devices <br />
	<b>ESC</b> Back<br />
	<div style="background-color: black;color: whitesmoke;width: 100%;" id='log'></div>
	<script>
            var wage = document.body;
            wage.addEventListener("keydown", function (e) {
		    if (e.keyCode === 118) {
				// LAN Information On Press F7 Key
				document.getElementById('log').innerHTML = '<br />LAN Device bgn812/2 (UUID:unknown)<br /><b>Mounted as</b> ~ /lan (mtp:device/devices/lan) public 512MBMEM';
			}

			if (e.keyCode === 119) {
				// LAN Connection Status On Press F8 Key
				document.getElementById('log').innerHTML = '<b>LAN</b> Is Working Now.<br /><b>Connected Devices</b> : 0<br /><b>Connected Routers</b> : 2 (modem,repo-cable)';
			}

			if (e.keyCode === 120) {
				// LAN Detected Devices On Press F9 Key
				document.getElementById('log').innerHTML = '<b>LAN Detected Devices</b><br /><ol><li>Router (main) UUID:0000-0000-0000-0000 ~ /lan/router/configure</li></ol>';
			}

			if (e.keyCode === 27) {
				// Back to ~ /bin On Press ESC Key
				window.location.assign('start.php');
			}
                });
            </script>
    </body>
</html>
