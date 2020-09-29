<!DOCTYPE HTML>
<?php

require_once 'os.php';

if ($status) {
?>

<html>
    <head>
        <title>M Edition Water</title>
        <link rel='icon' href='mnt/system/os/favicon.ico' width="100%" />
        <style>
            body {
                background-color: black;
                margin: 0px;
                padding: 0px;
                background: url("mnt/system/.libraries/bootloader.png") no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;
            }
            
            #bootloader {
                border: none;
                width: 100%;
                height: 100%;
                position: fixed;
                margin: 0px;
                padding: 0px;
                display: none;
            }
            
            #apt {
                margin: 5% auto 5%;
                width: 40%;
                border-radius: 5px;
                background-color: gainsboro;
                font-family: Laksaman;
            }
            
            #endboot {
                margin: 5% auto 5%;
                width: 40%;
                border-radius: 5px;
                background-color: gainsboro;
                font-family: Laksaman;
                display: none;
            }

	    #reboot {
                margin: 5% auto 5%;
                width: 40%;
                border-radius: 5px;
                background-color: gainsboro;
                font-family: Laksaman;
                display: none;
            }
            
            #crashboot {
                margin: 5% auto 5%;
                width: 40%;
                border-radius: 5px;
                background-color: gainsboro;
                font-family: Laksaman;
                display: none;
            }
            
            button {
                background-color: ghostwhite;
                border-radius: 5px;
                box-shadow: 0px 0px 5px black;
            }
        </style>
        <script>
            function boot() {
                document.getElementById('apt').style.display = 'none';
                
                // Fix Size
                var elem = document.getElementById("bootloader");
                elem.style.display = 'block';
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.mozRequestFullScreen) { /* Firefox */
                    elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
                    elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) { /* IE/Edge */
                    elem.msRequestFullscreen();
                }
                
                //
            }
            
            function deboot() {
                document.getElementById('apt').style.display = 'none';
                document.getElementById("bootloader").style.display = 'block';
            }

	    function reboot() {
		document.getElementById('bootloader').style.display = 'none';
                document.getElementById("reboot").style.display = 'block';
		setInterval(function () {window.location.assign('start.php');},1500);
	    }
        </script>
    </head>
    <body>
        <div id="apt">
            <h3 align='center'>Allow M Edition Boot On Your Device</h3>
            You Are Launching M Edition System On Your Browser.<br />
            Browser Cannot Show System Contents Correct.<br />
            Bootloader Must Allow M Edition Boot Settings On Your Device : <br />
            <center><button onclick="boot()"><img src='mnt/system/os/cursor/drive.png' width=10 height=8 />Allow</button></center><br />
            * For Use M System For Default Settings Click : <span onclick="deboot()" style='color: blue;text-decoration: underline;cursor: pointer;'><img src='mnt/system/os/cursor/drive.png' width=10 height=8 />Use On Default Settings</span> <span style="color: red;">(Not Recommended)</span>
        </div>
        <div id="endboot">
            <h3 align='center'>Boot Closed</h3>
            M System Closed Current Boot.<br />
            You Can Restart Boot by Click This Button : <br />
            <center><button onclick="window.location.assign('start.php')"><img src='mnt/system/os/cursor/drive.png' width=10 height=8 />Reboot</button></center><br />
        </div>
	<div id="reboot">
            <h3 align='center'>Rebooting</h3>
            Please Wait ...
        </div>
        <div id="crashboot">
            <h3 align='center'>Boot Crashed</h3>
            M System Crashed Current Boot. This Can Maded From a Bug Or Problem On Your System.<br />
            Please Report This Problem to Offical M Site Or Reboot : <br />
            <center><button onclick="window.location.assign('start.php')"><img src='mnt/system/os/cursor/drive.png' width=10 height=8 />Reboot</button></center><br />
        </div>
        <iframe id='bootloader' src='mnt/system/os'>
            #document
        </iframe>
    </body>
</html>

<?php 
}
