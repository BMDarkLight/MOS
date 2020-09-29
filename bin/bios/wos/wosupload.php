<center>
	Importing (ecl15,wos,bios-frameworks,upload) ... (done,done,done,done).<br />
	Uploading Files ... <br />
	<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if($imageFileType != "wos") {
		echo "Sorry, only WOS files are allowed.<br />";
		$uploadOk = 0;
	}

	if ($uploadOk == 0) {
		echo "fail.<br />Sorry, your file was not uploaded.<br />
	<a href='woscontent.php'>Back</a>";
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "done.<br />The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br />";
			file_put_contents('uploads/filename',$_FILES["fileToUpload"]["name"]);
		} else {
			echo "fail.<br />Sorry, there was an error uploading your file.<br />
	<a href='woscontent.php'>Back</a>";
		}
	}
	?>
</center>