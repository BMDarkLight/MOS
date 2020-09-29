<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition</title>
    </head>
    <?php
    file_put_contents('power.stat','off');

    $user = file_get_contents('.cache/lastlogin/username');
    $pass = file_get_contents('.cache/lastlogin/password');
    $slug = file_get_contents('.cache/lastlogin/slug');
    $time = file_get_contents('.cache/lastlogin/time');


    echo '<body style="padding: 0px;margin: 0px;background-image: url(\'../../user/'.$slug.'/settings/walpaper.png\');">';
    echo '<center style="padding: 13%;">';
    echo '<h1>Shutting Down <img src="lib/load.gif" style="border-radius: 50%" width=30 height=30 /></h1>';
    echo '><span id="demo">Shutting Down All Cases Of *@'.file_get_contents('../explorer/desknm').'</span><';
    echo '</center>';
    echo '</body>';

    file_put_contents('.cache/lastlogin/username',null);
    file_put_contents('.cache/lastlogin/password',null);
    file_put_contents('.cache/lastlogin/slug',null);
    file_put_contents('.cache/lastlogin/time',null);

    ?>
    <script>
        setInterval(function () {parent.window.document.getElementById('bootloader').style.display = 'none';parent.window.document.getElementById('endboot').style.display = 'block';},3000);
    </script>
</html>
