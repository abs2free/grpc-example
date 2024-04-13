<?php
require dirname(__FILE__) . '/vendor/autoload.php';

$client = new Pb\GreeterClient('localhost:8920', [
    'credentials'                     => Grpc\ChannelCredentials::createInsecure(),
    'grpc.max_receive_message_length' => 8 * 1024 * 1024,
]);

$req = new \Pb\HelloRequest();
$req->setName("anna");
$result = $client->SayHello($req)->wait();
$client->close();

list($rsp, $status) = $result;

echo $rsp->serializeToJsonString(). PHP_EOL;
