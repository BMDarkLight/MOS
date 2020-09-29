<!DOCTYPE BIOS>
<!-- bios:pack(mos_desktop_ui) -->
<?php

include_once 'os.info.php';
include_once '../functions.php';

$user = file_get_contents('.cache/lastlogin/username');
$pass = file_get_contents('.cache/lastlogin/password');
$slug = file_get_contents('.cache/lastlogin/slug');

if (is_dir('../../user/' . $slug . '/.info')) {
    if (file_get_contents('../../user/' . $slug . '/.info/username') == $user) {
        include_once '../../user/' . $slug . '/.info/password.php';
        if ($pass === $userpass) { ?>
            <html id="os" xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1" />
                    <title>M Edition - <?= $user ?></title>
                    <script src="../../../bin/j.js"></script>
                    <script src="../../../bin/script.js"></script>
                    <script src='lib/spserv/voice.js'></script>
                    <link href="Style's.css" rel="stylesheet" type="text/css" />
                    <link href="../../../bin/style.css" rel="stylesheet" type="text/css" />
                    <link rel='icon' href='favicon.ico' width="100%" />
                    <link rel="stylesheet" href="lib/icon.css" />
                    <link rel="stylesheet" href="../../../bin/jui.css" />
                </head>
                <body style='background: url("../../user/<?= $slug ?>/.info/settings/walpaper.png") no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;overflow: hidden;' onkeypress="keys(event)" onerror="console.log('M Edition Have External Errors');" onmouseenter="console.log('Finding For Mouse ... Done')" onmouseleave="console.log('os entry (massage) : I Was Losted Mouse');console.log('Finding For Mouse ...')" onresize="console.log('Updating OS Page to Current Resolution ... Done')" oninvalid="alert('Sorry, M Edition Have Any Internal Errors By Invalid Content');" onkeypress="console.log('event entry from (mos_devices_keyboard) to (vmos) : Pressed Key In Public Event')" onclick="console.log('event entry from (mos_devices_mouse) to (vmos) : Clicked Mouse in Public Event');" onvolumechange="alert('Change Your Volume By M Edition Volume Service Please')" onload="loaded()">
                    <div id="olw"><center style="padding: 13%;"><h1>Welcome <img src="lib/load.gif" style="border-radius: 50%" width=30 height=30 /></h1></center></div>
                    <!--<script>
                        function showCoords(event) {
                            var x = event.clientX;
                            var y = event.clientY;
                            document.getElementById('pointer').style.width = x + 'px';
                            document.getElementById('pointer').style.height = y + 'px';
                        }
                    </script>-->
                    <div id="top">
                        <span id="select"><img src="favicon.ico" />M Edition Desktop</span>
                        <span class="right"><a href="javascript: shdn();" title="Shut Down"><button><img src="lib/power.png" width=16 height=16 /></button></a><div class="dropdown">
                          <button class="dropbtn"> <?= $user ?></button>
                          <div class="dropdown-content">
                            <a href="javascript: ulog();">Logout</a>
                            <a href="javascript: switcha();">Switch User</a>
                            <a href="javascript: rest();">Restart</a>
                            <a href="javascript: shdn();">Shut down</a>
                            <hr />
                            <center><img src="../../user/<?= $slug ?>/.info/avatar.png" width="100px" height="100px" style="border-radius: 100px" />
                            <span style="text-align: center;"><?= $user ?></span></center><hr />
                            <canvas id="canvas" width="150" style="background-color:#333">
                            </canvas>
                          </div>
                        </div> | <span id="time"></span></span>
                        <script>
                            typetime(id('time'));
                        </script>
                    </div>
                    <!-- <span style="opacity: 0.4;background-color: black;color: white;" onclick="xec()" title="XEC System
M Edition Source
XEC Version : v1.2
v5.0.professional">XEC</span> -->

                    <?php if ($startopacity < 0.5) {
                        echo 'Opacity Must Be More then 0.5 And less then 1.<br />';
                        $startopacity = 0.5;
                    } ?>
					<table id='desktop' style='position: fixed;width: 100%;height: 80%;top: 10%;'>
						<!--<div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 50px;height: 50px;'><img src="favicon.ico" draggable="true" ondragstart="drag(event)" id="drag1" width="40" height="40"></div>-->
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'><img title="M File Browser" src="../apps/com.m.explorer/icon.png" onclick="openapp('com.m.explorer','M File Browser')" draggable="true" ondragstart="drag(event)" id="drag1" width="40" height="40"></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'><img title="Trash" src="cursor/trash.png" onclick="openapp('com.m.explorer','M File Browser','com.m.explorer/trash.php')" draggable="true" ondragstart="drag(event)" id="drag3" width="40" height="40" style='border-radius: 5px;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'><img title="M Store" src="../apps/com.m.store/icon.png" onclick="openapp('com.m.store','M Store')" draggable="true" ondragstart="drag(event)" id="drag2" width="40" height="40" style='border-radius: 5px;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
						<tr>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
							<td><div ondrop="drop(event)" ondragover="allowDrop(event)" style='width: 100%;height: 100%;'></div></td>
						</tr>
					</table>
                    <div id="startbar">
                        <div id="win">
                            <div id="menu" style="font-family:Mj_Dinar;">
                                <div class="left-menu">
                                    <ul>
                                        <li><a class="arrow" href="#"><div class="fleft foldr"></div>Control Panel</a>
                                            <div class="recent">
                                                <hr>
                                                <ul>
                                                    <li><a href="javascript:openapp('com.m.service','System Settings','com.m.service/system.php');">System Settings</a></li>
                                                    <li><a href="javascript:openapp('com.m.service','Account Settings','com.m.service/account.php');">Account Settings</a></li>
                                                    <li><a href="javascript:openapp('com.m.store','M Store','com.m.store/apps.php');">Softwares</a></li>
                                                    <li><a href="javascript:openapp('com.m.service','Plugin Manager','com.m.service/plugs.php');">Plugins</a></li>
                                                    <li><a href="javascript:openapp('com.m.service','Language And Input','com.m.service/langs.php');">Language And Input</a></li>
                                                    <li><a href="javascript:openapp('com.m.service','Session Manager','com.m.service/sessions.php');">Sessions</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="javascript:openapp('com.m.store','M Store','com.m.store')"><div class="fleft foldr"></div>Store</a></li>
                                        <li><a href="javascript:openapp('com.m.explorer','M File Browser')"><div class="fleft foldr"></div>File Manager</a></li>
                                        <iframe id="notes" style="border: none;border-radius: 5px;width: 100%;height: 40%;overflow: scroll;" src="../apps/com.m.explorer/notes.php"></iframe>
                                        <li class="all-prog"><a href="#">Applications</a>
                                            <div class="recent all left-menu" style="overflow-y: scroll;">
                                                <ul>
                                                    <?php
                                                    $dir = '../apps/';
                                                    if (is_dir($dir)) {
                                                        if ($dh = opendir($dir)) {
                                                            while (($file = readdir($dh)) !== false) {
                                                                error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
                                                                if (is_dir($dir . $file) && !file_exists($dir . $file . "/access")) {
                                                                    if ($file == '..' || $file == '.') {continue;}
                                                                    echo "<li><a href=\"javascript:openapp('$file','".file_get_contents($dir . $file . '/title')."')\"><img src='$dir/$file/icon.png' width=20 height=20 />".file_get_contents($dir . $file . '/title')."</a></li>";
                                                                }

                                                            }
                                                            closedir($dh);
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                                <div style="margin-top:15px;font-weight:bold;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- leftmenu -->

                                <div class="right-menu">
                                    <ul>
                                        <li style="text-align: center;color: white;" title="Howdy, behdadmehrnia">Howdy,<br /><?= $user ?></li>
                                        <li style="border-top:1px solid rgba(255,255,255,0.1);padding-top:2px;"><a href="javascript:openapp('com.m.explorer','M File Browser','com.m.explorer/read.php?path=/user/<?= $slug ?>/')">Home</a></li>
                                        <li><a href="javascript:openapp('com.m.explorer','M File Browser','com.m.explorer/read.php?path=/user/<?= $slug ?>/Documents')">Documents</a></li>
                                        <li><a href="javascript:openapp('com.m.explorer','M File Browser','com.m.explorer/read.php?path=/user/<?= $slug ?>/Downloads')">Downloads</a></li>
                                        <li><a href="javascript:openapp('com.m.explorer','M File Browser','com.m.explorer/read.php?path=/user/<?= $slug ?>/.trash')">Trash</a></li>
                                        <li style="border-top:1px solid rgba(255,255,255,0.1);padding-top:2px;"><a href="javascript: rest();">Restart</a></li>
                                        <li style="border-bottom:1px solid rgba(255,255,255,0.1);padding-top:5px;margin-bottom:2px;"><a href="javascript: ulog();">Log out</a></li>
                                    </ul>
                                    <a href="javascript: shdn();">
                                    <div class="shutdown">
                                        <div class="lf">Power</div>
                                        <div class="clear"></div>
                                    </div>
                                    </a>
                                    <div id="kontener">
                                        <img src="../../user/<?= $slug ?>/.info/avatar.png" class="admin" />
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <img style="font-size: 20pt;width: 100%;height: 100%;border-radius: 100%;" title="Desktop Menu" src="cursor/msrfile.png" />

                        </div>
                        <!--
                        <div id="list">
                            <div class="opened tunggal"><div class="foldr np small"></div>
                                <div class="screensht">
                                    <div class="col1 black">
                                        M Edition Desktop<img src='kotak.png' width='100%' />
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        -->
                    </div>
                    <script>
                        var nightlight = 'off';
                        var selected = document.body;
                        var select = '<img src="favicon.ico" />M Edition Desktop';
                        console.log('Cross-Platform BIOS');
                        console.log('Success Loading mos_desktop Package');
                        console.log('Showing ...');
                        console.log('Running mos_devices ...');
                        setTimeout(function () {console.log('mos_device Is Working in Public Event');console.log('event entry from (mos_devices_keyboard) to (vmos) : Keyboard Was Connected');console.log('event entry from (mos_devices_mouse) to (vmos) : Mouse Was Connected');console.log('event entry from (mos_devices_sound) to (vmos) : Sound Mechine Was Started');console.log('event entry from (mos_devices_bits) to (vmos) : Bit Colors Was Started');console.log('temp toolkit installed name=(mos_betteros) port=(434) from (mos_desktop) in (mtp:temp/toolkits)');console.log('temp importedcache from (mos_desktop)');console.log('script(application/mos) #include includes() script:os alert -open "Hello %accountname%"');},500);

                        function info() {
                            jMessage('About Your System','<div style="width: 100%;height: 50%;margin: 0px;padding: 0px;overflow-y: scroll;"><h1 align="center">M Edition OS</h1><center><img src="cursor/msrfile.png" /></center><br />OS Name : Edition OS<br />OS Build : 1202<br />OS Installed Compiler : XEC-MPK PRO<br />OS Version : 4.1<br />OS Channel : Professional<br />OS Registey : Active<br />OS Logged Account : <?= $user ?><br />OS Installation Partition : /system<br />OS type : X11 (XEC)<br />OS Permission : xec-basic-access</div>');
                        }
                        
                        function nightlight() {
                            if (document.getElementById("overlay").style.display === "block") {
                                document.getElementById("overlay").style.display = "none";
                            } else {
                                document.getElementById("overlay").style.display = "block";
                            }
                        }

                        function startFocusOut(){
                            $(document).on("click",function(){
                                $("#cntnr").hide();
                                $(document).off("click");
                            });
                        }

                        document.onkeydown = overrideKeyboardEvent;
                        document.onkeyup = overrideKeyboardEvent;
                        var keyIsDown = {};
                        
                        function getSelectionText() {
                            var text = "";
                            if (window.getSelection) {
                                text = window.getSelection().toString();
                            } else if (document.selection && document.selection.type != "Control") {
                                text = document.selection.createRange().text;
                            }
                            return text;
                        }

                        function overrideKeyboardEvent(e){
                            switch(e.type){
                                case "keydown":
                                    if(!keyIsDown[e.keyCode]){
                                        keyIsDown[e.keyCode] = true;
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
                                            <?php if (file_get_contents("../../user/$slug/.info/type") == 'admin') { ?>
                                            openapp('com.m.service','Terminal','../explorer/term.php');
                                            <?php } else { ?>
                                            alert('System Cannot Execute Terminal (Invalid Permission)');
                                            <?php } ?>
                                        }

                                        if (e.keyCode === 113) {
                                            // Read Selected Text On Press F2
                                            responsiveVoice.speak(getSelectionText());
                                        }

                                        if (e.keyCode === 120) {
                                            // Show Partition Of Device On Press F9 Key
                                            openapp('com.m.explorer','M File Browser','com.m.explorer/device.php');
                                        }

                                        if (e.keyCode === 18) {
                                            // Alt Press
                                            openapp('com.m.explorer','M File Browser');
                                        }

                                        if (e.keyCode === 17) {
                                            // Control Press
                                            openapp('com.m.service','Quick Access','com.m.explorer/quick.php')
                                        }
                                    }
                                    break;
                                case "keyup":
                                    delete(keyIsDown[e.keyCode]);
                                    break;
                            }
                            disabledEventPropagation(e);
                            e.preventDefault();
                            return false;
                        }

                        function disabledEventPropagation(e){
                            if(e){
                                if(e.stopPropagation){
                                    e.stopPropagation();
                                } else if(window.event){
                                    window.event.cancelBubble = true;
                                }
                            }
                        }

                        function openapp(pack,title,address = pack) {
                            // M Edition Run Software v4.1.professional
                            var applister = document.createElement('button');
                            applister.className = 'item';
                            applister.title = title;
                            applister.onclick = function () {
                                app.style.display = 'block';
                                select = '<img src="../apps/'+pack+'/icon.png" width=20 height=20 />' + title;
                                selected = app;
                            };
                            applister.innerHTML = '<img style="max-height: 20px;max-width: 20px;" src="../apps/'+pack+'/icon.png" class="icon" />';
                            document.getElementById('list').appendChild(applister);
                            console.log('Unpacking '+pack+'.wosp ... Done');
                            console.log('Processing mos_apps('+pack+') ... Done');
                            console.log('Processing mos_desktop_display(application) ... Done');
                            console.log('Showing Contents ... Done');
                            var app = document.createElement('div');
                            var list = document.createElement('div');
                            app.className = 'app';
                            app.id = 'app';
                            var apphead = document.createElement('div');
                            apphead.className = 'appheader';
                            var content = '<span style="float:left;"><img class="appicon" src="../apps/'+pack+'/icon.png" /></span>';
                            content += '<span align="center">'+title+'</span>';
                            content += '<audio autoplay><source src="lib/Sound/Speech On.wav" /></audio>';
                            apphead.innerHTML = content;
                            var buttons = document.createElement('span');
                            buttons.style.float = 'right';
                            buttons.innerHTML = '<button onclick="mi(this.parentNode)" type="button" class="btn_min">&nbsp;</button><button onclick="ma(this.parentNode)" type="button" class="btn_max">&nbsp;</button>';
                            var button = document.createElement('button');
                            button.type = 'button';
                            button.className = 'btn_end';
                            button.onclick = function () {
                                cl(buttons,applister);
                            };
                            button.style.float = 'top';
                            button.innerHTML = '&nbsp;';
                            apphead.appendChild(buttons);
                            buttons.appendChild(button);
                            var appdata = document.createElement('iframe');
                            var appdiv = document.createElement('div');
                            select = '<img src="../apps/'+pack+'/icon.png" width=20 height=20 />' + title;
                            selected = app;
                            appdiv.className = 'appcontent';
                            appdata.src = '../apps/' + address;
                            appdata.style.border = 'none';
                            appdata.style.width = '100%';
                            appdata.style.height = '90%';
							appdata.id = 'appdata';
                            document.body.appendChild(app);
                            app.appendChild(apphead);
                            appdiv.appendChild(appdata);
                            app.appendChild(appdiv);
                            dragElement(app,apphead);
                            addtoselectors(app,title,'../apps/'+pack+'/icon.png');
                            addtounselectors(app);
                            document.getElementById('minimizer').onclick = function () {
                                app.draggable = true;
                            };
                            console.log('Registering in Selectors ... Done');
                            console.log('Registering in Responsity ... Done');
                            console.log('Allowed Releases In Public Event For '+pack);
                        }

                        function addtoselectors(elem,title,icon) {
                            elem.onclick = function () {
                                select = '<img src="'+icon+'" width=20 height=20 />' + title;
                                selected = elem;
                                selected.style.opacity = '1';
                                selected.style.zIndex = '300';
                            }
                        }

                        function addtounselectors(elem) {
                            setInterval(function () {
                            if (selected === elem) {
                                return;
                            } else {
                                elem.style.opacity = '0.7';
                                elem.style.zIndex = '100';
                            }},50);

                        }

                        function cl(elem,lister) {
                            var win = elem.parentNode;
                            win.parentNode.parentNode.removeChild(win.parentNode);
                            lister.parentNode.removeChild(lister);
                            select = '<img src="favicon.ico" />M Edition Desktop';
                            selected = document.body;
                        }

                        function mi(elem) {
                            var win = elem.parentNode;
                            win.parentNode.style.display = 'none';
							win.querySelector('#appdata').contentWindow.pause();
                            select = '<img src="favicon.ico" />M Edition Desktop';
                            selected = document.body;
                        }

                        function op(elem) {
                            var win = elem.parentNode;
                            win.parentNode.style.display = 'block';
                        }

                        function ma(elem) {
                            var win = elem.parentNode;
                            if (win.parentNode.style.resize === 'both') {
                                win.parentNode.style.width = '99%';
                                win.parentNode.style.height = '88%';
                                win.parentNode.style.top = '5%';
                                win.parentNode.style.left = '0px';
                                win.parentNode.style.resize = 'none';
                                win.onclick = function () {
                                    win.parentNode.style.width = '99.2%';
                                    win.parentNode.style.height = '90%';
                                    win.parentNode.style.top = '5%';
                                    win.parentNode.style.left = '0px';
                                    win.parentNode.style.resize = 'none';
                                };
                            } else {
                                win.parentNode.style.width = '50%';
                                win.parentNode.style.height = '60%';
                                win.parentNode.style.top = '5%';
                                win.parentNode.style.left = '0px';
                                win.parentNode.style.resize = 'both';
                                win.onclick = function () {
                                    nothing();
                                };
                            }
                        }

                        function startFocusOut(){
                            $(document).on("click",function(){
                                $("#cntnr").hide();
                                $(document).off("click");
                            });
                        }

                        setInterval(function () {
                            document.getElementById('select').innerHTML = select;
                            var note = document.createElement('iframe');
                            note.src = 'checknote.php';
                            document.getElementById('notes').contentWindow.location.reload();
                        },5000);

                        function nightlighton() {
                            document.getElementById("overlay").style.display = "block";
                        }

                        function nightlightoff() {
                            document.getElementById("overlay").style.display = "none";
                        }

                        function xec() {
                            console.log('xec returns (true) ("Working")');
                            alert('XEC v1.0 Is Working');
                            window.submit();
                        }
                        
                        function switcha() {
                            document.getElementById("switch").style.display = "block";
                        }
                        
                        function ulog() {
                            document.getElementById("logout").style.display = "block";
                        }
                        
                        function unulog() {
                            document.getElementById("logout").style.display = "none";
                        }
                        
                        function rest() {
                            document.getElementById("rest").style.display = "block";
                        }
                        
                        function unrest() {
                            document.getElementById("rest").style.display = "none";
                        }
                        
                        function shdn() {
                            document.getElementById("shdn").style.display = "block";
                        }
                        
                        function unshdn() {
                            document.getElementById("shdn").style.display = "none";
                        }
                        
                        function unuserreg() {
                            document.getElementById("switch").style.display = "none";
                        }
                        
                        function jMessage(title,text) {
                            // M Edition jMessage v4.1.professional
                            console.log('Entering Message '+title+' ... Done');
                            var app = document.createElement('div');
                            app.className = 'message';
                            app.id = 'app';
                            app.style.width = "90px";
                            app.style.height = "70px";
                            app.resize = "none";
                            var apphead = document.createElement('div');
                            apphead.className = 'appheader';
                            var content = '<span style="float:left;"><img class="appicon" src="cursor/file.png" /></span>';
                            content += '<span align="center">'+title+'</span>';
                            content += '<audio autoplay><source src="lib/Sound/Windows Ding.wav" /></audio>';
                            apphead.innerHTML = content;
                            var buttons = document.createElement('span');
                            buttons.style.float = 'right';
                            var button = document.createElement('button');
                            button.type = 'button';
                            button.className = 'btn_end';
                            button.onclick = function () {
                                cl(buttons,null);
                            };
                            button.style.float = 'top';
                            button.innerHTML = '&nbsp;';
                            apphead.appendChild(buttons);
                            buttons.appendChild(button);
                            var appdata = document.createElement('center');
                            var appdiv = document.createElement('div');
                            select = '<img src="cursor/file.png" width=20 height=20 />' + title;
                            selected = app;
                            appdiv.className = 'appcontent';
                            appdata.innerHTML = text + '<br />';
                            var okeybtn = document.createElement('button');
                            okeybtn.innerHTML = "Okey";
                            okeybtn.onclick = function () {
                                cl(buttons,null);
                            };
                            appdata.appendChild(okeybtn);
                            appdata.style.padding = "10px";
                            document.body.appendChild(app);
                            app.appendChild(apphead);
                            appdiv.appendChild(appdata);
                            app.appendChild(appdiv);
                            dragElement(app,apphead);
                            addtoselectors(app,title,'cursor/file.png');
                            addtounselectors(app);
                            document.getElementById('minimizer').onclick = function () {
                                app.draggable = true;
                            };
                            console.log('Registering in Selectors ... Done');
                            console.log('Registering in Responsity ... Done');
                            console.log('Allowed Releases In Public Event For '+pack);
                        }
                        
                        function loaded() {
                            var l = document.getElementById('olw');
                            l.innerHTML = '';
                            l.style.opacity = '0.1';
                            setInterval(function () {l.style.display = 'none';},1500);
                        }


                        window.addEventListener("keydown", function(event) {
                        console.log("key: " + event.key + ", code: " + event.code);
                        }, true);
                        
                        
                        log('dash: desktop: Desktop Starting ...');

                        var gamepad = [];
                        window.addEventListener("gamepadconnected", function(e) {
                            alert("Gamepad connected at index "+e.gamepad.index+".");
                            /*e.gamepad.index, e.gamepad.id,
                            e.gamepad.buttons.length, e.gamepad.axes.length);*/
                            gamepad[e.gamepad.index] = e.gamepad;
                        });

                        window.addEventListener("gamepaddisconnected", function(e) {
                            alert("Gamepad disconnected from index "+e.gamepad.index+".");
                            delete gamepad[e.gamepad.index];
                        });
						
						function allowDrop(ev) {
						  ev.preventDefault();
						}

						function drag(ev) {
						  ev.dataTransfer.setData("text", ev.target.id);
						}

						function drop(ev) {
						  ev.preventDefault();
						  var data = ev.dataTransfer.getData("text");
						  ev.target.appendChild(document.getElementById(data));
						}

                        var canvas = document.getElementById("canvas");
                        var ctx = canvas.getContext("2d");
                        var radius = canvas.height / 2;
                        ctx.translate(radius, radius);
                        radius = radius * 0.90
                        setInterval(drawClock, 1000);

                        function drawClock() {
                        drawFace(ctx, radius);
                        drawNumbers(ctx, radius);
                        drawTime(ctx, radius);
                        }

                        function drawFace(ctx, radius) {
                        var grad;
                        ctx.beginPath();
                        ctx.arc(0, 0, radius, 0, 2*Math.PI);
                        ctx.fillStyle = 'white';
                        ctx.fill();
                        grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
                        grad.addColorStop(0, '#333');
                        grad.addColorStop(0.5, 'white');
                        grad.addColorStop(1, '#333');
                        ctx.strokeStyle = grad;
                        ctx.lineWidth = radius*0.1;
                        ctx.stroke();
                        ctx.beginPath();
                        ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
                        ctx.fillStyle = '#333';
                        ctx.fill();
                        }

                        function drawNumbers(ctx, radius) {
                        var ang;
                        var num;
                        ctx.font = radius*0.15 + "px arial";
                        ctx.textBaseline="middle";
                        ctx.textAlign="center";
                        for(num = 1; num < 13; num++){
                            ang = num * Math.PI / 6;
                            ctx.rotate(ang);
                            ctx.translate(0, -radius*0.85);
                            ctx.rotate(-ang);
                            ctx.fillText(num.toString(), 0, 0);
                            ctx.rotate(ang);
                            ctx.translate(0, radius*0.85);
                            ctx.rotate(-ang);
                        }
                        }

                        function drawTime(ctx, radius){
                            var now = new Date();
                            var hour = now.getHours();
                            var minute = now.getMinutes();
                            var second = now.getSeconds();
                            //hour
                            hour=hour%12;
                            hour=(hour*Math.PI/6)+
                            (minute*Math.PI/(6*60))+
                            (second*Math.PI/(360*60));
                            drawHand(ctx, hour, radius*0.5, radius*0.07);
                            //minute
                            minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
                            drawHand(ctx, minute, radius*0.8, radius*0.07);
                            // second
                            second=(second*Math.PI/30);
                            drawHand(ctx, second, radius*0.9, radius*0.02);
                        }

                        function drawHand(ctx, pos, length, width) {
                            ctx.beginPath();
                            ctx.lineWidth = width;
                            ctx.lineCap = "round";
                            ctx.moveTo(0,0);
                            ctx.rotate(pos);
                            ctx.lineTo(0, -length);
                            ctx.stroke();
                            ctx.rotate(-pos);
                        }
                    </script>
                    <style>
                        .app {
                            border: 5px solid rgba(125,125,125,0.9);
                            border-top: none;
                            /*background: linear-gradient(to bottom, white, whitesmoke);*/
                            border-radius: 5px;
                            min-width: 400px;
                            min-height: 125px;
                            height: 60%;
                            width: 50%;
                            overflow: hidden;
                            resize: both;
                            top: 5%;
                            position: fixed;
                            z-index: 500;
                            max-width: 100%;
                            max-height: 100%;
                            
                        }
                        
                        .message {
                            border: 5px solid rgba(125,125,125,0.9);
                            background: linear-gradient(to bottom, white, whitesmoke);
                            border-radius: 5px;
                            min-height: 200px;
                            min-width: 300px;
                            overflow: hidden;
                            top: 15%;
                            left: 10%;
                            position: fixed;
                            z-index: 500;
                        }

                        .appheader {
                            padding-top: 5px;
                            background: linear-gradient(to right,rgba(125,125,125,0.9),rgba(125,125,125,0.8),rgba(125,125,125,0.2),slategray,rgba(125,125,125,0.2),rgba(125,125,125,0.9));
                            width: 100%;
                            resize: both;
                        }

                        .appcontent {
                            width: 100%;
                            height: 100%;
                            z-index: 1;
                            background: linear-gradient(to bottom, white, whitesmoke);
                            border: none;
                            border-radius: 5px;
                            z-index: 2;
                        }

                        .appicon {
                            width: 20px;
                            height: 20px;
                            border-radius: 5px;
                        }

                        .btn_end {
                            background: linear-gradient(to bottom, #ff0000, #ff6e00);
                            border: 0.25px solid slategrey;
                            width: 15px;
                            height: 15px;
                            border-radius: 50%;
                            padding: 3px;
                            transition: all 1s;
                        }

                        .btn_end:hover {
                            background: linear-gradient(to top, #ff0000, #ff6e00);
                            box-shadow: 0px 0px 2px black;
                            transform: scale(1.05);
                        }

                        .btn_min {
                            background: linear-gradient(to bottom, #fff852, #fffbaf);
                            border: 0.25px solid slategrey;
                            width: 15px;
                            height: 15px;
                            border-radius: 50%;
                            padding: 3px;
                            transition: all 1s;
                        }

                        .btn_min:hover {
                            background: linear-gradient(to top, #fff852, #fffbaf);
                            box-shadow: 0px 0px 2px black;
                            transform: scale(1.05);
                        }

                        .btn_max {
                            background: linear-gradient(to bottom, limegreen, lime);
                            border: 0.25px solid slategrey;
                            width: 15px;
                            height: 15px;
                            border-radius: 50%;
                            padding: 3px;
                            transition: all 1s;
                        }

                        .btn_max:hover {
                            background: linear-gradient(to top, limegreen, lime);
                            box-shadow: 0px 0px 2px black;
                            transform: scale(1.05);
                        }

                        #items{
                            list-style:none;
                            margin:0px;
                            margin-top:4px;
                            padding-left:10px;
                            padding-right:10px;
                            padding-bottom:3px;
                            font-size:17px;
                            color: #333333;
                            z-index: 10000;

                        }
                        hr { width: 85%;
                            background-color:#E4E4E4;
                            border-color:#E4E4E4;
                            color:#E4E4E4;
                        }
                        #cntnr{
                            display:none;
                            position:fixed;
                            border:1px solid #B2B2B2;
                            width:150px;      background:#F9F9F9;
                            box-shadow: 3px 3px 2px #E9E9E9;
                            border-radius:4px;
                            z-index: 10000;
                        }

                        li{

                            padding: 3px;
                            padding-left:10px;
                        }


                        #items :hover{
                            color: white;
                            background:#284570;
                            border-radius:2px;
                        }

                        #overlay {
                            display: none;
                            width: 100%;
                            height: 100%;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            opacity: 0.28;
                            background-color: rgb(255,112,0);
                            z-index: 5000;
                        }
                        
                        #switch {
                            display: none;
                            color: white;
                            width: 100%;
                            height: 100%;
                            position: fixed;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background-color: rgba(0,0,0,0.2);
                            z-index: 6000;
                        }
                        
                        #logout {
                            display: none;
                            color: white;
                            width: 100%;
                            height: 100%;
                            position: fixed;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background-color: rgba(0,0,0,0.2);
                            z-index: 6000;
                        }
                        
                        #rest {
                            display: none;
                            color: white;
                            width: 100%;
                            height: 100%;
                            position: fixed;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background-color: rgba(0,0,0,0.2);
                            z-index: 6000;
                        }
                        
                        #shdn {
                            display: none;
                            color: white;
                            width: 100%;
                            height: 100%;
                            position: fixed;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background-color: rgba(0,0,0,0.2);
                            z-index: 6000;
                        }
                        
                        #olw {
                            opacity: 1;
                            width: 100%;
                            height: 100%;
                            position: fixed;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background: url("../../user/<?= $slug ?>/.info/settings/walpaper.png") no-repeat center center fixed;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            z-index: 99999;
                            transition: 2s opacity;
                        }
                        
                        .sidenav {
                            width: 50px;
                            height: 40%;
                            position: fixed;
                            z-index: 1000;
                            top: 30%;
                            right: -5px;
                            background: #eee;
                            overflow-x: hidden;
                            border-radius: 5px;
                            transition: 1s;
                            transform: translateX(40px);
                            opacity: 0.4;
                            border-left: 3px solid lightslategrey;
                        }

                        .sidenav:hover {
                            transform: translateX(0px);
                            opacity: 1;
                        }

                        .sidenav .item {
                            background-color: lightslategrey;
                            border-radius: 5px;
                            transition: 1s;
                            transform: translateX(5px);
                            width: 100%;
                            color: white;
                        }

                        .sidenav .item:hover {
                            transform: translateX(0px);
                        }

                        .main {
                            margin-left: 140px; /* Same width as the sidebar + left position in px */
                            font-size: 28px; /* Increased text to enable scrolling */
                            padding: 0px 10px;
                        }

                        @media screen and (max-height: 450px) {
                            .sidenav {padding-top: 15px;}
                            .sidenav a {font-size: 12pt;}
                        }

                        <?php if ($autohide) { ?>
                        #startbar {
                            transition: 1s;
                            transform: translateY(30px);
                        }

                        #startbar:hover {
                            transform: translateY(-2px);
                        }
                        <?php } ?>

                        #startbar {
                            opacity: <?= $startopacity ?>;
                        }
                        
                        ::-webkit-scrollbar {
                            width: 10px;
                        }

                        ::-webkit-scrollbar-track {
                            background: #f1f1f1;
                        }

                        ::-webkit-scrollbar-thumb {
                            background: #888; 
                        }

                        ::-webkit-scrollbar-thumb:hover {
                            background: #555; 
                        }
						
						#desktop tr {
							width: 100%;
							height: 10%;
						}
						
						#desktop tr td {
							width: 10%;
							height: 10%;
						}
                    </style>
       dews#             <center style="width: 50px;height: 40%;position: fixed;z-index: 1000;top: 47%;right: -5px;">&leftarrow;</center>
                    <div class="sidenav" id="list">
                        <button class="item" onclick="select = '<img src=\'favicon.ico\'  />M Edition Desktop';selected = document.body();"><img src="favicon.ico" /></button>
                    </div>
                    <div id="overlay" onclick="off()"></div>
                    <div id="switch">
                        <body style="padding: 0px;margin: 0px;">
                            <center style="padding: 13%;">
                                <form action="process.php" method="post" id="userreg">
                                <h1>Switch Account</h1>
                                You Are In <?= $user ?> Account<br />
                                <li class="tooltip"><a href="javascript: unuserreg()"><button type="button">Continue With <?= $user ?></button><span class='tooltiptext'>Continue Running Desktop With Logged Account (<?= $user ?> In users//<?= $slug ?>/)</span></a></li><br />
                                    <?php
                                    $dir = "../../user";
                                    // Open a directory, and read its contents
                                    if (is_dir($dir)){
                                        if ($dh = opendir($dir)){
                                            while (($file = readdir($dh)) !== false){
                                                if ($file == ".info" || $file == ".." || $file == ".") {continue;} else {
                                                    if (file_get_contents($dir . '/' . $file . '/.info/username') !== $user) {
                                                        if (file_get_contents($dir . '/' . $file . '/.info/source') == '1') {
                                                            $pa = 'Have Password';
                                                            $b = 'linear-gradient(to bottom, white, ghostwhite)';
                                                            $r = true;
                                                        } elseif (file_get_contents($dir . '/' . $file . '/.info/source') == '0') {
                                                            $pa = 'Haven\'t Password';
                                                            $b = 'linear-gradient(to bottom, white, yellow)';
                                                            $r = false;
                                                        } else {
                                                            $pa = 'os [unable]';
                                                            $b = 'linear-gradient(to bottom, white, red)';
                                                            $r = 'unable';
                                                        }

                                                        if (is_dir($dir . '/' . $file . '/.info')) {
                                                            echo "<li class='tooltip'><button type='button' style='background: ".$b.";' onclick='userreg(\"$file\",\"".file_get_contents($dir . '/' . $file .'/.info/username')."\")'>Switch to ".file_get_contents($dir . '/' . $file .'/.info/username')."</button><span class=\"tooltiptext\">An Account For ".file_get_contents($dir . '/' . $file . '/.info/firstname')." (In ".file_get_contents($dir . '/' . $file . '/.info/type')." Source/Type - Slug : /".$file."/ - ".$pa.")</span></li><br />";
                                                        } else {
                                                            echo "<li class='tooltip'><button type='button'>Switch to Losted Account</button><span class='tooltiptext'>a Losted Account On users//".$file." (Reqiured Repair)</span></li> <a href='repairaccount.php?slug=".$file."'>Repair</a><br />";
                                                        }
                                                    }

                                                }
                                            }
                                            closedir($dh);
                                        }
                                    } else {
                                        echo '<script>alert("Users Partition Was Lost!");</script>';
                                    }

                                    ?>
                                    <li class="tooltip"><a href="guest"><button type="button">Switch to Guest (Not Recommended)</button></a><span class="tooltiptext">Informations Saved By This Users Doesn\'t Save to This Computer</span></li>
                                </form>
                            </center>
                            <script>
                            function userreg(file,username) {
                                console.log('Loading Sources Of Logining In With ' + username + ' ...');
                                <?php  if ($r == true) { ?>
                                console.log('Getting Password From Form ...');
                                document.getElementById('userreg').innerHTML = "<h1>Hello " + username + "</h1>" + "Password : <input type='hidden' name='user' value='"+username+"' /><input type='hidden' name='slug' value='"+file+"' /><input type='password' name='pass' placeholder='Password' />" + "<input type='submit' value='->' /> <span class=\"tooltip\"><button type=\"button\" onclick='my()' id='click'>?</button><span class=\"tooltiptext\">Tips , Help</span></span>";
                                <?php } elseif ($r == false) { ?>
                                console.log('Entering to Account (Source x120 : Not Exist Password)');
                                alert('It Haven\'t Password, Redirecting ...');
                                setTimeout(function () {window.location.assign('process.php?user=' + username + '&pass=&slug='+file);},3000);
                                <?php } else { ?>
                                console.log('Destoryed Account');
                                alert('Destoryed Account (Error 0x400)');
                                <?php } ?>
                            }
                            </script>
                        </body>
                    </div>
                    <div id="logout">
                        <center style="padding: 13%;">
                            <h1>Logout</h1>
                            Do you want Logout and Force Close All System Tasks?<br />
                            <a href="javascript: unulog();"><button>No</button></a><br />
                            <a href="logout.php"><button>Yes</button></a><br />
                            <span style="font-size: 9pt;">Please Check Your System For Unsaved Works, Unsaved Work After Logout Be Lose</span>
                        </center>
                    </div>
                    <div id="rest">
                        <center style="padding: 13%;">
                            <h1>Restart</h1>
                            Do you want Restart and Force Close All System Tasks?<br />
                            <a href="javascript: unrest();"><button>No</button></a><br />
                            <a href="restart.php"><button>Yes</button></a><br />
                            <span style="font-size: 9pt;">Please Check Your System For Unsaved Works, Unsaved Work After Logout Be Lose</span>
                        </center>
                    </div>
                    <div id="shdn">
                        <center style="padding: 13%;">
                            <h1>Shut Down</h1>
                            Do you want Shut Down and Force Close All System Tasks?<br />
                            <a href="javascript: unshdn();"><button>No</button></a><br />
                            <a href="shutdown.php"><button>Yes</button></a><br />
                            <span style="font-size: 9pt;">Please Check Your System For Unsaved Works, Unsaved Work After Logout Be Lose</span>
                        </center>
                    </div>
                    <div id='cntnr'>
                        <ul id='items'>
                            <li><a href="javascript:openapp('com.m.service','M Service');">Settings</a></li>
                            <li><a href="javascript:openapp('com.m.explorer','M File Browser','com.m.explorer/read.php?path=/terminal')">Terminal</a></li>
                            <li><a href="javascript:openapp('com.m.explorer','M File Browser','com.m.explorer/read.php?path=/user/<?= $slug ?>')">Home</a></li>
                        </ul>
                        <hr />
                        <ul id='items'>
                            <li><a href="javascript:openapp('com.m.explorer','M File Browser');">Open Explorer</a></li>
                        </ul>
                    </div>
                    <?php
                    
                    ///// ----- M Edition Repository v1.0.1 ----- \\\\\
                    
                    /** @package repo
                     *  @version 1.0.1
                     *  @since 2019
                     *  @author Behdad Mehrnia <behdadmehrnia@gmail.com>
                     *  @uses repo `Use Repository In Edition OS`
                     */
                    
                    //-includes
                    
                    /*Updates*/
                    /*if (eval(getrepo('updates/api')) > $mos['api'] && $updates) {
                        echo '<script>jMessage("M Updates","An Update Was Exist For Your System.<br />Version:'. getrepo('updates/uname').'<br />About:<br />'. getrepo('updates/about').'",3000);</script>';
                        note("M Updates","Available New Update : <br />M Edition " . getrepo('updates/uname'));
                        logrepo('Detected an Update For Your System From Repository');
                    } else {
                        logrepo('Updates Skipped');
                    }*/
                    /*Daynotes*/
                    if ($daynotes) {
                        if (getrepo('notes/daynotes.stat') == true || getrepo('notes/status') == true) {
                            logrepo('Detected a Daynote For Today');
                            note(getrepo('notes/daynotes/name'), getrepo('notes/daynotes/note'));
                        } else {
                            logrepo('Your Repository Have Not Daynotes Service');
                        }
                    } else {
                        logrepo('Daynotes Skipped');
                    }
                    /*Require-Alert*/
                    if (getrepo('notes/ralert.stat') == 'true') {
                        if (getrepo('notes/ralert/status') == 'true') {
                            echo "<script>jMessage('M Repository','". getrepo('notes/ralert/note')."');</script>";
                        } else {
                            logrepo('Closing Repository Task ... Done');
                        }
                    }
                    
                    ///// -end- M Edition Repository v1.0.1 ----- \\\\\
                    
                    ?>
                </body>
            </html>
        <?php } else {
            echo '<script>alert("Invalid Password");setTimeout(function () {window.location.assign("signin.php");},3000)</script>';
            return 400;
        }
    } else {
        echo '<script>alert("Invalid UserName");setTimeout(function () {window.location.assign("signin.php");},3000)</script>';
        return 404;
    }
} else {
    echo '<script>alert("Invalid Configuration Slug");setTimeout(function () {window.location.assign("signin.php");},3000)</script>';
    return 400;
}

?>
