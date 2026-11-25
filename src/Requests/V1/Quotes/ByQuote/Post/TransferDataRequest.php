<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\ByQuote\Post;

final class TransferDataRequest extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = [\StripeSDK\Requests\TransferDataRequest5Variant1\Request5Variant1Request::class, \StripeSDK\Enums\TransferDataRequest5Variant2\Request5Variant2Enum::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'object',
            'properties' => [
                'amount' => [
                    'kind' => 'integer',
                ],
                'amount_percent' => [
                    'kind' => 'number',
                ],
                'destination' => [
                    'kind' => 'string',
                ],
            ],
            'required' => [
                'destination',
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
