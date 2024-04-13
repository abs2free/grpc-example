<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pb;

/**
 * 定义一个打招呼服务
 */
class GreeterStub {

    /**
     * SayHello 方法
     * @param \Pb\HelloRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Pb\HelloReply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SayHello(
        \Pb\HelloRequest $request,
        \Grpc\ServerContext $context
    ): ?\Pb\HelloReply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/pb.Greeter/SayHello' => new \Grpc\MethodDescriptor(
                $this,
                'SayHello',
                '\Pb\HelloRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
