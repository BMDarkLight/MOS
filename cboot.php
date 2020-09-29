<?php $file = $_REQUEST['b'] ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>M Edition Boot</title>
		<style>
			#frame {
				width: 100%;
				height: 100%;
				border: none;
			}
		</style>
	</head>
	<body style='background-color: #020000;color: whitesmoke;margin: 0px;padding: 0px;'>
		<p id="shell">_</p><script>setInterval(function () {
				if (document.getElementById("shell").id == 'shell') {
					if (document.getElementById("shell").innerHTML == "_") { 					     document.getElementById("shell").innerHTML = "";
					} else if (document.getElementById("shell").innerHTML == "") {
						document.getElementById("shell").innerHTML = "_";
					} else {
						document.getElementById("shell").innerHTML = "_";
					}
				}
			},500);
		
			var wage = document.body;
			var count = 0;
			wage.addEventListener("keydown", function (e) {
				if (e.keyCode === 36) {
					count++;
					if (count >= 7) {
						alert('Boot Force Closed');
						window.location.assign('bin/bmount.php');
					}
					console.log('You Are Click `Home` Buttons ' + count + ' times. Please Click This Button 7 times to Close Boot.');
				}
			});
		</script>
		<?php
		
		$dir = 'mnt/';
		$boot = false;

		if (is_dir($dir . $file . '/os')) {
			$boot = $dir . $file . '/os';
		} elseif (is_dir($dir . $file . '/app')) {
			$boot = $dir . $file . '/os';
		}

		if ($boot != false) {
			echo "<section id='b'><iframe style='width: 100%;height: 100%;position: fixed;border: none;margin: 0px;padding: 0px;display: none;' src='$boot' id='frame'>#document</iframe></section><script>setTimeout(function () {document.body.innerHTML = document.getElementById('b').innerHTML;document.getElementById('frame').style.display = 'block';},3000);</script>";
		}
		
		?>
	</body>
</html>