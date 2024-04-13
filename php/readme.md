## php

https://github.com/grpc/grpc/tree/master/src/php
https://www.codercto.com/tutorial/grpc/php-quickstart.html
https://cloud.google.com/php/grpc?hl=zh-cn#php-implementation

```bash
git clone -b RELEASE_TAG_HERE https://github.com/grpc/grpc
cd grpc
git submodule update --init
mkdir -p cmake/build
cd cmake/build
cmake ../..
make protoc grpc_php_plugin
```

```
protoc --proto_path=. \
  --php_out=php \
  --grpc_out=php \
  --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin \
  ./helloworld.proto
```

// 生成php服务端stub

   --grpc_out=generate_server:php

## php install

```
sudo pecl install grpc
```

php.ini 添加

extension=grpc.so
