<?php
return [
	'enable' => [
		// 开启服务发现
		'discovery' => true,
		// 开启服务注册
		'register' => true,
	],
	// 服务消费者相关配置
	//服务消费者
	'consumers' => [
		[
			// 对应消费者类的 $serviceName
			'name' => 'CaculatorService',
			// 这个消费者要从哪个服务中心获取节点信息，如不配置则不会从服务中心获取节点信息
			'registry' => [
				'protocol' => 'nacos',
				'address' => 'http://127.0.0.1:8848',
			],
			// 如果没有指定上面的 registry 配置，即为直接对指定的节点进行消费，通过下面的 nodes 参数来配置服务提供者的节点信息
			//            'nodes' => [
			//                ['host' => '127.0.0.1', 'port' => 9513],
			//            ],
		],
		[
			// 对应消费者类的 $serviceName
			'name' => 'DefaultService',
			// 这个消费者要从哪个服务中心获取节点信息，如不配置则不会从服务中心获取节点信息
			'registry' => [
				'protocol' => 'nacos',
				'address' => 'http://127.0.0.1:8848',
			],
			// 如果没有指定上面的 registry 配置，即为直接对指定的节点进行消费，通过下面的 nodes 参数来配置服务提供者的节点信息
			//            'nodes' => [
			//                ['host' => '127.0.0.1', 'port' => 9513],
			//            ],
		]
	],
	// 服务提供者相关配置
	'providers' => [],
	// 服务驱动相关配置
	'drivers' => [
		//        'consul' => [
		//
		//        ],
		'nacos' => [
			// nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
			// 'url' => '',
			// The nacos host info
			'host' => '192.168.26.183',
			'port' => 8848,
			// The nacos account info
			'username' => 'nacos',//可以不用配置
			'password' => 'Telpo.123',//似乎可以不用密码
			'guzzle' => [
				'config' => null,
			],
			'group_name' => 'DEFAULT_GROUP',
			'namespace_id' => 'ae877ad2-fc66-401c-81c8-1bb65614e6d9',//这个要从nacos 后台获取
			'heartbeat' => 5,
			'ephemeral' => true, // 是否注册临时实例
		],
	],
];

