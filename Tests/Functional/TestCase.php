<?php

namespace Vidoomy\GraphQLMutationValidatorBundle\Tests\Functional;

use Vidoomy\GraphQLMutationValidatorBundle\Tests\Functional\App\TestKernel;
use Overblog\GraphQLBundle\Tests\Functional\TestCase as GraphQLTestCase;
use Symfony\Component\Filesystem\Filesystem;

Abstract class TestCase extends GraphQLTestCase
{

    protected function setUp()
    {
        static::bootKernel();
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass()
    {
        $fs = new Filesystem();
        $fs->remove(sys_get_temp_dir().'/VidoomyGraphQLMutationValidatorBundle/');
    }

    /**
     * {@inheritdoc}
     */
    protected static function getKernelClass()
    {
        return TestKernel::class;
    }

}