<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\ByAccount\Persons\ByPerson\Post;

final class ByPersonDobRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\ByPersonDobRequest2Variant1\Request2Variant1Request::class, \StripeSDK\Enums\ByPersonDobRequest2Variant2\Request2Variant2Enum::class];
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
