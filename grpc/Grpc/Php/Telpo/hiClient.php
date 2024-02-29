<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Grpc\Php\Telpo;

/**
 */
class hiClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Grpc\Php\Telpo\HiUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sayHello(\Grpc\Php\Telpo\HiUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grpc.php.telpo.hi/sayHello',
        $argument,
        ['\Grpc\Php\Telpo\HiReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Php\Telpo\HiUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sayHello1(\Grpc\Php\Telpo\HiUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grpc.php.telpo.hi/sayHello1',
        $argument,
        ['\Grpc\Php\Telpo\HiReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Php\Telpo\HiUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sayHello2(\Grpc\Php\Telpo\HiUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grpc.php.telpo.hi/sayHello2',
        $argument,
        ['\Grpc\Php\Telpo\HiReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Grpc\Php\Telpo\HelloReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function hello(\Grpc\Php\Telpo\HelloReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/grpc.php.telpo.hi/hello',
        $argument,
        ['\Grpc\Php\Telpo\HiReply', 'decode'],
        $metadata, $options);
    }

}
