<!DOCTYPE HTML>
<?php

if (isset($_REQUEST['o'])) {
    echo 'e.ecl <span style="color: red;">You Be Back to This Page For Invalid Informations (Error : '.$_REQUEST['os'].')</span>';
} else {
    $desknm = $_REQUEST['desknm'];
    $deskmd = $_REQUEST['deskmd'];

    if ($desknm == "") {
        echo '<script>alert("Invalid Desktop Name");setTimeout(function () {window.location.assign("2.php")},3000);</script>';
    }

    if (!is_dir('../../explorer')) {mkdir('../../mnt/system/explorer');}
    file_put_contents('../../explorer/desknm',$desknm);
    file_put_contents('../../explorer/deskmd',$deskmd);

    echo 'e.ecl Not Error';
}

?>
<html>
    <head>
        <title>M Edition 4 - Install</title>
        <link rel="stylesheet" href="../../../../bin/style.css" />
    </head>
    <body os="style:body1">
        <form action="4.php" method="post" os="alert">
            <h1>Build Firewall, Terminal And UI</h1>
            System For Working, Needs Any Toolkit.<br />
            You Can Get These Toolkit On Your System And Use Your System, Easier!<br />
            Firewall Path : <input disabled value="/apps/com.m.firewall/wall" /><br />
            Terminal Path : <input disabled value="/apps/com.m.terminal/term.php" /><br />
            UserInterface : <input disabled value="system//os/os.php" /><br />
            <hr />
            <h1>M Studio > README.md</h1>
            # M Studio Version 2<br />
            # Stable Mode : <br />
            # Easier Use In M Edition OS<br />
            # GPT Lisence (Free For All People)<br />
            # Development Mode : <br />
            # Master Open Source Place<br />
            # Explorer 1.2<br />
            # Private /storage/<br /><br />
            # Thanks From Noco Programing Team.<br />
            <button type="submit">Build</button>
        </form>
    </body>
</html>