<?php


namespace hnd\Bootstrap;

use Symfony\Component\Dotenv\Dotenv;

class LoadEnvironmentVariables
{
    protected $filePath;

    protected $fileName;

    public function __construct($filePath, $fileName='/.env')
    {
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }

    protected function createDotEnv(){
        $dotenv = new Dotenv();
        $dotenv->loadEnv(
            $this->filePath.$this->fileName
        );
    }
}