<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\Post\Relationship;

final class PercentOwnershipRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['float', \StripeSDK\Enums\PercentOwnershipRequest3Variant2\Request3Variant2Enum::class];
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
