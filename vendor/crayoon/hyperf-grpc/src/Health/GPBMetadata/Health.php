<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: health.proto

namespace Crayoon\HyperfGrpc\Health\GPBMetadata;

class Health
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
health.protogrpc.health.v1"%
HealthCheckRequest
service (	"D
HealthCheckResponse-
status (2.grpc.health.v1.ServingStatus*O
ServingStatus
UNKNOWN 
SERVING
NOT_SERVING
SERVICE_UNKNOWN2�
HealthP
Check".grpc.health.v1.HealthCheckRequest#.grpc.health.v1.HealthCheckResponseR
Watch".grpc.health.v1.HealthCheckRequest#.grpc.health.v1.HealthCheckResponse0BG�Crayoon\\HyperfGrpc\\Health��%Crayoon\\HyperfGrpc\\Health\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

