<b style="background-color: white;color: black;border-radius: 5px;">Cross-Platform BIOS version stable.1.2.1 <a href="bios.php"><button>Clear Command</button></a> <a href="manual"><button>BIOS Manual</button></a></b><br />
<?php

error_reporting(E_ALL ^ E_NOTICE);

include_once 'bios.commands.php';

$command = $_REQUEST['command'];

if ($command == "") {
    echo '<b>Warning</b> : Please Enter a Command.<br />';
    echo '<form style="border: 1px solid black;border-radius: 5px">
<b>Wizard Enter Command</b><br />
Command : <input name="command" value="home()" /><br />
Need Help? <a href="manual">See BIOS Manual</a><br />
<button>Enter</button>
</form>';
    return;
}

eval($command . ';');