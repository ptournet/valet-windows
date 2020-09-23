<?php

use PHPUnit\Framework\TestCase;

class ValetTestCase extends TestCase
{
    public function rm_rf($path)
    {
        if (PHP_OS_FAMILY  === 'Windows')
        {
            exec(sprintf("rd /s /q %s", escapeshellarg($path)));
        }
        else
        {
            exec(sprintf("rm -rf %s", escapeshellarg($path)));
        }
    }
}
