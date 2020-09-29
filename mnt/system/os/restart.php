<!DOCTYPE HTML>
<html>
<head>
    <title>M Edition</title>
</head>
<body style="background: url('../.libraries/bootloader.png') no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <?php
    file_put_contents('power.stat','off');

    $user = file_get_contents('.cache/lastlogin/username');
    $pass = file_get_contents('.cache/lastlogin/password');
    $slug = file_get_contents('.cache/lastlogin/slug');
    $time = file_get_contents('.cache/lastlogin/time');


    echo '<body style="padding: 0px;margin: 0px;background-image: url(\'../../user/'.$slug.'/settings/walpaper.png\');">';
    echo '<center style="padding: 13%;">';
    echo '<h1>Restarting <img src="lib/load.gif" style="border-radius: 50%" width=30 height=30 /></h1>';
    echo '><span id="demo">Restarting '.$user.'@'.file_get_contents('../explorer/desknm').'</span><';
    echo '</center>';
    echo '</body>';

    file_put_contents('.cache/lastlogin/username',null);
    file_put_contents('.cache/lastlogin/password',null);
    file_put_contents('.cache/lastlogin/slug',null);
    file_put_contents('.cache/lastlogin/time',null);

    ?>
    <script>
        setInterval(function () {parent.document.getElementById('bootloader').style.display = 'none';
                parent.document.getElementById("reboot").style.display = 'block';
		setInterval(function () {parent.window.location.assign('start.php');},1500);},8000);
    </script>
</body>
</html>
