<html>
    <head>
        <title>M Edition</title>
        <style>
            .app {
                border: 5px solid lightslategrey;
                background: linear-gradient(to bottom, white, whitesmoke);
                border-radius: 5px;
                min-width: 400px;
                min-height: 125px;
                height: 60%;
                width: 50%;
                overflow: hidden;
                top: 20%;
                left: 25%;
                resize: none;
                position: fixed;
                z-index: 500;
                max-width: 100%;
                max-height: 100%;
                font-size: 12pt;
            }

            .message {
                border: 5px solid lightslategrey;
                background: linear-gradient(to bottom, white, whitesmoke);
                border-radius: 5px;
                min-height: 200px;
                min-width: 300px;
                overflow: hidden;
                top: 15%;
                left: 10%;
                position: fixed;
                z-index: 500;
            }

            .appheader {
                background-color: lightslategrey;
                width: 100%;
                resize: both;
            }

            .appcontent {
                width: 99%;
                height: 100%;
                z-index: 1;
                border: none;
                border-radius: 5px;
                padding: 0px;
                margin: 0px;
            }
            
            body {
                background: url("lib/default_wal.png") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                font-size: 8pt;
            }
            
            #myBar {
                background: linear-gradient(to right, lime, limegreen);
                border-right: 0.5px solid white;
                width: 0%;
                height: 100%;
            }
        </style>
        <script src="../../../bin/script.js"></script>
        <link rel='icon' href='favicon.ico' width="100%" />
    </head>
    <body>M Edition 
        <div class='app' id='b'>
            <div class='appheader' id='bh'>
                Welcome to M Edition
            </div>
            <div class='appcontent'>
                <div style='width: 100%;background-color: gainsboro;border: outset;'><h1>Finish</h1></div>
                Sorry, You Cannot Use M Edition.<br />
                <a href='http://noco.zili.ir/en/report'><button>Report</button></a>
            </div>
        </div>
        <script>dragElement(document.getElementById('b'),document.getElementById('bh'));</script>
    </body>
</html>