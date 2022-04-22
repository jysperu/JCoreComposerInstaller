<?php
namespace JCore\ComposerInstaller\Type;

use Composer\Installers\BaseInstaller;

class JCoreInstaller extends BaseInstaller
{
    protected $locations = [
        'base'   => 'JCore/',
    ];
}
