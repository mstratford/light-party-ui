<?php

#Software Configuration

$software_name="LightParty Console";
$software_version="31.08.16";


$url_basepublic="http://" . $_SERVER['HTTP_HOST'];

$url_dash=$url_basepublic . "/dash";

$url_controller=$url_basepublic . "/control";
$url_usermanagement=$url_basepublic . "/usermanagement";
$url_profile=$url_usermanagement;
$url_login=$url_usermanagement . "/login.php";
$url_logout=$url_usermanagement . "/doLogout.php";
$url_showmanagement=$url_basepublic . "/showmanagement";

$url_localcommands=$url_basepublic . "/localCommands";
$url_shutdown=$url_localcommands . "/shutdown.php";
$url_restart=$url_localcommands . "/restart.php";
$url_RotaryStart=$url_localcommands . "/startRotaryEncoders.php";

$url_home=$url_controller;
?>
