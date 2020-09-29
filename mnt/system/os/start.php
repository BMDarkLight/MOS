<!DOCTYPE HTML>
<?php 

if (!file_exists('../../../os.php') && !is_dir('../../user')) {
    echo '<h3>Continue M Edition Setup</h3><a href="prepare.php"><button>Continue</button></a><script>window.location.assign("prepare.php")</script>';
    exit();
}

require_once '../../../os.php';

if ($status) {
?>
<html>
    <head>
        <title>M Edition</title>
        <link rel="stylesheet" href="../../../bin/style.css" />
        <script src="../../../bin/script.js"></script>
    </head>
    <body os="style:body1">
        <div id="myBar"></div>
        <style>
            #myBar {
                height: 3px;
                background-color: lightsteelblue;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }
        </style>
        <script>move(id('myBar'),1,"window.location.assign('<?php if (file_get_contents('os.status') == '1') {echo 'signin.php';} else {echo 'welcome.php';} ?>');");</script>
    </body>
</html>
<?php } elseif (file_exists('signin.php') && file_exists('os.php') && file_exists('Style\'s.css') && file_exists('favicon.ico')) {?>
<html>
    <head>
        <title>M Edition</title>
        <link rel="stylesheet" href="../../../bin/style.css" />
        <script src="../../../bin/script.js"></script>
    </head>
    <body os="style:body1">
        <div id="myBar"></div><br />
		<h3>Welcome to M Edition Water</h3>
		Openning Wizard System Installation ...
        <style>
            #myBar {
                height: 3px;
                background-color: lightsteelblue;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }
        </style>
        <script>move(id('myBar'),1,"window.location.assign('prepare.php');");</script>
    </body>
</html>
<?php } else { ?>
<html>
    <head>
        <title>M Edition</title>
        <link rel="stylesheet" href="../../../bin/style.css" />
        <script src="../../../bin/script.js"></script>
    </head>
    <body os="style:body1">
        <h1 align="center">M Edition Was Destoryed</h1>
        M Edition Was Destoryed. You Cannot Run M Edition (Error : OS Doesn't Exist on ~/mnt/system (Partition Is Unsupported))<br />
        > What Doing Now?<br />
        Please Start One Program From This Lists : <br />
        <ul>
            <li><a href='startuprepair.php'>Startup Repair (Recommended)</a></li>
            <li><a href='../../'>Open Partitions Apache Control (May Not Work On Many Hosts And Return 403)</a></li>
            <li><a href='safe.php'>Safe Mode</a></li>
        </ul>
    </body>
</html>
<?php }
