<?php

namespace Vidoomy\GraphQLMutationValidatorBundle\Tests\Functional\App\Input;

use Vidoomy\GraphQLMutationValidatorBundle\Input\RequestObject;
use Vidoomy\GraphQLMutationValidatorBundle\Tests\Functional\App\Entity\User;
use Vidoomy\GraphQLMutationValidatorBundle\Validator\Constraints as VidoomyAssert;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @VidoomyAssert\GraphQLRequestObject()
 */
Class NewUserInput extends RequestObject
{

    /**
     * @see User::$username
     */
    public $username;

    /**
     * @Assert\NotBlank()
     */
    public $firstname;

}