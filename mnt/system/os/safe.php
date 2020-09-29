<html>
    <head>
        <title>M Edition - Safe Mode</title>
        <link rel='stylesheet' href='../../../bin/style.css' />
        <script src='../../../bin/script.js'></script>
        <style>
            .startbtn {
                top: 95%;height: 100%;background-color: gainsboro;color: black;border: outset;
            }
            
            .startbtn:hover {
                border: inset;box-shadow: none;
            }
            
            #menu {
                display: none;
            }
        </style>
    </head>
    <body style='background-color: black;color: white;margin: 0px;padding: 0px;'>
        <span style='color: white;'>Safe Mode</span>
        <span style='float: right;color: white;'>Safe Mode</span>
        <div style='top: 95%;height: 4%;width: 99%;position: fixed;background-color: gainsboro;color: black;border: outset;'>
            <button onclick='menu()' class='startbtn'>Explorer</button> <button onclick='window.location.assign("start.php")' class='startbtn'>Sign out</button> M Edition Safe Mode (Beta v0.0.1)
        </div>
        <div id='menu'>
            he
        </div>
        <script>
            function menu() {
                alert('Unable Access to Partitions');
            }
        </script>
    </body>
</html>