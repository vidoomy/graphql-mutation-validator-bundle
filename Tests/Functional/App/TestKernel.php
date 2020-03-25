<?php

namespace Vidoomy\GraphQLMutationValidatorBundle\Tests\Functional\App;

use Vidoomy\GraphQLMutationValidatorBundle\VidoomyGraphQLMutationValidatorBundle;
use Overblog\GraphQLBundle\OverblogGraphQLBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

Class TestKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new TwigBundle(),
            new OverblogGraphQLBundle(),
            new VidoomyGraphQLMutationValidatorBundle()
        ];
    }

    public function __construct($environment, $debug)
    {
        parent::__construct($environment, $debug);
    }

    public function getCacheDir()
    {
        return $this->basePath().'cache/'.$this->environment;
    }

    public function getLogDir()
    {
        return $this->basePath().'logs';
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function isBooted()
    {
        return $this->booted;
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }

    private function basePath()
    {
        return sys_get_temp_dir().'/VidoomyGraphQLMutationValidatorBundle/'.Kernel::VERSION.'/';
    }
}