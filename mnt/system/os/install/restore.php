<h1>Restore Toolkit</h1>
<?php 
$target_dir    = "sources/restorefile/";
$target_file   = $target_dir . basename( $_FILES["fileToUpload"]["name"] );
$uploadOk      = 1;
$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}


// Check if file already exists
if (file_exists($target_file)) {
    unlink($target_file);
    if (is_dir($target_dir . pathinfo($target_file,PATHINFO_DIRNAME))) {
        deleteDir($target_dir . pathinfo($target_file,PATHINFO_DIRNAME));
    }
}

if ( $_FILES['fileToUpload']['size'] > 5000000 ) {
    echo "File is too Large.";
    $uploadOk = 0;
}

if ( $uploadOk == 0 ) {
    echo "Sorry, your file was not uploaded.<br /><a href='javascript: window.history.back();'><button>Back</button></a>";
} else {
    if ( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) ) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.<br /><a href='se.restore.php?file=".$_FILES["fileToUpload"]["name"]."'><button>Restore</button></a>";
    } else {
        echo "Sorry, there was an error uploading your file.<br /><a href='javascript: window.history.back();'><button>Back</button></a>";
    }
}