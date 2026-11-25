<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Individual;

final class NameAliasesRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Collections\AliasesVariant1Collection::class, \StripeSDK\Enums\AliasesVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'string',
                'rules' => [
                    'maxLength' => 300,
                ],
            ],
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
