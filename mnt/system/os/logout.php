<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition</title>
    </head>
    <?php
    $user = file_get_contents('.cache/lastlogin/username');
    $pass = file_get_contents('.cache/lastlogin/password');
    $slug = file_get_contents('.cache/lastlogin/slug');
    $time = file_get_contents('.cache/lastlogin/time');


    echo '<body style="padding: 0px;margin: 0px;background-image: url(\'../../user/'.$slug.'/.info/settings/walpaper.png\');">';
    echo '<center style="padding: 13%;">';
    echo '<h1>Logging Out <img src="lib/load.gif" style="border-radius: 50%" width=30 height=30 /></h1>';
    echo 'Login Time : ' . $time . '<br />';
    echo 'Logout Time : '.date("Y/m/d h:i:sa").'<br />';
    echo '><span id="demo">Shutting Down '.$user.'@'.file_get_contents('../explorer/desknm').'</span><';
    echo '</center>';
    echo '</body>';

    file_put_contents('.cache/lastlogin/username',null);
    file_put_contents('.cache/lastlogin/password',null);
    file_put_contents('.cache/lastlogin/slug',null);
    file_put_contents('.cache/lastlogin/time',null);
    file_put_contents('power.stat','off');
    file_put_contents('../../user/' . $slug . '/.info/account.log', '[session_login:'.$user.']Session Logged Out at '.date("Y/m/d h:i:sa").'
',FILE_APPEND);

    ?>
    <script>
        setInterval(function () {window.location.assign('signin.php');},3000);
    </script>
</html>
