<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tokens\Post\Person\Relationship;

final class PercentOwnershipRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['float', \StripeSDK\Enums\PercentOwnershipRequest8Variant2\Request8Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'number',
        ],
        [
            'kind' => 'string',
            'enum' => [
                '',
            ],
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [];
}
