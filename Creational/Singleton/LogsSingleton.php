<?php

namespace Creational\Singleton;

class LogsSingleton
{
    protected static LogsSingleton $instance;

    private function __construct(){}

    private function __clone(){}

    private function __wakeup(){}

    public static function getInstance()
    {
        if(empty(self::$instance))
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function writeLog(array $data)
    {
        $fileName = 'log.txt';
        $previousLogs = [];

        if(filesize($fileName) > 0)
        {
            $fileContent = file_get_contents($fileName);
            $previousLogs = json_decode($fileContent, true);
        }

        $previousLogs[] = $data;
        $file = fopen($fileName, 'w');
        fwrite($file, json_encode($previousLogs));
        fclose($file);
    }
}
