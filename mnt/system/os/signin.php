<!DOCTYPE HTML>
<?php 

if (file_get_contents('power.stat') == 'on') {
	echo '
<Center><div style="position: fixed;width: 30%;margin: 20px auto 20px;background-color: red;color: yellow;border-radius: 5px;">
<h3>Your System Doesn\'t True Power Off</h3>
Please Don\'t Unplug Your Device From Power On System Working. This Work Can Destory Your Device.<br />
<button onclick="parentNode.style.display = \'none\'">OK</button>
</div></Center>
';
}

file_put_contents('power.stat','on');
?>
<html>
    <head>
        <title>M Edition Water</title>
        <link rel="stylesheet" href="../../../bin/style.css" />
        <script src="../../../bin/script.js"></script>
    </head>
    <body os="style:body1">
        <div id="myBar"></div>
        <a href="shutdown.php" style="background-color: red;margin: 0px;padding: 0px;border-radius: 4px;box-shadow: 0px 0px 5px white;"><img src="lib/power.png" width="20" height="20" /></a>
        <form action="process.php" method="post" os="alert" id="form">
            <h1>Select An Account</h1>
            <audio autoplay>
                <source src="lib/Sound/Windows Logon Sound.wav" type="audio/wav">
                Your browser does not support the audio tag.
            </audio>
            <ol>
                <script>var s = [];</script>
                <?php
                $dir = "../../user";
                $i = 0;
                // Open a directory, and read its contents
                if (is_dir($dir)){
                    if ($dh = opendir($dir)){
                        while (($file = readdir($dh)) !== false){
                            if ($file == ".info" || $file == ".." || $file == ".") {continue;} else {
                                if (file_get_contents($dir . '/' . $file . '/.info/source') == '1') {
                                    $pa = 'Have Password';
                                    $b = 'linear-gradient(to bottom, white, ghostwhite)';
                                    $r = true;
                                } elseif (file_get_contents($dir . '/' . $file . '/.info/source') == '0') {
                                    $pa = 'Haven\'t Password';
                                    $b = 'linear-gradient(to bottom, white, yellow)';
                                    $r = false;
                                } else {
                                    $pa = 'Invalid Source';
                                    echo '<script>alert("An Invalid Account, Try Fix It: <a href=\'repairaccount.php?slug='.$file.'\'><button type=\'button\'>Repair</button></a>");</script>';
                                    $b = 'linear-gradient(to bottom, white, red)';
                                    $r = 'unable';
                                }

                                if (is_dir($dir . '/' . $file . '/.info') || $r == 'unable') {
                                    echo "<li class='tooltip'><button type='button' style='background: ".$b.";' onclick='user(\"$file\",\"".file_get_contents($dir . '/' . $file .'/.info/username')."\")'>".file_get_contents($dir . '/' . $file .'/.info/username')."</button><span class=\"tooltiptext\">An Account For ".file_get_contents($dir . '/' . $file . '/.info/firstname')." (In ".file_get_contents($dir . '/' . $file . '/.info/type')." Source/Type - Slug : /".$file."/ - ".$pa.")</span></li><br />";
                                } else {
                                    echo "<li class='tooltip'><button type='button'>Losted Account</button><span class='tooltiptext'>a Losted Account On users//".$file." (Reqiured Repair)</span></li> <a href='repairaccount.php?slug=".$file."'>Repair</a><br />";
                                }
                            }
                            $i++;
                        }
                        closedir($dh);
                        
                        if ($i == 0) {
                            echo '<h4 style="margin: 0px;padding: 0px;text-align: left;">Not Have an account!</h4><br />
                            <span style="font-size: 9pt;">
                                Your System Have not an account. You Cannot Login to System Without an account.<br />
                                You Must Fix it Problem with Developers <a href="devs.php">Connect to Developers</a>
                            </span>
                            ';
                        }
                    }
                } else {
                    echo '<script>alert("Users Partition Was Lost!");</script>';
                }
                ?>
            </ol><br />
            <span class="tooltip"><button type="button" onclick='my1()' id='click'>?</button><span class="tooltiptext">Tips , Help</span></span>
        </form>
        <style>
            #myBar {
                height: 3px;
                background-color: lightsteelblue;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }
        </style>
        <script>
            move(id('myBar'),1,"alert('Tip : <br />Select An Account For Open M Edition OS');");
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

            function my() {
                document.getElementById('form').innerHTML = document.getElementById('form').innerHTML + '<br />Enter Password Of Your Selected User to Login in OS';
                document.getElementById('click').style.display = 'none';
                console.log('M Tips : /explorer -app(com.m.tip) /tips/selector/index');
            }

            function my1() {
                document.getElementById('form').innerHTML = document.getElementById('form').innerHTML + 'Select An Account And Enter That\'s Password to Login in OS.<br />You Can Create an account at An Adminstrator Place';
                document.getElementById('click').style.display = 'none';
                console.log('M Tips : /explorer -app(com.m.tip) /tips/selector/enterpass');
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
    </body>
</html>
