<?php

namespace Vidoomy\GraphQLMutationValidatorBundle\Tests\Functional\App\Mutation;

use Vidoomy\GraphQLMutationValidatorBundle\Tests\Functional\App\Input\NewUserInput;
use Vidoomy\GraphQLMutationValidatorBundle\Validator\MutationValidator;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\MutationInterface;

Class Mutation implements MutationInterface
{
    /**
     * @var MutationValidator
     */
    protected $validator;

    public function __construct(MutationValidator $validator)
    {
        $this->validator = $validator;
    }

    public function createUser(Argument $args)
    {
        $input = new NewUserInput($args);

        // Validation
        $this->validator->validate($input);

        // Response
        return $input;
    }
}