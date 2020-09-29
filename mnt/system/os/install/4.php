<!DOCTYPE HTML>
<?php

if (isset($_REQUEST['o'])) {
    echo 'e.ecl <span style="color: red;">You Be Back to This Page For Invalid Informations (Error : '.$_REQUEST['o'].')</span>';
} else {
    echo 'e.ecl Not Errors';
}

?>
<html>
    <head>
        <script src="../j.js"></script>
        <title>M Edition 4 - Install</title>
        <link rel="stylesheet" href="../../../../bin/style.css" />
        <script src="../script.js"></script>
        <script>setTimeout(function () {},3000);</script>
    </head>
    <body os="style:body1">
    <div id='cntnr'>
        <ul id='items'>
            <a href="http://mosp.co.nf" target="_blank"><li>Our Site</li></a>
        </ul>
    </div>
        <form action="5.php" method="post" os="alert">
            <h1>Host Partitioning For OS</h1>
            <div class="bar" title="Locked"><span class="bar1">50MB /swap</span><span class="bar2">100MB /system</span><span class="bar3">N/A /home</span>N/A Free</div>
            <hr />
            <h1>Make Adminstrator</h1>
            <h3>Personal Information</h3>
            First Name : <input maxlength=255 name="first" /><br />
            Last Name : <input maxlength=255 name="last" />
            <hr />
            <h3>System Configuration<sup>*</sup></h3>
            Slug : /<input placeholder="e.g." maxlength=255 name="slugnm" required value="admin" />/<br />
            User Name : <input placeholder="e.g." maxlength=24 name="usernm" required /><br />
            Password : <input type="password" placeholder="Password" maxlength=16 name="passnm" /><br />
            Confirm Password : <input type="password" placeholder="Password" maxlength=16 name="repass" /><br />
            Email : <input placeholder="e.g.@example.com" name="email" required maxlength=255 type="email" /><br />
            Type : <select disabled><option>Adminstrator</option><option>User</option></select>It Must Be Adminstrator<br />
            Mode : <select name="dev"><option value="0" selected title="Recommended">Personal Account</option><option value="1" title="Not Recommended For Personals">Developer Account</option></select><br />
            <button type="submit">Make</button><hr />
            <h1>Multi Account > README.md</h1>
            # Multi Account v1.2 For M OS<br />
            # Stable Version : <br />
            # Easy Account<br />
            # Private Saving Information<br />
            # Development Version : <br />
            # Safe By Firewall <br />
            # Host Partitioning<br />
            # Looked Read/Write to Accounts Informations<br />
            <script>
                alert('Reqiured Fields Marked By <sup>*</sup>');
                setTimeout(function () {alert('This Is Last Step Of Install OS')},3000);
                $(document).bind("contextmenu",function(e){
                    e.preventDefault();
                    console.log(e.pageX + "," + e.pageY);
                    $("#cntnr").css("left",e.pageX);
                    $("#cntnr").css("top",e.pageY);
                    // $("#cntnr").hide(100);
                    $("#cntnr").fadeIn(200,startFocusOut());
                });

                function startFocusOut(){
                    $(document).on("click",function(){
                        $("#cntnr").hide();
                        $(document).off("click");
                    });
                }
            </script>
            <style>
                sup {
                    color: red;
                }

                .bar {
                    background-color: lightgrey;
                    width: 100%;
                    border-radius: 5px;
                }

                .bar1,.bar2,.bar3 {
                    transform: scale(1.2);
                    box-shadow: 0px 0px 10px black;
                }

                .bar1 {
                    background-color: greenyellow;
                    width: 10%;
                    height: 100%;
                    border-radius: 5px;
                    text-align: center;
                }

                .bar2 {
                    background-color: gold;
                    width: 20%;
                    height: 100%;
                    border-radius: 5px;
                    text-align: center;
                }

                .bar3 {
                    background-color: red;
                    width: 30%;
                    height: 100%;
                    border-radius: 5px;
                    text-align: center;
                }


                #items{
                    list-style:none;
                    margin:0px;
                    margin-top:4px;
                    padding-left:10px;
                    padding-right:10px;
                    padding-bottom:3px;
                    font-size:17px;
                    color: #333333;

                }
                hr { width: 85%;
                    background-color:#E4E4E4;
                    border-color:#E4E4E4;
                    color:#E4E4E4;
                }
                #cntnr{
                    display:none;
                    position:absolute;
                    border:1px solid #B2B2B2;
                    width:150px;      background:#F9F9F9;
                    box-shadow: 0px 0px 5px black;
                    border-radius:4px;
                }

                #cntnr:hover {
                    box-shadow: 0px 0px 10px black;
                    border-radius: 6px;
                }

                #items li{
                    color: black;
                    padding: 3px;
                    padding-left:10px;
                }


                #items :hover{
                    color: white;
                    background:#284570;
                    border-radius:2px;
                }
            </style>
        </form>
    </body>
</html>