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


class HiController extends AbstractController
{
	public function sayHello(HiUser $user) 
	{
		$message = new HiReply();
		$message->setMessage("Hello World 0");
		$message->setUser($user);
		return $message;
	}
	public function sayHello1(HiUser $user) 
	{
		$message = new HiReply();
		$message->setMessage("Hello World 1");
		$message->setUser($user);
		return $message;
	}
	public function sayHello2(HiUser $user) 
	{
		$message = new HiReply();
		$message->setMessage("Hello World 2");
		$message->setUser($user);
		return $message;
	}
}
