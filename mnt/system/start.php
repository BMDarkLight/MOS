<!DOCTYPE HTML>
<html>
    <body>
        <link rel="stylesheet" href="../../bin/style.css" />
        <script src="../../bin/script.js"></script>
        <b>Cross-Platform Kernel Terminal 1.2</b><br />
        <b>Installation : OS [mos4.0] [434:true] M Edition 4.0 /dev/local1 M Edition OS</b><br />
        <b>Configurations</b><br />
        <li><a href="dash/sources.list">sources.list</a></li>
        <li><a href="http://noco.zili.ir/en/report">Noco Report</a></li>
        <li><a href="dash">Dash</a></li>
        <li><a href="dash/plugins">Dash Plugins</a></li>
        <b>Status</b><br />
        Mode=[user].<br />
        Root=eula:false.<br />
        Dash=true.<br />
        Apache=Allow<br />
        <b>Result</b><br />
        Saveto=dash.log<br />
        Dashnm=mos<br />
        Desknm=unknown<br />
        <b>Launcher</b><br />
        State=active<br />
        Name=cross-platform<br />
        platform=cross<br />
        <b>Operations</b><br />
        <a href="javascript:window.location.reload();">Reload</a><br />
        <a href="../../">Boot OS</a>
        <form method="post" id="main">
            <div id="top" class="title"><span style="float: left;"><button id="btn-end" onclick="document.getElementById('main').style.display = 'none';" type="button" title="Close Launcher">&nbsp;</button></span>Cross-Platform Launcher</div>
            <br /><br />
            <?php

            include __DIR__ . '/functions.php';
            error_reporting(E_ALL ^ E_NOTICE ^ E_ERROR ^ E_WARNING);
            if (isset($_REQUEST['command'])) {
                echo 'terminal:> ' + $_REQUEST['command'];
                file_put_contents('example.php','echo "terminal:>'.$_REQUEST['command'].'<br />";' . $_REQUEST['command'] . ';echo "<br />";',FILE_APPEND);
                include_once 'example.php';
            }

            include __DIR__ . '/terminal.htm';

            ?>
            <br />terminal:> <input autocomplete="off" selected name="command" id="command" />
        </form>
    </body>
    <style>
        form {
            top: 10%;
            left: 20%;
            min-width: 400px;
            min-height: 35px;
            border: 5px solid lightslategrey;
            border-radius: 5px;
            overflow-y: scroll;
            background-color: black;
            color: whitesmoke;
            font-family: "Fixedsys Excelsior";
            font-size: large;
            position: fixed;
            resize: both;
        }

        form #command {
            background-color: black;
            color: whitesmoke;
            border: none;
            width: 80%;
            font-size: large;
            font-family: "Fixedsys Excelsior";
        }

        form b {
            color: white;
            font-size: larger;
        }

        .title {
            background-color: lightslategrey;
            position: sticky;
            text-align: center;
            width: 100%;
            height: 35px;
        }
    </style>
    <script>
        dragElement(document.getElementById('main'),document.getElementById('top'));
    </script>
</html>