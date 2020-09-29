<!DOCTYPE HTML>
<?php

require_once 'os.php';

if ($status) {
    ?>
        <html>
            <head>
                <title>M Edition Water</title>
                <link rel="stylesheet" href="bin/style.css" />
                <script src="bin/script.js"></script>
            </head>
            <body os="style:body1" style="cursor: none;background-color: black">
               	<center><img src="mnt/system/.libraries/bootloader.png" width='40%' style="margin: 50px auto 50px;" /></center>
		<a style="position: fixed;top: 95%;" href="bin" os="white">Press F2 to Boot Setup</a>
                <style>
                    #myBar {
                        height: 3px;
                        background-color: lightsteelblue;
                        border-top-right-radius: 5px;
                        border-bottom-right-radius: 5px;
                    }
                </style>
                <script>
                    setInterval(function () {window.location.assign('boot.php');},5000);
                    var wage = document.body;
                    wage.addEventListener("keydown", function (e) {
                        if (e.keyCode === 113) {
                            // Enter Setup On Press F2 Key
                            window.location.assign('bin');
                        }

                        if (e.keyCode === 121) {
                            // Enter Status Network On Press F10 Key
                            if (navigator.onLine) {
                                alert('System Is Online');
                            } else {
                                alert('System Is Offline');
                            }
                        }

                        if (e.keyCode === 119) {
                            // Enter Terminal On Press F8 Key
                            window.location.assign('mnt/system/explorer/term.php');
                        }

                        if (e.keyCode === 120) {
                            // Load Toolkits On Press F9 Key
                            alert('Invalid to Mount Toolkits');
                        }
                    });
                </script>
            </body>
        </html>
    <?php
} else {
    ?>
    <html>
        <head>
            <title>M Edition Water</title>
            <link rel="stylesheet" href="bin/style.css" />
            <script src="bin/script.js"></script>
        </head>
        <body os="style:body1">
            e.ecl <span red>Invalid to Mount mos_cache</span><br />
            e.ecl <span red>Invalid to Mount mos_account</span><br />
            e.ecl <span red>Invalid OS Installation Key</span><br />
            e.ecl.packages <span red>Invalid to Run Package responsity main/mos_desktop</span><br />
            e.ecl.throws Exist A Throw For This Error.<br />
            e.eui Launching ...<br />
            <h1>Error M Edition OS Installation</h1>
            M Edition Doesn't Installed On Your System.<br />
            You Must Be Install M Edition OS.<br />
            Cross-Platform, Boot /bin/install (/explorer:admin(os()) -boot('/bin/install/install.crconf')).<br />
            <div id="myBar"></div>
            <style>
                #myBar {
                    height: 3px;
                    background-color: lightsteelblue;
                    border-top-right-radius: 5px;
                    border-bottom-right-radius: 5px;
                }

                [red] {
                    color: red;
                }
            </style>
            <script>
                move(id('myBar'),15,"window.location.assign('bin/install');");
                var wage = document.body;
                wage.addEventListener("keydown", function (e) {
                    if (e.keyCode === 113) {
                        // Enter Setup On Press F2 Key
                        window.location.assign('bin');
                    }

                    if (e.keyCode === 121) {
                        // Enter Status Network On Press F10 Key
                        if (navigator.onLine) {
                            alert('System Is Online');
                        } else {
                            alert('System Is Offline');
                        }
                    }

                    if (e.keyCode === 119) {
                        // Enter Terminal On Press F8 Key
                        window.location.assign('mnt/system/explorer/term.php');
                    }

                    if (e.keyCode === 120) {
                        // Load Toolkits On Press F9 Key
                        alert('Invalid to Mount Toolkits');
                    }
                });
            </script>
        </body>
    </html>
    <?php
}

