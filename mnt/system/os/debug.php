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
            <html>
                <head>
                    <title>M Edition</title>
                    <link rel='stylesheet' href='Style\'s.css' />
                    <style>
                        .app {
                            border: outset 5px gainsboro;
                            background: linear-gradient(to bottom, white, whitesmoke);
                            min-width: 400px;
                            min-height: 125px;
                            height: 60%;
                            width: 50%;
                            overflow: hidden;
                            top: 20%;
                            left: 25%;
                            resize: both;
                            position: fixed;
                            z-index: 500;
                            max-width: 100%;
                            max-height: 100%;
                            font-size: 12pt;
                        }

                        .message {
                            border: 5px solid gainsboro;
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
                            background-color: gainsboro;
                            width: 100%;
                            resize: both;
                        }

                        .appcontent {
                            width: 99%;
                            height: 85%;
                            z-index: 1;
                            border: 1px solid black;
                            border-radius: 5px;
                            padding: 0px;
                            margin: 0px;
                            font-family: sans-serif;
                        }

                        .appicon {
                            width: 20px;
                            height: 20px;
                            border-radius: 5px;
                        }

                        .btn_end {
                            background: gainsboro;
                            border: outset;
                            width: 15px;
                            height: 15px;
                            padding: 3px;
                        }

                        .btn_min {
                            background: gainsboro;
                            border: outset;
                            width: 15px;
                            height: 15px;
                            padding: 3px;
                        }

                        .btn_max {
                            background: gainsboro;
                            border: outset;
                            width: 15px;
                            height: 15px;
                            padding: 3px;
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

                        .sidenav {
                            width: 50px;
                            height: 40%;
                            position: fixed;
                            z-index: 1000;
                            top: 30%;
                            right: -10px;
                            background: #eee;
                            overflow-x: hidden;
                            transform: translateX(40px);
                            border-left: outset 5px gainsboro;
                        }

                        .sidenav:hover {
                            transform: translateX(0px);
                            border-left: outset 5px gray;
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

                        body {
                            background: url("lib/default_wal.png") no-repeat center center fixed;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;
                            font-size: 8pt;
                        }

                        #myBar {
                            background: linear-gradient(to right, lime, limegreen);
                            border-right: 0.5px solid white;
                            width: 0%;
                            height: 100%;
                        }
                    </style>
                    <script src="../../../bin/script.js"></script>
                    <script>
                        select = 'Null';

                        function openapp(pack,title,address = pack) {
                            // M Edition Run Software v4.0.professional
                            title = title + " (as superuser)";
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
                            apphead.innerHTML = content;
                            var buttons = document.createElement('span');
                            buttons.style.float = 'right';
                            buttons.innerHTML = '<button onclick="mi(this.parentNode)" type="button" class="btn_min">-</button><button onclick="ma(this.parentNode)" type="button" class="btn_max">&Square;</button>';
                            var button = document.createElement('button');
                            button.type = 'button';
                            button.className = 'btn_end';
                            button.onclick = function () {
                                cl(buttons,applister);
                            };
                            button.style.float = 'top';
                            button.innerHTML = 'X';
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
                            var miso = new Audio();
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
                                    win.parentNode.style.width = '99%';
                                    win.parentNode.style.height = '85%';
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

                        function jMessage(title,text) {
                            // M Edition jMessage v4.0.professional
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
                            button.innerHTML = 'X';
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

                        document.onkeydown = overrideKeyboardEvent;
                            document.onkeyup = overrideKeyboardEvent;
                            var keyIsDown = {};

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
                                                openapp('com.m.service','Terminal','../explorer/term.php');
                                            }

                                            if (e.keyCode === 113) {
                                                // Enter BIOS On Press F2 Key
                                                openapp('com.m.service','BIOS','../../../bin/bios/bios.php');
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

                        setInterval(function () {
                            document.getElementById('select').innerHTML = select;
                        },1000);

                        openapp("com.m.service","Terminal","../explorer/term.php");
                    </script>
                </head>
                <body>M Edition - debug mode <a href='logout.php'>Sign Out</a> <a href='../../../'>Reboot Device</a> <a href='javascript: openapp("com.m.service","Applications","com.m.explorer/apps.php");'>Apps</a> onselect=<span id='select'>Null</span>
                    <center style="width: 50px;height: 40%;position: fixed;z-index: 1000;top: 47%;right: -5px;font-family: sans-serif;">Tasks</center>
                    <div class="sidenav" id="list">
                        <div style="background-color: gainsboro;width: 100%;">Tasks</div>
                        <button class="item" onclick="select = 'Null';"><img src="favicon.ico" /></button>
                    </div>
                </body>
            </html>
            <?php } else {
            echo '<script>alert("Invalid Password");</script>';
            outpost();
        }
    } else {
        echo '<script>alert("Invalid UserName");</script>';
        outpost();
    }
} else {
    echo '<script>alert("Invalid Configuration Slug");</script>';
    outpost();
}

function outpost() {
    ?><html>
        <head>
            <title>M Edition Limited Access</title>
            <link rel='stylesheet' href='Style\'s.css' />
            <style>
                .app {
                    border: outset 5px gainsboro;
                    background: linear-gradient(to bottom, white, whitesmoke);
                    min-width: 400px;
                    min-height: 125px;
                    height: 60%;
                    width: 50%;
                    overflow: hidden;
                    top: 20%;
                    left: 25%;
                    resize: both;
                    position: fixed;
                    z-index: 500;
                    max-width: 100%;
                    max-height: 100%;
                    font-size: 12pt;
                }

                .message {
                    border: 5px solid gainsboro;
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
                    background-color: gainsboro;
                    width: 100%;
                    resize: both;
                }

                .appcontent {
                    width: 99%;
                    height: 85%;
                    z-index: 1;
                    border: 1px solid black;
                    border-radius: 5px;
                    padding: 0px;
                    margin: 0px;
                    font-family: sans-serif;
                }

                .appicon {
                    width: 20px;
                    height: 20px;
                    border-radius: 5px;
                }

                .btn_end {
                    background: gainsboro;
                    border: outset;
                    width: 15px;
                    height: 15px;
                    padding: 3px;
                }

                .btn_min {
                    background: gainsboro;
                    border: outset;
                    width: 15px;
                    height: 15px;
                    padding: 3px;
                }

                .btn_max {
                    background: gainsboro;
                    border: outset;
                    width: 15px;
                    height: 15px;
                    padding: 3px;
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

                .sidenav {
                    width: 50px;
                    height: 40%;
                    position: fixed;
                    z-index: 1000;
                    top: 30%;
                    right: -10px;
                    background: #eee;
                    overflow-x: hidden;
                    transform: translateX(40px);
                    border-left: outset 5px gainsboro;
                }

                .sidenav:hover {
                    transform: translateX(0px);
                    border-left: outset 5px gray;
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

                body {
                    background: url("lib/default_wal.png") no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    font-size: 8pt;
                }

                #myBar {
                    background: linear-gradient(to right, lime, limegreen);
                    border-right: 0.5px solid white;
                    width: 0%;
                    height: 100%;
                }
            </style>
            <script src="../../../bin/script.js"></script>
            <script>
                select = 'Null';

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

                function jMessage(title,text) {
                    // M Edition jMessage v4.0.professional
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
                    button.innerHTML = 'X';
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

                setInterval(function () {
                    document.getElementById('select').innerHTML = select;
                },1000);
            </script>
        </head>
        <body>M Edition - debug mode (Limited Mode) <a href='signin.php'>Sign In With an account</a> <a href='../../../'>Reboot Device</a><br />
            permission: You Are In Limited Access Mode.<br />
            permission: note: Please Signin with an Account to Get a Permission.<br />
        </body>
    </html><?php
}