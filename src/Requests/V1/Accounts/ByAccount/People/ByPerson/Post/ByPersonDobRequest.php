<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\People\ByPerson\Post;

final class ByPersonDobRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByPersonDobRequestVariant1\DobVariant1Request::class, \StripeSDK\Enums\ByPersonDobRequestVariant2\DobVariant2Enum::class];
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
