<?php


class Worker {
    private $logger;
    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }
    public function work(){
        for($i=0; $i<10; $i++){
            $this->logger->log($i);
        }
    }
}

interface Logger {
    public function log($message);
}


class ConsoleLogger implements Logger {
    public function log($message){
        echo $message . "\n";
    }
}

// fixed code ends

class FileLogger implements Logger{
    public function log($message){
        $file = fopen('log.txt', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

class ShitLogger implements Logger {

}

$worker = new Worker(new ShitLogger());
$worker->work();