<?php
require "vendor/autoload.php";
$access_token = 'Fd65j/CKYtglPSMIokeLoErWijqBNbZHBN/EVaoSDa3tQFG7xb8Yiefhwf1toJjfQPsCrPnH05Ggx2q1OjVqZaSQnG8hj5AM+BWoThKiEXB+5UdGt8GDw+HNmRIm/7VWjHaZ5aSTFTNIPO0dVaxGmgdB04t89/1O/w1cDnyilFU=
';
$channelSecret = '38d7a3a6e23081ebf03470a7a6d5a661
';
$idPush = '1603267754'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
