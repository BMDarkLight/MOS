<?php

// M Edition Executable Files (EPK)
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

$main = array(
	"name" => 'unknown',
	"version" => 5,
	"access" => array(
		"host" => false,
		"network" => true,
		"files" => false,
		"zenity" => false
	),
	"libraries" => array(
		"epkfunc" => true, // This is a Reqiured Library For Running EPK Files
		"dualfunc" => false,
		"zenclass" => false,
		"xec" => true,
		"potato" => false // Potato Library When dualfunc Is Include, Doesn't Work - Importing Potato Library, Needs Installation Of Potato Application On System
	),
	"apt" => array(
		/* APT 1.0
		 * For Use APT In Executable Files, Turn 'stat' to true.
		 * When You Turns APT on, APT Library Will Be Included.
		 * Please Enter Valid APT Source In Cables
		 */
		"stat" => false,
		"cables" => array(
			1 => null,
			2 => null,
			3 => null,
			4 => null
		),
		"validate" => true // APT Validator System For Check Validate Of APT Sources
	),
	"zenity" => array(
		/* Zenity Toolkit
		 * Please Enter Valid Zenity ID, System Checks Validate ID In M Network.
		 * Please Don't Change Zenity Server Or Enter Valid Zenity Server IP.
		 */
		"id" => null,
		"server" => "http://mosp.co.nf/repo/mpk/zenity",
		"fetchid" => "r182" // Don't Change It
	),
	"epk" => array(
		"id" => null,
		"path" => $_REQUEST['path']
	),
	"strings" => null
);

include './' . "system/.libraries/epk/epkfunc.php";
$epkcontent = file_get_contents(__DIR__ . $_REQUEST['path']);
file_put_contents('example.php',$epkcontent);
require_once 'example.php';
unlink('example.php');

// Accept Version
$version = $main['version'];
if ($version >= 6 || $version < 4) {
	echo "<div style='width: 100%;height: 10%;background-color: gray;'>The Execute File Is Not For This Version</div>Sorry, The Execute File Is Not For This Version.<br />Please Update Your System Or Roll back to Older Versions.<br />EPK Version : $version";
	exit();
}

// Libraries
$libraries = $main['libraries'];
if ($libraries['epkfunc'] != true) {
	echo "<b>Execute Error</b> : Importing `epkfunc` Reqiured Library Error (0xepkfn).";
	exit();
}

if ($libraries['dualfunc'] == true) {
	/* Dualfunc 1.0
	 * a Library For Fast Write and Read Content With Multiple Option
	 */
	include './' . "system/.libraries/epk/dualfunc.php";
}

if ($libraries['zenclass'] == true) {
	include './' . "system/explorer/zenity/zentool.php";
}

if ($libraries['xec'] == true) {
	include './' . "system/functions.php";
}

if ($libraries['potato']) {
	if ($libraries['dualfunc'] == true) {
		echo '<b>Notice</b> : Potato Library Doesn\'t Work When Dualfunc Library Is Imported.<br />';
	} else {
		if (!is_dir('./' . "system/apps/com.m.potato") || !file_exists('./' . "system/apps/com.m.potato/potato.php")) {
			echo '<script>console.log("epk-error:cannot import potato library (0xl404)")</script>';
		} else {
			include_once './' . "system/apps/com.m.potato/potato.php";
		}
	}
}

// APT
$apt = $main['apt'];
if ($apt['stat']) {
	if ($apt['validate']) {
		$cables = $apt['cables'];
		$cablescfg = array(
			1=>null,
			2=>null,
			3=>null,
			4=>null
		);
		$cablesnum = 0;
		if ($cables[1] != null) {
			$cablescfg[1] = json_decode(file_get_contents($cables[1] . '/APT.CFG'));
			if ($cablescfg[1]['ACCEPT'] != true) {
				echo '<script>console.log("epk-error:unable to validate apt source in cable 1");</script>';
			}
		}
		if ($cables[2] != null) {
			$cablescfg[2] = json_decode(file_get_contents($cables[2] . '/APT.CFG'));
			if ($cablescfg[2]['ACCEPT'] != true) {
				echo '<script>console.log("epk-error:unable to validate apt source in cable 2");</script>';
			}
		}
		if ($cables[3] != null) {
			$cablescfg[3] = json_decode(file_get_contents($cables[3] . '/APT.CFG'));
			if ($cablescfg[3]['ACCEPT'] != true) {
				echo '<script>console.log("epk-error:unable to validate apt source in cable 3");</script>';
			}
		}
		if ($cables[4] != null) {
			$cablescfg[4] = json_decode(file_get_contents($cables[4] . '/APT.CFG'));
			if ($cablescfg[4]['ACCEPT'] != true) {
				echo '<script>console.log("epk-error:unable to validate apt source in cable 4");</script>';
			}
		}
	} else {
		echo '<script>console.log("epk-msg:apt-validate turned off");</script>';
	}
}

// Run main()
$output = main();
