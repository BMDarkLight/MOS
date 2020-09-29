<!DOCTYPE HTML>
<?php

if (isset($_REQUEST['o'])) {
    echo 'e.ecl <span style="color: red;">You Be Back to This Page For Invalid Informations (Error : '.$_REQUEST['os'].')</span>';
} else {
    $first = $_REQUEST['first'];
    $last = $_REQUEST['last'];
    $slug = $_REQUEST['slugnm'];
    $user = $_REQUEST['usernm'];
    $pass = $_REQUEST['passnm'];
    $passr = $_REQUEST['repass'];
    $email = $_REQUEST['email'];
    $devmd = $_REQUEST['dev'];
    $type = "admin";
    $dir = '../../mnt/user/' . $slug . '/.info/';

    if (is_dir('../../mnt/user/'.$slug)) {
        echo '<script>window.location.assign("4.php?o=Slug+Is+Existen");</script>';
        return 500;
    }

    if (!is_dir('../../mnt/user')) {
        echo '<script>window.location.assign("4.php?o=Users+Folder+Losted");</script>';
        return 400;
    }

    if ($slug == "" || $user == "" || $pass == "" || $email == "" || $devmd == "") {
        echo '<script>window.location.assign("4.php?o=Invalid+Entered+Information");</script>';
        return 400;
    }

    if ($pass == "") {
        $source = '0';
    } else {
        $source = '1';
    }

    if ($passr === $pass) {
        mkdir('../../mnt/user/' . $slug);
        mkdir($dir);
        file_put_contents($dir . 'firstname',$first);
        file_put_contents($dir . 'lastname',$last);
        file_put_contents($dir . 'username',$user);
        file_put_contents($dir . 'password.php',"<?php \$userpass = '" . md5($pass) . "';");
        file_put_contents($dir . 'email',$email);
        file_put_contents($dir . 'dev',$devmd);
        file_put_contents($dir . 'type',$type);
        file_put_contents($dir . 'source',$source);
        mkdir($dir . 'settings');
        file_put_contents($dir . 'avatar.png',file_get_contents('../../mnt/system/os/lib/user.png'));
        file_put_contents($dir . 'settings/walpaper.png',file_get_contents('../../mnt/system/os/lib/default_wal.png'));
        file_put_contents($dir . 'settings/account.php',"<?php
        
        /* M Edition Account File For $user > Account Configuration */
        \$accountname = '$user';
        \$accountslug = '$slug';
        \$accountpath = '/mnt/user/$slug';");
        file_put_contents($dir . 'settings/saves.php',"<?php
        
        /* M Edition Account File For $user > Account Saves */
        \$usersave = array();
        \$usersave['termnm'] = '$user';
        ");
        file_put_contents($dir . 'settings/info.xml',"<?xml version='1.0'?>
        <$user>
            <account>
                <first>$first</first>
                <last>$last</last>
                <slug>$slug</slug>
                <pass>".md5($pass)."</pass>
            </account>
            <config>
                <terminal>
                    <name>$user</name>
                    <port>434</port>
                </terminal>
            </config>
        </$user>");
        file_put_contents('../../os.php',"<?php \$status = true;");
        mkdir('../../mnt/user/' . $slug . '/.trash');
        mkdir('../../mnt/user/' . $slug . '/Downloads');
        mkdir('../../mnt/user/' . $slug . '/Documents');
        mkdir('../../mnt/user/' . $slug . '/.public');
        file_put_contents('../../mnt/user/' . $slug . '/Examples.mlnk','/system/os/lib/Examples');
    } else {
        echo '<script>window.location.assign("4.php?o=Invalid+Confirm+Password+Field");</script>';
        return 400;
    }

    echo 'Not Errors';
}

?>
<html>
    <head>
        <title>M Edition 4 - Install</title>
        <link rel="stylesheet" href="../style.css" />
    </head>
    <body os="style:body1">
        <div os="alert">
            <h1>OS Installed</h1>
            M Edition OS 4.0 Installed On Your Server.<br />
            Enter <code>get(os(),'information')</code> For Get Your System Information.<br />
            Enter <code>virtual(os(),true)</code> For Get a Included Base.<br />
            <a href="../../"><button>Click Here</button></a> For Boot M Edition OS 4.0.<br />
            <a href="../setup"><button>Click Here</button></a> For Boot BIOS (/bin/setup).<br />
            In : <br />
            <ul>
                <li>Webbrowser > Virtual Runner OS</li>
                <li>Webpress > Host Partitioning</li>
                <li>Noco > Report > M Edition</li>
                <li>Noco > Posts > M Edition About (/mos)</li>
                <li>Noco > cl > products > mos</li>
                <li>jdk > java > lang</li>
                <li>Say Hi > M OS Plugin</li>
                <li>QT Web #5 > Software > mpk / epk / mapp</li>
                <li>QT Web #5 > Store</li>
            </ul><br />
            Partners : <br />
            <ul>
                <li>Webbrowser v1.2</li>
                <li>Noco Programing Team</li>
                <li>behdadmehrnia</li>
            </ul><br />
            Thanks From Noco Programing Team.<br />
            &Because; Can Run In Noco Command Line (Released In cl/products/mos/compilable/play:amd64:>)
        </div>
    </body>
</html>