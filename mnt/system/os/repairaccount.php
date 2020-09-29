<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition - Repair Account</title>
        <link rel="stylesheet" href="../../../bin/style.css" />
        <script src="../../../bin/script.js"></script>
    </head>
    <body os="style:body1">
        <p title="Booting From system//.libraries/account.cnf">M Edition 4 > Repairer > Accounts 1.0</p>
        <form action="process.php" method="post" os="alert" id="form">
            <h1>Checking Status Of Account</h1>
            <?php

            $dir = '../../user/';
            $slug = $_REQUEST['slug'];

            if (is_dir($dir . $slug)) {
                echo '[ <span class="true">OK</span> ] Is A Directory Account Folder<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Is A Directory Account Folder<br />';
                echo 'Account Doesn\'t Exist, Error Check Contents <a href="signin.php">Back</a>';
                return 404;
            }

            if (is_dir($dir . $slug . '/.info')) {
                echo '[ <span class="true">OK</span> ] Is A Directory Account Configuration Folder<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Is A Directory Account Configuration Folder<br />';
                echo 'It Is An Older Account, You Must Be Update It <a href="fixaccount.php?m=older&slug='.$slug.'">Fix</a>';
                return 400;
            }

            if (is_dir($dir . $slug . '/.info/settings')) {
                echo '[ <span class="true">OK</span> ] Is A Directory Account Settings And Cache Folder<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Is A Directory Account Settings And Cache Folder<br />';
                echo 'It Is An Normal Account But It\'s Settings Is Losted <a href="fixaccount.php?m=cache&slug='.$slug.'">Fix</a>';
                return 404;
            }

            if (file_exists($dir . $slug . '/.info/source')) {
                echo '[ <span class="true">OK</span> ] Exist Source Type<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Exist Source Type<br />';
                echo 'It Account Type Is Unknown, This Cannot Fix, It Must Be Delete <a href="fixaccount.php?m=delete&slug='.$slug.'">Delete</a>';
                return 404;
            }

            if (file_exists($dir . $slug . '/.info/source')) {
                echo '[ <span class="true">OK</span> ] Setted Type<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Setted Type<br />';
                echo 'It Account Type Is Unknown, This Cannot Fix, It Must Be Delete <a href="fixaccount.php?m=delete&slug='.$slug.'">Delete</a>';
                return 404;
            }

            if (file_exists($dir . $slug . '/.info/avatar.png')) {
                echo '[ <span class="true">OK</span> ] Exist Avatar<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Exist Avatar<br />';
                echo 'It Account Haven\'t Got Avatar, You Must Be Select A Avatar For Your Account <a href="fixaccount.php?m=avatar&slug='.$slug.'">Fix</a>';
                return 404;
            }

            if (file_exists($dir . $slug . '/.info/settings/walpaper.png')) {
                echo '[ <span class="true">OK</span> ] Exist Walpaper<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Exist Walpaper<br />';
                echo 'If Your Desktop Page Is White And Haven\'t Got An Image, It Is For This Error <a href="fixaccount.php?m=wal&slug='.$slug.'">Fix</a>';
                return 404;
            }

            if (file_exists($dir . $slug . '/.info/settings/account.php')) {
                echo '[ <span class="true">OK</span> ] Exist Account Configuration File<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Exist Account Configuration File<br />';
                echo 'Account Configuration Was Losted, It Repair Can Lost Your All Files <a href="fixaccount.php?m=accf&slug='.$slug.'">Fix</a>';
                return 404;
            }

            if (file_exists($dir . $slug . '/.info/settings/info.xml')) {
                echo '[ <span class="true">OK</span> ] Exist Information File<br />';
            } else {
                echo '[ <span class="false">NO</span> ] Exist Information File<br />';
                echo 'Account Information Was Losted,This Cannot Fix ,It Be Must Delete <a href="fixaccount.php?m=delete&slug='.$slug.'">Delete</a>';
                return 404;
            }

            echo 'Account Is Fixed';
            ?><br /><br />
            <a href="signin.php"><button type="button">Leave From Repairer</button></a>
        </form>
        <style>
            #myBar {
                height: 3px;
                background-color: lightsteelblue;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }

            .true {
                color: lime;
            }

            .false {
                color: red;
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