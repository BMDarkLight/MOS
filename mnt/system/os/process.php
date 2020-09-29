<!DOCTYPE HTML>
<?php


$user = $_REQUEST['user'];
$pass = md5($_REQUEST['pass']);
$slug = $_REQUEST['slug'];

?>
<html>
    <head>
        <title>M Edition - Processing <?= $_REQUEST['user'] ?></title>
        <link rel="stylesheet" href="../../../bin/style.css" />
        <script src="../../../bin/script.js"></script>
    </head>
    <body style="padding: 0px;margin: 0px;background: url('../../user/<?= $slug ?>/.info/settings/walpaper.png') no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
        <?php

        if (is_dir('../../user/' . $slug . '/.info')) {
            if (file_get_contents('../../user/' . $slug . '/.info/username') == $user) {
                include_once '../../user/' . $slug . '/.info/password.php';
                if ($pass === $userpass) {
                    echo '<script>
                    setInterval(function () {window.location.assign(\'os.php\');},300)
                    </script>';
                    file_put_contents('.cache/lastlogin/username',$user);
                    file_put_contents('.cache/lastlogin/password',$pass);
                    file_put_contents('.cache/lastlogin/time',date("Y/m/d h:i:sa"));
                    file_put_contents('.cache/lastlogin/slug',$slug);
                    file_put_contents('../../user/' . $slug . '/.info/account.log', '[session_login:'.$user.']Session Logged In at '.date("Y/m/d h:i:sa").'
',FILE_APPEND);
                    echo '<center style="padding: 13%;"><h1>Welcome <img src="lib/load.gif" style="border-radius: 50%" width=30 height=30 /></h1></center>';

                } else {
                    echo '<script>alert("Invalid Password");setTimeout(function () {window.location.assign("signin.php");},3000)</script>';
                }
            } else {
                echo '<script>alert("Invalid UserName");setTimeout(function () {window.location.assign("signin.php");},3000)</script>';
            }
        } else {
            echo '<script>alert("Invalid Configuration Slug");setTimeout(function () {window.location.assign("signin.php");},3000)</script>';
        }

        ?>
        <style>
            #myBar {
                height: 3px;
                background-color: lightsteelblue;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }

            * {
                cursor: wait;
            }
        </style>
        <script>
            var wage = document.body;
            wage.addEventListener("keydown", function (e) {
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
                    window.location.assign('../explorer/term.php');
                }

                if (e.keyCode === 120) {
                    // Load Toolkits On Press F9 Key
                    alert('Invalid to Mount Toolkits');
                }
            });
        </script>
    </body>
</html>