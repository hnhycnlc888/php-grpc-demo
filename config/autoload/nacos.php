<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    // nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
    // 'uri' => 'http://127.0.0.1:8848/',
    // The nacos host info
    'host' => '127.0.0.1',
    'port' => 8848,
    // The nacos account info
    'username' => 'nacos',
    'password' => 'Telpo.123',
	'namespace' => 'ae877ad2-fc66-401c-81c8-1bb65614e6d9',
    /*'guzzle' => [
        'config' => null,
    ],*/
    // Only support for nacos v2.
    /*'grpc' => [
        'enable' => true,
        'heartbeat' => 10,
    ],*/
];
