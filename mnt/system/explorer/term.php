<style>
    body,* {
        background-color: black;
        color: white;
    }

    #command {
        background-color: black;
        color: white;
        border: none;
        width: 40%;
        font-family: "Nimbus Mono L";
        font-size: 10pt;
    }

    b {
        color: white;
        font-size: larger;
    }
</style>
<script>
    var wage = document.getElementById('main');
    wage.addEventListener("keydown", function (e) {
    if (e.keyCode === 113) {
            // Enter Setup On Press F2 Key
            alert('F2 = bin()');
            window.location.assign('../../../bin');
        }

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
            alert('It Clears All Informations Of Terminal');
            window.location.assign('clear.php');
        }

        if (e.keyCode === 120) {
            // Load Toolkits On Press F9 Key
            alert('Invalid to Mount Toolkits');
        }
    });
</script>
<?php
$desknm = file_get_contents('desknm');
$user = file_get_contents('../os/.cache/lastlogin/username');
$platform = "xec_terminal";

if (!isset($user)) {
    $user = 'guest';
}
?>
<body>
    <form method="post" id="main">
        Cross-Platform Command Line <button type="button" onclick="window.location.assign('clear.php')">Clear</button> <button type="button" onclick="window.location.reload()">Reload</button><br />
        <code>
            :> xec_terminal()<br />
            Starting Terminal ... All Done!<br />
            <?php

            include dirname(__DIR__) . '/functions.php';
            error_reporting(E_ALL ^ E_WARNING);
            if (isset($_REQUEST['command'])) {
                echo $desknm.'@'.$user.':> ' + $_REQUEST['command'];
                file_put_contents('../example.php','echo "'.$desknm.'@'.$user.':>'.$_REQUEST['command'].'<br />";' . $_REQUEST['command'] . ';echo "<br />";',FILE_APPEND);
                include_once '../example.php';
            }

            ?>
            <br /><?= $desknm ?>@<?= $user ?>:> <input autofocus autocomplete="off" name="command" id="command" />
        </code>
    </form>
</body>