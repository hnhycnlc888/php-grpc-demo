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
namespace App\Controller;

use Grpc\Php\Telpo\hiClient;
use Grpc\Php\Telpo\HiReply;
use Grpc\Php\Telpo\HiUser;

class GrpcController extends AbstractController
{
	public function hello()
	{
		// 这个client是协程安全的，可以复用
		$client = new hiClient('192.168.26.183:9503', [
			'credentials' =>\Grpc\ChannelCredentials::createInsecure(),
		]);

		$request = new HiUser();
		$request->setName('hyperf');
		$request->setSex(1);

		/**
		 * @var \Grpc\HiReply $reply
		 */
		list($response, $status) = $client->SayHello($request)->wait();
		if ($status->code != \Grpc\STATUS_OK) {
			echo 'Error: ' . $status->details();
			exit;
		}
		$user = $response->getUser();
		//print_r($user->getName());
		//print_r($user->getSex());
		$message = $response->getMessage();
		var_dump(memory_get_usage(true));
		$reply = new HiReply();
		$reply->setUser($request);
		$reply->setMessage($message);
		return $reply;
	}
}
