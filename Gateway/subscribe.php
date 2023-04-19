<?php

require('vendor/autoload.php');

use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

$server   = 'mqtt.ohstem.vn';
$port     = 1883;
$clientId = array(
  "nhombaton/feeds/V1",
  "nhombaton/feeds/V2",
  "nhombaton/feeds/V3",
  "nhombaton/feeds/V4",
  "nhombaton/feeds/V12",
  "nhombaton/feeds/V13",
  "nhombaton/feeds/V14",
  "nhombaton/feeds/V15",
  "nhombaton/feeds/V16"
);
$username = 'nhombaton';
$password = '';
$clean_session = false;
$mqtt_version = MqttClient::MQTT_3_1_1;

require_once('connectDatabase.php');
$connect = Connect();

$connectionSettings = (new ConnectionSettings)
  ->setUsername($username)
  ->setPassword($password)
  ->setKeepAliveInterval(6000) //Thời gian sống của chương trình, ở đây mình xét 6000s
  ->setLastWillTopic('nhombaton/feeds/')
  ->setLastWillMessage('client disconnect')
  ->setLastWillQualityOfService(1);



for($i = 0; $i < 9; $i++){
  $mqtt = new MqttClient($server, $port, $clientId[$i], $mqtt_version);
  $mqtt->connect($connectionSettings, $clean_session);
  printf("client connected\n");
}


$mqtt->subscribe('nhombaton/feeds/V1', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $current_time = date('Y-m-d H:i:s');
  $temp = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '6', " . $message . ")"; //Đèn
  $connect->query($temp);
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V2', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
$current_time = date('Y-m-d H:i:s');
  $humi = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '5', " . $message . ")"; //Đèn
  $connect->query($humi);
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V3', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
$current_time = date('Y-m-d H:i:s');
  $sand = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '3', " . $message . ")"; //Đèn
  $connect->query($sand);
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V4', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
$current_time = date('Y-m-d H:i:s');
  $light = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '4', " . $message . ")"; //Đèn
  $connect->query($light);
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V12', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $current_time = date('Y-m-d H:i:s');
  $led = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '2', " . $message . ")"; //Đèn
  $connect->query($led);
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V13', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
$current_time = date('Y-m-d H:i:s');
  $led = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '2', " . $message . ")"; //Đèn
  $connect->query($led);
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V14', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V15', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $current_time = date('Y-m-d H:i:s');
  $pump = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '1', " . $message . ")"; //Đèn
  $connect->query($pump);
  sleep(1);
});
$mqtt->subscribe('nhombaton/feeds/V16', function($topic, $message) {
  echo "Received message on topic $topic: $message\n";
  require_once('connectDatabase.php');
  $connect = Connect();
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $current_time = date('Y-m-d H:i:s');
  $pump = "INSERT INTO `statistic` (action_time, device_id, data) VALUES ('" . $current_time . "', '1', " . $message . ")"; //Đèn
  $connect->query($pump);
  sleep(1);
});
$mqtt->loop(true); 
?>