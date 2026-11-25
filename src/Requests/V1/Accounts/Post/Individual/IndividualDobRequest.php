<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Individual;

final class IndividualDobRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\DobVariant1Request::class, \StripeSDK\Enums\DobVariant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'day' => [
                    'kind' => 'integer',
                ],
                'month' => [
                    'kind' => 'integer',
                ],
                'year' => [
                    'kind' => 'integer',
                ],
            ],
            'required' => [
                'day',
                'month',
                'year',
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
