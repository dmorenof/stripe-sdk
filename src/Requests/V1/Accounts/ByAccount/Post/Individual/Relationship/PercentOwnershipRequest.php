<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Post\Individual\Relationship;

final class PercentOwnershipRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['float', \StripeSDK\Enums\PercentOwnershipRequest2Variant2\Request2Variant2Enum::class];
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
