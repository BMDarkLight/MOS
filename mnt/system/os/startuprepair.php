<html>
    <head>
        <title>M Edition - debug mode</title>
        <style>
            .app {
                border: 5px solid lightslategrey;
                background: linear-gradient(to bottom, white, whitesmoke);
                border-radius: 5px;
                min-width: 400px;
                min-height: 125px;
                height: 60%;
                width: 50%;
                overflow: hidden;
                top: 20%;
                left: 25%;
                resize: none;
                position: fixed;
                z-index: 500;
                max-width: 100%;
                max-height: 100%;
                font-size: 12pt;
            }

            .message {
                border: 5px solid lightslategrey;
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
                background-color: lightslategrey;
                width: 100%;
                resize: both;
            }

            .appcontent {
                width: 99%;
                height: 100%;
                z-index: 1;
                border: none;
                border-radius: 5px;
                padding: 0px;
                margin: 0px;
                font-family: sans-serif;
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
    </head>
    <body>M Edition debug mode <a href='javascript: alert("Running 1 Script (Startup Repair,rps.sys). OS Is Working");'>Status</a> <a href="javascript: alert('You Cannot Shutdown System, System is busy');">Shut Down</a> <a href='javascript: alert("Hello, Would!");'>Check System</a><br />Logs : <br />
        <div class='app' id='b'>
            <div class='appheader' id='bh'>
                Startup Repair
            </div>
            <div class='appcontent'>
                <div style='width: 100%;height: 80px;background-color: gainsboro;border: outset;'><h1>Startup Repair</h1></div>
                Start Searching For Problems ... <br />
                Connecting to 127.0.0.1 ~/mnt/system/explorer responsities mos_dev/repair ... <br />
                Uncompressing Responsity ... <br />
                Get Access to /system Partition ... <br />
                Checking Files On ~/mnt/system From mos_dev Responsity ...<br />
                <div id='bar' style='width: 103%;border: 1px solid gray;background-color: gainsboro;height: 20px;'><div id='myBar'></div></div>
                <span id='log'></span>
            </div>
        </div>
        <script>var i = 0;setInterval(function () {var t = new Date;alert('count n<sub>'+i+'</sub> <br /> time t<sub>'+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds()+"</sub>");i++;},1000);dragElement(document.getElementById('b'),document.getElementById('bh'));move(document.getElementById('myBar'),50,"document.getElementById('log').innerHTML = 'Result : os.php Have A Problem On BIOS Package Permission. <br />This Is A System File. Need to Reinstall M Edition For Repair Destoryed Files. <a href=\"repairsys.php?problem=os\">Let us</a>';document.getElementById('bar').style.display = 'none';");</script>
    </body>
</html>