<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition 4 - Install</title>
        <link rel="stylesheet" href="../../../../bin/style.css" />
    </head>
    <body os="style:body1">
        <form action="3.php" method="post" os="alert">
            <h1>Build Desktop Explorer</h1>
            Desktop Path : <input disabled value="system//studio" /><br />
            Build Command : <input disabled value="os ./configure && os make" /><br />
            <hr />
            <h1>Information Desktop</h1>
            Desktop Name : <input name="desknm" placeholder="Desktop name" value="M DESKTOP" maxlength=255 /><br />
            Desktop Mode : <select name="deskmd">
                <option value="1" title="All Sites Can Connect to Browser">Allow All Connections (Recommended)</option>
                <option value="0" title="You Cannot Connect to Sites And Clients">Just System Connections</option>
            </select><br />
            <button type="submit">Build</button>
        </form>
    </body>
</html>