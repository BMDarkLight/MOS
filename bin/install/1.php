<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition 4 - Install</title>
        <link rel="stylesheet" href="../style.css" />
    </head>
    <body os="style:body1">
        <form action="restore.php" method="post" enctype="multipart/form-data" os="alert">
            <h1>Restore Install</h1>
            You Can Restore /etc Folder Informations From a Zip File.<br />
            File : <input type="file" accept=".zip" name='fileToUpload' id="fileInput" /><br />
            <div id="dropContainer" class="drop">
                You Can Drop Files Here
            </div>
            <script>
                dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
                  evt.preventDefault();
                };

                dropContainer.ondrop = function(evt) {
                  // pretty simple -- but not for IE :(
                  fileInput.files = evt.dataTransfer.files;
                  evt.preventDefault();
                };
            </script>
            <style>
                input[type="file"]
                {
                    background-color: black;
                    color: antiquewhite;
                    border: 1px solid aqua;
                    border-radius: 5px;
                    transition: all 1s;
                    padding: 5px;
                }

                input[type="file"]:hover {
                    border-radius: 10px;
                    background-color: grey;
                }

                .drop
                {
                    border:2px solid blue;
                    padding: 8%;
                    text-align: center;
                    border-radius: 5px;
                    background: linear-gradient(to bottom,grey,gainsboro);
                    transition: all ease-in-out 1s;
                }

                .drop:hover {
                    border: 3px dotted black;
                    background: linear-gradient(to top,grey,gainsboro);
                    border-radius: 10px;
                }
            </style>
            <br />
            <button type="submit">Restore</button>
            <hr />
            <h1>Normal Install</h1>
            Enter Install Information And Set Install Steps.<br />
            <a href="2.php"><button type="button">Normal Install</button></a>
        </form>
    </body>
</html>