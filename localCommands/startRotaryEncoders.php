<?php

set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('phpseclib/Net/SSH2.php');

$ssh = new Net_SSH2('localhost');
$ssh->login('pi', 'raspberry');

$ssh->read('[prompt]');
$ssh->write("sudo python /home/pi/rotary1_publisher.py &>/dev/null & \n");
$ssh->read('[prompt]');
$ssh->write("disown \n");
$ssh->read('[prompt]');
$ssh->write("sudo python /home/pi/rotary2_publisher.py &>/dev/null & \n");
$ssh->read('[prompt]');
$ssh->write("disown \n");
$ssh->read('[prompt]');
$ssh->write("sudo python /home/pi/rotary3_publisher.py &>/dev/null & \n");
$ssh->read('[prompt]');
$ssh->write("disown \n");
//$ssh->write("sudo python /home/pi/rotary2_publisher.py > /dev/null 2>&1 &\n");
//$ssh->write("sudo python /home/pi/rotary3_publisher.py > /dev/null 2>&1 &\n");
//$ssh->read('Password:');
//$ssh->write("Password\n");
echo 'Ready' // $ssh->read('[prompt]');
?>

<?php //shell_exec('python /home/pi/rotary1_publisher.py'); ?>