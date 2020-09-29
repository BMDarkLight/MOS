<?php include_once '../../mnt/system/functions.php';$file = $_REQUEST['file']; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>M Edition 4 - Restore</title>
        <link rel="stylesheet" href="../style.css" />
    </head>
    <body os="style:body1">
        <form action="restore.php" method="post" enctype="multipart/form-data" os="alert">
            <h1>Restore System Informations</h1>
            Starting Restore File ... <br />
            Reading File ... <?php 
            if (file_exists("sources/restorefile/$file")) {
                echo "Done<br />Checking File Format ... ";
                if (pathinfo("sources/restorefile/$file",PATHINFO_EXTENSION) == 'zip') {
                    echo "Done<br />Checking Extract Destination ... ";
                    $name = pathinfo("sources/restorefile/$file",PATHINFO_FILENAME);
                    if (file_exists("sources/restorefile/$name")) {
                        echo "Error<br />ef.zip.extraction.destination Unable.<br />";
                    } else {
                        echo "Ready for use<br />Extracting File Contents to Destination ... ";
                        if (mkdir("sources/restorefile/$name") && unzip("sources/restorefile/$file", "sources/restorefile/$name/")) {
                            echo "Done<br /> Releasing Informations ... Done<br /> Check Restore Informations ...<br />";
                            $rc = "sources/restorefile/$name/mrc";
                            if (is_dir($rc)) {
                                echo "ok<br /> Restoring /mrc/desknm (Desktop Name) ... ";
                                
                                // Restore /mrc/desknm
                                if (file_exists("$rc/desknm") && file_put_contents("../../mnt/system/explorer/desknm", file_get_contents("$rc/desknm"))) {
                                    echo "Done<br /> Restoring /mrc/deskmd (Desktop Mode) ... ";
                                    
                                    // Restore /mrc/deskmd
                                    if (file_exists("$rc/deskmd") && file_put_contents("../../mnt/system/explorer/deskmd", file_get_contents("$rc/deskmd"))) {
                                        echo "Done<br /> Restoring /mrc/accounts (Desktop Mode) ... ";
                                        if (file_exists("$rc/desknm") && file_put_contents("../../mnt/system/explorer/desknm", file_get_contents("$rc/desknm"))) {
                                            echo "Done<br /> Restoring /mrc/deskmd (Desktop Mode) ... ";

                                        } else {
                                            echo "Error<br />mrc.restore Unable to Restore /mrc/desknm.<br />";
                                        }
                                    } else {
                                        echo "Error<br />mrc.restore Unable to Restore /mrc/deskmd.<br />";
                                    }
                                } else {
                                    echo "Error<br />mrc.restore Unable to Restore /mrc/desknm.<br />";
                                }
                            } else {
                                echo "Error<br />mrc.restore Restore File Was Destoryed.<br />";
                            }
                        } else {
                            echo "Error<br />ef.zip.extraction.operation An Unknown Error.<br />";
                        }
                    }
                } else {
                    echo "Error<br />ef.extensions Extension Not Accepted.<br />";
                }
            } else {
                echo "Error<br />ef File Does not Exist.<br />";
            }
            ?>
        </form>
    </body>
</html>