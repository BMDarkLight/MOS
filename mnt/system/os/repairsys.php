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
                Startup Repair (as superuser)
            </div>
            <div class='appcontent'>
                <div style='min-height: 40px;width: 100%;height: 80px;background-color: gainsboro;border: outset;'><h1>Startup Repair</h1></div>
                Start Fixing Problems ... <br />
                Getting Released Problem ... <?php error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);$problem = $_REQUEST['problem'];echo "Problem Is $problem.case" ?><br />
                Release Files ... (file : <?php if ($problem == 'os') {$pfile = '../../../os.php';} elseif ($problem == 'safe') {$pfile = 'safe.php';} elseif ($problem == 'fos') {$pfile = 'os.php';} else {$pfile = 'unknown For' . $problem;} ?><?= $pfile ?>)<br />
                <textarea readonly='readonly' style="background-color: black;color: whitesmoke;width: 100%;height: 150px;resize: vertical;overflow-y: scroll;border: 1px solid yellow;">Starting PHP Debug Console ...
Connecting to 127.0.0.1 ~/mnt/system/explorer responsities mos_dev/repair ...
Uncompressing Responsity ...
Reading File From Responsity ...
Checking repair.pack Contents ...
Running Repair Tool ...
<?php 

// M Repair v4.0 Public Use

if ($problem == 'os') {
    echo "Fixing OS Installation Port ...\r\n";
    require_once $pfile;
    if ($status) {
        echo "Installation Doesn\'t Destoryed, Please Check Logical Errors. \r\n";
    } else {
        echo "Installation System Destoryed, Fixing ... \r\n";
        if (file_put_contents($pfile, '<?php $status = true;')) {
            echo "Success Repair OS Installation. \r\n";
            return;
        } else {
            echo "Failed to Write Contents On Files (Partition Access Error). \r\nPlease Allow Your Patition Access";
        }
    }
} elseif ($problem == 'safe') {
    echo "Fixing Safe Mode ... \r\n";
    file_put_contents($pfile, file_get_contents('../.libraries/repair/safe/safe.php'));
} elseif ($problem == 'fos') {
    
} elseif ($problem == 'client') {
    
} elseif ($problem == 'library') {
    
}

?>
Stopped +4
                </textarea>
                <a href='start.php'>Fast Reboot OS</a> <a href='../../../'>Reboot Device (Restart)</a>
            </div>
        </div>
        <script>var i = 0;setInterval(function () {var t = new Date;alert('count n<sub>'+i+'</sub> <br /> time t<sub>'+t.getHours()+":"+t.getMinutes()+":"+t.getSeconds()+"</sub>");i++;},1000);dragElement(document.getElementById('b'),document.getElementById('bh'));</script>
    </body>
</html>