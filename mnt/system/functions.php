<script src='files://<?= __DIR__ ?>/os/lib/spserv/voice.js'></script>
<script>
    document.onkeydown = overrideKeyboardEvent;
    document.onkeyup = overrideKeyboardEvent;
    var keyIsDown = {};

    function getSelectionText() {
        var text = "";
        if (window.getSelection) {
            text = window.getSelection().toString();
        } else if (document.selection && document.selection.type != "Control") {
            text = document.selection.createRange().text;
        }
        return text;
    }

    function overrideKeyboardEvent(e){
        switch(e.type){
            case "keydown":
                if(!keyIsDown[e.keyCode]){
                    keyIsDown[e.keyCode] = true;
                    if (e.keyCode === 113) {
                        // Read Selected Text On Press F2
                        responsiveVoice.speak(getSelectionText());
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
</script>
<?php

//include: (*introduce> mos-classes <*)
include __DIR__ . '/.libraries/mos.php';

error_reporting(E_ALL ^ E_ALL);

//dump: (*introduce> mos-info-values-* <*)
$mos = array();
$mos['name'] = "M Edition Water";
$mos['version'] = 5.0;
$mos['api'] = 50;
$xec = array("name" => "xec_terminal");

function note($name,$content) {
    echo "<script>parent.window.alert('Notification : <br />$content');</script>";
    return file_put_contents(__DIR__ . "/explorer/cache/notes/$name",$content);
}

function dash_note($name,$content) {
    return file_put_contents(__DIR__ . "/explorer/cache/notes/$name",$content);
}

function alert($content) {
    echo "<script>alert('$content');</script>";
}

function get($arguments,$value) {
    return $arguments[$value];
}

function type($arguments) {
    echo $arguments;
}

function runos() {
    echo 'OS Is In Variable.<br />Parsing Command.<br />Getting OS ...<br /><b>Welcome to M Edition 4!</b><br />
[ <span style="color: lime;">OK</span> ] Start Client<br />
[ <span style="color: lime;">OK</span> ] Start OS Launcher<br />
[ <span style="color: lime;">OK</span> ] Start Arrow Technology<br />
Booting mos.img From A: ...<br />
Starting M Edition 4 ...<br />
Not Found';
}

function admin($oskey,$command) {
    if ($oskey['key'] == 'port:eula=434:true') {
        eval($command);
    } else {
        echo 'Invalid OS Key';
    }
}

// Dash syslinux For mos Platform

function dash() {
    echo   'Dash Copyright (c) All Resvards 2018<br />
            <code>dash_version() || dash()</code> See Features And Informations Of Dash<br />
            <code>dash_install(&xcirc;Plugin Address&xcirc;) || dash_plug(&xcirc;Plugin Address&xcirc;)</code> Install Plugins<br />
            <code>dash_set(&xcirc;Name&xcirc;,&xcirc;value&xcirc;)</code> Set a Variable<br />
            <code>reboot() || redash()</code> Do Restart<br />
            <code>shdn() || shdash()</code> Do Shut Down<br />
            <code>dash_run(&xcirc;PHP Command&xcirc;) || php(&xcirc;PHP Command&xcirc;)</code> Run a PHP Command (Not Recommended Use This)<br />
            <code>runos() || dash_os()</code> Run Default Cross Platform OS.<br />
            <code>note(&cir;Name&cir;,&cir;Content&cir;) || dash_note(&cir;Name&cir;,&cir;Content&cir;)</code> Share A Notification In System<br />
            mos_dash v1.2 (responsity main/dash) open source<br />
            Dash Manual (responsity main/dashs/man) (Build 9)<br />
            Cross-Platform Terminal<br />';
}

function dash_version() {
    echo   'Dash Copyright (c) All Resvards 2018<br />
            <code>dash_version() || dash()</code> See Features And Informations Of Dash<br />
            <code>dash_install(&xcirc;Plugin Address&xcirc;,&xcirc;Plugin Name&xcirc;) || dash_plug(&xcirc;Plugin Address&xcirc;)</code> Install Plugins<br />
            <code>dash_set(&xcirc;Name&xcirc;,&xcirc;value&xcirc;)</code> Set a Variable<br />
            <code>reboot() || redash()</code> Do Restart<br />
            <code>shdn() || shdash()</code> Do Shut Down<br />
            <code>dash_run(&xcirc;PHP Command&xcirc;) || php(&xcirc;PHP Command&xcirc;)</code> Run a PHP Command (Not Recommended Use This)<br />
            <code>runos() || dash_os()</code> Run Default Cross Platform OS.<br />
            <code>note(&cir;Name&cir;,&cir;Content&cir;) || dash_note(&cir;Name&cir;,&cir;Content&cir;)</code> Share A Notification In System<br />
            mos_dash v1.2 (responsity main/dash) open source<br />
            Dash Manual (responsity main/dashs/man) (Build 9)<br />
            Cross-Platform Terminal<br />';
}

function dash_install($address,$name) {
    return file_put_contents(__DIR__ . '/dash/plugins/'.$name.'.php',file_get_contents($address));
}

function dash_plug($address) {
    $name = pathinfo($address,PATHINFO_FILENAME);
    return file_put_contents(__DIR__ . '/dash/plugins/'.$name.'.plug.php'.file_get_contents($address));
}

function dash_set($name,$value) {
    eval("return \$$name = '$value';");
}

function reboot() {
    echo 'OS Is In Variable.<br />Parsing Command.<br />Getting OS ...<br /><b>Welcome to M Edition 4!</b><br />
[ <span style="color: lime;">OK</span> ] Start Package dash_reboot ...<br />
e.ecl.packages.(servers(e.ecl.(mos))).dash_reboot Operations:<br />
[ <span style="color: lime;">OK</span> ] Restart Client<br />
[ <span style="color: lime;">OK</span> ] Restart OS Launcher<br />
[ <span style="color: red;">NO</span> ] Restart Arrow Technology<br />
e.ecl <span style="color: red;">I Cannot Run OS In Terminal No Access Mode</span>';
}

function redash() {
    echo 'e.ecl.packages.(servers(e.ecl.(mos))).dash_reboot Operations:<br />
[ <span style="color:red;">NO</span> ] Reboot<br />
e.ecl <span style="color: red;">An Unknown Error In Running new ecl.reboot(os()) [Package Massage : Arrow Technology Doesn\'t Exist]</span>
';
}

function shdn() {
    echo 'Invalid to Mount shdn (e.ecl.(mos).shutdown)';
}

function shdash() {
    echo 'Invalid to Mount Shut down (e.ecl.(mos).dash.bios.events.shdn)';
}

function dash_run($command) {
    return eval($command);
}


function php($php) {
    return dash_run($php);
}

function dash_os() {
    echo 'Invalid Process';
}

function write($content) {
    echo $content;
}

function xec_terminal() {
    echo 'Terminal Is Already Playing.<br />For Run Another Terminal, Press F8 Key.';
}

function mos_desktop() {
    echo 'M Edition Desktop Is Already Playing';
}

function mount($location) {
    echo '<span style="color: red;">Unable to Mount location (Location Is Invalid to Mount Point)</span><br />Information Of Mount Point : <br />';
    $dir = $location . '/';
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                error_reporting(E_ALL ^ E_NOTICE);
                if (is_dir($dir . $file)) {
                    echo "<span style='color: lime;'>$file</span> | Folder | Location : ".pathinfo($dir,PATHINFO_DIRNAME)."/$dir/$file<br />";
                } else {
                    echo "<span style='color: lime;'>$file</span> | File | Location : ".pathinfo($dir,PATHINFO_DIRNAME)."/$dir/$file<br />";
                }
            }
            closedir($dh);
        }
    }
}

function remount($location = '/') {
    if ($location == '/' || $location == '/system' || $location == '/user') {
        echo 'Unmounting '.$location.' ...<br />Mounting '.$location.' In ReadOnly ...<br />Mount Point Was Remounted.';
    } else {
        echo 'Unmounting '.$location.' ...<br />e.ecl.mountpoints <span style="color: red;">Location Was Not Mounted ,I Cannot Remounting Not Mounted Location</span><br />Reverting All Changes ... All Done';
    }
}

function rmount($location = '/')
{
    if ($location == '/' || $location == '/system' || $location == '/user') {
        echo 'Unmounting ' . $location . ' ...<br />Mounting ' . $location . ' In ReadOnly ...<br />Mount Point Was Remounted.';
    } else {
        echo 'Unmounting ' . $location . ' ...<br />e.ecl.mountpoints <span style="color: red;">Location Was Not Mounted ,I Cannot Remounting Not Mounted Location</span><br />Reverting All Changes ... All Done';
    }
}

function mnt($partition) {
    mount('../'.$partition);
}

function responsity($name,$source = 'deb') {
    if ($source == 'deb') {
        echo 'Responsities Is Not Allowed.';
    } else {
        echo 'Invalid Source. Supported Sources: "deb"<br />';
    }
}

function xec($source = 'info') {
    if ($source == 'info') {
        echo 'XEC Kernel 1.0<br />xec_system Processor 1.2<br />Installed OS (mos) v4.0.professional<br /><b>Welcome to XEC!</b><br />Terminal Is Already Running.<br />XEC Is Already Running In Port 434 Eula true Source bios:VMOS';
        return 1.0;
    } elseif ($source == 'terminal') {
        echo 'For Open Another Terminal, Press F8 Key In Index Of OS';
        return 'F8';
    } elseif ($source == 'os') {
        echo '<b>M Edition OS 4</b><br />Version : 4<br />Playing On : Apache 2.0<br />Language : VMOS Process, PHP, Edition, Java, HTML, CSS, JS, XEC_TERM<br /><a href="http://noco.zili.ir/en/mos" target="_blank"><button type="button">Site Of Project</button></button></a>' ;
    } elseif ($source == 'agent') {
        echo '<b>Navigator Source</b><p id="demo">User Agent : </p><script>document.getElementById("demo").innerHTML = document.getElementById("demo").innerHTML + window.navigator.userAgent;</script>Checking Information By Firewall ... Done';
    } elseif ($source == 'mgmt') {
        echo '
        mount / to mtp:virtual/xec_source <br />
        mount /device to /mnt<br />
        mount /settings to /mnt/system/explorer/xec<br />
        allow overcase<br />
        allow processor<br />
        deny terminal-font<br />
        xec start<br />
        Starting XEC Manager ...<br />
        Processing xec.mgmt ... <br />
        Processing Case Of Styles ...<br />
        Starting XEC Manager ... Done <br />
        <br />[ <span style="color: lime;">OK</span> ] Start XEC Manager<br />
        Showing Contents ... <script>setTimeout(function () {window.location.assign("xec");},3000)</script>';
    } elseif ($source == 'docs') {
        echo 'Document Manager Is Disabled, You Can Run Document Manager In Installed OS.';
    } elseif ($source == 'desktop') {
        echo 'XEC Desktop Is Disabled, You Can Use A Desktop In Installed OS.';
    } elseif ($source == 'media') {
        echo 'XEC Media Player Is Not Included, You Can Use This Tool In Future Version Of XEC';
    } elseif ($source == 'char') {
        echo '<b>Included Characters</b><br />
-+=_!@#$%^&*()/\\[]\'"1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`~';
    } elseif ($source == 'mouse') {
        echo '<b>Mouse</b><br />
Status : Present<br />
<p id="coor">Position : X(Unknown), Y(Unknown)</p>
Checking Information By mos_process ...
<script>
document.body.onmousemove = positionmouse();

function positionmouse() {
    var x = event.clientX;
    var y = event.clientY;
    var coor = "Position : X(" + x + "), Y(" + y + ")";
    document.getElementById("coor").innerHTML = coor;   
}
</script>';
    } elseif ($source == 'exit') {
        echo 'NULL';
    } elseif ($source == 'xec') {
        echo 'Please Enter This Command : xec()';
    } elseif ($source == 'behdad') {
        echo '<b>behdadmehrnia</b><br />
Type : Person<br />
Status : Developer Of XEC Kernel';
    } else {
        echo 'NULL';
    }
}

function clear() {
    echo '<script>window.location.assign("clear.php");</script>';
}

function zenity($name,$massage) {
    echo "<script>
alert('Zenity:$name \\n $massage');
</script>";
    note('zenity',"$massage From $name");
}

function studio() {
    echo 'M Studio Version 1.0 Beta<br />Starting M Studio ... Errors <br />xec.msui Sources Not Includes.<br />Closing M Studio ... Done';
}

function xec_command($command) {
    return eval("$command;");
}

function command($command) {
    return eval("$command;");
}

function package($package) {
    if (is_dir(dirname(__DIR__) . '/apps/' . $package)) {
        echo 'Getting Package Sources ... Done<br />';
        echo 'Including Application Functions ... Done<br />';
        include_once dirname(__DIR__) . "/apps/$package/info";
        return true;
    } else {
        echo 'Getting Package Sources ... Error (Package Does Not Exist)';
        return false;
    }
}

class file {
    public $file;

    public function __construct($filename) {
        $this->file = $filename;
        return $this;
    }

    public function put($content) {
        return file_put_contents($this->file,$content);
    }

    public function get() {
        echo "$this->file Content<br />".file_get_contents($this->file);
    }
}

function place() {
    /* Some possible outputs:
    Linux localhost 2.4.21-0.13mdk #1 Fri Mar 14 15:08:06 EST 2003 i686
    Linux

    FreeBSD localhost 3.2-RELEASE #15: Mon Dec 17 08:46:02 GMT 2001
    FreeBSD

    Windows NT XN1 5.1 build 2600
    WINNT
    */
    echo "<b>Place Content</b><br />Name : XEC Terminal<br />Title : Terminal<br />Source : xec_terminal()<br />Running Command : place()<br />Hosting Kernel Type : ".PHP_OS."<br />php_uname() Output : ". php_uname()."<br />";
}

function source() {
    echo $_SERVER['SERVER_SOFTWARE'];
}

function force() {
    echo "dash: force: Unable Command";
}

function wos($file) {
    echo "wos: Tip : Enter Address Of File From /mnt/ Location.<br />";
    if (is_file(dirname(__DIR__) . "/" . $file) && $file !== "" && $file !== null && $file !== "./") {
        echo "Reading /mnt/$file ... Done<br />"
           . "Mounting /mnt/$file to boot/bootmgr ... Done<br />"
           . "checking Exist Static Boot Toolkit ... yes<br />"
           . "checking CPU Leave ... good<br />"
           . "Processing tiggers of cross-static ..."
           . "<script>setInterval(function () {window.location.assign('../../../bin/stboot.php');},5000);</script>";
    } else {
        echo "<b>Hardware Reading Error</b> : an Error At Reading SATA Hardware Information (File Doesn't Exist)";
    }
}

function device($value = NULL) {
    if ($value == null) {
        echo "<b>Device</b> : Device Is Connected.<br />";
    } elseif ($value == "home") {
        echo "<b>Device</b><br />Processing tiggers mtp:device/pages(home) ... Done<br /><b>Device Home</b><br /><script src='../../bin/script.js'></script><script>typetime(id('time'));</script>Current Time : <span id='time'>Unknown</span>";
    } elseif ($value == "info") {
        echo "<span style='color: blue;'>NULL</span>";
    } else {
        echo "Hello ,World!";
    }
}

function e($command) {
    if ($command == '' || $command == null) {
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        echo '<b>Logical Error (0x500)</b> : Invalid Requesting to e.module?m=opensrc&c='.$command.'&parser=eval (e.module Message : Occured Command)<br />';
        return false;
    }
    echo "Tip : Don't Use \" (Double Contation) Charater. Please Use \\' as \"<hr />";
    include __DIR__ . '/e.module';
    return eval($command . ';');
}

function action($command) {
    if ($command == null || $command == "") {
        echo "<b>Logical Error (0x500)</b> : Invalid Requesting to php($command) (php-pack Message : Occured Command)<br />";
        return false;
    }
    return eval($command . ';');
}

function start() {
    echo "xec: Entered An External Command , Exiting ... Done<br />:> xec_terminal()<br />Starting Terminal ... All Done!";
}

function root() {
    global $user;
    global $desknm;
    echo "xec: Entered An External Command, Exiting ... Done<br /><br />:> root()<br />Invalid Permission, Retry Please.<br /><br />:> root()<br />Invalid Permission, Retry Please.<br /><br />:> root()<br />Invalid Permission, Retry Please.<br /><br />:>xec_terminal()<br />Starting Terminal ... All Done!<br /><br />$user@$desknm:>root()<br />Invalid to Opening to Root Mode (root Message : Invalid Permission)";
}

function route() {
    echo "route: This Option Was Disabled";
}

function stop() {
    echo "stop: This Option Was Disabled";
}

function wget($url) {
    echo "Getting $url:434 ...";
    $content = file_get_contents($url);
    echo "Done<br />$url Content : <textarea style='width: 100%;height:250px;resize: none;background-color: black;color: white;border: 2px solid yellow;' readonly='readonly'>$content</textarea><br />Stopped +4<br />";
    return $content;
}

function swget($url) {
    echo "Getting $url:434 ...";
    $content = file_get_contents($url);
    return $content;
}

function lrc() {
    global $platform;
    if ($platform == 'xec_terminal') {
        echo '<script>window.location.assign("clear.php");</script>';
    } elseif ($platform == 'mos') {
        echo '<script>window.location.assign("logout.php");</script>';
    } elseif ($platform == 'stboot') {
        echo '<script>window.location.assign("unboot/exit.php")</script>';
    } else {
        global $clearfile;
        echo "<script>window.location.assign('$clearfile');</script>";
    }
    return true;
}

function mrc() {
    echo 'Unable to Clear All Temperory Files In Memory (Invalid Permission)';
}

function cd() {
    echo 'cd: This Option Was Disabled';
}

function cdrom() {
    echo 'Mounting /mnt/system/explorer/locations/cdrom as /cdrom ...';
}

function app($package) {
    $title = file_get_contents(__DIR__ . '/apps/' . $package . '/title');
    echo "Starting $package ... <br /><script>parent.window.openapp('$package','$title');</script>";
}

function mdebug() {
    echo "Setting mode=debug gcc-debug ... Done<br />Running Debug Mode ...<script>setTimeout(function () {parent.window.location.assign('../os/debug.php')},5000);</script>";
}


function unzip($filePath, $destination) {
    $zip = new \ZipArchive();
    if ($zip->open($filePath) === TRUE) {
        $zip->extractTo($destination);
        $zip->close();
        return true;
    } else {
        return false;
    }
}

function insmpk($mpk) {
    $mpkcontent = file_get_contents(dirname(__DIR__) . $mpk);
    file_put_contents(__DIR__ . 'example.zip',$mpkcontent);

    if (unzip(__DIR__ . 'example.zip',__DIR__ . '/apps/')) {
        unlink(__DIR__ . 'example.zip');
        return TRUE;
    } else {
        echo "<b>Edition Package Installer</b> : M Edition Package Installer Cannot Install This Package!";
        unlink(__DIR__ . 'example.zip');
        return FALSE;
    }
}

function help() {
    echo "<b>What Is XEC?</b><br />XEC Is A Toolkit For Make Access Between Web And Device.<br />Web Operating Systems Is Running On This Kernel And Toolkit.<br /><b>What Is XEC terminal?</b><br />XEC Terminal Is an Application For Send Commands And Programs to XEC Toolkit And Show Returns And Results.<br /><b>Syntax Of XEC Commands</b><br /> [Command Name]([parameters])  * Do not use Semecolom ';' on entering commands. ";
}

function superuser() {
    echo "<b>Super User Says </b> 'Hello, World!'.";
}

try {
    $dir = __DIR__ . "/apps/";
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                error_reporting(E_ALL ^ E_NOTICE);
                if ($file == "." || $file == ".." || $file == ".info") {continue;}
                if (file_exists($dir.$file."/pack.module")) {
                    include $dir.$file."/pack.module";
                }
            }
            closedir($dh);
        }
    }
} catch (Exception $e) {
    echo "Error : $e";
}

function getrepo($file,$num = 1) {
    $repo = repo();
    return file_get_contents($repo['cables'][$num] . $file);
}

function setrepo() {
    repo();
    logrepo('Repository Reloaded');
}

function logrepo($log) {
    echo "<script>parent.window.log('dash: repo: $log');</script>";
}

function repo() {
    $repo = array();
    $repo['version'] = 1.0;
    $repo['cables'] = array();
    $repo['cables'][1] = file_get_contents(__DIR__ . '/os/settings/repo/cables/1.cable') . '/mos/5/';
    $repo['cables'][2] = file_get_contents(__DIR__ . '/os/settings/repo/cables/2.cable') . '/mos/5/';
    $repo['cables'][3] = file_get_contents(__DIR__ . '/os/settings/repo/cables/3.cable') . '/mos/5/';
    $repo['cables'][4] = file_get_contents(__DIR__ . '/os/settings/repo/cables/4.cable') . '/mos/5/';
    $repo['name'] = 'Repository';
    $repo['main'] = $repo['cables'][1];
    return $repo;
}

function sudo() {
    echo 'Not Included `sudo` In This Kernel';
}

function apt($command,$value = null) {
    // xec-APT v1.0 Beta
    switch ($command) {
        case "update":
            echo 'Update APT Repository Informations ... Done<br />Fetched upgraded-list In 2s<br />Processing tiggers of upgraded-list ...<br />done.<br />done.';
            break;
        case "install":
            if ($value == "" || $value == null) {
                echo 'dash: apt: Bad Command Entry For Install (Need 2nd Value)';
                break;
            }
            
            error_reporting(E_ALL ^ E_WARNING);
            
            echo 'Processing Your Request ... ';
            echo 'request: superuser apt install '.$value.' in generic<br />';
            echo 'Running APT Repository Task ... done.<br />';
            echo 'Getting Application Information ... info: $packnm('.$value.')<br />';
            echo 'Downloading From http://mosp.co.nf/store/data/'.$value.'/app.mpk ...';
            $content = file_get_contents('http://mosp.co.nf/store/data/'.$value.'/app.mpk');
            if ($content == false || $content == null || $content == "") {
                echo 'Failed to Fetch<br />Closing Repository Task ... done.<br />output: false';
                break;
            } else {
                echo 'done.<br />Running insmpk Toolkit ... done.<br />Reading Content Of Downloaded File ...';
            }
            
            if (file_put_contents('apt.zip', $content)) {
                echo 'done.<br />Unpacking '.$value.' ...';
            } else {
                echo 'Failed to Reading<br />Closing Repository Task ... done.<br />output: false';
                break;
            }
            
            if (unzip('apt.zip', __DIR__ . '/apps/')) {
                echo 'done.<br />Processing tiggers of '.$value.' ... done.<br />';
                unlink('apt.zip');
            } else {
                echo 'Failed to Processing Package<br />Closing Repository Task ... done.<br />Fix /apps/archives/lock ... done.<br />output: false';
                unlink('apt.zip');
                break;
            }
            
            echo 'Clean Build Of Package ... done.<br />';
            echo 'output: true<br /><br />';
            echo '<b>Notice</b>:For Allow APT Changes, Use This Command : <br /><code>apt(\'rboot\')</code><br />';
            echo '<b>Notice</b>:Do not Use `Reload` Button At XEC Featured Terminals';
            break;
        case "help":
            ?>
<b>xec-APT version 1.0 beta</b>
APT is a function for Install Edition OS Application Easily<br />
Commands:<br />
Use apt('install','[Package name]') For Install a Package.<br />
Use apt('update') For Update Repository Information.<br />
Use apt('help') For Get Help From APT Forum (Offline).<br />
Use apt('explorer') For Install an Application with Explorer.<br />
Use apt('rboot') Or rboot() For Allow APT Changes to System.<br />

            <?php
            break;
        case 'rboot':
            rboot();
            break;
        case 'explorer':
            explorer();
            break;
        default:
            echo 'dash: apt: Bad Command `'.$command.'`';
    }
}

function rboot() {
    echo "Reloading System Boot ...<script>parent.window.location.reload()</script>";
    lrc();
}

function acache() {
    return "system/usr/bin/";
}

function boot_loader() {
    echo "Not Allowed Permission For Run This Command";
}

function mdefault() {
    echo "Not Allowed Permission For Run This Command";
}

function update() {
    echo "Running OS-Updater ... <script>window.location.assign('os-update.php');</script>";
    lrc();
}

function ext($command = 'help',$value = null) {
    error_reporting(E_ALL ^ E_NOTICE);
    switch ($command) {
        case "help":
            echo "<b>Explorer Extensions v1.0 Pre-release</b><br />
            For Get a Extension Information use:<br />
             &nbsp; ext('get','`Extension`')<br />
            For Set a Extension use:<br />
             &nbsp; ext('set',['name' => '`Extension Name`','ext' => '`Extension`','run-link' => '`Run File Link in explorer`','icon-links' => '`Link to File Picture`'])<br />
            For Get Help use:<br />
             &nbsp; ext('help') || ext()";
            break;
        case "out":
            if ($value == null) {
                echo 'Needs $value';
                break;
            }
            
            unlink(__DIR__ . "/os/settings/ext/$value.php");
            
            echo 'This Extension Is Registered Out.';
            break;
        case "set":
            if ($value == null) {
                echo 'Needs $value';
                break;
            }
            
            if (is_array($value)) {
                if ($value["ext"] == '' || $value["ext"] == null) {
                    echo 'Not Found `ext` In Array.';
                    break;
                }
                
                if ($value["name"] == '' || $value["name"] == null) {
                    echo 'Not Found `name` In Array.';
                    break;
                }
                
                if ($value["run-link"] == '' || $value["run-link"] == null) {
                    echo 'Not Found `run-link` In Array.';
                    break;
                }
                
                if ($value["icon-links"] == '' || $value["icon-links"] == null) {
                    echo 'Not Found `icon-links` In Array (Skipped).';
                }
                
                file_put_contents(__DIR__ . "/os/settings/ext/".$value['ext'].".php", '<?php'
              . '
                 // Explorer Extensions v1.0 Pre-release
                 $tp = "'.$value["name"].'";
                 $ln = "'.$value["icon-links"].'";
                 $to = "'.$value["run-link"].'";
              ');
                
                echo 'Extension Is Registered!';
                
                break;
            } else {
                echo 'Please Enter Information Extension In an array.';
                break;
            }
        case "get":
            if ($value == null) {
                echo 'Needs $value';
                break;
            }
            
            if (file_exists(__DIR__ . "/os/settings/ext/$value.php")) {
                include __DIR__ . "/os/settings/ext/$value.php";
                $get = ["name" => $tp,"icon-links" => $ln,"run-link" => $to,"ext"=> $value];
                echo "<pre>";
                var_dump($get);
                echo "</pre>";
                break;
            } else {
                echo 'Extension Is Not Installed/Setted.';
                break;
            }
        case "version":
            echo "<b>Explorer Extensions</b> v1.0 Pre-release Boosted For xec-pro & M Edition 4.1 Professional";
            break;
        default:
            echo "not found";
    }
}

function removedir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (filetype($dir."/".$object) == "dir") {
                    removedir($dir."/".$object); 
                } else { unlink($dir."/".$object); }
            }
        }
        reset($objects);
        rmdir($dir);
    }
    return true;
}

function host($command = 'help',$value = null,$access = 'basic',$accessdir = './') {
    $dir = __DIR__ . '/explorer/host/';
    switch ($command) {
        case 'show':
            echo "<script>parent.window.openapp('com.m.internet','M Internet','com.m.internet?path=host:$value');</script>";
            lrc();
            break;
        case 'check':
            if ($value == null || $value == '') {
                echo 'Please Enter a Host Server';
                break;
            }
            
            if (is_dir("$dir$value")) {
                include "$dir$value/info.php";
                echo 'Server is <span style="color: lime;">Registered</span> By '.$maker.'.<br />';
                echo 'For Unregister This Server, use `host("out","'.$value.'")`';
                return true;
            } else {
                echo 'Server is <span style="color: red;>Not Registered</span>."';
                return false;
            }
        case 'set':
            if ($value == null || $value == '') {
                echo 'Please Enter a Host Name';
                break;
            }
            
            if ($access == 'basic' || $access == null || $access == 'simple') {
                echo 'Invalid Permission For Set';
                break;
            } else {
                $dire = basename($accessdir);
                if (is_dir(__DIR__ . "/apps/$dire")) {
                    echo 'Permission Accepted<br />';
                } else {
                    echo 'Inavlid Permission For Applicant';
                    break;
                }
            }
            
            echo 'Copying Host Files to Server ...';
            if (is_dir("$dir$value")) {
                echo 'override-fail.<br />This Server is Exist, Please Unregister that ant try again.';
            } else {
                echo 'done.<br />';
                
                mkdir("$dir$value");
            }
            
            echo 'Connecting Server to M Client ...';
            file_put_contents("$dir$value/info.php", "<?php

// M Client Registered Server/Host
\$maker = '$dire';
\$author = '';
\$hostnm = '$value';");
            echo 'done.<br />';
            
            echo 'Server is Registered. Please Use a Hoster Application for Change Your Host Settings and contents.<br />output: true;';
            break;
        case 'out':
            if ($value == null || $value == '') {
                echo 'Please Enter a Host Name';
                break;
            }
            
            echo 'Checking Host ... ';
            if (is_dir("$dir$value")) {
                echo 'detected.';
            } else {
                echo 'fail-detect.<br />This Host Does not Exist';
                return;
            }
            
            echo 'Removing Host From Registery ... done.<br />';
            echo 'Removing Host Files ... ';
            if (removedir("$dir$value")) {
                echo 'done.<br />';
                echo 'Removing Host Cached Files ... done (not have cache file)<br />';
                echo 'Host is Unregisterd. For Register it again, Run Owner Of This Host.';
                break;
            } else {
                echo 'fail.<br />Edition OS Cannot Wipe Host Client Files.';
                break;
            }
        case 'help':
            echo '<b>M Edition Hosts Service (beta)</b><br />Written in elang<br />used mos-libraries-client<br />version: 1.0<br /><br />';
            echo '<b>Need Help</b><br />';
            echo "Use `host('out','[hostname]')` For Unregister a Host<br />";
            echo "Use `host('check','[hostname]')` For Check Host For Register Information<br />";
            echo "Use `host('set','[hostname]')` For Register a Host<br />";
            echo "Use `hostmgr` Function For Manage Host Files";
            break;
        default:
            echo "Entry `$command` Is a bad Command, I Cannot Access to This Feature in host-lib";
    }
}

function chkval($value) {
    if ($value == null || $value == '') {
        return false;
    } else {
        return true;
    }
}

function hostmgr($command = 'help',$hst = null,$fnm = null,$cnt = null) {
    $dir = __DIR__ . '/explorer/host/';
    switch ($command) {
        case 'help':
            echo '<b>Host Manager</b><br />You Can Manage Your Host Files With This Function.<br />';
            echo "Use `hostmgr('get','[hostname]','[filename]')` For Get Contents From a File<br />";
            echo "Use `hostmgr('set','[hostname]','[filename]','[content]')` For Write Content to a File<br />";
            echo "Use `hostmgr('del','[hostname]','[filename]')` For Move a File to Trash of System Files<br />";
            echo "Use `hostmgr('help')` For Need Help";
            break;
        case 'get':
            if (!chkval($hst)) {echo 'Reqiured `Hostname` value.';break;}
            if (!chkval($fnm)) {echo 'Reqiured `Filename` value.';break;}
            return file_get_contents("$dir$hst$fnm");
        case 'set':
            if (!chkval($hst)) {echo 'Reqiured `Hostname` value.';break;}
            if (!chkval($fnm)) {echo 'Reqiured `Filename` value.';break;}
            if (!chkval($cnt)) {echo 'Reqiured `Contents` value.';break;}
            return file_put_contents("$dir$hst/$fnm", $cnt);
        case 'del':
            if (!chkval($hst)) {echo 'Reqiured `Hostname` value.';break;}
            if (!chkval($fnm)) {echo 'Reqiured `Filename` value.';break;}
            return rename("$dir$hst/$fnm",__DIR__ . '/.libraries/trash/' . basename("$fnm"));
        default:
            echo "Entry `$command` Is a bad Command, I Cannot Access to This Feature in host-lib";
    }
}

function product() {
    echo '<b>M Edition v4.1</b><br />Programmer : Behdad Mehrnia<br />Kernel : XEC PRO<br />Client : mos-ultra';
}

function oapp(/*$package*/) {
    echo 'Command Closed For Detected Problems';
    // echo '<script>parent.window.openapp("'.$package.'","'. file_get_contents(__DIR__ . "/apps/$package/title").'")</script>';
}

function generate($length = 1,$outputmode = 'text') {
    // Generator Command By M Edition
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $str = '';
    for ($i = 0; $i < $length; $i++) {
        $str .= $characters[rand(0, $charactersLength - 1)];
    }
    if ($outputmode == 'text') {
        echo "Generated Key : <b>$str</b><br />use generate('$str','hash') For Get Encrypted Generate Key";
    } elseif ($outputmode == 'key') {
        echo "$str";
        return $str;
    } elseif ($outputmode == 'default') {
        return $str;
    } elseif ($outputmode == 'hash') {
        $str = md5($str);
        echo "Encrypted Generate Key : <b>$str</b>";
    } elseif ($outputmode == 'hashk') {
        $str = md5($str);
        echo "$str";
        return $str;
    } elseif ($outputmode == 'hashd') {
        return md5($str);
    } else {
        echo "<b>Problem Detected</b><span style='font-size: 8pt;'>by M Security</span><br />Place : generate($length,'$outputmode')<br />Type : xecode<br />Zenity : null<br />Returns (<br />('str')=>'$str' || !>'$str',<br />'strlen' => $length,<br />'place'=>[-Private Value-]<br />)<br />Closed After 0.01s<br />Main Return : $str<br />Problem Mode : 0xnull-get";
    }
}


// Edition `dev` Function  include\\
/** @name $dev
 *  @package dev
 *  @author Behdad Mehrnia <behdadmehrnia@outlook.com>
 *  @version 1.0
 *  @license http://nocos.co.nf e.dev
 */
function dev($option = 'help', $value = null) {
    switch ($option) {
        case 'app':
            if ($value == null || $value == '') {
                echo 'Need a Value';
                break;
            }
            
            echo 'Starting Developer Kit ... done.<br />';
            echo 'Detecting Package Installation ... ';
            if (is_dir(__DIR__ . "/apps/$value")) {
                echo 'done.<br />';
                echo "Applying Developer Kit On $value/dev.php:21 developer ... ";
                if (file_exists(__DIR__ . "/apps/$value/dev.php")) {
                    echo 'done.<br />';
                    $title = file_get_contents(__DIR__ . "/apps/$value/title");
                    echo "Showing Output ... <script>parent.window.openapp('$value','$title (as Developer)','$value/dev.php');</script> done.<br />output=0";
                } else {
                    echo 'fail<br /><b><span style="color: red;">Failed to Apply Developer Kit</span></b> : This Package Have Not Developer Configuration File<br />output=1';
                }
            } else {
                echo 'fail<br /><b><span style="color: red;">Failed to Apply Developer Kit</span></b> : Please Enter a Valid Package Name, I Cannot Detect an installation with this value<br />output=1';
            }
            break;
        case 'host':
            echo 'Cannot Run Host at Developer. Please Update Your Operating System.<br />output=1';
            break;
        case 'help':
            echo "<b>Edition Developer Feature</b><br />version : 1.0<br />channel : `beta`<br />use dev('app','[Package Name]') For Open an application at Developer<br />use dev('host') For Open Host Server at Developer<br />use dev('help') For Need a Help<br /><b>place() Information</b><br />class : class::e<br />type : function<br />abs : public static<br />place[1] : xec<br />place[2] : mos<br />place[3] : functions.php -> term.php";
        default:
            echo 'null';
    }
}

// end include\\