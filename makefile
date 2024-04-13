

go:
	protoc --go_out=. --go_opt=paths=source_relative --go-grpc_out=. --go-grpc_opt=paths=source_relative pb/hello.proto

php:
	protoc --proto_path=.  --php_out=php --grpc_out=php --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin pb/hello.proto

phpServer:
	protoc --proto_path=.  --php_out=php --grpc_out=generate_server:php --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin pb/hello.proto
