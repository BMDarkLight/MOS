<?php

$slug = $_REQUEST['slug'];
$mode = $_REQUEST['m'];
$dir = '../../user/';

if ($mode == 'older') {
    if ($handle = opendir($dir . $slug)) {
        if (is_dir($dir . $slug . '/.info')) {} else {mkdir($dir . $slug . '/.info');}
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != ".." && $entry != ".info") {
                echo 'Updating '.$files.'<br />';
                if(rename($dir . $slug . '/' . $entry,$dir . $slug . '/.info/' . $entry)) {
                    echo 'Complete Updating<br />';
                } else {
                    echo 'Invalid Convert Old Version to New Version<br />';
                }
            }
        }
        closedir($handle);
    } else {
        echo 'Invalid Opening Account Directory';
    }
} elseif ($mode == 'cache') {
    if (is_dir($dir . $slug . '/.info/settings')) {
        echo 'Logical Error (0x500) : Cache Doesn\'t Losted';
    } else {
        mkdir($dir . $slug . '/.info/settings');
    }
} elseif ($mode == 'delete') {
    if (is_dir($dir . $slug)) {
        rmdir($dir . $slug);
    } else {
        echo 'Logical Error (0x500) : Account Was Deleted';
    }
} elseif ($mode == 'avatar') {
    if (file_exists($dir . $slug . '/.info/avatar.png')) {
        echo 'Logical Error (0x500) : Avatar Was Exist';
    } else {
        file_put_contents($dir . $slug . '/.info/avatar.png',file_get_contents('lib/user.png'));
    }
} elseif ($mode == 'wal') {
    if (file_exists($dir . $slug . '/.info/settings/walpaper.png')) {
        echo 'Logical Error (0x500) : Walpaper Was Exist';
    } else {
        file_put_contents($dir . $slug . '/.info/settings/walpaper.png',file_get_contents('lib/default_wal.png'));
    }
} elseif ($mode == 'accf') {
    if (file_exists($dir . $slug . '/.info/settings/account.php')) {
        echo 'Logical Error (0x500) : Walpaper Was Exist';
    } else {
        file_put_contents($dir . $slug . '/.info/settings/account.php',"<?php
        
        /* M Edition Account File For $user > Account Configuration */
        \$accountname = '$user';
        \$accountslug = '$slug';
        \$accountpath = '/mnt/user/$slug';");
    }
} else {
    echo 'Invalid Command';
}

?>
<a href="signin.php"><button>Back</button></a>
