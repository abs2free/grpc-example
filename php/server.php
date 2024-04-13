<?php
require dirname(__FILE__) . '/vendor/autoload.php';

class Greeter extends Pb\GreeterStub
{
    public function SayHello(\Pb\HelloRequest $request, \Grpc\ServerContext $serverContext): ?\Pb\HelloReply
    {
        $name = $request->getName();
        echo 'Received request: ' . $name . PHP_EOL;
        $response = new \Pb\HelloReply();
        $response->setMessage("Hello this is a new " . $name);
        return $response;
    }
}

$port   = 8920;
$server = new \Grpc\RpcServer();
$server->addHttp2Port('0.0.0.0:' . $port);
$server->handle(new Greeter());
echo 'Listening on port :' . $port . PHP_EOL;
$server->run();
