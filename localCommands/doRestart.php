<?php

set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('phpseclib/Net/SSH2.php');

$ssh = new Net_SSH2('localhost');
$ssh->login('pi', 'raspberry');

$ssh->read('[prompt]');
$ssh->write("sudo reboot\n");
$ssh->read('[prompt]');
?>