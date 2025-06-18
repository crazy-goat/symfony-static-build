<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function getProjectDir():string
    {
        $projectDir = parent::getProjectDir();
        if (str_starts_with($projectDir, 'phar://')) {
            return dirname($projectDir);
        }

        return $projectDir;
    }
}
