<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition</title>
        <link rel="stylesheet" href="../../../bin/style.css" />
    </head>
    <?php
    $user = file_get_contents('.cache/lastlogin/username');
    $pass = file_get_contents('.cache/lastlogin/password');
    $slug = file_get_contents('.cache/lastlogin/slug');
    $time = file_get_contents('.cache/lastlogin/time');


    echo '<body style="padding: 0px;margin: 0px;background-image: url(\'../../user/'.$slug.'/.info/settings/walpaper.png\');">
        <center style="padding: 13%;">
            <form action="process.php" method="post" id="form">
            <h1>Switch Account</h1>
            You Are In '.$user.' Account<br />
            <li class="tooltip"><a href="os.php"><button type="button">Continue With '.$user.'</button><span class=\'tooltiptext\'>Continue Running Desktop With Logged Account ('.$user.' In users//'.$slug.'/)</span></a></li><br />
    ';
    $dir = "../../user";
    // Open a directory, and read its contents
    if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                if ($file == ".info" || $file == ".." || $file == ".") {continue;} else {
                    if (file_get_contents($dir . '/' . $file . '/.info/username') !== $user) {
                        if (file_get_contents($dir . '/' . $file . '/.info/source') == '1') {
                            $pa = 'Have Password';
                            $b = 'linear-gradient(to bottom, white, ghostwhite)';
                            $r = true;
                        } elseif (file_get_contents($dir . '/' . $file . '/.info/source') == '0') {
                            $pa = 'Haven\'t Password';
                            $b = 'linear-gradient(to bottom, white, yellow)';
                            $r = false;
                        } else {
                            $pa = 'os [unable]';
                            $b = 'linear-gradient(to bottom, white, red)';
                            $r = 'unable';
                        }

                        if (is_dir($dir . '/' . $file . '/.info')) {
                            echo "<li class='tooltip'><button type='button' style='background: ".$b.";' onclick='user(\"$file\",\"".file_get_contents($dir . '/' . $file .'/.info/username')."\")'>Switch to ".file_get_contents($dir . '/' . $file .'/.info/username')."</button><span class=\"tooltiptext\">An Account For ".file_get_contents($dir . '/' . $file . '/.info/firstname')." (In ".file_get_contents($dir . '/' . $file . '/.info/type')." Source/Type - Slug : /".$file."/ - ".$pa.")</span></li><br />";
                        } else {
                            echo "<li class='tooltip'><button type='button'>Switch to Losted Account</button><span class='tooltiptext'>a Losted Account On users//".$file." (Reqiured Repair)</span></li> <a href='repairaccount.php?slug=".$file."'>Repair</a><br />";
                        }
                    }

                }
            }
            closedir($dh);
        }
    } else {
        echo '<script>alert("Users Partition Was Lost!");</script>';
    }
    echo '
                <li class="tooltip"><a href="guest"><button type="button">Switch to Guest (Not Recommended)</button></a><span class="tooltiptext">Informations Saved By This Users Doesn\'t Save to This Computer</span></li>
            </form>
        </center>
    </body>
    ';

    ?>
    <script>
        function user(file,username) {
            console.log('Loading Sources Of Logining In With ' + username + ' ...');
            <?php  if ($r == true) { ?>
            console.log('Getting Password From Form ...');
            document.getElementById('form').innerHTML = "<h1>Hello " + username + "</h1>" + "Password : <input type='hidden' name='user' value='"+username+"' /><input type='hidden' name='slug' value='"+file+"' /><input type='password' name='pass' placeholder='Password' />" + "<input type='submit' value='->' /> <span class=\"tooltip\"><button type=\"button\" onclick='my()' id='click'>?</button><span class=\"tooltiptext\">Tips , Help</span></span>";
            <?php } elseif ($r == false) { ?>
            console.log('Entering to Account (Source x120 : Not Exist Password)');
            alert('It Haven\'t Password, Redirecting ...');
            setTimeout(function () {window.location.assign('process.php?user=' + username + '&pass=&slug='+file);},3000);
            <?php } else { ?>
            console.log('Destoryed Account');
            alert('Destoryed Account (Error 0x400)');
            <?php } ?>
        }

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
</html>