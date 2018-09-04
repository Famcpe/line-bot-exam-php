<?php
require "vendor/autoload.php";
$access_token = 'XFUgwyRtrq9iKVTOzatXEwmq4Xhdm/0z18T2J2DsaId5JXApEftdCNv1oXVNwpQfQPsCrPnH05Ggx2q1OjVqZaSQnG8hj5AM+BWoThKiEXBDoMNfV9t4NSRtWvBa2EuZANemPTZZr5hqOvFBcmOG1gdB04t89/1O/w1cDnyilFU=

';
$channelSecret = '38d7a3a6e23081ebf03470a7a6d5a661

';
$idPush = 'U8185c2fbd37f028406a04ee309ed6ecf'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
