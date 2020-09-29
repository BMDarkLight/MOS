<style>
    button {
        border: none;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
    }

    button:hover {
        border-bottom: 1px solid blue;
    }

    a {
        background-color: gainsboro;
        border: none;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        text-decoration: none;
        color: black;
    }

    a:hover {
        background-color: whitesmoke;
        border-bottom: 1px solid blue;
    }

    * {
        font-family: Laksaman;
    }
</style>
<?php

$broken = array();
$safe = false;

function home() {
    ?>
    <html>
        <head>
            <title>Cross-Platform BIOS</title>
        </head>
        <body style="background-color: black;color: antiquewhite;">
            Hello Sir.<br />
            Welcome to Cross-Platform BIOS.<br />

        </body>
    </html>
    <?php
}

function safe() {
    echo '<b>BIOS Is Running In Safe Mode</b>';
    global $safe;
    $safe = true;
    echo '<center style="position: fixed;left: 95%;top: 0px;width: 5%;height: 100%;background-color: slategray;">B<br />I<br />O<br />S<br /><br />S<br />a<br />f<br />e<br /><br />M<br />o<br />d<br />e<br /><br /><a href="javascript:alert(\'&blacklozenge; BIOS Safe Mode &blacklozenge;\n BIOS Cannot Access to Network in This Mode \n BIOS Cannot Access to Tasks For Processor \n BIOS Cannot Format Partitions \n BIOS Cannot Start Public Programs \');"><button>&star;</button></a></center>';
}

function config($type = 'info',$path) {
    $address = '../../' . $path . '/';
    if ($type == 'info') {
        echo '<b>Notice</b> : Invalid Command For config() Function<br />
Web Console Configuration v1.0<br />
Partitioning Hosting v1.2<br /><br />
Using:<br />
 &nbsp; config(\'os\',\'&malt;OS Path&malt;\')<br />
For Get OS Information.<br />
 &nbsp; or config(\'file\',\'&malt;Url File&malt;\')<br />
For Get Configuration Of a File.<br /><br />

<a href="http://noco.zili.ir/en/bios-config">See config() Manual</a>
';
    } elseif ($type == 'os') {
        if (is_dir($address . '.os/public') && is_dir($address . '.os/private')) {
            $name = file_get_contents($address . '.os/public/name');
            $root = file_get_contents($address . '.os/public/root');
            $vers = file_get_contents($address . '.os/public/version');
            $lise = file_get_contents($address . 'LISENCE.md');
            echo "$name<br />
            os_version = $vers<br />
            os_version_name = $vers<br />
            os_path = $path<br />
            os_root = $root<br />
            os_name = $name<br />
            os_fname = $name v$vers<br />
            os_partition = unknown (null)<br />
            <b>$name Software Lisence</b>
            <pre>
            $lise
            </pre>
            ";
        } else {
            echo 'Invalid to Mounting OS';
        }
    }
}

class brokens {
    public function fix($pack,$broken) {
        echo "End All Tasks Of $pack ...<br />";
        if (isset($broken[$pack])) {
            echo 'Done<br />Ending Attention Sources ...<br />Done<br />Exiting Package From Broken Mode ...<br />';
            if ($broken[$pack]) {
                $broken[$pack] = false;
                echo 'Done<br />e.ecl Allowed Any Changes In '.$pack.' In Private Event (Attention:true)<br />';
                return $broken;
            } else {
                echo 'e.ecl.throw.logical Package Is Not In Broken Mode<br />e.ecl.packs.pack('.$pack.') Reverted Allowed Changes';
            }
        } else {
            echo 'e.ecl Invalid to Mounting Package Of '.$pack.'<br />';
        }
    }

    public function get($pack,$broken) {
        echo "End All Tasks Of $pack ...<br />";
        if (isset($broken[$pack])) {
            echo "Done<br />Getting /usr/package/broken Sources ...<br />Done<br />Getting Broken Mode For $pack ...<br />";
            if (!$broken[$pack]) {
                $broken[$pack] = true;
                echo 'Done<br />e.ecl Allowed Any Changes In '.$pack.' In Private Event (Attention:true)<br />';
                return $broken;
            } else {
                echo 'e.ecl.throw.logical Package Is In Broken Mode<br />e.ecl.packs.pack('.$pack.') Reverted Allowed Changes';
            }
        } else {
            echo 'e.ecl Invalid to Mounting Package Of '.$pack.'<br />';
        }
    }

    public function check($pack,$broken) {
        echo "Loading Sources Of $pack ...<br />";
        if (isset($broken[$pack])) {
            echo "Done<br />Getting /usr/package/broken Sources ...<br />Done<br />Checking $pack For Broken Mode ...<br />";
            if ($broken[$pack]) {
                echo 'Package Is Not In Broken Mode<br />';
            } else {
                echo 'Package Is In Broken Mode<br />e.ecl An Event Entry From (bios:brokens) to a Broken Package';
            }
        } else {
            echo 'e.ecl Invalid to Mounting Package Of '.$pack.'<br />';
        }
    }

    public function version() {
        echo "Brokens Class bios:brokens Version v1.0 Open Source<br />
e.ecl.default v1.2<br />
Brokens bios:loader?m=class&n=brokens v2.0 Public Event<br />";
    }

    public function help() {
        echo 'Brokens Class bios:brokens Version v1.0 Open Source<br /><br />
Use <code>$broken = (new brokens)->get(&cir;Package&cir;,$broken)</code> to Switch A Package to Broken Mode<br />
Use <code>$broken = (new brokens)->fix($cir;Package$cir;,$broken)</code> to Get A Package Out Of Broken Mode.<br />
Use <code>(new brokens)->version()</code> to See Brokens Class Software Versions<br />
Use <code>(new brokens)->help()</code> to See Help<br />
';
    }
}

function man($manual) {
    if (file_exists('manual/'.$manual)) {
        echo '<h1>BIOS Offline Manual</h1>';
        include "manual/$manual";
        echo '<br /><br /><a href="manual">Go to BIOS Offline Manual</a>';
    } else {
        echo '<h1>BIOS Offline Manual</h1>Invalid to Mount This Manual File';
    }
}